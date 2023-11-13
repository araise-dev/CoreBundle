<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests\Util;

use araise\CoreBundle\Util\StringConverter;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class StringConverterTest extends KernelTestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testString(mixed $input, string $expected): void
    {
        $output = StringConverter::toString($input);

        $this->assertIsString($output);
        $this->assertEquals($expected, $output);
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public function dataProvider(): array
    {
        $objectPlain = new \stdClass();
        $objectStringify = new class() {
            public function __toString()
            {
                return 'stringified object';
            }
        };

        return [
            'string' => [
                'input' => 'whatwedo GmbH',
                'expected' => 'whatwedo GmbH',
            ],
            'bool' => [
                'input' => true,
                'expected' => 'true',
            ],
            'object plain' => [
                'input' => $objectPlain,
                'expected' => '\\'.\stdClass::class,
            ],
            'object stringify' => [
                'input' => $objectStringify,
                'expected' => 'stringified object',
            ],
            'array' => [
                'input' => ['whatwedo', 12],
                'expected' => 'Array(2)',
            ],
            'resource' => [
                'input' => opendir(__DIR__),
                'expected' => 'Resource(stream)',
            ],
            'int' => [
                'input' => 123,
                'expected' => '123',
            ],
            'float' => [
                'input' => 123.456,
                'expected' => '123.456',
            ],
        ];
    }
}
