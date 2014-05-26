<?php

namespace Assert;

class StringAssertion extends Assertion
{
    /**
     * @param mixed $value
     * @param string $failedAssertionMessage
     * @throws AssertionFailed
     */
    public function assert($value, $failedAssertionMessage = "The value was not a valid string")
    {
        if(!is_string($value)) {
            throw new AssertionFailed($failedAssertionMessage);
        }
    }
}