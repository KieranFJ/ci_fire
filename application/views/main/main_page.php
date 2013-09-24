<div class="container">
    <div class="row">
        <div class="span5">
            <h3>Quick Item Search</h3>
            <form class=".form-search" method="post" id="form-typeahead">
                <input autocomplete="off" class="input-large search-query searchGet" type="text" id="typeahead" data-provide="typeahead" name="search" placeholder="Serial Number">
                <button id="type-submit" type="submit" class="btn btn-danger" onclick="fillSearchForm('php/reports/quick_item_search.php')">Search</button>
            </form>            
            <div class="row">
                <div id="searchUpForm">
                </div>       
                <div class="message span4"> 
                </div>                            
            </div>
        </div>
        <div class="span5">
                <div class="row">
                <div class="span5">
                    <h3>Upcoming End of Life (30 Days)</h3>
                    
                    
                    <table class="table table-bordered">
                        <tr>
                            <th>Serial Number</th><th>Next Test Date</th>
                        </tr>
                        <tr>                            

                        </tr>
                    </table>                 
                    
                </div>

                <div class="span5">
                    <h3>Upcoming Tests (30 Days)</h3>
                    
                    <table class="table table-bordered">
                        <tr>
                            <th>Serial Number</th><th>Next Test Date</th>
                        </tr>
                        <tr>                           

                        </tr>
                    </table>
                    
                </div>    
            </div>
        </div>
    </div>