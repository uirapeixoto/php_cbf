<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <title>Cadastrar Time</title>
</head>
<body>
<?php include_once('../init.php'); ?>
<div class="container">
    <div class="row">
        <table id="mytable" class="table table-bordred table-striped">
            <thead>
            <th><input type="checkbox" id="checkall" /></th>
            <th>Time</th>
            <th>Edit</th>
            <th>Delete</th>
            </thead>
            <tbody>
            <?php
            $times = $_SESSION['times'];
            if($times)
                foreach ($times as $time) {
                    ?>
                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td><?=$time->getNome(); ?></td>
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
        <form class="form-horizontal" action='../Controller/TimesController.php' method="POST">
            <h3>Cadastro de Times</h3>
            <fieldset>
                <div class="col-lg-12 form-group margin50">
                    <label class="col-lg-2"  for="Name">Nome do Time</label>
                    <div class="col-lg-4">
                        <input type="text" id="nome" name="nome" placeholder="" class="form-control name">
                    </div>
                </div>
            </fieldset>
            <div class="row col-lg-12 right" style="margin-top: 10px">
                <input type="submit" value="Enviar" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>
</body>
</html>