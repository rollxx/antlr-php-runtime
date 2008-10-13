<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t017parserLexer.php";
require "t017parserParser.php";
class ParserTest017 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}

	function parser($expr){
		$ass = new ANTLRStringStream($expr);
		$lex = new t017parserLexer($ass);
		$cts = new CommonTokenStream($lex);
		$tap = new t017parserParser($cts);
		return $tap;
	}
	function test1(){
		$parser = $this->parser("int foo;");
		$parser->declaration();
		self::assertTrue(sizeof($parser->reportedErrrors)==0);
	}
}

?>