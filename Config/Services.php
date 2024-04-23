<?php
namespace Config;

use App\Models\AgendamentoModel;
use App\Mappers\AgendamentoMapper;
use CodeIgniter\Config\BaseService;
use App\Services\Agendamento\AgendamentoService;
use App\Repositories\Agendamento\AgendamentoRepository;
use App\Services\Agendamento\AgendamentoServiceInterface;
use App\Repositories\Agendamento\AgendamentoRepositoryInterface;

/**
 * @author Denis Vitonis denis.cheruttivitonis@fiserv.com
 * @copyright Fiserv 2024 
 * @package Config Services
 */

class Services extends BaseService
{
    public $bindings = [
        AgendamentoRepositoryInterface::class => AgendamentoRepository::class,
        AgendamentoServiceInterface::class => AgendamentoService::class,
    ];

    public $aliases = [
        'agendamentoRepository' => AgendamentoRepository::class,
    ];

    public $shared = [
        AgendamentoRepositoryInterface::class => true,
    ];

    public static function agendamentoService(): AgendamentoServiceInterface
    {
        // Obtenha uma instância do repositório de agendamento do contêiner de serviços( essa )
        $agendamentoRepository = static::getSharedInstance(AgendamentoRepositoryInterface::class);

        // Retorna uma nova instância do serviço de agendamento injetando o repositório
        return new AgendamentoService($agendamentoRepository);
    }

    public static function agendamentoRepository(): AgendamentoRepository
    {
        // Cria(objeto) uma instância de AgendamentoModel
        $agendamentoModel = new AgendamentoModel();

        // Cria(objeto) uma instância de AgendamentoMapper
        $agendamentoMapper = new AgendamentoMapper($agendamentoModel); 
        
        // Retorna enviando para o Controller( uma nova instância de AgendamentoRepository) injetando AgendamentoModel e AgendamentoMapper
        return new AgendamentoRepository($agendamentoModel, $agendamentoMapper);
    }
}


