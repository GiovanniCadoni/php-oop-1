<?php
class Movie {
    public $name;
    public $year;
    public $language;
    public $view;
    public $status;

    function __construct($_name, $_year, $_language, $_view) {
        $this->name = $_name;
        $this->year = $_year;
        $this->language = $_language;
        $this->view = strtolower($_view);
        $this->setView(strtolower($_view));
    }

    public function setView($view) {
        if ($view == 'yes') {
            $this->status = 'View';
        } else if ($view == 'no') {
            $this->status = 'Not View';
        } else {
            $this->status = 'error';
        }
    }
}

$movies = [
    new Movie('Avatar', '2009', 'english', 'Yes'),
    new Movie('Pulp fiction', '1994', 'english', 'no'),
    new Movie('Oppenheimer', '2023', 'english', 'si'),
    new Movie('The Marvels', '2023', 'english', 'yes'),
    new Movie('Pacific Rim', '2013', 'english', 'Yes'),
];
//var_dump($movies);

?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie</title>
    </head>
    <body>
        <h2>
            Movies:
        </h2>
        <ul>
            <?php foreach($movies as $movie) { ?>
                <li>
                    <h3>
                        Name: <?php echo $movie->name ?>
                    </h3>
                    <p>
                        Year: <?php echo $movie->year ?>
                    </p>
                    <p>
                        Language: <?php echo $movie->language ?>
                    </p>
                    <i>
                        Status: <?php echo $movie->status ?>
                    </i>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>