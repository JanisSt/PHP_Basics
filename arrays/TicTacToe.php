<?php
function displayBoard()
{
    echo "   |   |   \n";
    echo "---+---+---\n";
    echo "   |   |   \n";
    echo "---+---+---\n";
    echo "   |   |   \n";
}

displayBoard();
//echo "Choose your location: ";
//echo "Row: " . PHP_EOL;
//$uIRow = explode(" ",readline());
//echo "Col: " . PHP_EOL;
//$uICol = explode(" ",readline());

function start()
{
    return [['   ', '   ', '   '], ['   ', '   ', '   '], ['   ', '   ', '   ']];
}

$game = start();

function gameBoard($game)
{
    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 3; $col++) {
            echo $game[$col][$row];
            if ($col < 2) {
                echo "|";
            }
        }
        if ($row < 2) {
            echo PHP_EOL . "---+---+---" . PHP_EOL;
        } else {
            echo PHP_EOL;
        }
    }
}

;

function chekRow($game)
{
    for ($i = 0; $i < 3; $i++) {
        $win = $game[$i][0];
        for ($p = 0; $p < 3; $p++) {
            if ($game[$i][$p] != $win) {
                $win = null;
                break;
            }
        }
        return $win;
    }
}

function chekCol($game)
{
    for ($i = 0; $i < 3; $i++) {
        $win = $game[0][$i];
        for ($p = 0; $p < 3; $p++) {
            if ($game[$i][$p] != $win) {
                $win = null;
                break;
            }
        }
        return $win;
    }
}

function checkDiagonal($game)
{
    $win = $game[0][0];
    for ($i = 0; $i < 3; $i++) {
        if ($game[$i][$i] != $win) {
            $win = null;
            break;
        }
    }

    if ($win === null) {
        $win = $game[0][2];
        for ($i = 0; $i < 3; $i++) {
            if ($game[$i][2 - $i != $win]) {
                $win = null;
                break;
            }
        }
    }
    return $win;
    var_dump($win);

}

$player = ' X ';
do {
    $uIRow = explode(" ", readline("Choose your location: Row: ") - 1);
    $uICol = explode(" ", readline("Choose your location: Col: ") - 1);

    $p = 0;
    $p++;
    if ($game[(int)$uIRow[0]][(int)$uICol[0]] == '   ') {
        $game[$uIRow[0]][$uICol[0]] = $player;
        $player === ' X ' ? $player = ' O ' : $player = ' X ';

        gameBoard($game);
        chekRow($game);
        chekCol($game);
        checkDiagonal($game);
    } else {


        echo gameBoard($game);
    }

} while ($p < 6);


function getWin($game)
{
    if ($win = chekCol($game)) {
        return $win;
    }
    if ($win = chekRow($game)) {
        echo $win;
    }
    if ($win = checkDiagonal($game)) {
        return $win;
    }
}

function checkWin($game)
{
    $win = getWin($game);
    if ($win !== '  ') {
        return true;
    }
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($game[$i][$j] === '  ') {
                return false;
            }
        }
    }
    return true;
}




