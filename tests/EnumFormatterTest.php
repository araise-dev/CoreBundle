<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests;

use araise\CoreBundle\Formatter\EnumFormatter;
use araise\CoreBundle\Tests\App\Enum\TestEnum;

class EnumFormatterTest extends AbstractFormatterTest
{
    public function testFormatter(): void
    {
        $formatter = $this->getFormatter(EnumFormatter::class);
        $formatter->processOptions();
        self::assertSame('archived', $formatter->getHtml(TestEnum::ARCHIVED));
    }
}
