<?php
namespace Wandu\Fastelper;

use Mockery;
use PHPUnit_Framework_TestCase;

class ArrayTest extends PHPUnit_Framework_TestCase
{
    public function testUniqueIntersect()
    {
        $this->assertEquals([3], array_unique_intersect([1,2,3], [3,4,5]));

        $this->assertEquals([], array_unique_intersect([1,2,3], [4,5,6]));
    }

    public function testUniqueUnion()
    {
        $this->assertEqualSet([1,2,4,5], array_unique_union([1,4,5,5,5], [1,2]));
    }

    public function assertEqualSet($set1, $set2)
    {
        $this->assertEquals(count($set1), count($set2));

        foreach ($set1 as $item) {
            $this->assertTrue(in_array($item, $set2), "not exists {$item}");
        }
        foreach ($set2 as $item) {
            $this->assertTrue(in_array($item, $set1), "not exists {$item}");
        }
    }
}
