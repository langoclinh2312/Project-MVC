<?php

namespace MVC\Models;

class StudentRespository
{
    private $StudentResourceModel;

    function __construct(StudentResourceModel $StudentResourceModel = null)
    {
        $this->StudentResourceModel = ($StudentResourceModel == null) ? new StudentResourceModel : $StudentResourceModel;
    }

    function getAll()
    {
        return $this->StudentResourceModel->getAll();
    }

    function getID($id)
    {
        return $this->StudentResourceModel->getID($id);
    }

    function save($model)
    {
        return $this->StudentResourceModel->save($model);
    }

    function delete($id)
    {
        return $this->StudentResourceModel->delete($id);
    }
}