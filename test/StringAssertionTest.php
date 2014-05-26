<?php

use Assert\StringAssertion;

class StringAssertionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var StringAssertion
     */
    private $_assertion;

    protected function setUp()
    {
        $this->_assertion = new StringAssertion();
    }

    public function testAssert_WhenString()
    {
        $this->_assertion->assert('good string');
    }

    public function testAssert_WhenInt_WillThrowException()
    {
        $this->setExpectedException('Assert\AssertionFailed');
        $this->_assertion->assert(12);
    }

    public function testAssert_WhenNull_WillThrowException()
    {
        $this->setExpectedException('Assert\AssertionFailed');
        $this->_assertion->assert(null);
    }
}