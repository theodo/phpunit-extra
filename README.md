# PHPUnit Extra

PHPUnit Extra provides a PHPUnit listener to improve performance of your
PHPUnit test suites by cleaning up classes variables at the end of each 
TestCase. Thanks [Kris Wallsmith for this tip](http://kriswallsmith.net/post/18029585104/faster-phpunit).

## Installation

### Step 1: Make sure composer knows how to access the library

Add the path to the private repository in your `composer.json`:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/theodo/phpunit-extra"
    }
]
```

### Step 2: Install the library

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require --dev theodo/phpunit-extra
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Github will ask you to create a token and to paste it so that it can 
download the private Github repository.

### Step 3: Configure the listener in PHPUnit

Add a listener in your `phpunit.xml.dist`.

```xml
<listeners>
    <listener class="\Theodo\PHPUnitExtra\PHPUnitListener\PHPUnitListener" />
</listeners>
```
