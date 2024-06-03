<?php 

    require_once 'Models/genere.php';
    require_once 'Models/movie.php';

    $horrorGenere = new Genere("Horror");
    $actionGenere = new Genere("Action");
    $commediGenere = new Genere("Commedi");

    // ETC...

    $movie1 = new Movie("Friday the 13", "02/02/1990", 7, "90min", $horrorGenere );
    $movie2 = new Movie("6 underground", "13/06/2022", 6, "120min", $actionGenere );
    $movie3 = new Movie("tre uomini e una capra", "06/03/2010", 9, "105min", $commediGenere );

    // ETC...

    var_dump($movie1);
    var_dump($movie2);
    var_dump($movie3);

?>