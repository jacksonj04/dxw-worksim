<?php

use PHPUnit\Framework\TestCase;

final class ExampleClassTest extends TestCase
{
    public function testFooReturnsBar(): void
    {
        $exampleClass = new ExampleClass();
        $this->assertEquals(
            'bar',
            $exampleClass->foo()
        );
    }
}