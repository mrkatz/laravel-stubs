<?php


namespace Mrkatz\LaravelStubs\Console;


use Illuminate\Config\Repository;

trait Configable
{
    /**
     * Path to the config file
     *
     * @var string
     */
    protected $configPath = __DIR__ . '/../../config/';

    /**
     * FileName of the config file
     *
     * @var string
     */
    protected $configFileName = 'stubs.php';

    /**
     * @param string $property
     * @param string $append
     * @return Repository|mixed
     */
    protected function getConfigValue($property, $append = '')
    {
        return config($this->getConfigName() . '.' . $property) . $append;
    }

    protected function getConfigName()
    {
        return 'stubs';
    }
}