<?php
   
    function checkYear($year){
        if($year%2==0){
            return true;
        }else{
            return false;
        }
    }

    $currentYear = 2023;
    if(checkYear($currentYear)){
        echo "Năm chẵn";
    }else{
        echo "Năm lẻ";
    }
    
?>