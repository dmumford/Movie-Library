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
