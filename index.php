<?php
$arrNum = [6, 2, 2, -7, -4, -1, 9];
function test_positive($num)
{
    return ($num > 0);
}
function multiply($num1, $num2)
{
    // return ($num > 0);
    return $num1 * $num2;
}
// print_r(array_filter($arrNum, "test_positive"));
print_r(array_reduce(array_filter($arrNum, "test_positive"), "multiply", 1));
