
<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];
echo "Enter the value to search for: " . PHP_EOL;
$userInput = readline();

if (in_array($userInput, $numbers)) {
    echo "Array does contain the value" .PHP_EOL;
}
else {echo "Array does not contain the value you entered" .PHP_EOL;
}
