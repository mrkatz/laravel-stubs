<?php

namespace Mrkatz\LaravelStubs\Console;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Console\ListenerMakeCommand as BaseListenerMakeCommand;
use Illuminate\Support\Str;

class ListenerMakeCommand extends BaseListenerMakeCommand
{
    use Modulable;

    /**
     * The Laravel application instance.
     *
     * @var Application
     */
    protected $laravel;

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . $this->getModuleNamespace() . $this->getConfigValue('namespaces.listener');
    }

    /**
     * @param string $name
     * @return mixed|string
     * @throws FileNotFoundException
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());
        $stub = $this->replaceNamespace($stub, $name)->replaceClass($stub, $name);
        $event = $this->getEvent();
        $stub = str_replace('DummyEvent', class_basename($event), $stub);
        $stub = str_replace('DummyFullEvent', $event, $stub);

        return $stub;
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('queued') && $this->option('event')) {
            $stub = $this->getConfigValue('path', '/listener-queued.stub');
        } elseif ($this->option('queued')) {
            $stub = $this->getConfigValue('path', '/listener-queued-duck.stub');
        } elseif ($this->option('event')) {
            $stub = $this->getConfigValue('path', '/listener.stub');
        } else {
            $stub = $this->getConfigValue('path', '/listener-duck.stub');
        }

        return file_exists($stub) ? $stub : parent::getStub();
    }

    protected function getEvent()
    {
        $event = $this->option('event');

        $namespace =
            trim($this->laravel->getNamespace(), '\\')
            . $this->getModuleNamespace()
            . $this->getConfigValue('namespaces.event')
            . '\\';

        if (!Str::startsWith($event, [
            $namespace,
            'Illuminate',
            '\\',
        ])) {
            $event = $namespace . $event;
        }

        return $event;
    }
}
