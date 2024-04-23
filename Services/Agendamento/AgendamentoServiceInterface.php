<?php

namespace App\Services\Agendamento;

/**
 * @author Denis Vitonis denis.cheruttivitonis@fiserv.com
 * @copyright Fiserv 2024 
 * @package Interface Services
 */
interface AgendamentoServiceInterface
{
    public function getAllAgendamentos();
    public function getAgendamentoById($id);
}
