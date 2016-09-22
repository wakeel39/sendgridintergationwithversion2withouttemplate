<?php

/**
 * Created by PhpStorm.
 * User: MPC-12
 * Date: 8/8/2016
 * Time: 3:44 PM
 */
//use PHPUnit\Framework\TestCase;
class Test extends PHPUnit_Framework_TestCase
{

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);

    }
}
