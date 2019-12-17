# PHPUnit Extra

PHPUnit Extra provides a PHPUnit listener to improve performance of your
PHPUnit test suites by cleaning up classes variables at the end of each
TestCase. Thanks [Kris Wallsmith for this tip](http://kriswallsmith.net/post/18029585104/faster-phpunit).

## Installation

### Step 1: Install the library

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require --dev theodo/phpunit-extra
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 2: Configure the listener in PHPUnit

For PHPUnit >= 7.5, add the extension in your XML config file (e.g. `phpunit.xml.dist`).

```xml
<extensions>
    <extension class="\Theodo\PHPUnitExtra\PHPUnit\PHPUnitExtension" />
</extensions>
```

For PHPUnit < 7.5 add the listener in your XML config file (e.g. `phpunit.xml.dist`).

```xml
<listeners>
    <listener class="\Theodo\PHPUnitExtra\PHPUnit\PHPUnitListener" />
</listeners>
```
