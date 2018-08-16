$(document).ready(function(){
    $.ajax({
        method: "GET",
        url: "/api/users"
    })
    .done(function( msg ) {
          //Echo JSON Data to the page. 
          //It would be great to parse it with parseJSON later.
          $('.json').html(msg);
    });
    
    $('.delete').click(function(e){
        e.preventDefault();

        var row = $(this).parents('.user');
        var user = row.attr('id');

        console.log(user);

        $.ajax({
            method: "DELETE",
            url: "/api/users/"+user
        })
        .done(function( msg ) {
            if(msg == 'ok'){
                //Kill the row.
                row.fadeOut('fast',function(){
                    row.remove();
                });
            }
        });
    });

    
});