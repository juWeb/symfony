<?php

namespace App\Controller;

use App\Provider\ProjectProvider;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Provider\TaskProvider;

class ProjectController extends Controller {
    public function displayList(ProjectProvider $projectProvider, TaskProvider $taskProvider) {
        return $this->render(
            'project/list.html.twig', 
            ['projects' => $projectProvider->provideProjects($taskProvider)]
            );
    }
}