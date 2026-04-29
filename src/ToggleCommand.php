<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

class ToggleCommand implements CommandInterface
{
    private function getMessage(bool $status): void
    {
        echo $status ? "💡 OFF\n" : "💡 ON\n";
    }

    private function getStatus(bool $status): bool
    {
        return $status ? false : true;
    }

    public function execute(DeviceInterface $device): void
    {
        $this->getMessage($device->getLightStatus());
        $device->setLightStatus($this->getStatus($device->getLightStatus()));
    }
}
