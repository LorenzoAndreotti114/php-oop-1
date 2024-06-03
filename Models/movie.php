<?php 

    require_once 'genere.php';

    class Movie 
    {

        public string $title;
        public string $exitDate;
        public int $vote;
        public string $duration;
        public Genere $genere;

        public function __construct(string $title, string $exitDate, int $vote, string $duration, Genere $genere)
        {
            $this -> title          = $title;
            $this -> exitDate       = $exitDate;
            $this -> vote           = $vote;
            $this -> duration       = $duration;
            $this -> genere         = $genere;

        }

    }

?>