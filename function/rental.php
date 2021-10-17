<?php

class Rental extends Database
{

    public static function all()
    {
        $rentals = self::query(' SELECT * FROM rental');
        return $rentals->fetchAll();
        var_dump($rentals);
    }

    public static function read($id)
    {
        $rental = self::query("SELECT * FROM rental WHERE rental_id=$id");
        return $rental->fetch();
    }

    public static function insert($val_1,$val_2,$val_3,$val_4) {

        $rental = self::query("INSERT INTO `rental`(`return_date`) VALUES :return_date");


    }
}