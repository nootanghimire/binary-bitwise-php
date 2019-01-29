<?php 

$a = 1;
$b = 0;

// This will produce weird Results Because of how negative numberes are stored
// We use the normalisedBinary8bit function to only show the 8 lsb (last 8 bits) of the binary representation of 

echo ' $a = ' . normalisedBinaryNbit($a) . "\n";
echo '~$a = ' . normalisedBinaryNbit(~$a) . "\n";

echo "\n";

echo ' $b = ' . normalisedBinaryNbit($b) . "\n";
echo '~$b = ' . normalisedBinaryNbit(~$b) . "\n";

/**
 * Returns a binary representation of an (unsigned) integer
 * performing necessary padding or truncation at the msb
 */
function normalisedBinaryNbit($int, $n = 8) {
    return substr(sprintf("%0${n}b", $int), -$n);
}