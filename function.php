<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 2019-04-30
 * Time: 오전 10:17
 */
function get_time() {
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
function print_r2($arr)
{
    ob_start();
    print_r($arr);
    $str = ob_get_contents();
    ob_end_clean();
    $str = str_replace(' ', '&nbsp;', $str);
    echo nl2br('<span style="font-family:Tahoma, 굴림; font-size:9pt;">'.$str.'</span>');
}
?>