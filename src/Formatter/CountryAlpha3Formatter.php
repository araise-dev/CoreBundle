<?php

declare(strict_types=1);

namespace araise\CoreBundle\Formatter;

use Symfony\Component\Intl\Countries;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CountryAlpha3Formatter extends AbstractFormatter
{
    public const OPT_LOCALE = 'locale';

    public function getString(mixed $value): string
    {
        if (Countries::alpha3CodeExists(mb_strtoupper($value))) {
            return Countries::getAlpha3Name(mb_strtoupper($value), $this->options[self::OPT_LOCALE]);
        }

        return $value;
    }

    protected function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault(self::OPT_LOCALE, 'de');
    }
}
