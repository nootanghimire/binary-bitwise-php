<?php 

$a = 0;

printf("Enter a number: ");
fscanf(STDIN, "%d", $a);

printf("%d is%s an even number\n", $a, isEven($a) ? "" : " not");


function isEven($a) {
    return ($a & 1) === 0;
}
