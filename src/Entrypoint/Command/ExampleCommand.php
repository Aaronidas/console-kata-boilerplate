<?php

namespace App\Entrypoint\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class ExampleCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:example:command')
            ->setDescription('Example command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(\sprintf('<info>Hello world!</info>'));
    }
}
