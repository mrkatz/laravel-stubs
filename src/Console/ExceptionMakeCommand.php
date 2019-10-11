<?php

namespace Mrkatz\LaravelStubs\Console;

use Illuminate\Foundation\Console\ExceptionMakeCommand as BaseExceptionMakeCommand;

class ExceptionMakeCommand extends BaseExceptionMakeCommand
{
    use Modulable;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('render') && $this->option('report')) {
            $stub = $this->getConfigValue('path', '/exception-render-report.stub');
        } elseif ($this->option('render')) {
            $stub = $this->getConfigValue('path', '/exception-render.stub');
        } elseif ($this->option('report')) {
            $stub = $this->getConfigValue('path', '/exception-report.stub');
        } else {
            $stub = $this->getConfigValue('path', '/exception.stub');
        }

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
        return $rootNamespace . $this->getModuleNamespace() . $stub = $this->getConfigValue('namespaces.exception');
    }
}
