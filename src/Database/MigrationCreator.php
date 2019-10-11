<?php

namespace Mrkatz\LaravelStubs\Database;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Migrations\MigrationCreator as BaseMigrationCreator;
use Mrkatz\LaravelStubs\Console\Configable;

class MigrationCreator extends BaseMigrationCreator
{
    use Configable;

    /**
     * Get the migration stub file.
     *
     * @param string $table
     * @param bool $create
     * @return string
     * @throws FileNotFoundException
     */
    protected function getStub($table, $create)
    {
        if (is_null($table)) {
            $stub = $this->getConfigValue('path', '/migration.blank.stub');
        } else {
            $stub = $create
                ? $stub = $this->getConfigValue('path', '/migration.create.stub')
                : $stub = $this->getConfigValue('path', '/migration.update.stub');
        }

        return file_exists($stub) ? $this->files->get($stub) : parent::getStub($table, $create);
    }
}
