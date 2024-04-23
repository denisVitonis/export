<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

/**
 * @author Denis Vitonis denis.cheruttivitonis@fiserv.com
 * @copyright Fiserv 2024 
 * @package Entities
 */
class Agendamento extends Entity
{
    protected $id;
    protected $tabela;
    protected $horario;
    protected $envolvidos;
    protected $acao;
    protected $registro;
    protected $realizacao;
    protected $agendamento_und;

    protected $dates = ['horario']; 

    protected $attributes = [
        'id' => null,
        'tabela' => null,
        'horario' => null,
        'envolvidos' => null,
        'acao' => null,
        'registro' => null,
        'realizacao' => null,
        'agendamento_und' => null,
    ];

    protected $casts = [
        'id' => 'int',
        'tabela' => 'string',
        'horario' => 'datetime',
        'envolvidos' => 'string',
        'acao' => 'string',
        'registro' => 'string',
        'realizacao' => 'int',
        'agendamento_und' => 'int',
    ];

    public function getId(): ?int
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = (int) $id; 
    }

    public function getTabela(): string
    {
        return $this->attributes['tabela'];
    }

    public function setTabela(string $tabela)
    {
        $this->attributes['tabela'] = $tabela;
    }

public function getHorario(): ?\DateTime
    {
 
        if ($this->attributes['horario'] instanceof \CodeIgniter\I18n\Time) {

            return $this->attributes['horario']->toDateTime();
        }

        return $this->attributes['horario'];
    }

    public function setHorario($horario)
    {
        if ($horario instanceof \CodeIgniter\I18n\Time) {
            $this->attributes['horario'] = $horario->toDateTime();
        } elseif ($horario instanceof \DateTime) {
            $this->attributes['horario'] = $horario;
        } elseif (is_string($horario)) {
            $this->attributes['horario'] = new \DateTime($horario);
        } else {
            $this->attributes['horario'] = $horario;
        }
    }


    public function getEnvolvidos(): string
    {
        return $this->attributes['envolvidos'];
    }

    public function setEnvolvidos(string $envolvidos)
    {
        $this->attributes['envolvidos'] = $envolvidos;
    }

    public function getAcao(): string
    {
        return $this->attributes['acao'];
    }

    public function setAcao(string $acao)
    {
        $this->attributes['acao'] = $acao;
    }

    public function getRegistro(): string
    {
        return $this->attributes['registro'];
    }

    public function setRegistro(string $registro)
    {
        $this->attributes['registro'] = $registro;
    }

    public function getRealizacao(): ?int
    {
        return $this->attributes['realizacao'];
    }

    public function setRealizacao(int $realizacao)
    {
        $this->attributes['realizacao'] = (int) $realizacao;
    }

    public function getAgendamentoUnd(): ?int
    {
        return $this->attributes['agendamento_und'];
    }

    public function setAgendamentoUnd(int $agendamento_und)
    {
        $this->attributes['agendamento_und'] = $agendamento_und;
    }
}
