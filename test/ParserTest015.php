<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t015calcLexer.php";
require "t015calcParser.php";
class ParserTest015 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}

	function evaluate($expr){
		$ass = new ANTLRStringStream($expr);
		$lex = new t015calcLexer($ass);
		$cts = new CommonTokenStream($lex);
		$tap = new t015calcParser($cts);
		return $tap->expression();
		
	}
	
	
	public function testValid01(){
        self::assertEquals($this->evaluate("1 + 2"), 3);
	}
	
	public function testValid02(){
        self::assertEquals($this->evaluate("1 + 2 * 3"), 7);
	}

	public function testValid03(){
        self::assertEquals($this->evaluate("10 / 2"), 5);
	}
	public function testValid04(){
        self::assertEquals($this->evaluate("6 + 2*(3+1) - 4"), 10);
	}

    function testMalformedInput(){
        $this->evaluate("6 - (2*1");
	}
	
}

?>