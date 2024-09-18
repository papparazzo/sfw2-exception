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

namespace SFW2\Exception;

use DateTime;
use DateTimeInterface;
use Exception;
use Throwable;

class SFW2Exception extends Exception
{
    protected readonly DateTimeInterface $timeStamp;
    protected readonly string $identifier;

    public function __construct(string $msg, int $code = 0, Throwable $prev = null)
    {
        $this->timeStamp = new DateTime();
        $this->identifier = strtoupper(md5(microtime() . mt_rand()));
        parent::__construct($msg, $code, $prev);
    }

    /**
     * @return DateTimeInterface
     * @noinspection PhpUnused
     */
    public function getTimeStamp(): DateTimeInterface
    {
        return $this->timeStamp;
    }

    /**
     * @return string
     * @noinspection PhpUnused
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }
}
