<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests;

use araise\CoreBundle\Formatter\WysiwygFormatter;

class WysiwygFormatterTest extends AbstractFormatterTest
{
    public function testFormatter(): void
    {
        $formatter = $this->getFormatter(WysiwygFormatter::class);
        $formatter->processOptions();
        self::assertSame('<blockquote>hallo Welt</blockquote>', $formatter->getHtml('hallo Welt'));
    }
}
