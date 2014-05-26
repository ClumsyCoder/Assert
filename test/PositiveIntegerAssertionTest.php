<?php

use Assert\PositiveIntegerAssertion;

class PositiveIntegerAssertionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PositiveIntegerAssertion
     */
    private $_assertion;

    protected function setUp()
    {
        $this->_assertion = new PositiveIntegerAssertion();
    }

    public function testAssert_WhenString()
    {
        $this->setExpectedException('Assert\AssertionFailed');
        $this->_assertion->assert('bad string');
    }

    public function testAssert_WhenInt_WillThrowException()
    {
        $this->_assertion->assert(12);
    }

    public function testAssert_WhenIntIsZero_WillThrowException()
    {
        $this->setExpectedException('Assert\AssertionFailed');
        $this->_assertion->assert(0);
    }

    public function testAssert_WhenNull_WillThrowException()
    {
        $this->setExpectedException('Assert\AssertionFailed');
        $this->_assertion->assert(null);
    }
}