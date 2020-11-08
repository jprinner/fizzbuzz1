<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase {

    public function testInputNoArgs(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get();
        $this->assertSame("1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 fizzbuzz 16 17 fizz 19 buzz", $actual);
    }

    public function testInputOneArgThatIsLessThanMax(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(1);
        $this->assertSame("1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 fizzbuzz 16 17 fizz 19 buzz", $actual);
    }

    public function testInputOneArgThatIsGreaterThanMax(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(21);
        $this->assertSame("Error: Max input is less than the min.", $actual);
    }

    public function testInputNonNumericArgs(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get("test", "test");
        $this->assertSame("Error: Not a valid number.", $actual);
    }

    public function testMaxInputSmallerThanMinInput(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get("20", "1");
        $this->assertSame("Error: Max input is less than the min.", $actual);
    }

    public function testInput1(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(1,1);
        $this->assertSame("1", $actual);
    }

    public function testInput2(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(2,2);
        $this->assertSame("2", $actual);
    }

    public function testInput3(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(3,3);
        $this->assertSame("fizz", $actual);
    }

    public function testInput5(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(5,5);
        $this->assertSame("buzz", $actual);
    }

    public function testInput15(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(15,15);
        $this->assertSame("fizzbuzz", $actual);
    }

    public function testInput1_20(): void {
        $fizzbuzz = new FizzBuzz;
        $actual = $fizzbuzz->get(1,20);
        $this->assertSame("1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 fizzbuzz 16 17 fizz 19 buzz", $actual);
    }
}