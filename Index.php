<?php 
require './Db/database.php';
require './Components/header.php';
require './Components/footer.php';
require './Components/navbar.php';

?>

    <section>
        <div class="col-md-12 text-center">
            <a href="./views/movies.php">
                <button class="btn btn-primary" type="submit">
                    <h2>Show all movies</h2>
                </button>
            </a>
            <a href="./views/storeSelection.php">
            <button class="btn btn-secondary" type="submit">
                <h2>Rent a movie for a client</h2>
            </button>
            </a>
        </div>
    </section>