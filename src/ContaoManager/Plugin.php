<?php

declare(strict_types=1);

/*
 * This file is part of contao-responsive-tables-bundle.
 *
 * (c) Christian Romeni
 *
 * @license LGPL-3.0-or-later
 */

namespace Rwd\ResponsiveTablesBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Rwd\ResponsiveTablesBundle\ResponsiveTablesBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ResponsiveTablesBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
