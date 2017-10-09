<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

    <title>Cadastrar Jogos</title>
</head>
<body>
<?php include_once('../init.php');
$campeonato = isset($_SESSION['campeonato'])?(is_array($_SESSION['campeonato'])?$_SESSION['campeonato']:array()):array();
?>

<div class="container">

    <div class="row">
        <table id="mytable" class="table table-bordred table-striped">
            <thead>
            <th><input type="checkbox" id="checkall" /></th>
            <th>Time</th>
            <th>P</th>
            <th>J</th>
            <th>V</th>
            <th>E</th>
            <th>D</th>
            <th>GP</th>
            <th>GC</th>
            <th>SC</th>
            </thead>
            <tbody>
            <?php
            if($campeonato)
                foreach ($campeonato as $time) {
                    ?>
                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td><?=$time->getTime(); ?></td>
                        <td><?=$time->getPontos(); ?></td>
                        <td><?=$time->getJogos(); ?></td>
                        <td><?=$time->getVitoria(); ?></td>
                        <td><?=$time->getEmpate(); ?></td>
                        <td><?=$time->getDerrota(); ?></td>
                        <td><?=$time->getGolsPro(); ?></td>
                        <td><?=$time->getGolsContra(); ?></td>
                        <td><?=$time->getSaldoGols(); ?></td>
                    </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    <form class="form-horizontal" action='../Controller/CampeonatoController.php' method="POST">
        <div class="row col-lg-12 right" style="margin-top: 10px">
            <input type="hidden" name="limpar" value="true" />
            <input type="submit" value="Limpar" class="btn btn-danger" />
        </div>
    </form>
</div>
</body>
</html>