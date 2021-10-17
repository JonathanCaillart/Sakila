<?php
  require '../Components/header.php';
  require '../Components/navbar.php';
  require '../Db/database.php';
  Include '../function/film.php';
  Include '../function/actor.php';
  Include '../function/language.php';
  Include '../function/category.php';

?>

<?php 
$id = $_GET["id"];
$film = Film::read($id);                     
?>
<div class="card my-3">
    <div class="row g-0">
        <div class="col-md-4 ">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title fw-bold"><?= $film['title'] ?></h5>
                <?php 
                    $id = $_GET["id"];
                    $language = Language::readByLanguage($id);
                    ?>
                <p class="card-text ">Language : <?= $language['name'] ?></p>
                <p class="card-text ">
                    <?= "Replacement cost: $".$film['replacement_cost']." - Rental rate: $".$film['rental_rate'] ?>
                </p>

                <hr class="col-md-6 ">
                <p class="text-decoration-underline fw-bold">Synopsis :</p>
                <p class="card-text">Release year : <?= $film['release_year'] ?>
                </p>
                <p class="card-text"><?= $film['description'] ?></p>
                <hr class="col-md-6 ">
                <p class="text-decoration-underline fw-bold">Mains actor :</p>

                <?php  
                $filmId = (int)$film['film_id'];
                $actors = Actor::readByFilm($filmId);?>
                <p class="card-text">
                    <?php foreach($actors as $data) { ?>
                    <?= $data['first_name']." ".$data['last_name']." . " ?>
                    <?php } ?>
                </p>
                <hr class="col-md-6 ">


            </div>
        </div>
    </div>
</div>
