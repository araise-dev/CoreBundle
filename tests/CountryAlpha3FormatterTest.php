<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests;

use araise\CoreBundle\Formatter\CountryAlpha3Formatter;

class CountryAlpha3FormatterTest extends AbstractFormatterTest
{
    public function testFormatter(): void
    {
        $formatter = $this->getFormatter(CountryAlpha3Formatter::class);
        self::assertSame('Schweiz', $formatter->getHtml('CHE'));
    }

    public function testFormatterEnglish(): void
    {
        $formatter = $this->getFormatter(CountryAlpha3Formatter::class);
        $formatter->processOptions([
            'locale' => 'US',
        ]);
        self::assertSame('Switzerland', $formatter->getHtml('CHE'));
    }
}
