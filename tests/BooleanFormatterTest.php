<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests;

use araise\CoreBundle\Formatter\BooleanFormatter;

class BooleanFormatterTest extends AbstractFormatterTest
{
    public function testFormatter(): void
    {
        $formatter = $this->getFormatter(BooleanFormatter::class);
        self::assertSame('Ja', $formatter->getHtml(true));
        self::assertSame('Nein', $formatter->getHtml(false));
    }
}
