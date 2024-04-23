<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectsModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id_projects';
    protected $allowedFields = [
        'name_projects',
        'business_projects',
        'benefits_projects',
        'area_projects',
        'tecnologies_projects',
        'host_projects',
        'responsible_projects',
        'spec_app_projects',
        'acquisition_type_projects',
        'description_projects',
        'operate_date_projects',
        'sgid_projects',
        'create_date_projects',
        'startup_projects'
    ];

    public function listProjects()
    {
        return $this->findAll();
    }

    public function getProject($id)
    {
        return $this->find($id);
    }

}
