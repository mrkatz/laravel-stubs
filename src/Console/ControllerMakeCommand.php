<?php

namespace Mrkatz\LaravelStubs\Console;

use Illuminate\Foundation\Application;
use Illuminate\Routing\Console\ControllerMakeCommand as BaseControllerMakeCommand;
use Illuminate\Support\Str;
use InvalidArgumentException;

class ControllerMakeCommand extends BaseControllerMakeCommand
{
    use Modulable;

    /**
     * The Laravel application instance.
     *
     * @var Application
     */
    protected $laravel;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stub = null;

        if ($this->option('parent')) {
            $stub = $this->getConfigValue('path', '/controller.nested.stub');
        } elseif ($this->option('model')) {
            $stub = $this->getConfigValue('path', '/controller.model.stub');
        } elseif ($this->option('invokable')) {
            $stub = $this->getConfigValue('path', '/controller.invokable.stub');
        } elseif ($this->option('resource')) {
            $stub = $this->getConfigValue('path', '/controller.stub');
        }

        if ($this->option('api') && is_null($stub)) {
            $stub = $this->getConfigValue('path', '/controller.api.stub');
        } elseif ($this->option('api') && !is_null($stub) && !$this->option('invokable')) {
            $stub = str_replace('.stub', '.api.stub', $stub);
        }

        $stub = $stub ?? $this->getConfigValue('path', '/controller.plain.stub');

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
        return $rootNamespace . $this->getModuleNamespace() . $this->getConfigValue('namespaces.controller');
    }

    /**
     * Get the fully-qualified model class name.
     *
     * @param string $model
     * @return string
     */
    protected function parseModel($model)
    {
        if (preg_match('([^A-Za-z0-9_/\\\\])', $model)) {
            throw new InvalidArgumentException('Model name contains invalid characters.');
        }

        $model = trim(str_replace('/', '\\', $model), '\\');

        $namespace =
            trim($this->laravel->getNamespace(), '\\')
            . $this->getModuleNamespace()
            . $this->getConfigValue('namespaces.model')
            . '\\';

        if (!Str::startsWith($model, $namespace)) {
            $model = $namespace . $model;
        }

        return $model;
    }
}
