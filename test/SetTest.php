<?php

require_once 'PHPUnit/Framework.php';
require_once 'antlr.php';
class SetTest extends PHPUnit_Framework_TestCase{
	protected function setUp(){
	}
	
	protected function tearDown(){
	}
	
	public function testMember(){
        $set = new Set(array(1,2,3));
		self::assertFalse($set->member(4));
		self::assertTrue($set->member(1));
		$set->add(4);
		self::assertTrue($set->member(4));
	}
	
	public function testUnion(){
		$set1 = new Set(array(1,2,3));
		$set2 = new Set(array(2,3,4));
		$set3 = $set1->union($set2);
		$arr = array(1,2,3,4);
		foreach($arr as $n){
			self::assertTrue($set3->member($n));
		}
	}
	
	public function testUnionInPlace(){
		$set1 = new Set(array(1,2,3));
		$set2 = new Set(array(2,3,4));
		$set1->unionInPlace($set2);
		$arr = array(1,2,3,4);
		foreach($arr as $n){
			self::assertTrue($set1->member($n));
		}
	}
	
	public function testRemove(){
		$set = new Set(array(1,2,3));
		$set->remove(2);
		self::assertFalse($set->member(2));
	}
}

?>