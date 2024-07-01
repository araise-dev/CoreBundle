<?php

namespace araise\CoreBundle\Exception;


class FlashBagExecption extends \Exception
{
    private string $flashType;

    public function __construct(string $flashType, string $flashMessage, string $message = '', int $code = 0, ?\Throwable $previous = null)
    {
        $this->flashType = $flashType;
        parent::__construct($message !== '' ? $message : $flashMessage, $code, $previous);
    }

    public function getFlashType(): string
    {
        return $this->flashType;
    }

    public function getFlashMessage(): string
    {
        return $this->message;
    }
}
