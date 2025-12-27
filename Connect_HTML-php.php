<?php
include "Connect_DB-php.php";

// Captura dos dados
$Nome         = $_POST['Nome'];
$Endereco     = $_POST['Endereco'];
$Email        = $_POST['Email'];
$Telefone     = $_POST['Telefone'];
$D_nascimento = $_POST['D_nascimento'];

// Query SQL
$sql = "INSERT INTO `cadastro de clientes`(`nome`, `endereco`, `email`, `telefone`, `d_nasci`) 
        VALUES ('$Nome','$Endereco','$Email','$Telefone','$D_nascimento')";

$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5 text-center">
    <?php if ($resultado): ?>
        <div class="alert alert-success">
            <h4>Sucesso!</h4>
            <p>O cliente <strong><?php echo $Nome; ?></strong> foi cadastrado corretamente.</p>
        </div>
    <?php else: ?>
        <div class="alert alert-danger">
            <h4>Erro!</h4>
            <p>Não foi possível realizar o cadastro.</p>
        </div>
    <?php endif; ?>
    
    <a href="pagina_inicial.php" class="btn btn-primary mt-3">Voltar para o Início</a>
</body>
</html>
