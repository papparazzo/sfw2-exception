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
 *
 */

declare(strict_types=1);

namespace SFW2\Exception\HttpExceptions\Status2xx;

use Fig\Http\Message\StatusCodeInterface;
use SFW2\Exception\HttpExceptions\HttpException;
use Throwable;

final class HttpStatus204NoContent extends HttpException
{
    public function __construct(string $msg = 'No Content', Throwable $prev = null)
    {
        parent::__construct(
            caption: 'Keine Daten vorhanden',
            description:
                'Die gewünschten Daten konnten nicht gefunden werden. ' .
                'Bitte prüfe die URL auf Fehler und drücke dann den reload-Button in deinem Browser.',
            originMsg: $msg,
            code: StatusCodeInterface::STATUS_NO_CONTENT,
            prev: $prev
        );
    }
}