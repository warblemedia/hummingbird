<?php

namespace WarbleMedia\HummingBird\Console;

use Symfony\Component\Console\Application as BaseApplication;
use WarbleMedia\HummingBird\HummingBird;

class Application extends BaseApplication
{
    /**
     * Application constructor.
     */
    public function __construct()
    {
        error_reporting(-1);

        parent::__construct('Humming Bird', HummingBird::VERSION);

        $this->add(new Command\AboutCommand());
        $this->add(new Command\MigrateCommand());
    }

    /**
     * @return string
     */
    public function getLongVersion()
    {
        $version = parent::getLongVersion() . ' by <comment>Warble Media</comment>';
        $commit = HummingBird::COMMIT_HASH;

        // Need to string concat here to avoid box replacement
        if ($commit !== '@' . 'git-commit@') {
            $version .= ' (' . substr($commit, 0, 7) . ')';
        }

        return $version;
    }
}
