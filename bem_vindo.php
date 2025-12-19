<?php 
require_once "auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    
<nav>
    <a href="index.php">Inicial</a>
    <a href="sobre.php">Sobre</a>
    <a href="contate.php">Contate</a>
    <a href="form.php">Form</a>
    <a href="formInself.php">Form inself</a>

</nav>

<h1>Seja bem vindo á página 
<?php echo htmlspecialchars($_SESSION["usuario"]) ?></h1>

<p>Clica no botão abaixo pra encerrar login:</p>
<a href="logout.php">
    <button>Sair</button>
</a>

</body>
</html>