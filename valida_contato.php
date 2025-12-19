<?php 

session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contato.php");
    exit();
}

if(!isset($_POST["name"], $_POST["email"], $_POST["senha"], $_POST["message"])) {
    $_SESSION["erro"] = "Dados não enviados corretamente";
    header("Location: contato.php");
    exit();
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$senha = trim($_POST["senha"] ?? "");
$message = trim($_POST["message"] ?? "");


if ($name == "" || $email == ""|| $senha == ""|| $message == "") {
    $_SESSION["erro"] = "Parece que você esqueceu de escrever a mensagem.....";
    header("Location: contato.php");
    exit();
}

$_SESSION["sucesso"] = "Recemos sua mensagem $name, muito obrigado!";
    header("Location: contato.php");
    exit(); 