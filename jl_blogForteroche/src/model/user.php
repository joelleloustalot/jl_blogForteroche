<?php

namespace App\src\model;

class User
{
    private $id;

    private $pseudo;

    private $password;    

    private $creation_date;
    
    private $role;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    
    public function getCreation_date()
    {
        return $this->creation_date;
    }

    public function setCreation_date($creation_date)
    {
        $this->creation_date = $creation_date;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
    
}      
                    
       