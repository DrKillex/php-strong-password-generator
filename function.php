<?php
    function passGenerator ($numChar ,$array){
        $megaPass= [];
        for ($i = 0; $i < $numChar; $i++){
            $ran1 = random_int(0, count($array)-1);
            $ran2 = random_int(0, count($array[$ran1])-1);
            $megaPass[] = $array[$ran1][$ran2];
        }       
        return str_shuffle(implode($megaPass));
    };
?>