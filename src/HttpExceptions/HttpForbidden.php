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
 *
 */

declare(strict_types=1);

namespace SFW2\Exception\HttpExceptions;

use Fig\Http\Message\StatusCodeInterface;
use Throwable;

final class HttpForbidden extends HttpException
{
    public function __construct(string $msg = 'Forbidden', Throwable $prev = null)
    {
        parent::__construct(
            caption: 'Keine Berechtigung',
            description:
                'Dir fehlt die Berechtigung für diese Seite. ' .
                'Bitte melde dich mit einem anderen User der erweiterte Rechte enthält an und probiere es erneut.',
            originMsg: $msg,
            code: StatusCodeInterface::STATUS_FORBIDDEN,
            prev: $prev
        );
    }
}
