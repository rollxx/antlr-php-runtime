<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "t012lexerXMLLexer.php";
class LexerTest012 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}

	protected function tearDown(){
	}



	public function test1(){
		$input = $this->readFile('test/t012lexerXML.input');
		$result = $this->readFile('test/t012lexerXML.output');
		$lexer = $this->lexer($input);
		while(true){
			$token = $lexer->nextToken();
			if ($token->type == TokenConst::$EOF){
				break;
			}
		}
		echo self::assertEquals($lexer->buf, $result);
	}

	function lexer($input){
		$ass = new ANTLRStringStream($input);
		$lexer = new t012lexerXMLLexer($ass);
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
