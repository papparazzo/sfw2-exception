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

namespace SFW2\Exception\HttpExceptions\Status5xx;

use Fig\Http\Message\StatusCodeInterface;
use SFW2\Exception\HttpExceptions\HttpException;
use Throwable;

final class HttpStatus503ServiceUnavailable extends HttpException
{
    public function __construct(string $msg = 'http status 503 "Service Unavailable"', Throwable $prev = null)
    {
        parent::__construct(
            caption: 'Die Seiten sind aktuell offline',
            description:
                'Aufgrund von umfangreichen Wartungsarbeiten sind die Webseiten im Moment leider nicht ' .
                'zu erreichen. Bitte versuche es später noch einmal.',
            originMsg: $msg,
            code: StatusCodeInterface::STATUS_SERVICE_UNAVAILABLE,
            prev: $prev
        );
    }
}
