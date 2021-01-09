<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Rwd\ContaoResponsiveTablesBundle\\Tests;

use Rwd\ContaoResponsiveTablesBundle\ContaoResponsiveTablesBundle;
use PHPUnit\Framework\TestCase;

class ContaoSkeletonBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoSkeletonBundle();

        $this->assertInstanceOf('Rwd\ContaoResponsiveTablesBundle\ContaoResponsiveTablesBundle', $bundle);
    }
}
