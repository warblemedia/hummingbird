<?php

namespace WarbleMedia\HummingBird\Console;

use Symfony\Component\Console\Application as BaseApplication;
use WarbleMedia\HummingBird\Command;

class Application extends BaseApplication
{
    /**
     * @return \Symfony\Component\Console\Command\Command[]
     */
    protected function getDefaultCommands()
    {
        return array_merge(parent::getDefaultCommands(), [
            new Command\AboutCommand(),
        ]);
    }
}
