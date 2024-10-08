<?php

namespace araise\CoreBundle\Formatter;

use araise\CoreBundle\Util\StringConverter;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BadgeFormatter extends TwigFormatter
{
    public const OPT_BACKGROUND_COLOR_CLASS = 'background_color_class';

    public const OPT_BACKGROUND_COLOR_HEX = 'background_color_hex';

    public const OPT_TYPE = 'type';

    public const OPT_LINK = 'link';

    public const OPT_CONFIGURATION = 'configuration';

    public function getString(mixed $value): string
    {
        return StringConverter::toString($value);
    }

    public function getHtml(mixed $value): string
    {
        $this->processOptions(($this->options[self::OPT_CONFIGURATION])($value, $this->options));
        return $this->twig->render($this->options[self::OPT_TEMPLATE], [
            'value' => $this->getString($value),
            'type' => $this->options[self::OPT_TYPE],
            'background_color_class' => $this->options[self::OPT_BACKGROUND_COLOR_CLASS],
            'background_color_hex' => $this->options[self::OPT_BACKGROUND_COLOR_HEX],
            'link' => $this->options[self::OPT_LINK],
        ]);
    }

    protected function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault(self::OPT_TEMPLATE, '@araiseCore/formatter/badge.html.twig');
        $resolver->setDefaults([
            self::OPT_BACKGROUND_COLOR_CLASS => null,
            self::OPT_BACKGROUND_COLOR_HEX => null,
            self::OPT_TYPE => 'neutral',
            self::OPT_LINK => null,
            self::OPT_CONFIGURATION => static fn (mixed $value, array $options): array => $options,
        ]);
        $resolver->setAllowedTypes(self::OPT_BACKGROUND_COLOR_CLASS, ['string', 'null']);
        $resolver->setAllowedTypes(self::OPT_BACKGROUND_COLOR_HEX, ['string', 'null']);
        $resolver->setAllowedTypes(self::OPT_TYPE, 'string');
        $resolver->setAllowedTypes(self::OPT_LINK, ['string', 'null']);
        $resolver->setAllowedTypes(self::OPT_CONFIGURATION, 'callable');
        $resolver->setAllowedValues(self::OPT_TYPE, [
            'primary',
            'neutral',
            'error',
            'warning',
            'success',
        ]);
    }
}
