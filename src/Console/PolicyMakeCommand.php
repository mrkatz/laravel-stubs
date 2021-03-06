<?php

namespace Mrkatz\LaravelStubs\Console;

use Illuminate\Foundation\Console\PolicyMakeCommand as BasePolicyMakeCommand;
use Illuminate\Support\Str;

class PolicyMakeCommand extends BasePolicyMakeCommand
{
    use Modulable;

    /**
     * The Laravel application instance.
     *
     * @var \Illuminate\Foundation\Application
     */
    protected $laravel;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('model')) {
            $stub = $this->getConfigValue('path', '/policy.stub');
        } else {
            $stub = $this->getConfigValue('path', '/policy.plain.stub');
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
        return $rootNamespace . $this->getModuleNamespace() . $this->getConfigValue('namespaces.policy');
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
        $dummyUser = class_basename(config('auth.providers.users.model'));
        $dummyModel = Str::camel($model) === 'user' ? 'model' : Str::camel($model);

        $stub = str_replace('DummyModel', $model, $stub);
        $stub = str_replace('dummyModel', $dummyModel, $stub);
        $stub = str_replace('DummyUser', $dummyUser, $stub);

        return str_replace('dummyPluralModel', Str::plural($dummyModel), $stub);
    }
}
