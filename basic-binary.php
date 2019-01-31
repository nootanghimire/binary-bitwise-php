<?php 


for($i = 0; $i<25; $i++) {
	printf("% 2d = %s\n", $i, normalisedBinaryNbit($i)); 
}
/**
 * Returns a binary representation of an (unsigned) integer
 * performing necessary padding or truncation at the msb
 */
function normalisedBinaryNbit($int, $n = 8) {
    return substr(sprintf("%0${n}b", $int), -$n);
}
