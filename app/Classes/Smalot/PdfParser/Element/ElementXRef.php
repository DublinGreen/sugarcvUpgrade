<?php

/**
 * @file
 *          This file is part of the PdfParser library.
 *
 * @author  Sébastien MALOT <sebastien@malot.fr>
 * @date    2017-01-03
 *
 * @license LGPLv3
 * @url     <https://github.com/smalot/pdfparser>
 *
 *  PdfParser is a pdf library written in PHP, extraction oriented.
 *  Copyright (C) 2017 - Sébastien MALOT <sebastien@malot.fr>
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Lesser General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Lesser General Public License for more details.
 *
 *  You should have received a copy of the GNU Lesser General Public License
 *  along with this program.
 *  If not, see <http://www.pdfparser.org/sites/default/LICENSE.txt>.
 */

namespace App\Classes\Smalot\PdfParser\Element;

use App\Classes\Smalot\PdfParser\Document;
use App\Classes\Smalot\PdfParser\Element;

/**
 * Class ElementXRef
 */
class ElementXRef extends Element
{
    /**
     * @return string
     */
    public function getId()
    {
        return $this->getContent();
    }

    public function getObject()
    {
        return $this->document->getObjectById($this->getId());
    }

    /**
     * @return bool
     */
    public function equals($value)
    {
        $id = ($value instanceof self) ? $value->getId() : $value;

        return $this->getId() == $id;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '#Obj#'.$this->getId();
    }

    /**
     * @param string   $content
     * @param Document $document
     * @param int      $offset
     *
     * @return bool|ElementXRef
     */
    public static function parse($content, Document $document = null, &$offset = 0)
    {
        if (preg_match('/^\s*(?P<id>[0-9]+\s+[0-9]+\s+R)/s', $content, $match)) {
            $id = $match['id'];
            $offset += strpos($content, $id) + \strlen($id);
            $id = str_replace(' ', '_', rtrim($id, ' R'));

            return new self($id, $document);
        }

        return false;
    }
}
