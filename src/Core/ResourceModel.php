<?php
namespace MVC\Core;

use MVC\Config\Database;
use MVC\Core\ResourceModelInterface;
use PDO;

class ResourceModel extends Model implements ResourceModelInterface
{
    private $table;
    private $id;
    private $model;

    function _init($table, $id, $model)
    {
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }

    function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return ($req->fetchAll(PDO::FETCH_CLASS, get_class($this->model)));
    }

    function getID($id)
    {
        $sql = "SELECT * FROM $this->table WHERE $this->id = $id";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return ($req->fetchObject(get_class($this->model)));
    }

    function save($model)
    {
        $arrayModel = $model;
        if (array_key_exists($this->id, $arrayModel)) {
            $id = $arrayModel[$this->id];
        } else {
            $id = null;
        }
        
        $stringModel = "";
        foreach ($arrayModel as $key => $value) {
            $stringModel .= $key . " = :" . $key . ",";
        }
        $stringModel = rtrim($stringModel, ",");

        if ($id == null) {
            $sql = "INSERT INTO $this->table SET $stringModel";
        } else {
            $sql = "UPDATE $this->table SET $stringModel WHERE $this->id = $id";
        }
        $req = Database::getBdd()->prepare($sql);
        return $req->execute($arrayModel);
    }

    function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE $this->id = $id";
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
}
