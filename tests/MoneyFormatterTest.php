<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests;

use araise\CoreBundle\Formatter\MoneyFormatter;

class MoneyFormatterTest extends AbstractFormatterTest
{
    public function testFormatter(): void
    {
        $formatter = $this->getFormatter(MoneyFormatter::class);
        $formatter->processOptions();
        self::assertSame('CHF 12.33', $formatter->getHtml(12.33445));
    }
}
