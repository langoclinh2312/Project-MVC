<?php
namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\TaskRespository;

class TasksController extends Controller
{
    private $TaskRepository;

    public function __construct(TaskRespository $TaskRepository = null)
    {
        $this->TaskRepository = ($TaskRepository == null) ? new TaskRespository : $TaskRepository;
    }

    function index()
    {
        $d['tasks'] = $this->TaskRepository->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $timestamp = time();
        $_POST["created_at"] = date("Y-m-d h:i:s", $timestamp);

        if (isset($_POST["title"]))
        {
            if ($this->TaskRepository->save($_POST))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {

        $d["task"] = $this->TaskRepository->getID($id);
        $_POST["id"] = $id;

        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $timestamp = time();
        $_POST["updated_at"] = date("Y-m-d h:i:s", $timestamp);
       
        if (isset($_POST["title"]))
        {
            if ($this->TaskRepository->save($_POST))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        if ($this->TaskRepository->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
?>