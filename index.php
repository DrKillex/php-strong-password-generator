<?php
    $possible_char = [
        ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"],
        ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"],
        ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"],
        ["!","@", "#", "$", "%", "^", "&", "*", "-", "+", "/", "?"]
    ];
    //var_dump($possible_char)
    $howMany = $_GET["num"];
    function passGenerator ($numChar ,$array){
        $megaPass= [];
        for ($i = 0; $i < $numChar; $i++){
            $ran1 = random_int(0, count($array)-1);
            $ran2 = random_int(0, count($array[$ran1])-1);
            $megaPass[] = $array[$ran1][$ran2] ;
        }       
        return str_shuffle(implode($megaPass));
    };
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PassGen</title>
</head>
<body>
    <form action="" method="get">
        <label for="num">quanti caratteri?</label>
        <input type="text" id="num" name="num">
        <button>esegui</button>
    </form>
    <p><?php echo passGenerator($howMany, $possible_char)?></p>
</body>
</html>