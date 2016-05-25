<?php

function generatorTriangularNumbers($limit=15) {
        
    for($i = 0; $i <= $limit; $i++) {
         yield (1/2*$i*($i+1));
    }
}
foreach(generatorTriangularNumbers() as $n) {
    echo $n;
}


