<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 25/01/2019
 * Time: 21:54
 */
include_once "StopWatch.php";

$arr = [];
for ($i = 0; $i <10000;$i++){
    $arr[]= $i * rand(1,100000);
}
function selectionSortAcsending($arr){
    for ($i=0;$i<count($arr)-1;$i++){
        $min = $i;
        for ($j=$i+1;$j<count($arr);$j++){
            if($arr[$j]<$arr[$min]){
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min]=$temp;
    }
    return $arr;
}
$stopwatch = new StopWatch();
echo "Thoi gian bat dau:". $stopwatch->getStartTime()."<br/>";
selectionSortAcsending($arr);
$stopwatch->endTime();
echo "Thoi gian ket thuc:". $stopwatch->getEndTime()."<br/>";
echo "Thoi gian thuc thi". $stopwatch->getElapsedTime();
