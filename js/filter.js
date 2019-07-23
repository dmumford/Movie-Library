$( document ).ready( function()
{

    $('#searchbar').keyup( function()
    {
            // search for a movie via input function
        value = $('#searchbar').val().toUpperCase();

        $("#movie-list > li").each(function() 
        {

            if ( $(this).text().toUpperCase().search(value) >= 0 ) 
            //if ($(this).text().toUpperCase().search(value) > -1) 
            {
                $(this).show();
            }
            else 
            {
                $(this).hide();
            }
        });
    });

});