<?php

include '../../infra/conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id = $id";

if ($conn->query($sql) === TRUE) {

    echo "Cliente excluído com sucesso!";

} else {

    echo "Erro ao excluir cliente: " . $conn->error;

}

echo "<br><br>";

echo "<button onclick=\"window.location.href='../../index.php'\">
        Voltar
      </button>";

?>
