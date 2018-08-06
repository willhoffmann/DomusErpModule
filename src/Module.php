<?php

declare(strict_types=1);

namespace DomusErpModule;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    /**
     *  Returns configuration to merge with application configuration
     *
     * @return array
     */
    public function getConfig() : array
    {
        return include __DIR__.'/../config/module.config.php';
    }
}
