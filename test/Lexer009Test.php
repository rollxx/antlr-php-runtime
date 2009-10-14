<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "t009lexer.php";
class LexerTest008 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		
		$arr = array('0', '8', '5');
		
		$ass = new ANTLRStringStream('085');
		$lexer = new t009lexer($ass);
		foreach($arr as $val){
			$token = $lexer->nextToken();
			self::assertEquals(t009lexer::$DIGIT, $token->getType());
			self::assertEquals($val, $token->getText());
		}
		
	}
}

?>