<?php include_once 'heading.php';?>



<?php  

$date_f = date('Y-m-d');

$date_t = date('H:i:s');
$date_m = date('m');
$date_d = date('d');
$date_y = date('Y');

?>

<?php
$date_f = date('Y-m-d');
$date_t = date('H:i:s');
$date_m = date('m');
$date_d = date('d');
$date_y = date('Y');

function createRandomPassword() {
    $chars = "001312132303232023232023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }
    return $pass;
}
$finalcode='PRD'.date('d').''.date('Y').''.date('m').''.createRandomPassword();

?>
   <!-- start page title -->
    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Commodity Registration</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Entry</a></li>
                                        <li class="breadcrumb-item active">Commodity</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                        <div class="row">                
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Add Production Schedule</h4>
                                    <h4 style="color: royalblue; font-size:15px; margin-top: 20px;">Production Schedule</h4>

                                    

                                    <div class="table-responsive">
                                        
                                    </div>

                                                <div class="row">

                                                    <div class="col-md-2">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="farmer_name">Farmer Name</label>
                                                                <select id="farmer_name" class="form-select farmer_name" name="farmer_name">
                                                                  <option value="">Select Farmer *</option>
                                                                        <?php  
                                                                            $sql = "SELECT * FROM registrationhubpos WHERE type='Farmer' GROUP BY fname";
                                                                            $query = mysqli_query($conn, $sql);
                                                                        ?>
                                                                        <?php foreach($query as $q){ ?>  
                                                                            <option value="<?php echo $q ['fname'];?>"><?php echo $q ['fname'];?></option>
                                                                        <?php } ?>
                                                            </select>  
                                                            </div>                                        
                                                        </div>
                                                    </div> 

                                                   

                                                    <div class="col-md-2">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="comm_name">Commodity</label>
                                                                <select id="comm_name" class="form-select comm_name" name="comm_name">
                                                                  <option value="">Select Commodity *</option>
                                                                        <?php  
                                                                            $sql = "SELECT * FROM commodity_prod_cms GROUP BY comm";
                                                                            $query = mysqli_query($conn, $sql);
                                                                        ?>
                                                                        <?php foreach($query as $q){ ?>  
                                                                            <option value="<?php echo $q ['comm'];?>"><?php echo $q ['comm'];?></option>
                                                                        <?php } ?>
                                                            </select>  
                                                            </div>                                        
                                                        </div>
                                                    </div> 

                                                    <div class="col-md-2">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="no_hills">No. of Hills</label>
                                                                <input type="number" required class="form-control" id="no_hills" placeholder="Please Enter No. of Hills *">      
                                                            </div>                                        
                                                        </div>
                                                    </div> 

                                                    <div class="col-md-2">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dt_trans">Date Transplanted</label>
                                                                <input type="date" id="dt_trans" required class="form-control">      
                                                            </div>                                        
                                                        </div>
                                                    </div> 

                                                    <div class="col-md-2" style="display:none;">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="encoder_f">Encoder</label>
                                                                <input type="text" id="encoder_f" value="<?php echo $userid;?>" required class="form-control">      
                                                            </div>                                        
                                                        </div>
                                                    </div> 


                                                    
                                                    <div class="col-md-2">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="comm_area">Area</label>
                                                                <select id="comm_area" class="form-select comm_area" name="comm_area">
                                                                  <option value="">Select Lot Area *</option>
                                                                  <option value="Lot 1">Lot 1</option>
                                                                  <option value="Lot 2">Lot 2</option>
                                                                  <option value="Lot 3">Lot 3</option>
                                                                  <option value="Lot 4">Lot 4</option>
                                                                  <option value="Lot 5">Lot 5</option>
                                                                  <option value="Lot 6">Lot 6</option>
                                                                  <option value="Lot 7">Lot 7</option>
                                                                  <option value="Lot 8">Lot 8</option>
                                                                  <option value="Lot 9">Lot 9</option>
                                                                  <option value="Lot 10">Lot 10</option>
                                                                      
                                                            </select>  
                                                            </div>                                        
                                                        </div>
                                                    </div> 

                                                    <div class="col-md-2">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="status_comm_f">Status</label>
                                                                <select id="status_comm_f" class="form-select status_comm_f" name="status_comm_f">
                                                                  <option value="">Select Status *</option>
                                                                  <option value="Committed">Committed</option>
                                                                  <option value="Uncommitted">Uncommitted</option>
                                                                  <option value="Advisory">Advisory</option>
                                                            </select>  
                                                            </div>                                        
                                                        </div>
                                                    </div> 

                                                  <input type="text" id="code_m" value="<?php echo $finalcode;?>" style="display:none;">
                                                    
                                                    
                                                </div>

                                                <div class="row">
                                                    <style>
                                                        #map {
                                                        height: 500px;
                                                        }

                                                        #coordinates {
                                                        width: 100%;
                                                        height: 100px;
                                                        margin-top: 10px;
                                                        }
                                                    </style>

                                                    <!--<div id="map"></div>
                                                    <button onclick="getCurrentLocation()" class="btn btn-success">Get My Location</button> <br>
                                                    <button onclick="clearPolygons()" class="btn btn-primary">Clear Polygons</button>-->
                                                    <textarea class="form-control" id="coordinates" readonly style="display:none;"></textarea>

                                                    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
                                                    <script src="https://unpkg.com/leaflet-draw/dist/leaflet.draw.js"></script>

                                                    <script>
                                                        var map = L.map('map').setView([0, 0], 2);

                                                        // Esri World Imagery with Labels
                                                        var esriLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                                                            attribution: '© Esri'
                                                        }).addTo(map);

                                                        // Esri World Imagery with Labels
                                                        var esriLabelsLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Reference/World_Boundaries_and_Places/MapServer/tile/{z}/{y}/{x}', {
                                                            attribution: '© Esri'
                                                        });

                                                        // Grouping layers for easy switching
                                                        var baseLayers = {
                                                            'Satellite Imagery': esriLayer,
                                                            'Satellite Imagery with Labels': L.layerGroup([esriLayer, esriLabelsLayer]),
                                                            'OpenStreetMap': L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                            attribution: '© OpenStreetMap contributors'
                                                            })
                                                        };

                                                        L.control.layers(baseLayers).addTo(map);

                                                        var drawnItems = new L.FeatureGroup();
                                                        map.addLayer(drawnItems);

                                                        var drawControl = new L.Control.Draw({
                                                            draw: {
                                                            polygon: true,
                                                            marker: false,
                                                            circle: false,
                                                            circlemarker: false,
                                                            polyline: false,
                                                            rectangle: false
                                                            },
                                                            edit: {
                                                            featureGroup: drawnItems
                                                            }
                                                        });

                                                        map.addControl(drawControl);

                                                        map.on('draw:created', function (e) {
                                                            var layer = e.layer;
                                                            drawnItems.addLayer(layer);
                                                            updateCoordinates();
                                                        });

                                                        map.on('draw:edited', function (e) {
                                                            updateCoordinates();
                                                        });

                                                        map.on('draw:deleted', function (e) {
                                                            clearCoordinates();
                                                        });

                                                        function updateCoordinates() {
                                                            var coordinates = [];

                                                            drawnItems.eachLayer(function (layer) {
                                                            if (layer instanceof L.Polygon) {
                                                                var latLngs = layer.getLatLngs()[0];
                                                                latLngs.forEach(function (latLng) {
                                                                coordinates.push([latLng.lat, latLng.lng]);
                                                                });
                                                            }
                                                            });

                                                            document.getElementById('coordinates').value = JSON.stringify(coordinates);
                                                        }

                                                        function clearCoordinates() {
                                                            document.getElementById('coordinates').value = '';
                                                        }

                                                        function getCurrentLocation() {
                                                            if (navigator.geolocation) {
                                                            navigator.geolocation.getCurrentPosition(function (position) {
                                                                var lat = position.coords.latitude;
                                                                var lon = position.coords.longitude;

                                                                map.setView([lat, lon], 15);
                                                                L.marker([lat, lon]).addTo(map);

                                                                // You can do something with the user's location here
                                                            }, function (error) {
                                                                alert("Error getting your location: " + error.message);
                                                            });
                                                            } else {
                                                            alert("Geolocation is not supported by your browser");
                                                            }
                                                        }

                                                        function clearPolygons() {
                                                            drawnItems.clearLayers();
                                                            clearCoordinates();
                                                        }
                                                    </script>
                                                </div>

                                    <div id="schedule_table">

                                    </div>
<br><br>
                                    <button type="button" class="btn btn-success filter_btn" id="filter_btn">Generate Production</button>
                                    <button type="button" class="btn btn-primary submit-btn" id="submit-btn">Save</button>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>

                        
                        <script>
                            $(document).ready(function(){
                            $('#filter_btn').click(function(){
                                var comm_name = $('#comm_name').val();   
                                var farmer_name = $('#farmer_name').val(); 
                                var no_hills = $('#no_hills').val(); 
                                var dt_trans = $('#dt_trans').val();   
                                var coordinates = $('#coordinates').val();     
                                var comm_area = $('#comm_area').val();      
                                var status_comm_f = $('#status_comm_f').val();    
                                var code_m = $('#code_m').val();    
                                var encoder_f = $('#encoder_f').val();                                    
                                    $.ajax({
                                        url:"productionmonitoringaddfetch.php",
                                        method:"POST",
                                        data:{encoder_f:encoder_f,comm_name:comm_name,farmer_name:farmer_name,no_hills:no_hills,dt_trans:dt_trans,coordinates:coordinates,comm_area:comm_area,status_comm_f:status_comm_f,code_m:code_m},
                                        success:function(data){
                                            $('#schedule_table').html(data);
                                        }
                                    });
                                });
                            });
                        </script>
                     
                    
                      

                    
                        <script>
                            document.getElementById("table-coef-query").addEventListener("click", function (event) {
                                if (event.target.classList.contains("delete-btn")) {
                                    var rowId = event.target.closest("tr").id;
                                    deleteRow(rowId);
                                }
                            });

                            document.getElementById("add-btn").addEventListener("click", function () {
                                var tableBody = document.getElementById("table-coef-query");
                                var clonedRow = tableBody.querySelector("tr:first-child").cloneNode(true);

                                var newRowId = "row-" + (tableBody.childElementCount + 1);
                                clonedRow.id = newRowId;

                                // Fetch the random code from the original row
                                var originalRandomCode = document.querySelector('input[name="code[]"]').value;

                                // Update all cloned td elements
                                clonedRow.querySelectorAll('td input').forEach(function (input) {
                                    input.value = '';
                                });

                                // Update the random code for the cloned row
                                clonedRow.querySelector('input[name="code[]"]').value = originalRandomCode;

                                var deleteButton = document.createElement("button");
                                deleteButton.type = "button";
                                deleteButton.className = "btn btn-danger delete-btn";
                                deleteButton.textContent = "Delete";
                                deleteButton.addEventListener("click", function () {
                                    deleteRow(newRowId);
                                });

                                clonedRow.appendChild(document.createElement("td")).appendChild(deleteButton);
                                tableBody.appendChild(clonedRow);
                            });

                            function deleteRow(rowId) {
                                var rowToDelete = document.getElementById(rowId);
                                rowToDelete.parentNode.removeChild(rowToDelete);
                            }

                            function updateDH() {
                                var dbhValue = document.getElementById("dbh").value;
                                document.querySelectorAll('input[name="dh[]"]').forEach(function (input) {
                                    input.value = dbhValue;
                                });
                            }

                            function updateDR() {
                                var dbrValue = document.getElementById("dbr").value;
                                document.querySelectorAll('input[name="dr[]"]').forEach(function (input) {
                                    input.value = dbrValue;
                                });
                            }

                            function updateDTS() {
                                var dtsValue = document.getElementById("dts").value;
                                document.querySelectorAll('input[name="date_created[]"]').forEach(function(input) {
                                    input.value = dtsValue;
                                });
                            }

                            function updateMTD() {
                                var mtdValue = document.getElementById("mtd").value;
                                document.querySelectorAll('input[name="mat_days[]"]').forEach(function (input) {
                                    input.value = mtdValue;
                                });
                            }

                            function updateCMN() {
                                var cmnValue = document.getElementById("comm_name").value;
                                document.querySelectorAll('input[name="comm[]"]').forEach(function (input) {
                                    input.value = cmnValue;
                                });
                            }

                             function updateFQY() {
                                var selectedDays = [];
                                var selectedOptions = document.querySelectorAll('#selected_days option:checked');
                                
                                selectedOptions.forEach(function(option) {
                                    selectedDays.push(option.value);
                                });

                                var selDays = document.getElementById("days_in_week").value = selectedDays.join(', ');
                                document.querySelectorAll('input[name="days_in_week[]"]').forEach(function (input) {
                                    input.value = selDays;
                                });
                            }

                            // Attach event listeners to the input elements
                            document.getElementById("dbh").addEventListener("input", updateDH);
                            document.getElementById("dbr").addEventListener("input", updateDR);
                        </script>

                  
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        


<?php include_once 'footer.php';?>