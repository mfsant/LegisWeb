<?php require_once('../templates/header.php'); ?>
<?php
require_once('../db/Mysql.php');
$mysql = new Mysql();
$id = $_GET['id'];
$removerAlunos = $mysql->removerAluno($id);
header("location:/legis_web/Views/../index.php?id=$idClasse");

if(isset($_POST['excluir'])) {
    $mysql->removerAluno($id);
    exit();
  }

echo '<script>alert("Aluno excluído com sucesso!!"); window.location.href = "../index.php";</script>';
?>
<?php require_once('../templates/footer.php'); ?>