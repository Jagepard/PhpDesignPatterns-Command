<?php

declare(strict_types=1);

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Command;

class ToggleCommand implements CommandInterface
{
    /**
     * @var int
     */
    private $toggle = 1;

    /**
     * @param string          $type
     * @param DeviceInterface $device
     */
    public function execute(string $type, DeviceInterface $device): void
    {
        $type = ($this->getToggle() % 2) ? 'on' : 'off';
        $this->setToggle($this->getToggle() + 1);
        $device->execute($type);
    }

    /**
     * @return int
     */
    public function getToggle(): int
    {
        return $this->toggle;
    }

    /**
     * @param int $toggle
     */
    public function setToggle(int $toggle): void
    {
        $this->toggle = $toggle;
    }
}
