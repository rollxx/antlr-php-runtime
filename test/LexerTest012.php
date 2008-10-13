<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t012lexerXMLLexer.php";
class LexerTest011 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function test1(){
		$input = $this->readFile('test/t012lexerXML.input');
		$output = $this->readFile('test/t012lexerXML.output');
		$ass = new ANTLRStringStream($input);
		$lexer = new t012lexerXMLLexer($ass);
		$lexer->nextToken();
		echo self::assertEquals($lexer->buf, $output);
	}
	
	function readFile($filename){
		$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		fclose($handle);
		return $contents;
	}
}

?>