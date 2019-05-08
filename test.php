<?php
/**
 * Created by PhpStorm.
 * User: Master
<<<<<<< HEAD
 * Date: 2019-05-08
 * Time: 오후 3:26
 */
echo "Test";
=======
 * Date: 2019-04-25
 * Time: 오전 10:02
 */


/*
이것은 데모 작업입니다.

함수를 작성하십시오.

N 개의 정수 중 A 배열이 주어지면 A에서 발생하지 않는 가장 작은 양의 정수 (0보다 큼)를 반환합니다.

예를 들어 A = [1, 3, 6, 4, 1, 2]이면 함수는 5를 반환해야합니다.

주어진 A = [1, 2, 3], 함수는 4를 반환해야합니다.

주어진 A = [-1, -3], 함수는 1을 반환합니다.

다음 가정에 대해 효율적인 알고리즘을 작성하십시오 .

N은 [ 1 .. 100,000 ] 범위의 정수입니다 .
배열 A의 각 요소는 [ -1,000,000 .. 1,000,000 ] 범위의 정수 입니다.
*/
include_once ("./function.php");

/*
 * MissingInteger
 * */
function solution($A)
{
    /*
     * 디버깅 시간 체크
     */
    $start = get_time();
    /*
     * //디버깅 시간 체크
     */

    $result = 0;

    if(count($A) > 0)
    {
        $maxValue = max($A);

        if($maxValue > 0)
        {
            for($i=1; $i<=$maxValue; $i++)
            {
                if(!in_array($i,$A))
                {
                    $result = $i;
                    break;
                }
            }
        }
        else
        {
            $result = 1;
        }
    }

    $result = $result == 0 ? $maxValue + 1 : $result;

    /*
     * 디버깅 시간 체크
     */
    $end = get_time();
    $time = $end - $start;
    echo "수행시간 : " . number_format($time,4).'초' . PHP_EOL;
    /*
     * //디버깅 시간 체크
     */

    return $result;
}
/*
$A = [];
for($i=1; $i<=100000; $i++)
{
    array_push($A,$i);
}
unset($A[90000]);

echo solution($A);
*/




















function solution2($G){
    // write your code in PHP7.0
    $gesture = substr_count($G,"R") >= substr_count($G,"S") ? substr_count($G,"R") >= substr_count($G,"P") ? "R" : "P" : "S";

    $score = 0;

    for($i=0; $i<strlen($G); $i++)
    {
        if($G[$i] == $gesture)
        {
            $score += 1;
        }
        else if($G[$i] == "R" && $gesture == "P" || $G[$i] == "P" && $gesture == "S" || $G[$i] == "S" && $gesture == "R")
        {
            $score += 2;
        }
        else
        {
            $score += 0;
        }
    }

    return $score;

}

$A = "RSPRS";
//$A = ["P","R","P","R","R","P","P"];
/*
for($i=1; $i<=10; $i++)
{
    array_push($A,$i);
}
*/
//unset($A[90000]);

//echo solution2($A);



function solution3($A){

    $result = 1;
    $A[0]
    return $result;
}



$A = [1,4,-1,3,2];
echo solution3($A);

?>
>>>>>>> e8ba11c8f1e9acd47a0c6ad70730583070cd9085
