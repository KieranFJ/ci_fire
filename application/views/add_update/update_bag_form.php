
<?php 

echo form_hidden('levelID', $out->Level_ID);


?>
<label>Bag Level</label>
<input type="text" class="required" minlength="1" name="levelName" value="<?php echo $out->Level_Name ?>"></input>
<label>Number of Items</label>
<input class="required digits" maxlength="5" minlength="1" type="text" name="noItems" value="<?php echo $out->Level_No_Items ?>">
<label>Description</label>
<textarea rows="4" name="description" class="required"><?php echo $out->Level_Desc ?></textarea>
</div>