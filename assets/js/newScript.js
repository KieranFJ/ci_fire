

$(document).ready(function(){   
    
    $("#submit").click(function(e) {

        e.preventDefault();
        var url = $(this).closest('form').attr('action');

        $.ajax({
           type: "POST",
           url: url,
           data: $(this).closest('form').serialize(),
           success: function(data)
           {
               $('#message').html(data);
           }


        });

       return false;
    });    
    
});
