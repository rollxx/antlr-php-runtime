// <?php
// 
// require 'PHPUnit/Framework.php';
// require 'antlr.php';
// class ANTLRStringStreamTest extends PHPUnit_Framework_TestCase{
// 	protected function setUp(){
// 	}
// 	
// 	protected function tearDown(){
// 	}
// 	
// 	public function test1(){
// 		self::assertEquals(
// 	            DFA::unpackEncodedString(
// 	            "\1\3\1\4\2\xff\1\5\22\xff\1\2\31\xff\1\6\6\xff".
// 	            "\32\6\4\xff\1\6\1\xff\32\6"
// 	            ),
// 	            array( 3, 4, -1, -1, 5, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
// 	              -1, -1, -1, -1, -1, -1, 2, -1, -1, -1, -1, -1, -1, -1, -1, -1,
// 	              -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
// 	              6, -1, -1, -1, -1, -1, -1, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6,
// 	              6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, -1, -1, -1, -1, 6, -1,
// 	              6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6,
// 	              6, 6, 6, 6, 6
// 	            ));
// 	
// 		print_r(DFA::unpackEncodedString("\x1\x3c\x11\x7a\x2\xff\xa\x7a\x1\x27\x3\x7a\x4\x27\x2\xfe\x6\x7a".
// 	    "\x4\x3d\x1\x27\x1\xfe\x1\x7a\x1\xfe\x1\x7a\x1\x3d\x5\x7a"));
//         
// 	}
// }
// 
// ?>