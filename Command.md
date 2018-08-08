## Table of contents

- [\Behavioral\Command\ToggleCommand](#class-behavioralcommandtogglecommand)
- [\Behavioral\Command\DeviceInterface (interface)](#interface-behavioralcommanddeviceinterface)
- [\Behavioral\Command\TurnOnCommand](#class-behavioralcommandturnoncommand)
- [\Behavioral\Command\CommandInterface (interface)](#interface-behavioralcommandcommandinterface)
- [\Behavioral\Command\Lamp](#class-behavioralcommandlamp)
- [\Behavioral\Command\TurnOffCommand](#class-behavioralcommandturnoffcommand)
- [\Behavioral\Command\CommandRegistry](#class-behavioralcommandcommandregistry)

<hr />

### Class: \Behavioral\Command\ToggleCommand

> Class ToggleCommand

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>[\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)</em> <strong>$device</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)*

<hr />

### Interface: \Behavioral\Command\DeviceInterface

> Interface DeviceInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>turnOff()</strong> : <em>void</em> |
| public | <strong>turnOn()</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Command\TurnOnCommand

> Class TurnOnCommand

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>[\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)</em> <strong>$device</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)*

<hr />

### Interface: \Behavioral\Command\CommandInterface

> Interface CommandInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>[\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)</em> <strong>$device</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \Behavioral\Command\Lamp

> Class Lamp

| Visibility | Function |
|:-----------|:---------|
| public | <strong>turnOff()</strong> : <em>void</em> |
| public | <strong>turnOn()</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)*

<hr />

### Class: \Behavioral\Command\TurnOffCommand

> Class TurnOffCommand

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>[\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)</em> <strong>$device</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)*

<hr />

### Class: \Behavioral\Command\CommandRegistry

> Class CommandRegistry

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)</em> <strong>$device</strong>)</strong> : <em>void</em><br /><em>CommandRegistry constructor.</em> |
| public | <strong>executeCommand(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em> |
| public | <strong>setCommand(</strong><em>[\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)</em> <strong>$command</strong>, <em>\string</em> <strong>$name</strong>)</strong> : <em>void</em> |

