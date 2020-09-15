<?php
//$i = 0;
//while($i < 10){
//$rand = random_int(1, 100);
//$first = array_fill(0,10,$rand);
//var_dump($first);
//$i++;};
//echo "TUGHJ";

$random = range(0, 100);
shuffle($random );
$first = array_slice($random ,0,10);

$second = $first;
array_pop($first);
array_push($first, -7);
echo "Array  1: ";
foreach ($first as $fir){
    echo "$fir ";
}
echo PHP_EOL .  "Array  2: ";
;
foreach ($second as $sec){
    echo "$sec " ;
}echo PHP_EOL;
