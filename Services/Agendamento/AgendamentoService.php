<?php
namespace App\Services\Agendamento;

use Config\Services;
use App\Helpers\ObjectToArrayHelper;
use App\Repositories\Agendamento\AgendamentoRepositoryInterface;

/**
 * @author Denis Vitonis denis.cheruttivitonis@fiserv.com
 * @copyright Fiserv 2024 
 * @package Repositories
 */

class AgendamentoService implements AgendamentoServiceInterface
{
    protected $agendamentoRepository;
    public function __construct($agendamentoRepository)
    {
        $this->agendamentoRepository = Services::agendamentoRepository();
    }

    public function getAllAgendamentos()
    {
        $agendamentos = $this->agendamentoRepository->getAll();

        return $agendamentos;
    }

    public function getAgendamentoById($id)
    {
        return $this->agendamentoRepository->getById($id);
    }
}

