<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests;

use araise\CoreBundle\Formatter\FormatterInterface;
use araise\CoreBundle\Manager\FormatterManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

abstract class AbstractFormatterTest extends KernelTestCase
{
    protected function getFormatter(string $formatterClass): FormatterInterface
    {
        $formatterManager = self::getContainer()->get(FormatterManager::class);

        return $formatterManager->getFormatter($formatterClass);
    }
}
