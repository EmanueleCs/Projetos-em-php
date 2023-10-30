<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Media</title>
</head>
<body class="container">
    <header>
        <h1>Calcule</h1>
    </header>
    <main>
        <form action="media.php" method="post" class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="idnome" class="form-control">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="idsobrenome" class="form-control">


            <label for="nota_um">Insira o primeiro número:</label>
            <input type="number" name="nota_um" id="" class="form-control">
            <label for="nota_dois">Insira o segundo número:</label>
            <input type="number" name="nota_dois" id="" class="form-control">
            <label for="operador">Escolha o operador:</label>
            <input class="btn btn-primary mb-2" type="submit" name="operador" value="+">     
            <input class="btn btn-primary mb-2" type="submit" name="operador" value="-">     
            <input class="btn btn-primary mb-2" type="submit" name="operador" value="*">     
            <input class="btn btn-primary mb-2" type="submit" name="operador" value="/">


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