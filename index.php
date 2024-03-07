<?php
    // Definizione della classe Movie
    class Movie {

        // Variabili d'istanza
        public $title;
        public $director;
        public $releaseYear;

        // Costruttore
        public function __construct($title, $director, $releaseYear) {
            $this->title = $title;
            $this->director = $director;
            $this->releaseYear = $releaseYear;
        }

        // Ottenimento delle informazioni sul film
        public function getInfo() {
            return "<strong>Director:</strong> ". $this->director. "<br><strong>Release Year:</strong> ".$this->releaseYear;
        }
    }

    // Istanziamento di due oggetti Movie
    $movie1 = new Movie("The Lord of the Rings: The Fellowship of the Ring", "Peter Jackson", 2001);
    $movie2 = new Movie("The Lord of the Rings: The Two Towers", "Peter Jackson", 2002);
    $movie3 = new Movie("The Lord of the Rings: The Return of the King", "Peter Jackson", 2003);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <!-- Stampa a schermo dei risultati -->
    <h1>
        Movies
    </h1>

    <!-- Film 1 -->
    <h2>
        <?= $movie1->title?>
    </h2>
    <p>
        <?= $movie1->getInfo()?>
    </p>

    <!-- Film 2 -->
    <h2>
        <?= $movie2->title?>
    </h2>
    <p>
        <?= $movie2->getInfo()?>
    </p>

    <!-- Film 3 con metodo Echo -->
    <h2>
        <?php echo $movie2->title; ?>
    </h2>
    <p>
        <?php echo $movie2->getInfo(); ?>
    </p>
</body>
</html>