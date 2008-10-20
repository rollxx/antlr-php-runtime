<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t024finallyLexer.php";
require "t024finallyParser.php";
class ParserTest024 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
    
    function testValid1(){
        $parser=$this->parser('foobar');
        $events = $parser->prog();
		self::assertEquals($events, array('catch', 'finally'));
	}
	
	function parser($expr){
		$ass = new ANTLRStringStream($expr);
		$lex = new t024finallyLexer($ass);
		$cts = new CommonTokenStream($lex);
		$tap = new t024finallyParser($cts);
		return $tap;
	}
	
	function readFile($filename){
		$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		fclose($handle);
		return $contents;
	}
}

?>