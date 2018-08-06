<?php

namespace App\Provider;

use App\Entity\User;
use App\Entity\Project;
use App\Provider\TaskProvider;

class ProjectProvider {
    public function provideProjects(TaskProvider $provider) {
        return [
            1 => new Project(
                "Project1",
                [
                    new User(1, "Jerome"),
                    new User(2, "Didier"),
                    new User(3, "Jean-jacques"),
                    new User(4, "Michel")
                ],
                new User(5, "Jackie"),
                $provider->provideTasks()
            ),
            2 => new Project(
                "Project2",
                [
                    new User(1, "Jerome"),
                    new User(2, "Didier"),
                    new User(3, "Jean-jacques"),
                    new User(5, "Jackie")
                ],
                new User(4, "Michel"),
                $provider->provideTasks()
            ),
        ];
    }
}