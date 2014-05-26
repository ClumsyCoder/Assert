<?php

namespace Assert;

abstract class Assertion
{
    /**
     * @param mixed $value
     * @param string $failedAssertionMessage
     */
    abstract public function assert($value, $failedAssertionMessage = "The assertion failed for the given value");
} 