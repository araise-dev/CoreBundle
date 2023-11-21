<?php

declare(strict_types=1);

namespace araise\CoreBundle\Util;

class StringConverter
{
    public static function toString(mixed $value): string
    {
        $type = gettype($value);

        return match ($type) {
            'boolean' => ($value) ? 'true' : 'false',
            'object' => self::objectToString($value),
            'array' => sprintf('Array(%d)', count($value)),
            'resource' => sprintf('Resource(%s)', get_resource_type($value)),
            default => (string) $value,
        };
    }

    private static function objectToString(object $value): string
    {
        if (method_exists($value, '__toString')) {
            return $value->__toString();
        }

        return '\\'.get_class($value);
    }
}
