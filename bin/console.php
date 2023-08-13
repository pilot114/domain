<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;

include '../vendor/autoload.php';

$command = new SingleCommandApplication();
$command
    ->setProcessTitle('yolo')
    ->setCode(function(InputInterface $input, OutputInterface $output) {
        $output->writeln('<error>test</error>');
        $output->writeln('<info>test</info>');
        $output->writeln('<comment>test</comment>');
        $output->writeln('<question>test</question>');
    })
    ->run();

