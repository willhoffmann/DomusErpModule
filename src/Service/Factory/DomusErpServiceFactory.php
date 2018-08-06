<?php

namespace DomusErpModule\Service\Factory;

use DomusErp\Sdk\DomusClient;
use DomusErpModule\Service\DomusErpService;
use Interop\Container\ContainerInterface;

class DomusErpServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config')['domuserp_client'];
        $domusClient = new DomusClient($config['host'], $config['port'], $config['username'], $config['password']);

        return new DomusErpService($domusClient);
    }
}
