<?php

namespace Mrkatz\LaravelStubs\Console;

use Illuminate\Foundation\Console\ObserverMakeCommand as BaseObserverMakeCommand;
use Illuminate\Support\Str;

class ObserverMakeCommand extends BaseObserverMakeCommand
{
    use Modulable;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('model')) {
            $stub = $this->getConfigValue('path', '/observer.stub');
        } else {
            $stub = $this->getConfigValue('path', '/observer.plain.stub');
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
        return $rootNamespace . $this->getModuleNamespace() . $this->getConfigValue('namespaces.observer');
    }

    /**
     * Replace the model for the given stub.
     *
     * @param string $stub
     * @param string $model
     * @return string
     */
    protected function replaceModel($stub, $model)
    {
        $model = str_replace('/', '\\', $model);

        $namespaceModel =
            trim($this->laravel->getNamespace(), '\\')
            . $this->getModuleNamespace()
            . $this->getConfigValue('path', 'namespaces.model')
            . '\\'
            . $model;

        if (Str::startsWith($model, '\\')) {
            $stub = str_replace('NamespacedDummyModel', trim($model, '\\'), $stub);
        } else {
            $stub = str_replace('NamespacedDummyModel', $namespaceModel, $stub);
        }

        $stub = str_replace(
            "use {$namespaceModel};\nuse {$namespaceModel};", "use {$namespaceModel};", $stub
        );

        $model = class_basename(trim($model, '\\'));
        $stub = str_replace('DocDummyModel', Str::snake($model, ' '), $stub);
        $stub = str_replace('DummyModel', $model, $stub);

        return str_replace('dummyModel', Str::camel($model), $stub);
    }
}
