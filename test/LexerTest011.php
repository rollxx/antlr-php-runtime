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
	
		$lexer = $this->lexer("foob__ar _Ab_98 \n A12_sdf");
		
		$arr = array(array($id, 'foob__ar'), array($ws, ' '), array($id, '_Ab_98'), 
			array($ws, " \n "), array($id, 'A12_sdf'));

		foreach($arr as $val){
				list($tokenType, $tokenVal) = $val;
				$token = $lexer->nextToken();
				self::assertEquals($tokenType, $token->getType());
				self::assertEquals($tokenVal, $token->getText());
			}
		global $ctr;
		self::assertEquals($ctr, 4);
	}
	
	function lexer($input){
		$ass = new ANTLRStringStream($input);
		$lexer = new t011lexer($ass);
		return $lexer;
	}
	
	function readFile($filename){
		$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		fclose($handle);
		return $contents;
	}
}

?>