<?php

namespace WarbleMedia\HummingBird\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AboutCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('about')
            ->setDescription('Short information about Humming Bird');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write(<<<EOT
<info>Humming Bird - CMS Data Migration</info>
<comment>Humming Bird provides an abstraction layer for migrating website data between content management systems.
See https://github.com/warblemedia/hummingbird for more information.</comment>\n
EOT
        );
    }
}
