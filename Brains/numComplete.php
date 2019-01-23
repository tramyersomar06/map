<?php

class NumComp{

    function recode($num){
        $encoded = "";
        if(strlen($num) == 1){
            $encoded = "HOUSENUM-0000{$num}";
            return $encoded;
        }if(strlen($num) == 2){
            $encoded = "HOUSENUM-000{$num}";
            return $encoded;
        }if(strlen($num) == 3){
            $encoded = "HOUSENUM-00{$num}";
            return $encoded;
        }if(strlen($num) == 4){
            $encoded = "HOUSENUM-0{$num}";
            return $encoded;
        }if(strlen($num) == 5){
            $encoded = "HOUSENUM-{$num}";
            return $encoded;
        }
    }

}

