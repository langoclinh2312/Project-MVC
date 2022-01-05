<?php
namespace MVC\Models;

use MVC\Core\Model;

class StudentModel extends Model {

    private $id;
    private $name;
    private $dob;
    private $gender;

    

    /**
     * Get the value of Id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of dob
     */ 
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */ 
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }
}