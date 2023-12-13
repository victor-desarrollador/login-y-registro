<?php
session_start();
if (!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert ("Por favor debes inicar Session");
    </script>
    ';
    header("location: index.php");
    session_destroy();
    die();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienbenida </title>
</head>
<body>
    <h1>bienvenido a mi mundo</h1>
</body>
</html>