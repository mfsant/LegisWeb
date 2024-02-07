<?php 
require_once('../db/Mysql.php');

$mysql = new Mysql();
$id = $_GET['id'];
$nome = $_GET['nome'];
$idClasse = $_GET['id_classe'];

if(isset($_POST['editar']))
{
 
  $mysql->AlunoUpdate($_POST['nome'],$id);
  header("location:classe_alunos.php?id=$idClasse");
  echo '<script>alert("Aluno alterado com sucesso!!")</script>';
 
}

?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
   .btn-custom {
        background-color: #FFD700;
        color: #ffffff;
        font-size: 15px;
        padding: 10px 20px;
        margin-top: 10px;
        margin-right: 10px;
        border-radius: 10px;
        }
</style>

<form method="post">
    <a href="../index.php" class="btn btn-custom"><ion-icon name="arrow-back-circle-sharp"></ion-icon></a>
</form>
<form method="post">
  <div class="row justify-content-center mt-5">
    <div class="col-4">
    <h4>Editar Aluno:</h4>
    <br>
      <input type="text" class="form-control" name="nome" value="<?= $nome ?>" placeholder="Nome" required>
      <br>
      <button type="submit" name="editar" id='btn-custom' class="btn btn-custom">Editar</button>
    </div>
  </div>
</form>
