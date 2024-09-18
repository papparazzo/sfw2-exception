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

class HttpInternalServerError extends HttpException
{
    public function __construct(string $msg = 'Internal Server Error', Throwable $prev = null)
    {
        // TODO: insert e-mail-address
        parent::__construct(
            caption: 'Interner Fehler aufgetreten!',
            description:
                'Es ist ein interner Fehler aufgetreten. Bitte rufe die Seite erneut auf. ' .
                'Sollte der Fehler abermals auftreten wende dich bitte mit der unten angegenen ID an den Webmaster',
            originMsg: $msg,
            code: StatusCodeInterface::STATUS_INTERNAL_SERVER_ERROR,
            prev: $prev
        );
    }
}
