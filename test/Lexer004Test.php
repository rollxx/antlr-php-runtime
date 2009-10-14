<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "t004lexer.php";
class LexerTest003 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		
		$arr = array('f', 'fo', 'foo', 'fooo');
		
		$ass = new ANTLRStringStream('ffofoofooo');
		$lexer = new t004lexer($ass);
		foreach($arr as $val){
			$token = $lexer->nextToken();
			self::assertEquals(4, $token->getType());
			self::assertEquals($val, $token->getText());
		}
		
	}
}

?>