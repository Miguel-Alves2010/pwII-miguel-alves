<?php

$host = "localhost";
$dbname = "projeto_site";
$user = "root";
$senha = "";


try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname;meta-charser=utf-8", $user, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die ("Erro ao conectar com o banco de dados" . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_recebido = $_POST["nome"];
    $email_recebido = $_POST["email"];
    $mensagem_recebida = $_POST["mensagem"];

    $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':nome', $nome_recebido);
    $stmt->bindParam(':email', $email_recebido);
    $stmt->bindParam(':mensagem', $mensagem_recebida);

    if ($stmt->execute()) {
        echo "<h1>Sucesso!</h1>";
        echo "<p>Dados salvos no banco de dados.</p>";
        echo "<a href='index.html'>Voltar</a>";

    } else {
        echo "Erro ao tentar salvar os dados.";
    }

}
?>