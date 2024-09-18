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

// Recebe os dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

// Prepara e executa a inserção
$sql = "INSERT INTO usuarios (nome, cpf, email, telefone) VALUES ('$nome', '$cpf', '$email', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso! <a href='index.html'>Voltar</a>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
