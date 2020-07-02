<?php
    include "conexao.php";
    $conn = connection();

    try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO aluno(nome, disciplina, nota1, nota2)
    VALUES (:nome, :disciplina, :nota1, :nota2, ;media)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':disciplina', $disciplina);
    $stmt->bindParam(':nota1', $nota1);
    $stmt->bindParam(':nota2', $nota2);
    $stmt->bindParam(':media', $media);

    $nome                   = $_POST['nome'];
    $disciplina             = $_POST['disciplina'];
    $nota1                  = $_POST['nota1'];
    $nota2                  = $_POST['nota2'];
    $media                  = ($nota1+$nota2)/2;
   
 
    $stmt->execute();


    echo "Aluno cadastrado com sucesso!";
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;

    header('Location: index_p.php');
?> 