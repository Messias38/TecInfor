<?php
// Configurações do banco de dados
$host = 'localhost'; // ou o IP do servidor MySQL
$usuario = 'root'; // seu usuário MySQL
$senha = ''; // sua senha MySQL

try {
    // Conexão com o servidor MySQL
    $pdo = new PDO("mysql:host=$host", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o servidor MySQL bem-sucedida.<br>";

    // Criar banco de dados
    $pdo->exec("CREATE DATABASE IF NOT EXISTS MEUBDNEW");
    echo "Banco de dados 'MEUBDNEW' criado ou já existe.<br>";

    // Selecionar o banco de dados
    $pdo->exec("USE MEUBDNEW");

    // Criar a tabela
    $criarTabela = "
    CREATE TABLE IF NOT EXISTS MINHATABELA (
        ID INT AUTO_INCREMENT PRIMARY KEY,
        NOME VARCHAR(50) NOT NULL,
        LASTNAME VARCHAR(50) NOT NULL,
        CPF VARCHAR(11) NOT NULL UNIQUE,
        ENDERECO VARCHAR(100),
        CIDADE VARCHAR(50)
    )";
    $pdo->exec($criarTabela);
    echo "Tabela 'MINHATABELA' criada ou já existe.<br>";

    // Inserir dados
    $inserirDados = "
    INSERT INTO MINHATABELA (NOME, LASTNAME, CPF, ENDERECO, CIDADE)
    VALUES 
    ('João', 'Silva', '12345678901', 'Rua A, 123', 'São Paulo'),
    ('Maria', 'Oliveira', '10987654321', 'Rua B, 456', 'Rio de Janeiro'),
    ('Pedro', 'Santos', '11122334455', 'Rua C, 789', 'Belo Horizonte')
    ";
    $pdo->exec($inserirDados);
    echo "Dados inseridos com sucesso.<br>";

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

// Fechar a conexão
$pdo = null;
?>