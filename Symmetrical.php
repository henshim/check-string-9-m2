<?php


class Symmetrical
{
    public $stack;
    public $queue;
    private $testString;

    function __construct()
    {
        $this->stack = array();
        $this->queue = array();
        $this->testString = '';
    }

    function setString($string)
    {
        $this->testString=$string;
    }

    /**
     * @return string
     */
    public function getTestString()
    {
        return $this->testString;
    }

    public function pushArray()
    {
        $arr = str_split($this->getTestString());
        while (count($arr) > 0) {
            $item = array_shift($arr);
            array_unshift($this->stack,$item);
            array_push($this->queue, $item);
        }
    }

    function testSymmetrical()
    {
        $flag = true;
        for ($i = 0; $i < count($this->stack); $i++) {
            if ($this->stack[$i] !== $this->queue[$i]) {
                $flag = false;
                break;
            }
        }
        return $flag;
    }
}