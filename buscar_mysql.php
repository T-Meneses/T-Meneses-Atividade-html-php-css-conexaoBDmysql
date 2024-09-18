<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta para buscar todos os usuários
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

echo "<h2>Usuários Cadastrados</h2>";
if ($result->num_rows > 0) {
    // Saída dos dados de cada linha
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - CPF: " . $row["cpf"]. " - E-mail: " . $row["email"]. " - Telefone: " . $row["telefone"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
