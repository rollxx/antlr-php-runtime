<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "t017parserLexer.php";
require_once "t017parserParser.php";

class parser extends t017parserParser{
	public $reportedErrors = array();


	function emitErrorMessage($msg){
		$this->reportedErrors[] = $msg;
	}
}

class ParserTest017 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	function testValid(){
		$parser = $this->parser("int foo;");
		$parser->program();
		self::assertTrue(sizeof($parser->reportedErrors) == 0);
	}

    function testMalformedInput1(){
		$parser = $this->parser('int foo() { 1+2 }');
    	$parser->program();
			
		# FIXME: currently strings with formatted errors are collected
		# can't check error locations yet
		self::assertTrue(sizeof($parser->reportedErrors) == 1);
	}

    function testMalformedInput2(){
		$parser = $this->parser('int foo() { 1+; 1+2 }');
        $parser->program();

		# FIXME: currently strings with formatted errors are collected
		# can't check error locations yet
        self::assertTrue(sizeof($parser->reportedErrors) == 2);
	}

	function parser($expr){
		$ass = new ANTLRStringStream($expr);
		$lex = new t017parserLexer($ass);
		$cts = new CommonTokenStream($lex);
		$tap = new parser($cts);
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