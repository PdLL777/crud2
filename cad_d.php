<?php
    include "conexao.php";
    $conn = connection();

    try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO disciplina(nome_d,c_hora)
    VALUES (:nome_d, :c_hora)");
    $stmt->bindParam(':nome_d', $nome_d);
    $stmt->bindParam(':c_hora', $c_hora);

    $nome_d      = $_POST['nome_d'];
    $c_hora      = $_POST['c_hora'];
 
    $stmt->execute();


    echo "Disciplina cadastrada com sucesso!";
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;

    header('Location: index_d.php');
?> 