<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t013parserLexer.php";
require "t013parserParser.php";
class ParserTest014 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		$ass = new ANTLRStringStream('foobar');
		$lex = new t013parserLexer($ass);
		$cts = new CommonTokenStream($lex);
		$tap = new t013parserParser($cts);
		$tap->document();
		print_r($tap->identifiers);
	}
	
}

?>