<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\PHPArkitect\Rules\Rules\Symfony;

abstract class SymfonyRule
{
    public function __construct(
        protected string $namespace,
    ) {
    }
}
