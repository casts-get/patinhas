<?php

include '../../infra/conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id = $id";
$resultado = $conn->query($sql);

$cliente = $resultado->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE clientes
            SET nome='$nome',
                email='$email',
                telefone='$telefone'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar cliente: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>

<body>

    <h2>Editar Cliente</h2>

    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome"
               value="<?php echo $cliente['nome']; ?>" required>

        <br><br>

        <label>Email:</label>
        <input type="email" name="email"
               value="<?php echo $cliente['email']; ?>" required>

        <br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone"
               value="<?php echo $cliente['telefone']; ?>">

        <br><br>

        <button type="submit">Salvar alterações</button>

    </form>

    <br>

    <button onclick="window.location.href='../../index.php'">
        Voltar
    </button>

</body>

</html>

