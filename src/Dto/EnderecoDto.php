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
 * ClienteDto
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
class EnderecoDto
{
    public function __construct(
        public ?string $pais = null,
        public ?string $estado = null,
        public ?string $cidade = null,
        public ?string $cep = null,
        public ?string $logradouro = null,
        public ?string $numero = null,
        public ?string $complemento = null,
    ) {
    }
}
