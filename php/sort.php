<?php
/**
 * Created by PhpStorm.
 * User: raye
 * Date: 2018/2/12
 * Time: 16:23
 */

/**
 * 冒泡排序
 * @param array $arr
 * @return array
 */
function bubble(array $arr) :array
{
    $len = count($arr);
    for ($i = 0; $i < $len; ++$i) {
        for ($j = $i; $j < $len; ++$j) {
            if ($arr[$i] > $arr[$j]){
                $tem = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tem;
            }
        }
    }
    return $arr;
}

var_dump(bubble([1,2,1,76,32,44]));


function qucik(array $arr) :array
{
    $len = count($arr);
    if ($len <= 1)
        return $arr;

    $left = $right = [];
    $mid_index = floor($len/2);
    $mid_val = $arr[$mid_index];
    for ($i = 0; $i < $len; ++$i){
        if ($i == $mid_index)
            continue;

        if ($arr[$i] > $mid_val)
            $right[] = $arr[$i];
        else
            $left[] = $arr[$i];
    }

    return array_merge(qucik($left), [$mid_val], qucik($right));
}

var_dump(qucik([1,214,32,2,34,2,45,23]));