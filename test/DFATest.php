<?php

require_once 'PHPUnit/Framework.php';
require_once 'antlr.php';
class DFATest extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		self::assertEquals(
            DFA::unpackRLE(
	            array( 1,3,1,4,2,65535,1,5,18,65535,1,2,25,65535,1,6,6,65535,26,6,4,65535,1,6,1,65535,26,6)),
	            array( 3, 4, -1, -1, 5, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
	              -1, -1, -1, -1, -1, -1, 2, -1, -1, -1, -1, -1, -1, -1, -1, -1,
	              -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
	              6, -1, -1, -1, -1, -1, -1, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6,
	              6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, -1, -1, -1, -1, 6, -1,
	              6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6,
	              6, 6, 6, 6, 6
            ));        
	}
}

?>
