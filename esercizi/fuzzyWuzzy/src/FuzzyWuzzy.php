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
        if ($number % 105 == 0){ 
            return 'WuzzyFuzzyFuzzyWuzzy ';
        } 
        if ($number % 35 == 0){ 
            return 'FuzzyWuzzyWuzzy ';
        }
        if ($number % 21 == 0) { 
            return "WuzzyFuzzyWuzzy ";
        }
        if ($number % 15 == 0) { 
            return "WuzzyFuzzy ";
        }
        if ($number % 7 == 0){
            return 'FuzzyWuzzy ';
        }
        if ($number % 5 == 0){
            return 'Wuzzy ';
        }
        if ($number % 3 == 0){
            return 'Fuzzy ';
        }
        return "$number ";
    }
}