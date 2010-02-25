<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "t010lexer.php";
class LexerTest010 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		$id = t010lexer::$IDENTIFIER;
		$ws = t010lexer::$WS;
		
		$arr = array(array($id, 'foobar'), array($ws, ' '), array($id, '_Ab98'), 
			array($ws, " \n "), array($id, 'A12sdf'));
		
		$ass = new ANTLRStringStream("foobar _Ab98 \n A12sdf");
		$lexer = new t010lexer($ass);
		foreach($arr as $val){
			list($tokenType, $tokenVal) = $val;
			$token = $lexer->nextToken();
			self::assertEquals($tokenType, $token->getType());
			self::assertEquals($tokenVal, $token->getText());
		}
		
	}
}

?>