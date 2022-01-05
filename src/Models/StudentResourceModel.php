<?php
namespace MVC\Models;

use MVC\Core\ResourceModel;

class StudentResourceModel extends ResourceModel
{
    function __construct()
    {
        $this->_init("students", "id", new StudentModel);
    }
}