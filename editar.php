<?php
    include "conexao.php";
    $conn = connection();

    try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE aluno SET nome=:nome, disciplina=:disciplina, 
    nota1=:nota1, nota2=:nota2 WHERE id=:id");
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':disciplina', $disciplina);
    $stmt->bindParam(':nota1', $nota1);
    $stmt->bindParam(':nota2', $nota2);

    $id                     = $_GET['id'];
    $nome                   = $_POST['nome'];
    $disciplina             = $_POST['disciplina'];
    $nota1                  = $_POST['nota1'];
    $nota2                  = $_POST['nota2'];

    $stmt->execute();


    echo "Aluno atualizado com sucesso!<br>";
    echo $id;
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;

    header('Location: add_p.php');
?> 