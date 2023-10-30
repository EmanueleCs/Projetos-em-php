<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Media</title>
</head>
<body class="container">

<main>
<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

echo "Olá, $nome $sobrenome! <br>";

// __________________________________________

$a = $_POST ['nota_um'];
$b = $_POST ['nota_dois'];
$operador = $_POST ['operador'];
$resultado = 0;


// __________________________________________

if( !empty($operador) ){

    if ($operador == '+') {

            $resultado = $a + $b;

        }elseif ($operador == '-') {

            $resultado = $a - $b;

        }elseif ($operador == '*') {
            
            $resultado = $a * $b;

        }else {
            $resultado = $a / $b;
        }

}
    



echo "O resultado da operação é: $resultado";


?>
<br>
<a href="index.php" class="btn btn-primary mb-2">Fazer um novo cálculo</a>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
 integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>