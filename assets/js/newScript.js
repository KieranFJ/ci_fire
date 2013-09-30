$(document).ready(function(){   
    $('form').validate();
    
    $('.form').submit(function(e) {

        e.preventDefault();
        var url = $(this).attr('action'),
            data = $(this).serialize();
            
        var id = $(this).find('.message').attr('id');
        
        if($(this).valid())
        {
            $.ajax({
               type: 'POST',
               url: url,
               data: $(this).serialize(),
               success: function(data)
               {
                   $('#'+id).html(data);
               }
            });
            return false;
        }
    });
    
    $('#load_form').on().change(function(e) {
       
        e.preventDefault();
        var url = $(this).parent().attr('action'),
            data = $(this).parent().serializeArray();
            
        //load() assumes GET unless data passed is an object
        $('#upForm').load(url, data)
    });    
    
    $('#load_form').trigger('change');
});
