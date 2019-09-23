<?php
    $a = 1230052;
    $b = strrev($a);
    $c = chunk_split($b,3,".");
    $d = chop($c,".");
    $e = strrev($d);
    $f = strrev(chop(chunk_split(strrev($a),3,"."),"."));
    echo $f;
?>