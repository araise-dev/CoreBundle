<?php

declare(strict_types=1);

namespace araise\CoreBundle\Formatter;

class DefaultFormatter extends AbstractFormatter
{
    public function getString(mixed $value): string
    {
        return (string) $value;
    }
}
