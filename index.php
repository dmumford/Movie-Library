<?php 
// change JOHN DOE to your name
$your_name = 'JOHN DOE';
?>
<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/custom.css"/>
    </head>
    <body>

        <div class="container">
            <p class="text-center text-secondary"><?php echo $your_name; ?> Presents:</p>
            <h2 class="text-center text-primary display-4"><i class="fas fa-film"></i> Movie Library</h2>
            <input type="text" id="searchbar" placeholder="Search for a Movie.."/>

<?php
        // Update Movie List
        exec('update.bat');

        // File containing list of movies.
        $list = fopen("Movies.xml","r");

            // start list
            echo '<ul id="movie-list" class="list-group movie-list">';

        $movies = [];
        while(! feof($list))
        {
            // create array of movie names
            array_push( $movies, (substr(fgets($list), 0, -6)) );
        }

        fclose($list);

        // make movie array alphabetical order
        sort($movies);


// print list item for each movie
foreach ( $movies as $movie )
{
    echo '<li class="list-group-item">'.htmlentities($movie,ENT_IGNORE).'</li>';
}

// end list
echo '</ul>';

// end container
echo '</div>';

?>

<script src="js/filter.js"></script>

<p class="font-weight-bold text-center text-primary" id="totalMovies">Total Movies: <?php echo strval(number_format(count($movies))); ?></p>