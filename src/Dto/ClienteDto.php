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
class ClienteDto
{
    public function __construct(
        public ?int $id = null,
        public ?string $nome = null,
        public ?string $documento = null,
        public ?string $email = null,
        public ?string $telefone = null,
        public ?string $genero = null,
        public ?string $observacao = null,
        public ?string $dataNascimento = null,
        public ?EnderecoDto $endereco = null,
    ) {
    }
}
