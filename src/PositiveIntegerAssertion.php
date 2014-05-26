<?php

namespace Assert;

class PositiveIntegerAssertion extends IntegerAssertion
{
    public function assert($value, $failedAssertionMessage = "The value was not an integer")
    {
        parent::assert($value, $failedAssertionMessage);
        if ($value <= 0) {
            throw new AssertionFailed($failedAssertionMessage);
        }
    }
} 