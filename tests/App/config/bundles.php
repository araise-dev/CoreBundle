<?php

declare(strict_types=1);

use araise\CoreBundle\whatwedoCoreBundle;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\TwigBundle\TwigBundle;
use whatwedo\TwigBootstrapIcons\whatwedoTwigBootstrapIconsBundle;

return [
    FrameworkBundle::class => [
        'all' => true,
    ],
    DoctrineBundle::class => [
        'all' => true,
    ],
    TwigBundle::class => [
        'all' => true,
    ],
    whatwedoCoreBundle::class => [
        'all' => true,
    ],
    whatwedoTwigBootstrapIconsBundle::class => [
        'all' => true,
    ],
];
