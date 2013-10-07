<div class="container">
    <h1>Item Category</h1>    
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#update" data-toggle="tab">Update</a></li>
        <li class><a href="#addNew" data-toggle="tab">Add New</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="update">
            <h2>Update Item Categories</h2>
            <label>Select Item Type</label>
            <?php 

            echo form_open('add_update/load_form', '', array(
                'origin' => 'get_category_details_form'
            ));


            if(isset($category_names)) {
                foreach($category_names as $row) {
                    $key[] = $row;
                    $value[] = $row;
            }

            $out = array_combine($key, $value);

            echo form_dropdown('categorySelect', $out, '', 'id="load_form"');

            } else {
                echo form_dropdown();                    
            }

            echo form_close();

            echo form_open('add_update/update_category', array('class' => 'form'));
            ?> 
                <div class="row">
                    <div id="upForm">
                    </div>  
                    <div class="span2">
                        <div id="message1" class="message">
                        </div>
                    </div>
                </div>  
                <div class="form-actions">
                    <button class="btn btn-primary btn-large" type="submit">Update Entry</button>
                </div>
            </form> 
        </div>
        <div class="tab-pane" id="addNew"> 
            <?php 
            
            echo form_open('add_update/add_category', array('class' => 'form'))
            
            ?>
                <h2>Add Category</h2>
                <div class="row">
                    <div class="span3">
                        <label>Category Name</label>                
                        <input class="required" name="categoryName" type="text" placeholder="Category Name of Item">              
                        <label>Description</label>
                        <textarea class="required" rows="3" name="categoryDescription" placeholder="Description of Item"></textarea>
                        <label>Make/Model</label>
                        <input class="required" type="text" name="categoryModel" placeholder="Make/Model"></input>
                        
                    </div>
                    <div class="span3">
                        <label>Manufacturer</label>
                        <input class="required" name="categoryManufacturer" type="text" placeholder="Manufacturer"></input>
                        <label>Contact Number</label>
                        <input class="required" name="categoryContactNo" type="text" placeholder="Contact Number"></input>
                        <label>Address</label>                
                        <textarea class="required" rows="3" name="categoryAddress" placeholder="Address"></textarea></div>
                    <div class="span2">
                        <div id="message2" class="message">                            
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            <?php 
            
            echo form_close()
            
            ?>
        </div>
    </div>
</div>