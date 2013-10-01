<div class="span3">
    <label>Station Number</label>
    <input class="required" name="stationNumber" type="text" value="<?php echo $out->Station_Number; ?>">                      
    <label>Station Name</label>
    <input type="text" class="required" minlength="1" name="stationName" value="<?php echo $out->Station_Name; ?>"></input>
    <label>Station Level</label>
    <input class="required" name="stationLevel" type="text" value="<?php echo $out->Station_Level; ?>">                                   
    <label>Address</label>
<textarea rows="4" name="address" class="required"><?php echo $out->Station_Address; ?></textarea>  
</div>
<div class="span3">
    <label>Contact Name</label>
    <input type="text" class="required" minlength="1" name="contactName" value="<?php echo $out->Station_Contact; ?>"></input>
    <label>Station Contact Number</label>
    <input type="text" class="required" minlength="1" name="stationNo" value="<?php echo $out->Station_Land_No; ?>"></input>
    <label>Mobile Contact Number</label>
    <input type="text" class="required" minlength="1" name="mobileNo" value="<?php echo $out->Station_Mobile_No; ?>"></input>
</div>