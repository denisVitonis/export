<?php

namespace App\Controllers;

use App\Models\ProjectsModel;


class Projects extends BaseController
{
    public function index()
    {
        
        $projectsModel = new ProjectsModel();
        $data['projects'] = $projectsModel->listProjects();

        return view('frontend/templates/header', $data) .
               view('frontend/templates/menu') .
               view('frontend/projects/list_projects', $data) .
               view('frontend/templates/footer');
    }


    public function list_projects()
    {
        $projectsModel = new ProjectsModel();
        $data['projects'] = $projectsModel->listProjects();

        return view('frontend/templates/header', $data) .
               view('frontend/templates/menu') .
               view('frontend/projects/list_projects', $data) .
               view('frontend/templates/footer');
    }

}
