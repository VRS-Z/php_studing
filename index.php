<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
<!--
    <a href="index.php">Inicial</a>
    <a href="sobre.php">Sobre</a>
    <a href="contate.php">Contate</a>
-->

</nav>
    
<main>

<form action="valida_login.php" method="post">
   <h3> Name: <input type="text" placeholder="Digite seu nome" name="Name"> </h3> <br>
   <h3> Senha: <input type="password" placeholder="Digite sua senha" name="Senha"> </h3> <br>
    <input type="submit">
    <p>admin, 1234</p>
</form>

<?php 
if (isset($_SESSION["erro"])) {
    echo"<p style='color:red'>" . $_SESSION["erro"] . "</p>";
    unset($_SESSION["erro"]);
}
?>

</main>


</body>
</html>