<?php

namespace Laminas\Paginator\Adapter\LaminasDb;

class Module
{
    /**
     * Retrieve configuration for laminas-paginator adapter plugin manager for laminas-mvc context.
     *
     * @return array
     */
    public function getConfig()
    {
        return (new ConfigProvider())();
    }
}
