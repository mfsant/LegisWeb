
<?php
require_once('../db/Mysql.php');
$mysql = new Mysql();
$id = $_GET['id'];
$classes = $mysql->classeId($id);
$alunos = $mysql->classeAlunos($id);

if(isset($_POST['adicionar_alunos']))
{
    header("location:adicionar_alunos.php?id=$id");
}
if(isset($_POST['editar_alunos']))
{
    
    header('location:editar_alunos.php');
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<?php require_once('../templates/header.php'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <?php if(empty($alunos)): ?>
                <div class="alert alert-info" role="alert">
                    Nenhum aluno cadastrado nessa classe.
                </div>
            <?php else: ?>
                <?php foreach($alunos as $aluno): ?>
                    <div class="card mb-3">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <span><?= $aluno['nome'] ?></span>
                            <div>
                                <a href="editar_alunos.php?id=<?= $aluno['id_aluno'] ?>&nome=<?= $aluno['nome'] ?>&id_classe=<?= $id ?>" class="btn btn-outline-primary me-2"><ion-icon name="create-outline"></ion-icon> Editar</a>
                                <a href="excluir_alunos.php?id=<?= $aluno['id_aluno'] ?>" class="btn btn-outline-danger"><ion-icon name="trash-outline"></ion-icon> Excluir</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
            <form method="post" class="text-center">
                <button type="submit" name="adicionar_alunos" class="btn btn-warning"><ion-icon name="person-add-outline"></ion-icon> Adicionar Alunos</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>

<?php require_once('../templates/footer.php'); ?>