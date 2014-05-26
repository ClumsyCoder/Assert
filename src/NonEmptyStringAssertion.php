<?php

namespace Assert;

class NonEmptyStringAssertion extends StringAssertion
{
    /**
     * @param mixed $value
     * @param string $failedAssertionMessage
     * @throws AssertionFailed
     */
    public function assert($value, $failedAssertionMessage = "The value was not a non empty string")
    {
        parent::assert($value, $failedAssertionMessage);
        if (empty($value)) {
            throw new AssertionFailed($failedAssertionMessage);
        }
    }
} 