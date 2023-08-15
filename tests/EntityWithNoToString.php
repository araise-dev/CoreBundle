<?php

declare(strict_types=1);

namespace araise\CoreBundle\Tests;

class EntityWithNoToString
{
    public function __construct(
        protected string $name
    ) {
    }
}
