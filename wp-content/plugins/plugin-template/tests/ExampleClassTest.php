<?php

use PHPUnit\Framework\TestCase;

final class ExampleClassTest extends TestCase
{
    public function setUp() {
		\WP_Mock::setUp();
	}

	public function tearDown() {
		\WP_Mock::tearDown();
	}
    
    public function testFooReturnsBar(): void
    {
        $exampleClass = new ExampleClass();
        \WP_Mock::userFunction('get_permalink', [
			'args' => 42,
			'times' => 1,
			'return' => 'http://example.com/foo'
		]);
        $this->assertEquals(
            'http://example.com/foobar',
            $exampleClass->foo()
        );
    }
}