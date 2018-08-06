<?php

namespace DomusErpModule\Service;

use DomusErp\Sdk\DomusClient;

class DomusErpService
{
    /**
     * Domus Erp Client
     *
     * @var DomusClient
     */
    protected $domusClient;

    /**
     * Constructor
     *
     * @param DomusClient $domusClient
     */
    public function __construct(DomusClient $domusClient)
    {
        $this->domusClient = $domusClient;
    }

    /**
     * Client
     *
     * @return DomusClient
     */
    public function client()
    {
        return $this->domusClient;
    }
}
