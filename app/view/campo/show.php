<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/showCampo.css">
</head>
<body>
  <a href="<?= BASE_URL ?>/campo/create">Cadastrar novo Campo</a>  
  <table class="styled-table">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Nome</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($campos as $campo):?>
    <tr>
        <td><?= $campo['codigo'] ?></td>
        <td><?= $campo['nome'] ?></td>
        <td><a href="<?= BASE_URL ?>/campo/edit/<?= $campo['codigo'] ?>">Editar</a></td>
        <td><a href="<?= BASE_URL ?>/campo/delete/<?= $campo['codigo'] ?>"">Deletar</a></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

</div>
</body>
</html>