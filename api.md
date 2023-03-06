## Table of contents
- [Behavioral\Command\CommandInterface](#behavioral_command_commandinterface)
- [Behavioral\Command\DeviceInterface](#behavioral_command_deviceinterface)
- [Behavioral\Command\Lamp](#behavioral_command_lamp)
- [Behavioral\Command\ToggleCommand](#behavioral_command_togglecommand)
- [Behavioral\Command\TurnOffCommand](#behavioral_command_turnoffcommand)
- [Behavioral\Command\TurnOnCommand](#behavioral_command_turnoncommand)
<hr>

<a id="behavioral_command_commandinterface"></a>

### Class: Behavioral\Command\CommandInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>execute</strong>(): void</em><br>|


<a id="behavioral_command_deviceinterface"></a>

### Class: Behavioral\Command\DeviceInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>execute</strong>( string $commandName ): void</em><br>|
|abstract public|<em><strong>setCommand</strong>( string $commandName  Behavioral\Command\CommandInterface $command ): void</em><br>|


<a id="behavioral_command_lamp"></a>

### Class: Behavioral\Command\Lamp
##### implements [Behavioral\Command\DeviceInterface](#behavioral_command_deviceinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>execute</strong>( string $commandName ): void</em><br>|
|public|<em><strong>setCommand</strong>( string $commandName  Behavioral\Command\CommandInterface $command ): void</em><br>|


<a id="behavioral_command_togglecommand"></a>

### Class: Behavioral\Command\ToggleCommand
##### implements [Behavioral\Command\CommandInterface](#behavioral_command_commandinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>execute</strong>(): void</em><br>|


<a id="behavioral_command_turnoffcommand"></a>

### Class: Behavioral\Command\TurnOffCommand
##### implements [Behavioral\Command\CommandInterface](#behavioral_command_commandinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>execute</strong>(): void</em><br>|


<a id="behavioral_command_turnoncommand"></a>

### Class: Behavioral\Command\TurnOnCommand
##### implements [Behavioral\Command\CommandInterface](#behavioral_command_commandinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>execute</strong>(): void</em><br>|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
