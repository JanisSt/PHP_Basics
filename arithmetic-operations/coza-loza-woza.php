<?php

for ($i = 1; $i<=110; $i++){
        if ($i % 11 == 0) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "CozaLoza ";
            } elseif ($i % 3 == 0) {
                echo "Coza ";
            } elseif ($i % 5 == 0) {
                echo "Loza ";
            } elseif ($i % 7 == 0) {
                echo "Woza ";
            }
            else {
                echo "$i ";
            } echo PHP_EOL;
        }
         else{
              if ($i % 3 == 0 && $i % 5 == 0) {
                  echo "CozaLoza " ;
              } elseif ($i % 3 == 0) {
                  echo "Coza ";
              } elseif ($i % 5 == 0) {
                  echo "Loza ";
              } elseif ($i % 7 == 0) {
                  echo "Woza ";
              }
              else { echo "$i ";}}}


