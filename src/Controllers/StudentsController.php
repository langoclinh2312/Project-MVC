<?php
namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\StudentRespository;

class StudentsController extends Controller 
{
    private $studentRespository;

    function __construct(StudentRespository $studentRespository = null)
    {
        $this->studentRespository = ($studentRespository == null) ? new StudentRespository : $studentRespository;
    }

    function index()
    {
        $d['students'] = $this->studentRespository->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        print_r($_POST);
        if (isset($_POST["name"])) {
            if ($this->studentRespository->save($_POST)) {
                header("Location: " . WEBROOT . "s");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $d["student"] = $this->studentRespository->getID($id);
        $_POST["id"] = $id;

        if (isset($_POST["name"])) {
            if ($this->studentRespository->save($_POST)) {
                header("Location: " . WEBROOT . "s");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        if ($this->studentRespository->delete($id)) {
            header("Location: " . WEBROOT . "s");
        }
    }
}