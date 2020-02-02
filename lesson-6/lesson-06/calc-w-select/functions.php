<?php

    // функции математических операций
    function sum($arg1, $arg2)
    {
        return $arg1 + $arg2;
    }

    function diff($arg1, $arg2)
    {
        return $arg1 - $arg2;
    }

    function prod($arg1, $arg2)
    {
        return $arg1 * $arg2;
    }

    function div($arg1, $arg2)
    {
        // if ($arg2 !== 0) {
        return $arg1 / $arg2;
        /* } else {
             return 'Делить на ноль нельзя!';
         }*/
    }

    // функции математических операций -- END

    function mathOperation($arg1, $arg2, $math)
    {
        switch ($math) {
            case ('+'):
                return sum($arg1, $arg2);

            case '-':
                return diff($arg1, $arg2);

            case '*':
                return prod($arg1, $arg2);

            case '/':
                return div($arg1, $arg2);
        }
    }