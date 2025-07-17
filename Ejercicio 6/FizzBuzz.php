<?php

function fizzBuzz(int $limit = 100): void {
    for ($i = 1; $i <= $limit; $i++) {
        $output = '';
        
        if ($i % 3 === 0) $output .= 'Fizz';
        if ($i % 5 === 0) $output .= 'Buzz';
        
        echo $output ?: $i;
        echo PHP_EOL;
    }
}

fizzBuzz();

