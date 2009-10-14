<?php

require_once '../../runtime/Php/antlr.php';
require_once 'CommonLexer.php';
require_once 'Simple_CommonLexer.php';
require_once 'SimpleLexer.php';
require_once 'SimpleParser.php';

#
# usage: php Main.php input
#

$input = new ANTLRFileStream($argv[0]);
$lexer = new SimpleLexer(input);
$tokens = new CommonTokenStream(lexer);

/*
	for (Object t : tokens.getTokens()) {
		System.out.println(t);
	}
*/
$parser = new SimpleParser(tokens);
$parser->file();

?>

