<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contate</title>
</head>
<body>
        
<nav>
  <!--
    <a href="index.php">Inicial</a>
    <a href="sobre.php">Sobre</a>
    <a href="contate.php">Contate</a>
-->
    <a href="form.php">Login</a>

</nav>

<?php

class Car {
  public $coloracao;
  public $modelo;
  public function __construct($coloracao, $modelo) {
    $this->coloracao = $coloracao;
    $this->modelo = $modelo;
  }
}

$myCar = new Car("prata", "Hillux");
$otherCar = new Car("preto", "BMW");

class Jogos {
  public $nome;
  public $desenvolvedora;
  public $ano;
  public function __construct($nome, $desenvolvedora, $ano) {
    $this->nome = $nome;
    $this->desenvolvedora = $desenvolvedora;
    $this->ano = $ano; 
}
    public function mostrarInfo() {
      echo"<br>Jogo do ano: {$this->nome} {$this->desenvolvedora} ({$this->ano})<br>";
    }

}

$goty12 = new Jogos("Gta", "Rockstar", "2012");
$goty18 = new Jogos("God of War", "Santa monica", "2018");
$goty20 = new Jogos("Minecraft", "Mojang", "2020");
$goty25 = new Jogos("Elden Ring", "Fromsoftware", "2025");

$goty12->mostrarInfo();
$goty18->mostrarInfo();
$goty20->mostrarInfo();
$goty25->mostrarInfo();

foreach ($myCar as $x => $y) {
  echo "<br>$x: $y<br>";
}

foreach($otherCar as $x => $y) {
    echo "<br>$x : $y <br>" ; 
}

function message($nome, $origem) {
    echo "<br>Opa! O meu nome é: $nome e eu venho da(o) $origem<br>";
}

message(" Otávio", "Dt");
message("Diego", "Pd");
message("Danilo", "IFCE");
message("José Igor", "Dt");
?>

</body>
</html>