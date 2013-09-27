<div class="container"> 	
    <h1>Bag Level</h1>
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#update" data-toggle="tab">Update</a></li>
        <li class><a href="#addNew" data-toggle="tab">Add New</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="update">    
            <?php 
            
            echo form_open('add_update/load_form','', array(
                'origin' => 'get_bag_level_form'
            ));                     
            
            ?>            
            <h2>Update Level</h2>
            <label>Select Bag Level</label>

            <?php 
            
            foreach($bag_levels as $row) {
                $bag_key[] = $row;
                $bag_value[] = $row;                
            }
            
            $bag_out = array_combine($bag_key, $bag_value);

            echo form_dropdown('levelSelect', $bag_out, '', 'id="load_form"');
            
            echo form_close();
            
            echo form_open('add_update/update_level', array('class' => 'form'));
            
            ?>            
            <div class="row">                    
                <div id="upForm" class="span4">
                </div>
                <div id="message" class="span2 message">
                </div>
            </div>
            <div class="form-actions">
                <?php 
                echo form_button(array(
                   'type' => 'submit', 
                   'class' => 'btn btn-primary',                   
                   'content' => 'Submit')
                );
                ?>
            </div>  
            
            <?php 
            
            echo form_close();
            
            ?>
        </div>
        <div class="tab-pane" id="addNew">        
            <?php 
            
            echo form_open('add_update/add_level', array('class' => 'form'));
            
            ?>
            <h2>New Level</h2> 
            <div class="row">                         
                <div class="span3">                          
                <label>Level Name</label>
                <?php 
                
                echo form_input(array(
                    'class' => 'required',
                    'name' => 'levelName',
                    'type' => 'text',
                    'maxlength' => '10',
                    'minlength' => '1',
                    'placeholder' => 'Level name')
                );
                ?>
                <label>Number of Items</label>
                <?php 
                
                echo form_input(array(
                    'class' => 'required digits',
                    'name' => 'noItems',
                    'placeholder' => 'Number of items contained',
                    'maxlength' => 5,
                    'minlength' => 1,
                    'type' => 'text')                    
                );
                
                ?>
                <label>Description</label>
                <?php 
                
                echo form_textarea(array(
                   'class' => 'required',
                    'name' => 'description',
                    'rows' => 3,
                    'placeholder' => 'Description of level type')
                );
                ?>
                </div>
                <div class="span2">
                    <div id="message">
                    </div>
                </div>

            </div>
            <div class="form-actions">
                <?php 
                echo form_button(array(
                   'type' => 'submit',
                   'class' => 'btn btn-primary',                   
                   'content' => 'Submit')
                );
                ?>
            </div>            
            <?php 
            
            echo form_close();
            
            ?>
        </div>
    </div>
</div>