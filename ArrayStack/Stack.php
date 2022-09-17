<?php

namespace ArrayStack;

class Stack
{

    public static function find(string $str)
    {
        $stack = [];
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            if (in_array($str[$i], ['{', '(', '['])) {
                $stack[] = $str[$i];
            } else {
                if (empty($stack))
                    return false;
                $s = array_pop($stack);
                if ($str[$i] === '{' && $s !== '}')
                    return false;
                if ($str[$i] === '(' && $s !== ')')
                    return false;
                if ($str[$i] === '[' && $s !== ']')
                    return false;

            }
        }
        return empty($stack);
    }

}
