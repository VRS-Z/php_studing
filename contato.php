<?php 
require_once("auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contato</title>
    <link rel="shortcut icon" href="img/Hollow-Knight-PNG-Pic-Clip-Art-Background.ico" type="image/x-icon">
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <header>
        <div class="título">
            <h1>HolloWiki</h1>
            </div>
        <nav>
            <ul class="nav-main">
                <li><a href="home.php">Home</a></li>
                <li><a href="bosses.php">Bosses</a>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="/logout.php">Encerrar Sessão</a></li>
            </ul>
        </nav>
    </header>

    <main>
            <div class="imagenocant">
            <img src="img/hollow-knight-breakdance.gif" alt="Knight Break dance">
            </div class="imagenocant">
        <h1>Entre em contato conosco</h1>
        <h2>Cadastre-se aqui:</h2>
        <form action="valida_contato.php" method="post">
        <label for="name">Nome:</label>  
        <input type="text" id="name" name="name" required placeholder="Inserir nome de usuário"> <br> <br>
            
        <label for="email">Email:</label> 
        <input type="email" id="email" name="email" required placeholder="Exemplo@gmail.com"> <br> <br>
            
        <label for="password">Senha:</label>
        <input type="password"name="senha" required placeholder="insira senha"> <br> <br>


        <label for="message">Mensagem:</label> <br>  
        <textarea id="message" name="message" rows="4" placeholder="Sua mensagem aqui"></textarea>
        <br><br>
       
        <input type="submit">

        <?php 
            if (isset($_SESSION["sucesso"])) {
            echo"<p style='color:green'>" . htmlspecialchars($_SESSION["sucesso"]) ."</p>";    
            unset($_SESSION["sucesso"]);
            }
            if (isset($_SESSION["erro"])) {
            echo"<p style='color:red'>". htmlspecialchars($_SESSION["erro"]) ."</p>";
            unset($_SESSION["erro"]);
            }
        ?>

    </form>

       


    </main>
    <footer>
        Feito por:MVE Corporation&#169
    </footer>
    
</body>
</html>