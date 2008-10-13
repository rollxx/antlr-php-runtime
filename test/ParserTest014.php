<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t014parserLexer.php";
require "t014parserParser.php";
class ParserTest014 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		$ass = new ANTLRStringStream('var foobar ; gnarz ( ) ; var blupp ; flupp ( ) ;');
		$lex = new t014parserLexer($ass);
		$cts = new CommonTokenStream($lex);
		$tap = new t014parserParser($cts);
		$tap->document();
		self::assertEquals(sizeof($tap->reportedErrors), 0);
		
		$expected = array(
	            array('decl', 'foobar'),
	            array('call', 'gnarz'),
	            array('decl', 'blupp'),
	            array('call', 'flupp')
	            );
		self::assertEquals($tap->events, $expected);
		
		print_r($tap->identifiers);
	}
	
}

?>