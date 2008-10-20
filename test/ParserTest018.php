<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t018llstarLexer.php";
require "t018llstarParser.php";
class ParserTest017 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}

	function parser($expr){
		$ass = new ANTLRStringStream($expr);
		$lex = new t018llstarLexer($ass);
		$cts = new CommonTokenStream($lex);
		$tap = new t018llstarParser($cts);
		return $tap;
	}
	function test1(){
			$input = $this->readFile('test/t018llstar.input');
			$output = $this->readFile('test/t018llstar.output');
			$parser = $this->parser($input);
			$parser->program();
			self::assertEquals($parser->out, $output);
	}
	
	function readFile($filename){
		$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		fclose($handle);
		return $contents;
	}
}

?>