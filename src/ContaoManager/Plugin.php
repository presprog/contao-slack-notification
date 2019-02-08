<?php

/**
 * @copyright: Copyright (c) 2019, Present Progressive GbR
 * @author: Benedict Zinke <bz@presentprogressive.de>
 */

namespace PresProg\SlackNotification\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use PresProg\SlackNotification\SlackNotificationBundle;

/**
 * Plugin for the Contao Manager.
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(SlackNotificationBundle::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class,
                    'notification_center'
                ])
        ];
    }
}
