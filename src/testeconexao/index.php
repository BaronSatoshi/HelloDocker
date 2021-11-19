<?php
include('config.php');

$stmt = $conn->query("SELECT * FROM users");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Registros</title>
</head>
<body>
    <h1 style="text-align: center; justify-content: center;">Registro</h1>
    <table id="tabela" border=2 class="table table-striped table-hover">
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>Nome</strong></td>
            <td><strong>Idade</strong></td>
        </tr>
        <?php while($dado = $stmt->fetch(PDO::FETCH_OBJ)){ ?>
        <tr>
            <td><?php echo $dado->id; ?></td>
            <td><?php echo $dado->nome; ?></td>
            <td><?php echo $dado->idade; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>