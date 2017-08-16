<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Command;

/**
 * Class CommandInterface
 * @package Behavioral\Command
 */
abstract class CommandInterface
{

    /**
     * @var Lamp
     */
    protected $lamp;

    /**
     * @param Lamp $lamp
     */
    public function __construct(Lamp $lamp)
    {
        $this->lamp = $lamp;
    }

    /**
     * @return Lamp
     */
    public function getLamp(): Lamp
    {
        return $this->lamp;
    }

    /**
     * @return mixed
     */
    abstract public function execute();
}