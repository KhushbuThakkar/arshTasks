<?php
require_once 'strParser.php';
class Calculator
{
    private $strParser;
    public $result = 0;
    public function __construct(StrParser $strParser)
    {
        $this->strParser = $strParser;
    }

    public function setArgs($operation, $numbers)
    {
        switch ($operation) {
            case 'sum':
                $this->add($numbers);
                break;
            case 'mul':
                $this->multiply($numbers);
                break;
            default:
                echo "Unknown command!";
                break;
        }
    }
    public function add($stringNumbers)
    {
        if ($stringNumbers == "") {
            return 0;
        }
        $this->result = array_sum($this->strParser->parse($stringNumbers));
    }
    public function multiply($stringNumbers)
    {
        if ($stringNumbers == "") {
            return 0;
        }
        $this->result = array_product($this->strParser->parse($stringNumbers));
    }
}
