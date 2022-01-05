<?php
namespace MVC\Models;

class TaskRespository
{
    private $TaskResourceModel;

    function __construct(TaskResourceModel $TaskResourceModel = null)
    {
        $this->TaskResourceModel = ($TaskResourceModel == null) ? new TaskResourceModel : $TaskResourceModel;
    }

    function getAll()
    {
        return $this->TaskResourceModel->getAll();
    }

    function getID($id)
    {
        return $this->TaskResourceModel->getID($id);
    }

    function save($model)
    {
        return $this->TaskResourceModel->save($model);
    }

    function delete($id)
    {
        return $this->TaskResourceModel->delete($id);
    }
}