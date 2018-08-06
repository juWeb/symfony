<?php

namespace App\Entity;

class Project {
    private $title;
    private $dateOfCreation;
    private $workers;
    private $responsible;
    private $tasks;

    public function __construct(string $title, array $workers, User $responsible, array $tasks) {
        $this->setTitle($title)
            ->setDateOfCreation(new \DateTime())
            ->setWorkers($workers)
            ->setResponsible($responsible)
            ->setTasks($tasks);
    }

    /**
     * Get the value of title
     */ 
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of dateOfCreation
     */ 
    public function getDateOfCreation()
    {
        return $this->dateOfCreation;
    }

    /**
     * Set the value of dateOfCreation
     *
     * @return  self
     */ 
    public function setDateOfCreation($dateOfCreation)
    {
        $this->dateOfCreation = $dateOfCreation;

        return $this;
    }

    /**
     * Get the value of workers
     */ 
    public function getWorkers() : array
    {
        return $this->workers;
    }

    /**
     * Set the value of workers
     *
     * @return  self
     */ 
    public function setWorkers(array $workers)
    {
        $this->workers = $workers;

        return $this;
    }

    /**
     * Get the value of responsible
     */ 
    public function getResponsible() : User
    {
        return $this->responsible;
    }

    /**
     * Set the value of responsible
     *
     * @return  self
     */ 
    public function setResponsible(User $responsible)
    {
        $this->responsible = $responsible;

        return $this;
    }

    /**
     * Get the value of tasks
     */ 
    public function getTasks() : array
    {
        return $this->tasks;
    }

    /**
     * Set the value of tasks
     *
     * @return  self
     */ 
    public function setTasks(array $tasks)
    {
        $this->tasks = $tasks;

        return $this;
    }
}