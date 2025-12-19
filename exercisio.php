<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
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
echo "<h2>For/while</h2>";   

$i = 0;
while ($i < 100) {
    $i+=20;
    /*
    if ($i == 5) continue;
    if ($i == 11) break;
    */
    echo "$i <br>";
}

for ($i = 0; $i <= 10; $i++) {
    echo "esse numero aumenta: $i <br>";
}



?>
    
</body>
</html>