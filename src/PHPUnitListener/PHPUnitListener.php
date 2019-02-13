<?php

declare(strict_types=1);

namespace Theodo\PHPUnitExtra\PHPUnitListener;

class PHPUnitListener implements \PHPUnit\Framework\TestListener
{
    use \PHPUnit\Framework\TestListenerDefaultImplementation;

    public function endTest(\PHPUnit\Framework\Test $test, float $timer): void
    {
        $reflectionObject = new \ReflectionObject($test);
        foreach ($reflectionObject->getProperties() as $prop) {
            if (!$prop->isStatic() && 0 !== strpos($prop->getDeclaringClass()->getName(), 'PHPUnit_')) {
                $prop->setAccessible(true);
                $prop->setValue($test, null);
            }
        };
    }

}
