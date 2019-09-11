<?php

class FizzBuzz
{
    public function getFizzBuzz($start, $end)
    {
        $fizzBuzzList = [];

        for ($i = $start; $i <= $end; $i++) { 
            $multipleThree = $i % 3 == 0;
            $multipleFive = $i % 5 == 0;

            if ($multipleThree && $multipleFive) {
                $fizzBuzzList[] = 'fizzbuzz';

                continue;
            }

            if ($multipleThree) {
                $fizzBuzzList[] = 'fizz';

                continue;
            } 

            if ($multipleFive) {
                $fizzBuzzList[] = 'buzz';

                continue;
            } 

            $fizzBuzzList[] = $i;
        }

        return $fizzBuzzList;
    }
}
