<?php

declare(strict_types=1);

namespace araise\CoreBundle\Formatter;

use Symfony\Contracts\Translation\TranslatorInterface;

class BooleanFormatter extends AbstractFormatter
{
    public function __construct(
        private TranslatorInterface $translator
    ) {
        parent::__construct();
    }

    public function getString(mixed $value): string
    {
        $msg = $value ? 'araise_core.yes' : 'araise_core.no';

        return $this->translator->trans($msg);
    }
}
