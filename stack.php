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


$stack = new Stack();

$stack->push("fisika");
$stack->push("kimia");
$stack->push("biologi");
$stack->pop();
$stack->pop();
$stack->pop();

var_dump($stack->isEmpty());
$stack->push("bahasa indonesia");
echo($stack->peek());
