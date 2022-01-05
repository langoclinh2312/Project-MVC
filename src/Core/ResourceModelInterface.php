<?php
namespace MVC\Core;

interface ResourceModelInterface 
{
    function _init($tabel, $id, $model);
    function save($model);
    function delete($model);
}