<?php

declare(strict_types=1);

namespace araise\CoreBundle\Twig;

use araise\CoreBundle\Util\StringConverter;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class StringConverterExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('araise_core_stringify', [StringConverter::class, 'toString']),
        ];
    }
}
