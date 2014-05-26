<?php

use Assert\IntegerAssertion;

class IntegerAssertionTest extends PHPUnit_Framework_TestCase {
    /**
     * @var IntegerAssertion
     */
    private $_assertion;

    protected function setUp()
    {
        $this->_assertion = new IntegerAssertion();
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

    public function testAssert_WhenNull_WillThrowException()
    {
        $this->setExpectedException('Assert\AssertionFailed');
        $this->_assertion->assert(null);
    }
}