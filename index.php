<?php
    require __DIR__."/variables.php";
    require __DIR__."/function.php";
    $howMany = $_GET["num"];
    session_start();
    $_SESSION['howMany'] = $howMany;
    if (!empty($_SESSION['howMany'])){
        $_SESSION['pass'] = passGenerator($howMany, $possible_char);
        header("location: result.php");
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
    <p><?php echo $_SESSION['pass'] ?></p>
</body>
</html>