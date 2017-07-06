<?php
require_once 'PHPUnit/Autoload.php';
require_once 'src/calculator.php';

class CalcTest extends PHPUnit_Framework_TestCase
{
    private $calculator;

    public function SetUp()
    {
        $this->calculator = new Calculator(new StrParser());
    }

    public function testFramework()
    {
        $this->assertTrue(true);
    }
    public function addDataProvider()
    {
        return array(
            array('sum', '1', '1'),
            array('sum', '1,2', '3'),
            array('sum', '4,5,6', '15'),
            array('sum', '1,2,3,4,5,6,7,8,9,20,33,555,77', '730'),
            array('sum', '4,5,6', '15'),
        );
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($operation, $nums, $result)
    {
        $this->calculator->setArgs($operation, $nums);
        $this->assertEquals($result, $this->calculator->result);
    }

    public function mulDataProvider()
    {
        return array(
            array('sum', '1', '1'),
            array('sum', '1,2', '2'),
        );
    }
    /**
     * @dataProvider addDataProvider
     */
    public function testMul($operation, $nums, $result)
    {
        $this->calculator->setArgs($operation, $nums);
        $this->assertEquals($result, $this->calculator->result);
    }

}
