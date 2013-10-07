<div class="span3">
    <label>Category Name</label>
    <input class="required" name="categoryName" type="text" placeholder="Category Name of Item" value="<?php echo $out->Category_Name; ?>"></input>
    <label>Description</label>
    <textarea class="required" rows="3" name="categoryDescription" placeholder="Description of Item"><?php echo $out->Category_Description;  ?></textarea>
    <label>Make/Model</label>
    <input class="required" type="text" name="categoryModel" placeholder="Make/Model" value="<?php echo $out->Category_Model;  ?>"></input>
</div>
<div class="span3">
    <label>Manufacturer</label>
    <input class="required" name="categoryManufacturer" type="text" placeholder="Manufacturer" value="<?php echo $out->Category_Manufacturer; ?>"></input>
    <label>Contact Number</label>
    <input class="required" name="categoryContactNo" type="text" placeholder="Contact Number" value="<?php echo $out->Category_Contact_No; ?>"></input>
    <label>Address</label>                
    <textarea class="required" rows="3" name="categoryAddress" placeholder="Address"><?php echo $out->Category_Address;  ?></textarea>
</div>