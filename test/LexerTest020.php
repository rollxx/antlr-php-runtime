<?php

require 'PHPUnit/Framework.php';
require "antlr.php";
require "t020fuzzyLexer.php";
class LexerTest020 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	
	
	public function test1(){
		$input = $this->readFile('test/t020fuzzy.input');
		$result = $this->readFile('test/t020fuzzy.output');
		$lexer = $this->lexer($input);
		while(true){
            $token = $lexer->nextToken();
            if ($token->type == TokenConst::$EOF){
                break;
			}
		}		
		echo self::assertEquals($lexer->out, $result);
		//$lexer->nextToken();
		//echo self::assertEquals($lexer->buf, $output);
	}
	
	function lexer($input){
		$ass = new ANTLRStringStream($input);
		$lexer = new t020fuzzyLexer($ass);
		return $lexer;
	}
	
	function readFile($filename){
		$handle = fopen($filename, "r");
		$contents = fread($handle, filesize($filename));
		fclose($handle);
		return $contents;
	}
}

?>