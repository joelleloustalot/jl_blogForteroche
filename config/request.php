<?php

namespace App\config;

class Request
{
    private $get;
    private $post;
    private $session;

    public function __construct()
    {
        $this->get = new Parameter($_GET);
        $this->post = new Parameter($_POST);
        $this->session = new Session($_SESSION);
        /*la session n'est pas gérée de la même manière, 
        si on essaye d'utiliser la classe Parameter, 
        ça risque de coincer et de ne pas fonctionner.*/
    }

    
    public function getGet()
    {
        return $this->get;
    }

    public function getPost()
    {
        return $this->post;
    }

    
    public function getSession()
    {
        return $this->session;
    }
}