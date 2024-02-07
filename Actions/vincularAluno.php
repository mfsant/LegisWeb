<?php

require_once("../db/Mysql.php");
$mysql = new Mysql();
$idAluno = $_GET['id'];
$idClasse = $_GET['id_classe'];
$mysql->vincularAluno($idAluno, $idClasse);
header("location:/legis_web/Views/classe_alunos.php?id=$idClasse");


echo '<script>alert("Aluno cadastrado com sucesso!!"); window.location.href = "../index.php";</script>';
   
   

?>