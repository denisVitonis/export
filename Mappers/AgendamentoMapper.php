<?php

namespace App\Mappers;

use App\Entities\Agendamento;
use App\Models\AgendamentoModel;
use CodeIgniter\I18n\Time;
use DateTime;
use ReflectionClass;

/**
 * @author Denis Vitonis denis.cheruttivitonis@fiserv.com
 * @copyright Fiserv 2024 
 * @package Data Mapper
 */

class AgendamentoMapper
{
    protected $agendamentoModel;

    public function __construct(AgendamentoModel $agendamentoModel)
    {
        $this->agendamentoModel = $agendamentoModel;
    }

    public function mapToEntity(array $data): Agendamento
    {
        $agendamento = new Agendamento();
        foreach ($data as $key => $value) {
            $propertyName = $this->snakeToCamel($key);
            if (property_exists($agendamento, $propertyName)) {
                $agendamento->{$propertyName} = $this->convertToCorrectType($propertyName, $value);
            }
        }
        
        return $agendamento;
    }
    
    protected function convertToCorrectType(string $propertyName, $value)
    {
        switch ($propertyName) {
            case 'horario':
                if ($value instanceof Time) {
                    return $value->toDateTime();
                } elseif (is_string($value)) {
                    return new DateTime($value);
                }
                break;
            case 'realizacao':
                return (int) $value; // Converte para inteiro
            default:
                return $value;
        }
    }

    public function mapToData(Agendamento $agendamento): array
    {
        $data = [];
        $reflectionClass = new ReflectionClass($agendamento);
        foreach ($reflectionClass->getProperties() as $property) {
            $propertyName = $property->getName();
            $columnName = $this->camelToSnake($propertyName);
            $data[$columnName] = $agendamento->{$propertyName};
        }

        return $data;
    }

    protected function snakeToCamel(string $snake): string
    {
        return lcfirst(str_replace('_', '', ucwords($snake, '_')));
    }

    protected function camelToSnake(string $camel): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $camel));
    }
}

