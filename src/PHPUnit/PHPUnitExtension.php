<?php

declare(strict_types=1);

namespace Theodo\PHPUnitExtra\PHPUnit;

class PHPUnitExtension implements \PHPUnit\Runner\AfterTestHook
{
    public function executeAfterTest(string $test, float $time): void
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
