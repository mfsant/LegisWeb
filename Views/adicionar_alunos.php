<?php
require_once('../db/Mysql.php');
$mysql = new Mysql();
$idClasse = $_GET['id'];
$nCadastrado = [];
$nCadastrados = $mysql->alunos_não_estão_classe($idClasse);

?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .card-header-custom {
            background-color: #120a8f;
             color: #ffffff;
            border-bottom: none;
            border-radius: 10px 10px 0 0;
            padding: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .btn-add {
            background-color: #FFD700;
             color: #ffffff;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            margin-left: 10px;
        }
        .btn-add:hover {
            background-color: #7b1fa2;
        }
        .table-custom {
            border-radius: 10px;
            overflow: hidden;
        }
        .table-custom th {
            background-color: #001f3f;
            color: #ffffff;
            border: none;
            padding: 10px;
        }
        .table-custom td {
            border: none;
            padding: 20px;
        }
        .alert-info-custom {
            background-color: #cce5ff;
            color: #004085;
            border-color: #b8daff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .btn-custom {
        background-color: #FFD700;
        color: #ffffff;
        font-size: 15px;
        padding: 10px 20px;
        margin-top: 10px;
        margin-right: 10px;
        border-radius: 10px;
        }
        .container {
    margin-top: 30px;
    margin-bottom: 100px;
}
    </style>
</head>
<body>
<form method="post">
    <a href="../index.php" class="btn btn-custom"><ion-icon name="arrow-back-circle-sharp"></ion-icon></a>
</form>
    <div class="container">
        <div class="card">
            <div class="card-header card-header-custom">
                <h5>Alunos não cadastrados na classe</h5>
            </div>
            <div class="card-body">
                    <table class="table table-hover table-bordered table-custom">
                        <tbody>
                            <?php foreach($nCadastrados as $nCadastrado): ?>
                                <tr>
                                    <td class="d-flex justify-content-between align-items-center">
                                        <?= $nCadastrado['nome'] ?>
                                        <a href="../Actions/vincularAluno.php?id=<?=$nCadastrado['id']?>&id_classe=<?=$idClasse?>"
                                        name="adc_alunos" class="btn btn-add">Adicionar Aluno</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>