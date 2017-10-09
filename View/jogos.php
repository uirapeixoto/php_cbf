<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

    <title>Cadastrar Jogos</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
</head>
<body>
<?php include_once('../init.php'); ?>

<div class="container">

    <div class="row">
        <table id="mytable" class="table table-bordred table-striped">
            <thead>
            <th><input type="checkbox" id="checkall" /></th>
            <th>TimeCasa</th>
            <th>Gols</th>
            <th>TimeAdversario</th>
            <th>Gols</th>
            <th>Edit</th>
            <th>Delete</th>
            </thead>
            <tbody>
            <?php
            $jogos = isset($_SESSION['jogos'])?$_SESSION['jogos']:array();

            if($jogos)
                foreach ($jogos as $jogo) {
                    ?>
                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td><?=$jogo->getTimeCasa(); ?></td>
                        <td><?=$jogo->getGolsTimeCasa(); ?></td>
                        <td><?=$jogo->getTimeAdversario(); ?></td>
                        <td><?=$jogo->getGolsTimeAdversario(); ?></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <form class="form-horizontal" action='../Controller/JogosController.php' method="POST">
            <h3>Cadastro de Jogos</h3>
            <fieldset>
                <legend>Jogos</legend>
                <div class="row col-lg-12" id="linha1">
                    <div class="col-lg-4 left">
                        <label for="timeCasa" class="left">Time da Casa</label>
                        <select id="timeCasa" required name="timeCasa" class="form-control left">
                            <?php
                            $times = $_SESSION['times'];
                            if($times)
                                foreach ($times as $time) {
                                    ?>
                                    <option value="<?=$time->getNome();?>"><?=$time->getNome();?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-4 right">
                        <label for="Name" class="right">Gols</label>
                            <input type="text" required id="golsTimeCasa" name="golsTimeCasa" placeholder="" class="form-control right">
                    </div>
                </div>
                <div class="row col-lg-12" id="linha1">
                    <div class="col-lg-4 left">
                        <label for="timeAdversario" class="left">Time da Adversario</label>
                        <select id="timeAdversario"  required name="timeAdversario" class="form-control left">
                            <?php
                            $times = $_SESSION['times'];
                            if($times)
                                foreach ($times as $time) {
                                    ?>
                                    <option value="<?=$time->getNome();?>"><?=$time->getNome();?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-4 right">
                        <label for="Name" class="right">Gols</label>
                            <input type="text" required id="golsTimeAdversario" name="golsTimeAdversario" placeholder="" class="form-control right">
                    </div>
                </div>
                <div class="row col-lg-12 right" style="margin-top: 10px">
                    <input type="submit" value="Enviar" class="btn btn-primary" />
                </div>

            </fieldset>
        </form>
    </div>

</div>


</body>
</html>