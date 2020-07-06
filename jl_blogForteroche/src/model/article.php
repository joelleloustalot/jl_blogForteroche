<?php

namespace App\src\model;

class Article
    
//propriétés et méthodes
{

        private $id;    
        private $title;         
        private $content; 
        private $author;         
        private $creation_date;

    
        public function getId()
        {
            return $this->id;
        }
    
        
        public function setId($id)
        {
            $this->id = $id;
        }
    
        public function getTitle()
        {
            return $this->title;
        }
    
       
        public function setTitle($title)
        {
            $this->title = $title;
        }

        public function getContent()
        {
            return $this->content;
        }
    
        
        public function setContent($content)
        {
            $this->content = $content;
        }
                  
        public function getAuthor()
        {
            return $this->author;
        }
    
        
        public function setAuthor($author)
        {
            $this->author = $author;
        }
        
        public function getCreation_date()
        {
            return $this->creation_date;
        }
    
        public function setCreation_date($creation_date)
        {
            $this->creation_date = $creation_date;
        }
    } 

