<?php

namespace FizzBuzz\test;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;

    public function setUp()
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testIncrementing()
    {
        $this->expectOutputString('123fizz45buzz6fizz789fizz10buzz1112fizz131415fizzbuzz');
        $this->fizzBuzz->run(1, 15);
    }

    public function testDecrementing()
    {
        $this->expectOutputString('15fizzbuzz141312fizz1110buzz9fizz876fizz5buzz43fizz21');
        $this->fizzBuzz->run(15, 1);
    }

    public function testParameterAreTheSame()
    {
        $this->expectOutputString('');
        $this->fizzBuzz->run(15, 15);
    }

    public function testNoInput()
    {
        $this->expectException(\ArgumentCountError::class);
        $this->fizzBuzz->run();
    }

    public function testOnlyOneParameter()
    {
        $this->expectException(\ArgumentCountError::class);
        $this->fizzBuzz->run(1);
    }

    public function testInvalidToParameter()
    {
        $this->expectException(\TypeError::class);
        $this->fizzBuzz->run(1, null);
    }

    public function testInvalidFromParameter()
    {
        $this->expectException(\TypeError::class);
        $this->fizzBuzz->run(null, 1);
    }

    public function testToParameterTooHigh()
    {
        $this->expectException(\Error::class);
        $this->fizzBuzz->run(1, 101);
    }

    public function testFromParameterTooHigh()
    {
        $this->expectException(\Error::class);
        $this->fizzBuzz->run(101, 100);
    }

    public function testToParameterTooLow()
    {
        $this->expectException(\Error::class);
        $this->fizzBuzz->run(1, 0);
    }

    public function testFromParameterTooLow()
    {
        $this->expectException(\Error::class);
        $this->fizzBuzz->run(0, 100);
    }
}