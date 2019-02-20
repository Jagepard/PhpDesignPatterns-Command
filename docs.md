## Table of contents

- [\Behavioral\Command\ToggleCommand](#class-behavioralcommandtogglecommand)
- [\Behavioral\Command\DeviceInterface (interface)](#interface-behavioralcommanddeviceinterface)
- [\Behavioral\Command\TurnOnCommand](#class-behavioralcommandturnoncommand)
- [\Behavioral\Command\CommandInterface (interface)](#interface-behavioralcommandcommandinterface)
- [\Behavioral\Command\Registry](#class-behavioralcommandregistry)
- [\Behavioral\Command\Lamp](#class-behavioralcommandlamp)
- [\Behavioral\Command\TurnOffCommand](#class-behavioralcommandturnoffcommand)
- [\Behavioral\Command\TypeInterface (interface)](#interface-behavioralcommandtypeinterface)
- [\Behavioral\Command\CommandType](#class-behavioralcommandcommandtype)
- [\Behavioral\Command\RegistryInterface (interface)](#interface-behavioralcommandregistryinterface)

<hr />

### Class: \Behavioral\Command\ToggleCommand

> Class ToggleCommand

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>[\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)</em> <strong>$device</strong>, <em>[\Behavioral\Command\TypeInterface](#interface-behavioralcommandtypeinterface)</em> <strong>$type</strong>)</strong> : <em>void</em> |
| public | <strong>getToggle()</strong> : <em>int</em> |
| public | <strong>setToggle(</strong><em>int/\integer</em> <strong>$toggle</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)*

<hr />

### Interface: \Behavioral\Command\DeviceInterface

> Interface DeviceInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>[\Behavioral\Command\TypeInterface](#interface-behavioralcommandtypeinterface)</em> <strong>$type</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Command\TurnOnCommand

> Class TurnOnCommand

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>[\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)</em> <strong>$device</strong>, <em>[\Behavioral\Command\TypeInterface](#interface-behavioralcommandtypeinterface)</em> <strong>$type</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)*

<hr />

### Interface: \Behavioral\Command\CommandInterface

> Interface CommandInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>[\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)</em> <strong>$device</strong>, <em>[\Behavioral\Command\TypeInterface](#interface-behavioralcommandtypeinterface)</em> <strong>$type</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Command\Registry

> Class Registry

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)</em> <strong>$device</strong>)</strong> : <em>void</em><br /><em>CommandRegistry constructor.</em> |
| public | <strong>execute(</strong><em>[\Behavioral\Command\TypeInterface](#interface-behavioralcommandtypeinterface)</em> <strong>$type</strong>)</strong> : <em>void</em> |
| public | <strong>getCommandsRegistry(</strong><em>\string</em> <strong>$key=null</strong>)</strong> : <em>array/mixed</em> |
| public | <strong>getDevice()</strong> : <em>[\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)</em> |
| public | <strong>setCommand(</strong><em>[\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)</em> <strong>$command</strong>, <em>[\Behavioral\Command\TypeInterface](#interface-behavioralcommandtypeinterface)</em> <strong>$type</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\RegistryInterface](#interface-behavioralcommandregistryinterface)*

<hr />

### Class: \Behavioral\Command\Lamp

> Class Lamp

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>[\Behavioral\Command\TypeInterface](#interface-behavioralcommandtypeinterface)</em> <strong>$type</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)*

<hr />

### Class: \Behavioral\Command\TurnOffCommand

> Class TurnOffCommand

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>[\Behavioral\Command\DeviceInterface](#interface-behavioralcommanddeviceinterface)</em> <strong>$device</strong>, <em>[\Behavioral\Command\TypeInterface](#interface-behavioralcommandtypeinterface)</em> <strong>$type</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)*

<hr />

### Interface: \Behavioral\Command\TypeInterface

> Interface TypeInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getName()</strong> : <em>string</em> |
| public | <strong>setName(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Command\CommandType

> Class CommandType

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/\string</em> <strong>$name</strong>)</strong> : <em>void</em><br /><em>CommandType constructor.</em> |
| public | <strong>getName()</strong> : <em>string</em> |
| public | <strong>setName(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Command\TypeInterface](#interface-behavioralcommandtypeinterface)*

<hr />

### Interface: \Behavioral\Command\RegistryInterface

> Interface RegistryInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>[\Behavioral\Command\TypeInterface](#interface-behavioralcommandtypeinterface)</em> <strong>$type</strong>)</strong> : <em>void</em> |
| public | <strong>setCommand(</strong><em>[\Behavioral\Command\CommandInterface](#interface-behavioralcommandcommandinterface)</em> <strong>$command</strong>, <em>[\Behavioral\Command\TypeInterface](#interface-behavioralcommandtypeinterface)</em> <strong>$type</strong>)</strong> : <em>void</em> |

