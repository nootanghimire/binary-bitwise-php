<?php 

foreach ([0,1] as $a) {
    foreach ([0, 1] as $b) {
        printf(" \$a = %02b\n", $a);
        printf(" \$b = %02b\n", $b);
        
        printf("\n");
        
        printf(" \$a & \$b = %02b\n", ($a | $b));
        
        printf("-----------------------------------------------------------------\n");
    }
}

