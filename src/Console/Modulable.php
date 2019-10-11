<?php declare(strict_types=1);

namespace Mrkatz\LaravelStubs\Console;

trait Modulable
{
    use Configable;

    /**
     * The namespace prefix of the module that is being developed
     *
     * @return string|null
     */
    protected function getModuleNamespace()
    {
        $module = trim($this->getConfigValue('module'), '\\');

        return $module ? '\\' . $module : null;
    }
}
