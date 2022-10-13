<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace AlgorithmPHP\Base;

class Helper
{
    public static function printData($arr)
    {
        $count = count($arr);
        echo '[';
        foreach ($arr as $k => $v) {
            echo $v;
            if (($k + 1) !== $count) {
                echo ',';
            }
        }
        echo ']' . PHP_EOL;
    }

    public static function generateArr(int $num = 0)
    {
        $num = $num <= 0 ? 1 : $num;
        $array = range(1, $num);
        shuffle($array);
        return $array;
    }

    public static function vdump($data)
    {
        var_dump([$data]);
    }
}
