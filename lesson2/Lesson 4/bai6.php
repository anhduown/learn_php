<?php
    $nam = array(1990, 1991, 1992, 1993, 1994, 1995);
    function printYear($nam){
        foreach($nam as $nam_hien_tai) {
            echo $nam_hien_tai . " ";
        }
    }

    printYear($nam);
?>