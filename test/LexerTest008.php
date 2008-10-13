<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t008lexer.php";
class LexerTest008 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		
		$arr = array('f', 'fa', 'f');
		
		$ass = new ANTLRStringStream('ffaf');
		$lexer = new t008lexer($ass);
		foreach($arr as $val){
			$token = $lexer->nextToken();
			self::assertEquals(t008lexer::$FOO, $token->getType());
			self::assertEquals($val, $token->getText());
		}
		
	}
}

?>