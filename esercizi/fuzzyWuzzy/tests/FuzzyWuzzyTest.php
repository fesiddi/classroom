<?php

declare(strict_types=1);

namespace FuzzyWuzzy;

use PHPUnit\Framework\TestCase;

class FuzzyWuzzyTest extends TestCase
{
    public function testShouldReturn2(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('2 ', $fuzzyWuzzy->fuzzyGame([2]));
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

        $this->assertEquals('2 Fuzzy Fuzzy FuzzyWuzzy ', $fuzzyWuzzy->fuzzyGame([2,3,6,7]));
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

        $this->assertEquals('WuzzyFuzzy ', $fuzzyWuzzy->fuzzyGame([30]));
    }
    public function testShouldThrowExceptionWithoutNumbers(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->expectErrorMessage('Error! Cannot start the game without numbers!');
        $fuzzyWuzzy->fuzzyGame([]);

    }
    public function testShouldReturnWuzzyfuzzyFor15asInput(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('WuzzyFuzzy ', $fuzzyWuzzy->fuzzyGame([15]));
    }
    public function testShouldReturnWuzzyfuzzywuzzyFor21asInput(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('WuzzyFuzzyWuzzy ', $fuzzyWuzzy->fuzzyGame([21]));
    }
    public function testShouldReturnFuzzywuzzywuzzyFor35asInput(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('FuzzyWuzzyWuzzy ', $fuzzyWuzzy->fuzzyGame([35]));
    }
    public function testShouldReturnWuzzyfuzzyfuzzywuzzyFor315asInput(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('WuzzyFuzzyFuzzyWuzzy ', $fuzzyWuzzy->fuzzyGame([315]));
    }
    public function testShouldReturnWuzzyfuzzyfuzzywuzzyFor567asInput(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('WuzzyFuzzyWuzzy ', $fuzzyWuzzy->fuzzyGame([567]));
    }
    public function testShouldReturnCorrectStringForValidSeriesOfNumbers(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('WuzzyFuzzyFuzzyWuzzy 22 WuzzyFuzzy WuzzyFuzzy ', $fuzzyWuzzy->fuzzyGame([735, 22, 45, 90]));
    }
}