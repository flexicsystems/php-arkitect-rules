<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\PHPArkitect\Rules;

use Arkitect\Rules\DSL\ArchRule;

interface Rule
{
    public function definition(): array|ArchRule;
}
