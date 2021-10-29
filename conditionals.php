<?php

    /**
     * ==  it does not check the type so it passes comparison between number and string
     * === check the type
     * >
     * <
     * >=
     * <=
     * != does not check the type
     * !==
     */

     $num = '5';

if ($num == 5) {
    echo '5 passed';
} elseif ($num == 6) {
    echo '6 passed';
} else {
    echo 'did not pass';
}

//Nesting if

if ($um > 4) {
    if ($num < 10) {
        echo "num passed";
    }
}

//Logical operators

    /**
     * and &&
     * of ||
     * xor
     */

if ($num > 4 && $num < 10) {
    echo "$num passed";
}

//Switches

switch ($variable) {
    case 'value':
        # code...
        break;

    default:
        # code...
        break;
}
