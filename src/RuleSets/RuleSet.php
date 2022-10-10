<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\PHPArkitect\Rules\RuleSets;

use Arkitect\Rules\ArchRule;
use Flexic\PHPArkitect\Rules\Rule;

abstract class RuleSet
{
    protected static function add(
        array &$rules,
        Rule ...$ruleClasses,
    ): void {
        foreach ($ruleClasses as $ruleClass) {
            $definition = $ruleClass->definition();

            if (!\is_array($definition)) {
                $definition = [$definition];
            }

            \array_map(static function (ArchRule $rule) use (&$rules): void {
                $rules[] = $rule;
            }, $definition);
        }
    }
}
