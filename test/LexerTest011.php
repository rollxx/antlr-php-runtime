<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t011lexer.php";
class LexerTest011 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		$id = t011lexer::$IDENTIFIER;
		$ws = t011lexer::$WS;
		
		$arr = array(array($id, 'foobar'), array($ws, ' '), array($id, '_Ab98'), 
			array($ws, " \n "), array($id, 'A12_sdf'));
		
		$ass = new ANTLRStringStream("foobar _Ab98 \n A12_sdf");
		$lexer = new t011lexer($ass);
		global $ctr;
		$ctr=0;
		foreach($arr as $val){
			list($tokenType, $tokenVal) = $val;
			$token = $lexer->nextToken();
			self::assertEquals($tokenType, $token->getType());
			self::assertEquals($tokenVal, $token->getText());
		}
		self::assertEquals(1, $ctr);
	}
}

?>