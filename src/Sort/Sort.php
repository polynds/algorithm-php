<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace AlgorithmPHP\Sort;

class Sort
{
    /**
     * @param array $arr
     *                   O(1)
     *                   O(n^2)
     */
    public static function Bubble(array &$arr)
    {
        $count = count($arr);
        for ($i = 0; $i < $count - 1; ++$i) {
            $exchange = false;
            for ($j = 0; $j < $count - 1; ++$j) {
                if ($arr[$j + 1] < $arr[$j]) {
                    [$arr[$j + 1], $arr[$j]] = [$arr[$j], $arr[$j + 1]];
                    $exchange = true;
                }
            }
            if (! $exchange) {
                break;
            }
        }
    }

    /**
     * @param array $arr
     *                   O(1)
     *                   O(n^2)
     */
    public static function Selection(array &$arr)
    {
        $count = count($arr);
        for ($i = 0; $i < $count - 1; ++$i) {
            $index = $i;
            for ($j = $i + 1; $j < $count; ++$j) {
                if ($arr[$index] > $arr[$j]) {
                    $index = $j;
                }
            }
            [$arr[$index], $arr[$i]] = [$arr[$i], $arr[$index]];
        }
    }

    /**
     * @param array $arr
     *                   O(1)
     *                   O(n^2)
     */
    public static function Insertion(array &$arr)
    {
        $count = count($arr);
        for ($i = 1; $i < $count; ++$i) {
            $insertValue = $arr[$i];
            $insertIndex = $i - 1;
            while ($insertIndex >= 0 && $insertValue < $arr[$insertIndex]) {
                $arr[$insertIndex + 1] = $arr[$insertIndex];
                --$insertIndex;
            }
            $arr[$insertIndex + 1] = $insertValue;
        }
    }

    /**
     * @param array $arr
     *                   O(1)
     *                   O(n^2)
     */
    public static function Shell(array &$arr)
    {
        $count = count($arr);
        for ($gap = $count / 2; $gap > 0; $gap /= 2) {
            for ($i = $gap; $i < $count; ++$i) {
                for ($j = $i - $gap; $j >= 0; $j -= $gap) {
                    if ($arr[$j] > $arr[$j + $gap]) {
                        [$arr[$j], $arr[$j + $gap]] = [$arr[$j + $gap], $arr[$j]];
                    }
                }
            }
        }
    }

    /**
     * @param array $arr
     *                   O(1)
     *                   O(n^2)
     */
    public static function Quick(array &$arr, int $left, int $right)
    {
        $l = $left;
        $r = $right;
        $mid = $arr[($left + $right) / 2];
        while ($l < $r) {
            while ($arr[$l] < $mid) {
                ++$l;
            }
            while ($arr[$r] > $mid) {
                --$r;
            }
            if ($l >= $r) {
                break;
            }
            [$arr[$l], $arr[$r]] = [$arr[$r], $arr[$l]];
            if ($arr[$l] === $mid) {
                --$r;
            }
            if ($arr[$r] === $mid) {
                ++$l;
            }
        }
        if ($l === $r) {
            --$r;
            ++$l;
        }

        if ($left < $r) {
            self::Quick($arr, $left, $r);
        }

        if ($right < $l) {
            self::Quick($arr, $l, $right);
        }
    }
}
