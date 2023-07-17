<?php

declare(strict_types=1);

namespace araise\CoreBundle\Formatter;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class EnumFormatter extends AbstractFormatter
{
    public const OPT_TRANSLATION_KEY_PREFIX = 'translation_key_prefix';

    public function __construct(
        private TranslatorInterface $translator
    ) {
    }

    public function getString(mixed $enum): string
    {
        if (! $enum) {
            return '';
        }

        return $this->translator->trans($this->options['translation_key_prefix'].$enum->value);
    }

    protected function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault(self::OPT_TRANSLATION_KEY_PREFIX, '');
    }
}
