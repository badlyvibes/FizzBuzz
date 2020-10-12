<?php

namespace FizzBuzz;

class FizzBuzz
{
    public const MIN = 1;
    public const MAX = 100;

    /**
     * @param int $from
     * @param int $to
     */
    public function run(int $from, int $to)
    {
        if ($from > self::MAX || $to > self::MAX) {
            throwException(new \TypeError('Input cannot be more than ' . self::MAX));
        } elseif ($from < self::MIN || $to < self::MIN) {
            throwException(new \TypeError('Input cannot be less than ' . self::MIN));
        }

        // This boolean controls whether the loop counts up or down
        $incrementing = $from <= $to;

        // Start at 0, otherwise change the start count to the 'from' parameter if decrementing
        $startCount = $incrementing ? 0 : $from;

        // If incrementing:
        //      Loop while counter is less than the 'to' param
        //      Increment the counter each loop
        // Otherwise:
        //      Loop while counter is greater than or equal to the 'to' param
        //      Decrement the counter each loop
        for ($i = $startCount; ($from < $to) ? $i < $to : $i >= $to; $incrementing ? $i++ : $i--) {

            // This is the current number between 1 and 100:
            //  If incrementing:
            //      Increase 'from' parameter by one each time round the loop
            //  Otherwise:
            //      Decrease 'to' parameter by one each time round the loop
            $current = $incrementing ? $from + $i : $to + ($i - 1);

            echo $current;

            if ($current % 3 == 0 && $current % 5 == 0) {
                echo 'fizzbuzz';
            } elseif ($current % 3 == 0) {
                echo 'fizz';
            } elseif ($current % 5 == 0) {
                echo 'buzz';
            }

        }
    }
}