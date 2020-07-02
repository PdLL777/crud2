<?php
    include "conexao.php";
    $conn = connection();

    try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE disciplina SET nome_d=:nome_d, c_hora=:c_hora
 WHERE id=:id");
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':nome_d', $nome_d);
    $stmt->bindParam(':c_hora', $c_hora);

    $id                     = $_GET['id'];
    $nome_d                   = $_POST['nome_d'];
    $c_hora             = $_POST['c_hora'];

    $stmt->execute();


    echo "Disciplina atualizada com sucesso!<br>";
    echo $id;
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;

    header('Location: add_p.php');
?> 