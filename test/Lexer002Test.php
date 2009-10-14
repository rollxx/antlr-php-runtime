<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "t002lexer.php";
class LexerTest002 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		$zero = array(4, '0');
		$one = array(5, '1');
		$arr = array($zero, $one, $zero, $one, $zero);
		
		$ass = new ANTLRStringStream("01010");
		$lexer = new t002lexer($ass);
		foreach($arr as $val){
			list($tokenType, $tokenVal) = $val;
			$token = $lexer->nextToken();
			self::assertEquals($tokenType, $token->getType());
			self::assertEquals($tokenVal, $token->getText());
		}
		
	}
}

?>
