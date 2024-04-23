<?php

namespace App\Repositories\Agendamento;

/**
 * @author Denis Vitonis denis.cheruttivitonis@fiserv.com
 * @copyright Fiserv 2024 
 * @package Interface Repositories
 */
interface AgendamentoRepositoryInterface
{
    public function getAll();
    public function getById($id);
    // Adicione outros métodos conforme necessário
}
