<?php

declare(strict_types=1);

namespace araise\CoreBundle\Formatter;

use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;

#[Autoconfigure(tags: ['araise_core.formatter'])]
interface FormatterInterface
{
    public function getString(mixed $value): string;

    public function getHtml(mixed $value): string;

    /**
     * @param array<string, mixed> $options
     */
    public function processOptions(array $options = []): void;
}
