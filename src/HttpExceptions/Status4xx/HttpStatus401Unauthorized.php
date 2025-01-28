<?php

/**
 *  SFW2 - SimpleFrameWork
 *
 *  Copyright (C) 2017  Stefan Paproth
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

final class HttpStatus401Unauthorized extends HttpException
{
    public function __construct(string $msg = 'http status 401 "Unauthorized"', Throwable $prev = null)
    {
        parent::__construct(
            caption: 'Keine Berechtigung',
            description:
                'Du hast fehlerhafte Anmeldedaten eingegeben. Bitte korrigiere deine Eingaben und probiere es erneut.',
            originMsg: $msg,
            code: StatusCodeInterface::STATUS_UNAUTHORIZED,
            prev: $prev
        );
    }
}
