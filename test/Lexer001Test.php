<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "t001lexer.php";
class LexerTest001 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		$ass = new ANTLRStringStream("0");
		$lexer = new t001lexer($ass);
		$token = $lexer->nextToken();
		self::assertEquals(4, $token->getType());
		self::assertEquals('0', $token->getText());
	}
	
	public function test2(){
		$ass = new ANTLRStringStream("10");
		$lexer = new t001lexer($ass);
		$token = $lexer->nextToken();
		self::assertEquals(4, $token->getType());
		self::assertEquals('0', $token->getText());		
	}
}

?>