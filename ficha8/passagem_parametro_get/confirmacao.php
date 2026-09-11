<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmacao dos dados</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            text-align: center;
        }

        h1{
            margin: 30px 0px;
        }
        .oneRow{
            
        }
        form{
            border: 2px solid black;
            padding: 15px 20px ;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.2rem;

        }
        .cols{
            display: grid;
            gap: 5px;
            label{
                text-align: start;

            }

        }
    </style>
</head>
<body>
    <h1>Confirmacao da candidatura</h1>
    <form action="Finalizar.php" method="get">
        <div class="cols">
            <label for="">Nome: </label>
            <input type="text" name="nome" value="<?= $_GET['nome'] ?>" disabled>
        </div>
        <div class="cols">
            <label for="">Apelido: </label>
            <input type="text" name="apelido" value="<?= $_GET['apelido'] ?>" disabled>
        </div>
        <div class="cols">
            <label for="">Data de candidatura</label>
            <input type="text" name="data_candidatura" value="<?= $_GET['data_candidatura'] ?>" disabled>
        </div>
        <div class="cols oneRow">
            <label for="">Nivel Academicco</label>
            <input type="text" value="<?= $_GET['nivel_academico'] ?>" disabled>
        </div>
        <div class="cols oneRow">
            <label for="">Vaga a se candidatar</label>
            <input type="text" name="vaga" value="<?= $_GET['vaga'] ?>" disabled>
        </div>
        <button></button>
        <button type="submit">Submit</button>

    </form>
</body>
</html>