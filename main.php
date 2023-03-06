<?php

namespace Behavioral\Command;

require_once "vendor/autoload.php";

$device = new Lamp();

try {
    // Installing commands
    // Устанавливаем команды
    $device->setCommand("on", new TurnOnCommand());
    $device->setCommand("off", new TurnOffCommand());
    $device->setCommand("toggle", new ToggleCommand());

    // Execute commands
    // Исполняем команды
    $device->execute("on");
    $device->execute("off");
    $device->execute("toggle");
    $device->execute("toggle");
} catch (\Exception $e) {
    echo "Caught exception: {$e->getMessage()} \n";
}
