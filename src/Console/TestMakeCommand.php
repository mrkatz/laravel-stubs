<?php

namespace Mrkatz\LaravelStubs\Console;

use Illuminate\Foundation\Console\TestMakeCommand as BaseTestMakeCommand;

class TestMakeCommand extends BaseTestMakeCommand
{
    use Configable;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('unit')) {
            $stub = $this->getConfigValue('path', '/unit-test.stub');
        } else {
            $stub = $this->getConfigValue('path', '/test.stub');
        }

        return file_exists($stub) ? $stub : parent::getStub();
    }
}
