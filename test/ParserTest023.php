<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t023scopesLexer.php";
require "t023scopesParser.php";
class ParserTest023 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
    
    function testValid1(){
		$parser = $this->parser('foobar');
        $parser->prog();
	}
	function parser($expr){
		$ass = new ANTLRStringStream($expr);
		$lex = new t023scopesLexer($ass);
		$cts = new CommonTokenStream($lex);
		$tap = new t023scopesParser($cts);
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