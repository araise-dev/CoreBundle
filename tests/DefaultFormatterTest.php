<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests;

use araise\CoreBundle\Formatter\DefaultFormatter;

class DefaultFormatterTest extends AbstractFormatterTest
{
    public function testFormatter(): void
    {
        $formatter = $this->getFormatter(DefaultFormatter::class);
        self::assertSame('test', $formatter->getHtml('test'));
    }

    public function testEntityWithNoToString(): void
    {
        $formatter = $this->getFormatter(DefaultFormatter::class);
        $entity = new EntityWithNoToString('test');
        self::assertSame('\\'.EntityWithNoToString::class, $formatter->getHtml($entity));
    }
}
