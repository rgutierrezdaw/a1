<?php
session_start();

   
    if(!isset($_POST['fecha']) && !empty($_POST['fecha']) && isset($_POST['edad']) && empty($_POST['edad'])){
       $age = filter_input(INPUT_POST, 'edad'); 
       $dateSelected = filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE);
       $age=filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INTL);
       echo $dateSelected;
       echo $age;
    } 
    $username=$_SESSION['username'];   
    echo $username;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method='post'>  
        <label for='date'>La fecha</lalbel>       
        <input type='date' name='fecha'>
        <label for='age'>Tu edad</lalbel>       
        <input type='number' name='edad'>
        <input type='submit' value='Enviar'>
    </form>
    <hr>
    <a href="logout.php">Cerrar sesion</a>
</body>
</html>
