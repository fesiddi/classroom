<?php

declare(strict_types=1);

namespace FuzzyWuzzy;

use PHPUnit\Framework\TestCase;

class FuzzyWuzzyTest extends TestCase
{
    public function testShouldReturnHello(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('Hello ', $fuzzyWuzzy->fuzzyGame([2]));
    }
    public function testShouldReturnFuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('Fuzzy ', $fuzzyWuzzy->fuzzyGame([3]));
    }
    public function testShouldReturnWuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('Wuzzy ', $fuzzyWuzzy->fuzzyGame([5]));
    }
    public function testShouldReturnFuzzywuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('FuzzyWuzzy ', $fuzzyWuzzy->fuzzyGame([7]));
    }
    public function testShouldReturnStringWithValidNumbers(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('Hello Fuzzy Fuzzy FuzzyWuzzy ', $fuzzyWuzzy->fuzzyGame([2,3,6,7]));
    }
    public function testShouldThrowExceptionWithNegativeNumber(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();
        $this->expectErrorMessage('Error! -6 is not a valid number!'); 
        $fuzzyWuzzy->fuzzyGame([2,3,-6,7]);
    }
    public function testShouldReturnFuzzyWith30AsInput(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('Fuzzy ', $fuzzyWuzzy->fuzzyGame([30]));
    }
    public function testShouldThrowExceptionWithoutNumbers(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->expectErrorMessage('Error! Cannot start the game without numbers!');
        $fuzzyWuzzy->fuzzyGame([]);

    }
}