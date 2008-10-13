<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t016actionsLexer.php";
require "t016actionsParser.php";
class ParserTest016 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}

	function parser($expr){
		$ass = new ANTLRStringStream($expr);
		$lex = new t016actionsLexer($ass);
		$cts = new CommonTokenStream($lex);
		$tap = new t016actionsParser($cts);
		return $tap;
	}
	function test1(){
		$parser = $this->parser("int foo;");
		$result = $parser->declaration();
		self::assertEquals($result, 'foo');
	}
}

?>