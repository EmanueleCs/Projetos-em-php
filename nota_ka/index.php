<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Cálculo da nota</title>
</head>
<body class="container">
    <header>
        <h1>Calcule a nota</h1>
    </header>
    <main>
        <form action="calculo.php" method="post" class="form-group">
            <label for="nome">Nota na Prova</label>
            <input type="number" min="0" max="10" name="prova" id="idprova" class="form-control">
            <label for="nome">Nota no trabalho</label>
            <input type="number" min="0" max="4" name="trabalho" id="idtrabalho" class="form-control">
            <label for="nome">Nota de participação</label>
            <input type="number" min="0" max="3" name="participacao" id="idparticipacao" class="form-control">
            <label for="nome">Nota no simulado</label>
            <input type="number" min="0" max="3" name="simulado" id="idsimulado" class="form-control">
            
            <input class="btn btn-primary mb-2" type="submit" value="Calcular a nota">     
        </form>



    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
 integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>