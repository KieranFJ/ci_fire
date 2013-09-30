    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="front.php">Inventory System</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="front.php">Main Page</a></li>
              <li class="dropdown">
                  <a id="drop1" role="button "class="dropdown-toggle" data-toggle="dropdown" href="#">Reports</a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                      <li><a href="bag_contents_report.php">Bag Contents</a></li>
                      <li><a href="item_report.php">Item Report</a></li>
                      <li><a href="bag_location_report.php">Bag Location Report</a></li>
                      <li><a href="item_destruction_report.php">Destruction Report</a></li>
                  </ul>                  
              <li><a href="bag.php">Bag Management</a></li>
              <li><a href="bag_station_allocation.php">Allocate Bag</a></li>
              <li class="dropdown">
                  <a id="drop2" role="button "class="dropdown-toggle" data-toggle="dropdown" href="#">Add/Update</a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                      <li><a href="item.php">Item</a></li>
                      <li><a href="itemCategories.php">Item Categories</a></li>
                      <li><?php echo anchor('add_update/bag_level', 'Bag Level'); ?></li>
                      <li><?php echo anchor('add_update/station', 'Station'); ?></li>
                  </ul>                  
              </li>
              <li class="dropdown">
                  <a id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown" href="#">Testing</a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                    <li><a href="test.php">Test Item</a></li>
                    <li><a href="destroy.php">Destroy Item</a></li>   
                  </ul>                
              </li>
              <li><?php echo anchor('login/logout', 'Logout')?></li>
              <li><a href="#helpModal" data-toggle="modal">Help</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>