<?php
namespace App\Controllers;

use Config\Services;
use App\Controllers\BaseController;

/**
 * @author Denis Vitonis denis.cheruttivitonis@fiserv.com
 * @copyright Fiserv 2024 
 * @package Controllers
 */
class Agendamento extends BaseController
{
    protected $agendamentoService;
    public function __construct()
    {
        $this->agendamentoService = Services::agendamentoService(); 
    }

    public function index()
    {
    
        $agendamentos = $this->agendamentoService->getAllAgendamentos();

        return view('frontend/templates/header', ['agendamentos' => $agendamentos]) .
               view('frontend/templates/menu') .
               view('frontend/projects/list_agendamentos', ['agendamentos' => $agendamentos]) .
               view('frontend/templates/footer');
    }

    public function show($id)
    {
        $agendamentoService = service('agendamentoService');
        $agendamento = $this->agendamentoService->getAgendamentoById($id);

        return view('agendamentos/show', ['agendamento' => $agendamento]);
    }
}

