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

use Flexic\PHPArkitect\Rules\Rules\Symfony\CommandRules;

final class SymfonyRuleSet extends RuleSet
{
    public static function register(array &$rules): void
    {
        if (!\defined('APP_NAMESPACE')) {
            \define('APP_NAMESPACE', 'App');
        }

        self::add(
            $rules,
            new CommandRules(\sprintf('%s\Command', APP_NAMESPACE)),
        );
    }
}
