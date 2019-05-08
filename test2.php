<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 2019-04-25
 * Time: 오후 12:19
 *
 * - 극단적인 경우: 0, 음수, null, 최댓값, 최솟값.
 * - 사용자 실수: 만일 사용자가 null이나 음수 값을 주며 어떻게 되나?
 * - 일반적인 경우들: 일반적인 경우에 대해서도 테스트하라.
 *
 */


include_once ("./function.php");

/*
 * BinaryGap
 * */
function solution($N) {
    // write your code in PHP7.0
    $dec = str_split(decbin($N));
    $result = 0;
    $gap = 0;

    for($i=0; $i< count($dec); $i++){
        if($dec[$i] == 0){
            $gap++;
        }else{

            if($gap > $result){
                $result = $gap;
            }

            $gap = 0;
        }
    }
    return $result;
}

/*
 * OddOccurrencesInArray
 * */
function solution2($A){
    $result = 0;

    for($i=0; $i< count($A); $i++)
    {
        $result = $result ^ $A[$i];
    }
    return $result;
}

/*
 * CyclicRotation
 * */
function solution3($A, $K) {
    // write your code in PHP7.0
    if($K > 0 && count($A) > 0)
    {
        for($i=1; $i <= $K; $i++)
        {
            $a =  array_pop($A);
            array_unshift ($A, $a);
        }
    }
    return $A;
}

/*
 * FrogJmp
 * */
function solution4($X, $Y, $D) {
    // write your code in PHP7.0
    $result = 0;
    if($X < $Y){
        $result = (int) ceil(($Y - $X) / $D);
    }

    return $result;
}


/*
 * PermMissingElem
 * */
function solution5($A) {
    // write your code in PHP7.0
    $n = count($A) + 1;
    $tot = $n * ($n + 1) / 2;
    $sum = 0;

    for($i=0; $i<count($A); $i++)
    {
        $sum += $A[$i];
    }

    return (int) $tot - $sum;
}


/*
 * PermCheck
 * */
function solution6($A) {
    // write your code in PHP7.0
    $xorSum = 0;

    for($i=1; $i<count($A) + 1; $i++)
    {
        $xorSum ^= $i ^ $A[$i - 1];
    }

    $result = $xorSum == 0 ? 1 : 0;
    return $result;
}

function solution7($A) {
    // write your code in PHP7.0
    return count(array_unique($A));
}

/*
 * MinAvgTwoSlice
 * */
function solution8($A) {
    // write your code in PHP7.0
    $minAvg = ($A[0] + $A[1]) / 2;
    $minIndex = 0;

    for($i=2; $i<count($A); $i++)
    {
        $avg = ($A[$i-2] + $A[$i-1] + $A[$i]) / 3;

        if($avg < $minAvg)
        {
            $minAvg = $avg;
            $minIndex = $i - 2;
        }

        $avg = ($A[$i-1] + $A[$i]) / 2;
        if($avg < $minAvg)
        {
            $minAvg = $avg;
            $minIndex = $i - 1;
        }

    }
    return $minIndex;
}

$A[0] = 4;
$A[1] = 2;
$A[2] = 2;
$A[3] = 5;
$A[4] = 1;
$A[5] = 5;
$A[6] = 8;
//echo solution8($A);



?>