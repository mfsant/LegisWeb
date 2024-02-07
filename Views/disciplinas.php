<?php 
require_once('../db/Mysql.php');
$mysql = new Mysql();

$disciplinas = $mysql->disciplinas();
?>
<?php require_once('../templates/header.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class="row">
    <div class="col"></div>
    <div class="col-8">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
            <th>Materias:</th>
            <th>Classes:</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($disciplinas as $disciplina): ?>
            <tr>
                <td>
                    <?= $disciplina['descricao'] ?>
                </td>
                <td>
                <?= $disciplina['classe'] ?>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    </div>
    <div class="col"></div>
</div>
<?php require_once('../templates/footer.php'); ?>
  