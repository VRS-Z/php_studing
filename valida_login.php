<?php 

session_start();

if($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
        exit;
}

if(!isset($_POST["Name"], $_POST["Senha"])) {
    $_SESSION["erro"] = "Dados não enviados corretamente";
    header("Location: index.php");
    exit;
}

$name = trim($_POST["Name"] ?? "");
$senha = trim($_POST["Senha"] ?? "");

if ($name === "" || $senha === "") {
    $_SESSION["erro"] = "Preencha os campos!";
    header("Location: index.php");
    exit;
}

if ($name === "admin" && $senha === "1234") {

    $_SESSION["logado"] = true;
    $_SESSION["usuario"] = $name;


    header("Location: home.php");
    exit;

} else {
    $_SESSION["erro"] = "Usuário ou senha incorretos";
    header("Location: index.php");
    exit;
}

