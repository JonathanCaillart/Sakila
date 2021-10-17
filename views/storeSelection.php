<?php
  require '../Components/header.php';
  require '../Components/navbar.php';
  require '../Db/database.php';
  Include '../function/film.php';
  Include '../function/actor.php';
  Include '../function/language.php';
  Include '../function/category.php';
  Include '../function/rental.php';


?>

<form class="searchBar col-5 mx-auto bg-secondary rounded border border-info border-5 bg-gradient m-5 p-5"
  action="rent.php" methode="POST">
  <!-- radio-->
  <h1 class="text-center-align"> Chose your store</h1>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="store" id="flexRadioDefault1" value="1">
    <label class="form-check-label" for="flexRadioDefault1">
      Store 1
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="store" id="flexRadioDefault2" value="2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      Store 2
    </label>
  </div>
  <div class="col-12 p-3">
    <button type="submit" value="send" class="btnValider btn btn-info ">Confirm</button>
  </div>
</form>