<?php

use PHPUnit\Framework\TestCase;

final class SearchTweakTest extends TestCase
{
  //   public function setUp() {
	// 	\WP_Mock::setUp();
	// }
  //
	// public function tearDown() {
	// 	\WP_Mock::tearDown();
	// }
  //
  //   public function testFooReturnsBar(): void
  //   {
  //       $exampleClass = new ExampleClass();
  //       \WP_Mock::userFunction('get_permalink', [
	// 		'args' => 42,
	// 		'times' => 1,
	// 		'return' => 'http://example.com/foo'
	// 	]);
  //       $this->assertEquals(
  //           'http://example.com/foobar',
  //           $exampleClass->foo()
  //       );
  //   }

  public function testTweakOrdersCorrectly(): void
    {

        $_GET['query'] = 'desc';

        $query = Mockery::mock( '\WP_Query' );

        $query->shouldReceive('set')->with('orderby', array( 'post_date' => $_GET['order'] ));

        $query = SearchTweak::change_search_order($query);

        $this->assertInstanceOf('WP_Query', $query);

        // $this->assertEquals(
        //           'desc',
        //           $query->get_query_var('orderby')
        //       );
    }
}
