<?php

declare(strict_types=1);

namespace FuzzyWuzzy;

use Exception;

class FuzzyWuzzy
{
    public function fuzzyGame(array $numbersArray): string 
    {
        if (empty($numbersArray)){
            throw new Exception('Error! Cannot start the game without numbers!');
        }
        $result = "";
        foreach ($numbersArray as &$num) {
            if ($num > 0) {
                $result .= $this->whatToSay($num);
            } 
            else {
                throw new Exception("Error! $num is not a valid number!");
            }
        }
        return $result;
    }

    private function whatToSay(int $number): string
    {
        if ($number % 3 == 0){
            return "Fuzzy ";
        } 
        if ($number % 5 == 0) {
            return "Wuzzy ";
        }
        if ($number % 7 == 0) {
            return "FuzzyWuzzy ";
        }
        return 'Hello ';
    }
}