<?php

namespace Mrkatz\LaravelStubs\Console;

use Illuminate\Foundation\Console\NotificationMakeCommand as BaseNotificationMakeCommand;

class NotificationMakeCommand extends BaseNotificationMakeCommand
{
    use Modulable;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('markdown')) {
            $stub = $this->getConfigValue('path', '/markdown-notification.stub');
        } else {
            $stub = $this->getConfigValue('path', '/notification.stub');
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
        return $rootNamespace . $this->getModuleNamespace() . $this->getConfigValue('namespaces.notification');
    }

    /**
     * Write the Markdown template for the mailable.
     *
     * @return void
     */
    protected function writeMarkdownTemplate()
    {
        $path = resource_path('views/' . str_replace('.', '/', $this->option('markdown'))) . '.blade.php';

        if (!$this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0755, true);
        }

        $stub = $this->getConfigValue('path', '/markdown.stub');

        if (file_exists($stub)) {
            $this->files->put($path, file_get_contents($stub));
        } else {
            parent::writeMarkdownTemplate();
        }
    }
}
