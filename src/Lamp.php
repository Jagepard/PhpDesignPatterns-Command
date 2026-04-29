<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 * 
 * Lamp: Receiver in the Command pattern
 * -------------------------------------
 * Лампа: получатель в паттерне Команда
 * 
 * Responsible for maintaining state (lightStatus) 
 * and executing commands registered by name.
 * 
 * Отвечает за хранение состояния (lightStatus) 
 * и выполнение команд, зарегистрированных по имени.
 */

namespace Behavioral\Command;

class Lamp implements DeviceInterface
{
    /**
     * Command registry: name → CommandInterface
     * -----------------------------------------
     * Реестр команд: имя → CommandInterface
     *
     * @var array<string, CommandInterface>
     */
    private array $commands = [];

    /**
     * Current light state: true = ON, false = OFF
     * -------------------------------------------
     * Текущее состояние света: true = ВКЛ, false = ВЫКЛ
     *
     * @var bool
     */
    private bool $lightStatus = false;

    /**
     * Register a command by name (prevents duplicates)
     * ------------------------------------------------
     * Регистрирует команду по имени (защита от дубликатов)
     *
     * @param string $name Command identifier (e.g., "on", "toggle")
     * @param CommandInterface $command Executable command instance
     * @return void
     * @throws \InvalidArgumentException if command name already exists
     */
    public function setCommand(string $name, CommandInterface $command): void 
    {
        if (array_key_exists($name, $this->commands)) {
            throw new \InvalidArgumentException("Command $name already exists");
        }

        $this->commands[$name] = $command;
    }

    /**
     * Execute a registered command by name
     * ------------------------------------
     * Выполняет зарегистрированную команду по имени
     *
     * @param string $name Command identifier to execute
     * @return void
     * @throws \InvalidArgumentException if command not found
     */
    public function execute(string $name): void
    {
        if (!array_key_exists($name, $this->commands)) {
            throw new \InvalidArgumentException("Command '$name' not found");
        }

        $command = $this->commands[$name];
        $command->execute($this); // ← pass self as receiver
    }

    /**
     * Get current light state
     * -----------------------
     * Получить текущее состояние света
     *
     * @return bool true = ON, false = OFF
     */
    public function getLightStatus(): bool
    {
        return $this->lightStatus;
    }
    
    /**
     * Set light state (used by commands)
     * ----------------------------------
     * Установить состояние света (используется командами)
     *
     * @param bool $lightStatus New state: true = ON, false = OFF
     * @return void
     */
    public function setLightStatus(bool $lightStatus): void  // ← добавил : bool для строгости
    {
        $this->lightStatus = $lightStatus;
    }
}
