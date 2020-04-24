# Movie Library

Movie Library generates a simple webpage with a list of Movies in your Digital library. You can use the search bar to filter the list; this is useful to check if you own a Movie.
For example:
  - If you want to check if you own 'Back to The Future', you can simply start typing 'Back to The Future' in the search bar.
  - If Movie is listed, it's in your library.

# Setting up
### Edit update.bat
  - Change line 5 to the Drive where your Movies are located (e.g. C:)
  - Change line 6 to the folder where your Movies are located** (e.g. Videos)
  - If your Movies are stored on the root of the drive you can delete line 6.


### Edit index.php
  - At the top of the webpage, you will see "JOHN DOE presents:", to change 'JOHN DOE' to your name, you can simply edit the value of $your_name in index.php.



# Development

There are lots of opportunities for developing this project further, here are some examples of what you can do:
  - Link each Movie in list to its file location. Copy file location when user clicks on Movie title.
  - Dynamically load video in webpage when user clicks on Movie name.
  - Load a trailer to the Movie when user clicks on Movie name.
  - When user clicks on a Movie name, do a fuzzy search and return some details about it (movie poster, plot, ratings, genre, etc..)
  - Allow user to manually add Movies to list that aren't digital (video, DVDs, etc..)
