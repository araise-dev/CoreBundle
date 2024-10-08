<?php

namespace araise\CoreBundle\Tests;

use araise\CoreBundle\Formatter\BadgeFormatter;

class BadgeFormatterTest extends AbstractFormatterTest
{
    public function testGetHtml(): void
    {
        $badgeFormatter = $this->getFormatter(BadgeFormatter::class);
        $badgeFormatter->processOptions([
            BadgeFormatter::OPT_TYPE => 'error',
        ]);
        $html = $badgeFormatter->getHtml('test');

        $expected = '<p class="whatwedo-utility-badge inline-block whatwedo-utility-badge--error ">
        test
    </p>';

        $this->assertSame(trim($expected), trim($html));
    }

    public function testGetHtmlWithLink(): void
    {
        $badgeFormatter = $this->getFormatter(BadgeFormatter::class);
        $badgeFormatter->processOptions([
            BadgeFormatter::OPT_TYPE => 'error',
            BadgeFormatter::OPT_LINK => 'https://www.whatwedo.ch',
        ]);
        $html = $badgeFormatter->getHtml('test');

        $expected = '<a href="https://www.whatwedo.ch" class="whatwedo-utility-badge inline-block whatwedo-utility-badge--error ">
        test
    </a>';

        $this->assertSame(trim($expected), trim($html));
    }

    public function testGetHtmlWithColorClass(): void
    {
        $badgeFormatter = $this->getFormatter(BadgeFormatter::class);
        $badgeFormatter->processOptions([
            BadgeFormatter::OPT_TYPE => 'error',
            BadgeFormatter::OPT_BACKGROUND_COLOR_CLASS => 'bg-red-500',
        ]);
        $html = $badgeFormatter->getHtml('test');

        $expected = '<p class="whatwedo-utility-badge inline-block whatwedo-utility-badge--error bg-red-500">
        test
    </p>';

        $this->assertSame(trim($expected), trim($html));
    }

    public function testGetHtmlWithColorHex(): void
    {
        $badgeFormatter = $this->getFormatter(BadgeFormatter::class);
        $badgeFormatter->processOptions([
            BadgeFormatter::OPT_TYPE => 'error',
            BadgeFormatter::OPT_BACKGROUND_COLOR_HEX => '#ff0000',
        ]);
        $html = $badgeFormatter->getHtml('test');

        $expected = '<p class="whatwedo-utility-badge inline-block whatwedo-utility-badge--error bg-[#ff0000]">
        test
    </p>';

        $this->assertSame(trim($expected), trim($html));
    }

    public function testGetHtmlWithColorClassAndHex(): void
    {
        $badgeFormatter = $this->getFormatter(BadgeFormatter::class);
        $badgeFormatter->processOptions([
            BadgeFormatter::OPT_TYPE => 'error',
            BadgeFormatter::OPT_BACKGROUND_COLOR_CLASS => 'bg-red-500',
            BadgeFormatter::OPT_BACKGROUND_COLOR_HEX => '#ff0000',
        ]);
        $html = $badgeFormatter->getHtml('test');

        $expected = '<p class="whatwedo-utility-badge inline-block whatwedo-utility-badge--error bg-[#ff0000] bg-red-500">
        test
    </p>';

        $this->assertSame(trim($expected), trim($html));
    }
}
