<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "t026actionsLexer.php";
require_once "t026actionsParser.php";

class Parser extends t026actionsParser{
	public $_errors = array();
	public $_output = "";

    function capture($t){
        $this->_output .= $t;
	}

    function emitErrorMessage($msg){
        $this->_errors[] = $msg;
	}
}

class Lexer extends t026actionsLexer{
	public $_errors = array();
	public $_output = "";

    function capture($t){
        $this->_output .= $t;
	}

    function emitErrorMessage($msg){
        $this->_errors[] = $msg;
	}
}

class ParserTest026 extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
    
	function testValid1(){
        $parser = $this->parser('foobar _Ab98 \n A12sdf');
        $parser->prog();

        self::assertEquals(
            $parser->_output,
            'init;after;finally;');
        self::assertEquals(
                    $this->lexer->_output,
                    'action;foobar 4 1 0 -1 0 0 5attribute;action;_Ab98 4 1 7 -1 0 7 11attribute;action;n 4 1 14 -1 0 14 14attribute;action;A12sdf 4 1 16 -1 0 16 21attribute;');
        	}
		
	function parser($expr){
		$ass = new ANTLRStringStream($expr);
		$lex = new Lexer($ass);
		$this->lexer = $lex;
		$cts = new CommonTokenStream($lex);
		$tap = new Parser($cts);
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