<?php

namespace Behavioral\Command;

require_once "vendor/autoload.php";

$device = new Lamp();

try {
    $device->setCommand("on", new TurnOnCommand());
    $device->setCommand("off", new TurnOffCommand());
    $device->setCommand("toggle", new ToggleCommand());
    $device->execute("on");
    $device->execute("off");
    $device->execute("toggle");
    $device->execute("toggle");
} catch (\Exception $e) {
    echo "Caught exception: {$e->getMessage()} \n";
}
