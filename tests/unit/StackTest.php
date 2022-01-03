<?php

class Stack
{
    private $data = array();
    private $top=0;

    public function push($data)
    {
        $this->data[$this->top++]=$data;
    }

    public function peek()
    {
        return end($this->data);
    }

    public function isEmpty()
    {
        return empty($this->data);
    }

    public function pop()
    {
        return array_pop($this->data);
    }
}

class SampleTest extends \PHPUnit\Framework\TestCase
{
   public function test_push_stack()
   {
       $stack = new Stack();
       $this->assertTrue($stack->isEmpty());
       $stack->push(1);
       $this->assertFalse($stack->isEmpty());
       $stack->push(2);
       $this->assertEquals(2, $stack->peek());
   }
}