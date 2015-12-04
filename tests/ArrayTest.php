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
}
