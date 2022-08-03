<?php include("../../config/config.php") ?>
<?php include(DIRREQ . "lib/html/header.php") ?>

<?php $date=new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo')) ?>


<form id="formAdd" name="formAdd" method="post" action="<?php echo DIRPAGE.'controllers/ControllerAdd.php'?>"><br>
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
    Cliente: <input type="text" name="title" id="title"><br>
    Descrição: <input type="text" name="description" id="description"><br>
    Nivel de Demora<Select name="horasAtendimentos" id="horasAtendimento">
        <option value="">Selecione</option>
        <option value="1">1h</option>
        <option value="2">2h</option>
        <option value="3">3h</option>
    </Select><br>

    <input type="submit" value="marcar Consulta">
</form>

<?php include(DIRREQ . "lib/html/footer.php") ?>