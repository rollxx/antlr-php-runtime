<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "t021hoistLexer.php";
require_once "t021hoistParser.php";
class ParserTest021 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
    
    function testValid1(){
		$parser = $this->parser('enum');
		$parser->enableEnum = true;
		$enumIs = $parser->stat();
		self::assertEquals($enumIs, 'keyword');
	}

    function testValid2(){
		$parser = $this->parser('enum');
		$parser->enableEnum = false;
		$enumIs = $parser->stat();
		self::assertEquals($enumIs, 'ID');
	}

	function parser($expr){
		$ass = new ANTLRStringStream($expr);
		$lex = new t021hoistLexer($ass);
		$cts = new CommonTokenStream($lex);
		$tap = new t021hoistParser($cts);
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