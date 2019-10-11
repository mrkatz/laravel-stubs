<?php

namespace Mrkatz\LaravelStubs\Console;

use Illuminate\Foundation\Console\ProviderMakeCommand as BaseProviderMakeCommand;

class ProviderMakeCommand extends BaseProviderMakeCommand
{
    use Modulable;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stub = $this->getConfigValue('path', '/provider.stub');

        return file_exists($stub) ? $stub : parent::getStub();
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . $this->getModuleNamespace() . $this->getConfigValue('namespaces.provider');
    }
}
