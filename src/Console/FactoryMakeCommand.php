<?php

namespace Mrkatz\LaravelStubs\Console;

use Illuminate\Database\Console\Factories\FactoryMakeCommand as BaseFactoryMakeCommand;

class FactoryMakeCommand extends BaseFactoryMakeCommand
{
    use Modulable;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stub = $this->getConfigValue('path', '/factory.stub');

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
        return $rootNamespace . $this->getModuleNamespace() . $this->getConfigValue('namespaces.model');
    }
}
