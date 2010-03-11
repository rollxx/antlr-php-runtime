#!/bin/bash

export ANTLR_LIB=`pwd`/lib
export CLASSPATH=$CLASSPATH:$ANTLR_LIB/antlr-3.1.3-php.jar:$ANTLR_LIB/antlr-2.7.7.jar:$ANTLR_LIB/antlr-runtime-3.1.3.jar:$ANTLR_LIB/gunit.jar:$ANTLR_LIB/stringtemplate-3.2.jar 

rm test/t0*.tokens
rm test/t0*.php

for file in test/*.g 
do
	java org.antlr.Tool -make -fo test ${file}
done