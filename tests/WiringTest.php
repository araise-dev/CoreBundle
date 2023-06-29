<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests;

use araise\CoreBundle\Manager\FormatterManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class WiringTest extends KernelTestCase
{
    public function testServiceWiring(): void
    {
        foreach ([
            FormatterManager::class,
        ] as $serviceClass) {
            self::assertInstanceOf(
                $serviceClass,
                self::getContainer()->get($serviceClass)
            );
        }
    }
}
