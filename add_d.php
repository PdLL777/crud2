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
            <h1 class="m-0 text-dark">Adicionar Disciplina</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index_p.php">Disciplinas</a></li>
              <li class="breadcrumb-item active">Cadastrar Disciplina</li>
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
            <h3 class="card-title">Add Disciplina</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" name="form_d" method="POST" action="cad_d.php" >
            <div class="card-body">
              <div class="form-group">
                <label for="nome_d">Nome da Disciplina</label>
                <input type="text" class="form-control" id="nome_d" name="nome_d" placeholder="Nome da Disciplina" required>
              </div>
              <div class="form-group">
                <label for="c_hora">Carga horaria</label>
                <input type="text" class="form-control" id="c_hora" name="c_hora" placeholder="Disciplina" required>
              </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
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


