<?php

namespace DomusErpModule;

use DomusErpModule\Service\DomusErpService;
use DomusErpModule\Service\Factory\DomusErpServiceFactory;

return [
    'service_manager' => [
        'aliases' => [
            'domusErpService' => DomusErpService::class,
        ],
        'factories' => [
            DomusErpService::class => DomusErpServiceFactory::class,
        ],
    ],
];