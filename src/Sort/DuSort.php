<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace AlgorithmPHP\Sort;

class DuSort
{
    public static function Select(&$arr)
    {
        $cont = count($arr);
        foreach ($arr as $i => $iValue) {
            $minIndex = $i;
            for ($j = $i; $j < $cont; ++$j) {
                if ($arr[$minIndex] > $arr[$j]) {
                    $minIndex = $j;
                }
            }
            $tmp = $arr[$minIndex];
            $arr[$minIndex] = $arr[$i];
            $arr[$i] = $tmp;
        }
    }

    public static function Insert(&$arr)
    {
        $cont = count($arr);
        for ($i = 0; $i < $cont; ++$i) {
            for ($j = $i; $j >= 1; --$j) {
                if ($arr[$j] < $arr[$j - 1]) {
                    $tmp = $arr[$j - 1];
                    $arr[$j - 1] = $arr[$j];
                    $arr[$j] = $tmp;
                } else {
                    break;
                }
            }
        }
    }

    public static function Insert2(&$arr)
    {
        $cont = count($arr);
        for ($i = 0; $i < $cont; ++$i) {
            $t = $arr[$i];
            for ($j = $i; $j >= 1 && $t < $arr[$j - 1]; --$j) {
                $arr[$j] = $arr[$j - 1];
            }
            $arr[$j] = $t;
        }
    }
}
