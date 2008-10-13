This is still very early stages so expect a lot to break.

To get the php target to work you will need to build antlr with the php target. To do this copy the contents of the directory java into the src directory in the anltr 3.1 source bundle. You can get the source bundle at http://www.antlr.org/download/antlr-3.1.tar.gz . 

The test cases, found in the test directory, need PHPUnit3 to run. This should be available through pear, instructions here http://www.phpunit.de/manual/3.3/en/installation.html, so I just download it from http://pear.phpunit.de/get/.
