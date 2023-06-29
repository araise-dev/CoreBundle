<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests;

use araise\CoreBundle\Formatter\EmailFormatter;

class EmailFormatterTest extends AbstractFormatterTest
{
    public function testFormatter(): void
    {
        $formatter = $this->getFormatter(EmailFormatter::class);
        self::assertSame('<a href="mailto:test@whatwedo.ch" title="E-Mail senden">test@whatwedo.ch</a>', $formatter->getHtml('test@whatwedo.ch'));
    }
}
