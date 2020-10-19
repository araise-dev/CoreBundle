<?php
/*
 * Copyright (c) 2016, whatwedo GmbH
 * All rights reserved
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice,
 *    this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright notice,
 *    this list of conditions and the following disclaimer in the documentation
 *    and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 * IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 * INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 * NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 * PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 * WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

namespace whatwedo\CoreBundle\Formatter;

/**
 * @author Ueli Banholzer <ueli@whatwedo.ch>
 */
class ChfFormatter extends AbstractFormatter
{
    /**
     * returns a string which represents the value.
     *
     * @param $value
     *
     * @return string
     */
    public function getString($value)
    {
        $number = (float) $value;
        $number = round(($number + 0.000001) * 20) / 20;

        return sprintf('CHF %s',
            number_format($number, 2, '.', '\'')
        );
    }

    /**
     * returns a string which represents the value.
     *
     * @param $value
     *
     * @return string
     */
    public function getStringWithoutChf($value)
    {
        $number = (float) $value;
        $number = round(($number + 0.000001) * 20) / 20;

        return sprintf('%s',
            number_format($number, 2, '.', '\'')
        );
    }

    public function getHtml($value)
    {
        if ($value < 0) {
            return '<nobr><span class="text-danger">'.$this->getString($value).'</span></nobr>';
        }

        return '<nobr>'.$this->getString($value).'</nobr>';
    }
}
