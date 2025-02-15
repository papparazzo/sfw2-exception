<?php

/**
 *  SFW2 - SimpleFrameWork
 *
 *  Copyright (C) 2025  Stefan Paproth
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program. If not, see <http://www.gnu.org/licenses/agpl.txt>.
 */

declare(strict_types=1);

namespace SFW2\Exception\HttpExceptions\Status4xx;

use Fig\Http\Message\StatusCodeInterface;
use SFW2\Exception\HttpExceptions\HttpException;
use Throwable;

final class HttpStatus405MethodNotAllowed extends HttpException
{
    /**
     * @param string[]       $allowed
     * @param string         $msg
     * @param Throwable|null $prev
     */
    public function __construct(
        private readonly array $allowed,
        string $msg = 'http status 405 "Method Not Allowed"',
        Throwable $prev = null
    ) {
        parent::__construct(
            caption: 'Methode nicht erlaubt!',
            description: "Nur folgende Methoden sind erlaubt: '" . implode("', '", $this->allowed) . "'",
            originMsg: $msg,
            code: StatusCodeInterface::STATUS_METHOD_NOT_ALLOWED,
            prev: $prev
        );
    }

    public function getAdditionalHeaders(): array
    {
        // Allow: GET, POST, HEAD, ...
        return ['Allow' =>  implode(', ', $this->allowed)];
    }
}