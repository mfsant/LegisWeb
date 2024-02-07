<?php
require_once('./db/Mysql.php');
$mysql = new Mysql();
$classes = $mysql->classe();
?>
<?php require_once('./templates/header.php'); ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LegisWeb</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            height: auto;
            width: 15rem; /* Definindo a largura dos cards */
            margin-bottom: 20px; /* Adicionando margem inferior */
        }
        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            color: #11114e; /* Azul marinho */
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        .card-text {
            color: #333333;
        }
        .card-link {
            color: #11114e; /* Azul marinho */
            background-color: #ffc107; /* Amarelo */
            border-color: #ffc107; /* Amarelo */
        }
        .card-link:hover {
            background-color: #ffcd38; /* Amarelo claro */
            border-color: #ffcd38; /* Amarelo claro */
            color: #001f3f; /* Azul marinho */
        }
        .card-link:not(:last-child) {
            margin-right: 0.5rem; /* Adicionando espaçamento entre os botões */
        }
        .card-img {
            max-height: 150px; /* Definindo a altura máxima da imagem */
            width: auto; /* Permitindo que a largura da imagem seja ajustada automaticamente */
            margin-bottom: 10px; /* Adicionando espaçamento abaixo da imagem */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-4 g-3">
            <?php foreach($classes as $classe): ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $classe['classe'] ?></h5>
                            <img src="<?= $classe['img'] ?>" class="card-img" alt="">
                            <a href="Views/classe_alunos.php?id=<?= $classe['id'] ?>" class="btn btn-primary btn-sm">Alunos</a>
                            <a href="Views/materias.php?id=<?= $classe['id'] ?>" class="btn btn-warning btn-sm">Matérias</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
<?php require_once('./templates/footer.php'); ?>