<?php require './modules/header.php' ?>

<?php require './modules/body-two.php' ?>

<div class="title-prescription">
  <h1>Receta médica</h1>
</div>

<div class="body-prescription">
  <div class="row prescription-field">
    <div class="col-sm-12 col-md-3 text-right">
      <label for="date">Fecha:</label>
    </div>
    <div class="col-sm-12 col-md-9">
      <input type="date" name="date" value="">
    </div>
  </div>

  <div class="row prescription-field">
    <div class="col-sm-12 col-md-3 text-right">
      <label for="name_pacient">Nombre paciente:</label>
    </div>
    <div class="col-sm-12 col-md-9">
      <input type="text" name="name_pacient" value="">
    </div>
  </div>

  <div class="row prescription-field">
    <div class="col-sm-12 col-md-3 text-right">
      <label for="age">Edad:</label>
    </div>
    <div class="col-sm-12 col-md-9">
      <input type="text" name="age" value="">
    </div>
  </div>

  <div class="row prescription-field">
    <div class="col-sm-12 col-md-3 text-right">
      <label for="prescription">Receta:</label>
    </div>
    <div class="col-sm-12 col-md-9">
      <textarea name="prescription" rows="8" cols="80"></textarea>
    </div>
  </div>




</div>

<?php require './modules/footer-two.php' ?>
