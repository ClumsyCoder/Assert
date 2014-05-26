<?php

namespace Assert;

class IntegerAssertion extends Assertion
{
    /**
     * @param mixed $value
     * @param string $failedAssertionMessage
     * @throws AssertionFailed
     */
    public function assert($value, $failedAssertionMessage = "The value was not an integer")
    {
        if (!is_int($value)) {
            throw new AssertionFailed($failedAssertionMessage);
        }
    }
}