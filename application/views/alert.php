<?php 

switch($type) {
    
    case 0: $class = "span2 alert alert-error fade in";
            break;
        
    case 1: $class = "span2 alert fade in";
            break;
        
    default: $class = "span2 alert alert-error face in";
             $message = "Unknown Error: ".$message;
             break;
}

?>
<script type="text/javascript">
    $('.alert').alert();
</script>
<div class="<?php echo $class; ?>">
    <?php echo $message; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>

<script type="text/javascript">
    $('.alert').fadeOut(3000);
</script>
