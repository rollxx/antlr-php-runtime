<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t007lexer.php";
class LexerTest007 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		
		$arr = array('fo', 'fababbooabb');
		
		$ass = new ANTLRStringStream('fofababbooabb');
		$lexer = new t007lexer($ass);
		foreach($arr as $val){
			$token = $lexer->nextToken();
			self::assertEquals(t007lexer::$FOO, $token->getType());
			self::assertEquals($val, $token->getText());
		}
		
	}
}

?>