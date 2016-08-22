<?php

namespace WarbleMedia\HummingBird\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MigrateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('migrate')
            ->setDescription('Perform data migration');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // TODO: Implement migrate command...
    }
}
