<?php

declare(strict_types=1);

namespace araise\CoreBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class CoreTurboExtension extends AbstractExtension implements GlobalsInterface
{
    public function __construct(
        protected bool $turboEnabled
    ) {
    }

    public function getGlobals(): array
    {
        return [
            'araise_core_turbo_enabled' => $this->turboEnabled,
        ];
    }
}
