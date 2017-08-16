<?php

require_once 'vendor/autoload.php';

$lamp     = new \Behavioral\Command\Lamp();
$registry = new \Behavioral\Command\CommandRegistry();

$registry->setRegistry(new \Behavioral\Command\TurnOnCommand($lamp), 'ON');
$registry->setRegistry(new \Behavioral\Command\TurnOffCommand($lamp), 'OFF');
$registry->setRegistry(new \Behavioral\Command\ToggleCommand($lamp), 'TOGGLE');

$registry->getRegistry('ON')->execute();
$registry->getRegistry('OFF')->execute();

$registry->getRegistry('TOGGLE')->execute();
$registry->getRegistry('TOGGLE')->execute();