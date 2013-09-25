//$(document).ready(function() {
//    $('form').validate();
//    
//    $('form').submit(function(e) {
//       e.preventDefault();
//       
//       var id = $(this).attr('id'),
//           action = $(this).attr('action');
//           
//       if($('#'+id).valid()) {
//           $('#'+id).find('div.message').load(action, $('#'+id).serializeArray());
//       }
//    });
//});

$(document).ready(function(){
   
    $(".form").validate();
    
    
});

$(".form").submit(function(e){  
        e.preventDefault();
        var id=$(this).attr('id'),
            action=$(this).attr('action');
        
        if($("#"+id).valid()){
            $('#'+id).find('div.message').load(action, $('#'+id).serializeArray());            
        }    
    });