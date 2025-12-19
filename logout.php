<?php 
//Inicia a sessão
session_start();

//Apaga todas as variaveis da sessão, faz uma limpa
session_unset();    

//Apaga tudo
session_destroy();

//Redireciona de volta a pagina de login
header("Location: /form.php");
exit;