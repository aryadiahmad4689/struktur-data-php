<?php

class Queue
{
    protected $data =[];
    public $length=0;

    // method push in queue
    public function push($data)
    {
        array_unshift($this->data,$data);
        $this->length++;
    }

    // method peek in queue
    public function peek()
    {
        return $this->data[$this->length-1];
    }

    // method pop in queue
    public function pop()
    {
        unset($this->data[$this->length-1]);
        $this->length--;
    }

    // method is empty in queue
    public function isEmpty()
    {
        return empty($this->data);
    }
}



class QueueTest extends \PHPUnit\Framework\TestCase
{
    // CREATE test push in queue
    public function test_push_queue()
    {
        $queue = new Queue;
        $queue->push("ariadi");
        $queue->push("sul");
        $queue->push("herman");

        $this->assertEquals(3, $queue->length);

    }

    public function test_peek_queue()
    {
        $queue = new Queue;
        $queue->push("ariadi");
        $queue->push("sul");
        $queue->push("herman");
        $queue->push("herman");
        $queue->push("herman");

        $this->assertEquals("ariadi",$queue->peek());
    }

    public function test_pop_queue()
    {
        $queue = new Queue;
        $queue->push("ariadi");
        $queue->push("sul");
        $queue->push("herman");

        $queue->pop();

        $this->assertEquals(2,$queue->length);
        $this->assertEquals("sul",$queue->peek());
    }

    public function test_isEmpty_queue()
    {
        $queue = new Queue;
        $this->assertEquals(0,$queue->length);
        $this->assertEquals(true,$queue->isEmpty());
        $queue->push("ariadi");
        $this->assertEquals(false,$queue->isEmpty());

    }
}