<?php

declare(strict_types=1);

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\Client\Dto;

/**
 * AtendimentoDto
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
class AtendimentoDto
{
    /** @param ServicoCodificadoDto[] $codificados */
    public function __construct(
        public ?int $id = null,
        public ?SenhaDto $senha = null,
        public ?ServicoDto $servico = null,
        public ?UnidadeDto $unidade = null,
        public ?LocalDto $local = null,
        public ?int $numeroLocal = null,
        public ?string $observacao = null,
        public ?string $dataChegada = null,
        public ?string $dataChamada = null,
        public ?string $dataInicio = null,
        public ?string $dataFim = null,
        public ?string $dataAgendamento = null,
        public ?string $tempoEspera = null,
        public ?PrioridadeDto $prioridade = null,
        public ?string $status = null,
        public ?string $resolucao = null,
        public ?ClienteDto $cliente = null,
        public ?UsuarioDto $triagem = null,
        public ?UsuarioDto $usuario = null,
        public ?array $codificados = [],
        public ?string $hash = null,
    ) {
    }
}
