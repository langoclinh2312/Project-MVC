<?php
namespace MVC\Models;

use MVC\Core\ResourceModel;

class TaskResourceModel extends ResourceModel
{
    function __construct()
    {
        $this->_init("tasks", "id", new TaskModel);
    }
}
