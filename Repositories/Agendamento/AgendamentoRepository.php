<?php

namespace App\Repositories\Agendamento;

use App\Entities\Agendamento;
use App\Models\AgendamentoModel;
use App\Mappers\AgendamentoMapper;

/**
 * @author Denis Vitonis denis.cheruttivitonis@fiserv.com
 * @copyright Fiserv 2024 
 * @package Repositories
 */
class AgendamentoRepository implements AgendamentoRepositoryInterface
{
    protected $agendamentoModel;
    protected $agendamentoMapper;

    public function __construct(AgendamentoModel $agendamentoModel, AgendamentoMapper $agendamentoMapper)
    {
        $this->agendamentoModel = $agendamentoModel;
        $this->agendamentoMapper = $agendamentoMapper;
    }

    public function getAll()
    {
        $results = $this->agendamentoModel->getAllAgendamentos();
        $entities = [];

        foreach ($results as $result) {
            $entity = $this->agendamentoMapper->mapToEntity($result);
            $entities[] = $entity;
        }

        return $entities;
    }

    public function getById($id)
    {
        $result = $this->agendamentoModel->find($id);

        if ($result) {
            return $this->agendamentoMapper->mapToEntity($result);
        }

        return null;
    }
}
