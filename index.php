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
            return "Title: " . $this->title . ", Director: " . $this->director . ", Release Year: " . $this->releaseYear;
        }
    }

    // Istanziamento di due oggetti Movie
    $movie1 = new Movie("The Shawshank Redemption", "Frank Darabont", 1994);
    $movie2 = new Movie("The Godfather", "Francis Ford Coppola", 1972);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>

</body>
</html>