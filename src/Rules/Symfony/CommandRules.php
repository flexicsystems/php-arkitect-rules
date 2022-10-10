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

use Arkitect\Rules\DSL\ArchRule;
use Flexic\PHPArkitect\Rules\Rule;

final class CommandRules extends SymfonyRule implements Rule
{
    public function definition(): array|ArchRule
    {
        $rules = [];

        $rules[] = \Arkitect\Rules\Rule::allClasses()
            ->that(new \Arkitect\Expression\ForClasses\ResideInOneOfTheseNamespaces($this->namespace))
            ->should(new \Arkitect\Expression\ForClasses\HaveNameMatching('*Command'))
            ->because('Symfony Command classes should be named with the suffix "*Command"');

        $rules[] = \Arkitect\Rules\Rule::allClasses()
            ->that(new \Arkitect\Expression\ForClasses\ResideInOneOfTheseNamespaces($this->namespace))
            ->should(new \Arkitect\Expression\ForClasses\Extend(\Symfony\Component\Console\Command\Command::class))
            ->because(\sprintf('Symfony Command classes should extend %s', \Symfony\Component\Console\Command\Command::class));

        $rules[] = \Arkitect\Rules\Rule::allClasses()
            ->that(new \Arkitect\Expression\ForClasses\Extend(\Symfony\Component\Console\Command\Command::class))
            ->should(new \Arkitect\Expression\ForClasses\ResideInOneOfTheseNamespaces($this->namespace))
            ->because(\sprintf('Symfony Command classes should reside in the namespace %s', $this->namespace));

        return $rules;
    }
}
