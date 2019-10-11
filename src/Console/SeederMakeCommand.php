<?php
namespace Mrkatz\LaravelStubs\Console;

use Illuminate\Database\Console\Seeds\SeederMakeCommand as BaseSeederMakeCommand;

class SeederMakeCommand extends BaseSeederMakeCommand
{
    use Configable;
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stub = $this->getConfigValue('path', '/seeder.stub');

        return file_exists($stub) ? $stub : parent::getStub();
    }
}
