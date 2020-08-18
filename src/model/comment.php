<?php

namespace App\src\model;

class Comment
{
    private $id;
    private $pseudo;
    private $article_id;
    private $content;
    private $creation_date;
    private $flag;


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
    public function getArticle_id()
    {
        return $this->article_id;
    }
    public function setArticle_id($article_id)
    {
        $this->article_id = $article_id;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getcreation_date()
    {
        return $this->creation_date;
    }
    public function setcreation_date($creation_date)
    {
        $this->creation_date = $creation_date;
    }
    public function isFlag()
    {
        return $this->flag;
    }
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }
}