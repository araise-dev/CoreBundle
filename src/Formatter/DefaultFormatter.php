<?php

declare(strict_types=1);

namespace araise\CoreBundle\Formatter;

use araise\CoreBundle\Util\StringConverter;

class DefaultFormatter extends AbstractFormatter
{
    public function getString(mixed $value): string
    {
        return StringConverter::toString($value);
    }
}
