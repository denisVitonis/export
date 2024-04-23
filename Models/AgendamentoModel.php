<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendamentoModel extends Model
{   
    
    protected $table = 'agendamento';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tabela', 'horario', 'envolvidos', 'acao', 'registro', 'realizacao', 'agendamento_und'];

    public function getAllAgendamentos()
    {
        return $this->findAll();
    }

    public function getAgendamentoById($id)
    {
        return $this->find($id);
    }

    public function createAgendamento($data)
    {
        return $this->insert($data);
    }

    public function updateAgendamento($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteAgendamento($id)
    {
        return $this->delete($id);
    }

}
