<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Loads the custom PHPStan rules so they can be referenced from phpstan.dist.neon.
// Passed to PHPStan via --autoload-file in .github/workflows/static-analysis.yml.

require __DIR__.'/UnserializeMissingAllowedClassesRule.php';
require __DIR__.'/HardenedComparisonRule.php';
require __DIR__.'/UnserializeToStringTrampolineRule.php';
