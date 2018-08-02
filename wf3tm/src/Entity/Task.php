<?php

namespace App\Entity;

class Task {
    private $id;
    private $title;
    private $author;
    private $description;

    public function __construct($id, $title, $author, $description) {
        $this->setId($id)->setTitle($title)->setAuthor($author)->setDescription($description);
    }

    /**
     * Get the value of id
     */ 
    public function getId() : int {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id) : Task {  
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle() : string {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return   self
     */ 
    public function setTitle(string $title) : Task {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor() : string {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor(string $author) : Task {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription() : string {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description) : Task {
        $this->description = $description;

        return $this;
    }

    public function getArray()
    {
        return array(
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'author' => $this->getAuthor(),
            'description' => $this->getDescription()
        );
    }
}

?>