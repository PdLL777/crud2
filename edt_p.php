<?php
                    
  include "conexao.php";
  $conn = connection();

  try {
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM aluno WHERE id=:id");
  $stmt->bindParam(':id', $id);
  $id           = $_GET['id'];
  $stmt->execute();

  // set the resulting array to associative
  foreach($stmt->fetchAll() as $k=>$v) {
    $id               = $v['id'];
    $nome             = $v['nome'];
    $disciplina       = $v['disciplina'];
    $nota1            = $v['nota1'];
    $nota2            = $v['nota2'];
  } 
  } catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
  }
  $conn = null;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Escola</title>
  <?php
    include "_includes/header.php";
  ?>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php
    include "_includes/leftnav.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Editar Aluno</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index_p.php">Aluno</a></li>
              <li class="breadcrumb-item active">Editar Aluno</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Atualização de aluno</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" name="form_edtproduto" method="POST" action="editar.php?id=<?php echo $id; ?>" >
            <div class="card-body">
              <div class="form-group">
                <label for="id">ID</label>
                <input type="number" class="form-control" id="id" name="id" required disabled value="<?php echo $id; ?>" >
              </div>
              <div class="form-group">
                <label for="nome">Nome do Aluno</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Aluno" required>
              </div>
              <div class="form-group">
                <label for="Disciplina">Disciplina</label>
                <input type="text" class="form-control" id="Disciplina" name="Disciplina" placeholder="Disciplina" required>
              </div>
              <div class="form-group">
                <label for="nota1">Nota 1</label>
                <input type="number" class="form-control" id="nota1" name="nota1" placeholder="Nota 1">
              </div>
              <div class="form-group">
                <label for="nota2">Nota 2</label>
                <input type="number" class="form-control" id="nota2" name="nota2" placeholder="Nota 2">
              </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include "_includes/footer.php";
  ?>

</body>
</html>


