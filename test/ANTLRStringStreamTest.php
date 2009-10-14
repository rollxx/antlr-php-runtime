<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
class ANTLRStringStreamTest extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		$ass = new ANTLRStringStream("Hello\nWorld");
		self::assertEquals(0, $ass->LA(0));
		self::assertEquals('H', chr($ass->LA(1)));
		$ass->consume();
		self::assertEquals('e',chr($ass->LA(1)));
		self::assertEquals('H',chr($ass->LA(-1)));
		self::assertEquals(CharStreamConst::$EOF,$ass->LA(-2));
		self::assertEquals('ell', $ass->substring(1, 3));
		self::assertEquals(1,$ass->getLine());
		self::assertEquals(1,$ass->getCharPositionInLine());
		$ass->seek(8);
		self::assertEquals('r', chr($ass->LA(1)));
		self::assertEquals(2,$ass->getLine());
		self::assertEquals(2,$ass->getCharPositionInLine());
	}
}

?>