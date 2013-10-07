<div class="container">
    <h1>Stations</h1>    
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#update" data-toggle="tab">Update</a></li>
        <li class><a href="#addNew" data-toggle="tab">Add New</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="update">
            <h2>Update Stations</h2>
            <label>Select Station</label>
            <?php 
            
            echo form_open('add_update/load_form', '', array(
                'origin' => 'get_station_details_form'                
            ));
            
            if(isset($station_names)) {
                foreach($station_names as $row) {
                    $key[] = $row;
                    $value[] = $row;
                }
                
                $out = array_combine($key, $value);
            
                echo form_dropdown('stationSelect', $out, '', 'id="load_form"');
            } else {
                echo form_dropdown();
            }
            
            echo form_close();
            
            echo form_open('add_update/update_station', array('class' => 'form'));
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
                <button class="btn btn-primary">Submit</button>
            </div>
            </form> 
        </div>
        <div class="tab-pane" id="addNew">       
            <?php 
            
            echo form_open('add_update/add_station', array('class' => 'form'))
            
            ?>
            <h2>Add Station</h2>
            <div class="row">
                <div class="span3">
                    <label>Station Number</label>
                    <input class="required" name="stationNumber" type="text" placeholder="Station Number">   
                    <label>Station Name</label>
                    <input class="required" name="stationName" type="text" placeholder="Station Name"> 
                    <label>Station Level</label>
                    <input class="required" name="stationLevel" type="text" placeholder="Station Level">                     
                    <label>Address</label>                
                    <textarea class="required" rows="3" name="stationAddress" placeholder="Address"></textarea>
                </div>
                <div class="span3">
                    <label>Contact Name</label>                
                    <input class="required" name="stationContact" type="text" placeholder="Contact Name">   
                    <label>Station Contact Number</label>
                    <input class="required" name="stationLandNo" type="text" placeholder="Station Contact Number"></input>
                    <label>Mobile Contact Number</label>
                    <input class="required" name="stationMobileNo" type="text" placeholder="Mobile Contact Number"></input>                    
                </div>
                <div class="span2">
                    <div id="message2" class="message">
                    </div>                     
                </div>
            </div>
            <div class="form-actions">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
            <?php 
            
            echo form_close();
            
            ?>
        </div>
    </div>
</div>