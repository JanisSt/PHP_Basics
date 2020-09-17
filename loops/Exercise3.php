<?php

echo "Enter first word: ";
$fWord = readline();
echo "Enter second word: ";
$sWord = readline();
$fCount = strlen($fWord);
$sCount = strlen($sWord);
$length = 30 - ($sCount + $fCount);
echo $fWord;
for($i=0; $i<$length; $i++){
    echo ".";}
echo $sWord . PHP_EOL;