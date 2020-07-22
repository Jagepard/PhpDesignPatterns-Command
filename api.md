## Table of contents

- [\Behavioral\Command\CommandInterface (interface)](#interface-behavioralcommandcommandinterface)
- [\Behavioral\Command\DeviceInterface (interface)](#interface-behavioralcommanddeviceinterface)
- [\Behavioral\Command\Lamp](#class-behavioralcommandlamp)
- [\Behavioral\Command\ToggleCommand](#class-behavioralcommandtogglecommand)
- [\Behavioral\Command\TurnOffCommand](#class-behavioralcommandturnoffcommand)
- [\Behavioral\Command\TurnOnCommand](#class-behavioralcommandturnoncommand)

<hr />

### Interface: \Behavioral\Command\CommandInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute()</strong> : <em>void</em> |

<hr />

### Interface: \Behavioral\Command\DeviceInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>\string</em> <strong>$commandName</strong>)</strong> : <em>void</em> |
| public | <strong>setCommand(</strong><em>\string</em> <strong>$commandName</strong>, <em>[\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)</em> <strong>$command</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Command\Lamp

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>\string</em> <strong>$commandName</strong>)</strong> : <em>void</em> |
| public | <strong>setCommand(</strong><em>\string</em> <strong>$commandName</strong>, <em>[\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)</em> <strong>$command</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)*

<hr />

### Class: \Behavioral\Command\ToggleCommand

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute()</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)*

<hr />

### Class: \Behavioral\Command\TurnOffCommand

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute()</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)*

<hr />

### Class: \Behavioral\Command\TurnOnCommand

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute()</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)*

