
<?php
  require '../Components/header.php';
  require '../Components/navbar.php';
  require '../Db/database.php';
  Include '../function/film.php';
  Include '../function/actor.php';
  Include '../function/language.php';
  Include '../function/category.php';
  Include '../function/rental.php';
  Include '../function/inventory.php';
  Include '../function/staff.php';
  Include '../function/customer.php';



?>

<?php

$id = $_GET["store"];
$staff = Staff::read($id);

$inventory_get = (int)$_GET['store'];
$inventory = Inventory::readByStore($inventory_get);
?>



<form class="searchBar col-5 mx-auto bg-secondary rounded border border-info border-5 bg-gradient m-5 p-5" action=""
   methode="POST">

   <div class="input-group p-3">
      <span class="input-group-text w-25">Sellers</span>
      <select class="form-select" id="inputGroupSelect01" name="staffs">
         <option name="staffs value=" <?=$staff['store_id'] ?>>
            <?= $staff['last_name']." ".$staff['first_name'] ?>
         </option>
      </select>
   </div>
   <div class="input-group p-3">
      <span class="input-group-text w-25">Client</span>
      <input class="form-control w-75" name="customer" type="text" placeholder="Search by Customer" id="customer_id"
         onkeyup="autoCompleteCustomer()">
      <ul class="dropdown-menu " id="customer_list_id"></ul>
   </div>
   <div class="input-group p-3">
      <span class="input-group-text w-25">Film</span>
      <input class="form-control w-75" name="film" type="text" placeholder="Search by Film " id="film_id"
         onkeyup="autocomplete()">
      <ul class="dropdown-menu" id="film_list_id"></ul>
   </div>
   <div class="input-group p-3">
      <span class="input-group-text w-25">
         Return date
      </span>
      <input class="form-control w-75" name="return_date" type="date">
   </div>
   <div class="col-12 p-3">
      <button type="submit" name="send" value="send" class="btnValider btn btn-outline-info ">
         Confirm
      </button>
   </div>
</form>

<?php


?>

<script>


   function autocomplete() {
      var keyword = $('#film_id').val();
      if (keyword != "") {
        $.ajax({
            url: 'autoCompleteFilm.php',
            type: 'POST',
            cache: false,
            data: {
               keyword: keyword
            },
            success: function (data) {
               $('#film_list_id').show();
               $('#film_list_id').html(data);
            }
         });
      } else {
         $("#film_list_id").html(""); 
      }
   }

   function set_item(item) {

       $('#film_id').val(item);

       $('#film_list_id').hide();
    }   


   function autoCompleteCustomer() {
      var keyword = $('#customer_id').val();
      if (keyword != "") {
         $.ajax({
            url: 'autoComplete.php',
            type: 'POST',
            cache: false,
            data: {
               keyword: keyword
            },
            success: function (data) {
               $('#customer_list_id').show();
               $('#customer_list_id').html(data);
            }
         });
        } else {
           $("#customer_list_id").html(""); /
        }
    }

   function set_item_customer(item) {

    $('#customer_id').val(item);

      $('#customer_list_id').hide();
    }

</script>
