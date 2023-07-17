<?php

declare(strict_types=1);

namespace araise\CoreBundle\Formatter;

use Coduo\ToString\StringConverter;

class DefaultFormatter extends AbstractFormatter
{
    public function getString(mixed $value): string
    {
        return (string) new StringConverter($value);
    }
}
