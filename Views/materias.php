<?php
require_once('../db/Mysql.php');
$mysql = new Mysql();
$id = $_GET['id'];
$classes = $mysql->classeId($id);
$materias = $mysql->materiaAlunos($id);
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
            background-color: #001f3f;
            color: #ffffff;
            border-bottom: none;
            border-radius: 10px 10px 0 0;
            padding: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .table-custom {
            border-radius: 10px;
            overflow: hidden;
        }
        .table-custom th {
            background-color: #001f3f;
            color: #ffffff;
        }
        .table-custom td, .table-custom th {
            border: none;
            padding: 15px;
        }
        .table-custom tbody tr:nth-of-type(even) {
            background-color: #f8f9fa;
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
    </style>
</head>
<body>
<form method="post">
    <a href="../index.php" class="btn btn-custom"><ion-icon name="arrow-back-circle-sharp"></ion-icon></a>
</form>
    <div class="container">
        <div class="card">
            <div class="card-header card-header-custom">
                <h6>Total de Disciplinas <?= count($materias) ?></h6>
            </div>
            <div class="card-body">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th scope="col">Matérias</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($materias as $materia): ?>
                            <tr>
                                <td><ion-icon name="chevron-forward-sharp"></ion-icon><?= $materia['descricao'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>