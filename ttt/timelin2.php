<?php
if(isset($_POST['added']))
{
	
	
    $latitude = mysqli_real_escape_string($con, $_POST['lat1']);
    $longitude = mysqli_real_escape_string($con, $_POST['lon1']);



 $file1 = $_FILES['uploadfile'];
 

 $file_path1 = $file1['tmp_name'];
 $file_name1 = $_FILES['pic1']['name'];
 $file_type1 = $file1['type'];
 $file_id1 = $file1['tmp_name'];


move_uploaded_file($file_path1,'images/'.$file_name1);
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>
   Timeline 
  </title>
   <style type="text/css">
   .modal-body {
    max-height: 800px;
}
     #map_canvas {
        
        height: 380px;
      }
	   .controls1 {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
        margin-left: -1px;
        padding-left: 14px;  /* Regular padding-left + 1. */
        width: 401px;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300
	  }

</style>
  <meta name="description" content="TimeMapper - Make Timelines and TimeMaps fast! - from the Open Knowledge Foundation Labs" />

  <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- offline use -->
  <!--
  <link href="/vendor/bootstrap/2.2.2/bootstrap.css" rel="stylesheet">
  <link href="/vendor/bootstrap/2.2.2/bootstrap-responsive.css" rel="stylesheet">
  -->
  <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
  <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
  <!-- okf ribbon -->
  <link rel="stylesheet" href="http://assets.okfn.org/themes/okfn/okf-panel.css"/>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
     <script type="text/javascript" src="../lib/jquery-1.6.2.min.js"></script>


  
  <!-- Open links in new window/tab by default -->
  <base target="_blank" />

  <link rel="stylesheet" href="http://timemapper.okfnlabs.org//vendor/recline/vendor/leaflet/0.4.4/leaflet.css">
  <!--[if lte IE 8]>
  <link rel="stylesheet" href="/vendor/recline/vendor/leaflet/0.4.4/leaflet.ie.css" />
  <![endif]-->
  <link rel="stylesheet" href="http://timemapper.okfnlabs.org//vendor/recline/vendor/leaflet.markercluster/MarkerCluster.css">
  <link rel="stylesheet" href="http://timemapper.okfnlabs.org//vendor/recline/vendor/leaflet.markercluster/MarkerCluster.Default.css">

  <link rel="stylesheet" href="http://timemapper.okfnlabs.org//vendor/leaflet.label/leaflet.label.css" />

  <link rel="stylesheet" href="http://timemapper.okfnlabs.org//vendor/recline/vendor/timeline/css/timeline.css">

  <!-- Recline CSS components -->
  <link rel="stylesheet" href="http://timemapper.okfnlabs.org//vendor/recline/dist/recline.css">
 

   


  <!-- /Recline CSS components -->


  <!-- Custom CSS for the TimeMapper Online App -->
  <link rel="stylesheet" href="http://timemapper.okfnlabs.org/css/style.css">
</head>
<script type="text/javascript">
var map;
   function postContactToGoogle() {
            var title = $('#title').val();
            var description = $('#description').val();
            var latitude = $('#latitude').val();
            var longitude = $('#longitude').val();
			var dates = $('#dates').val();
			var enddate = $('#enddate').val();
			var location = $('#location').val();
			var str =  $('#uploadfile').val();
		    var n = str.lastIndexOf("/");
            var result = str.substring(n + 1);
			alert(n);
			                $.ajax({
                    url: "https://docs.google.com/forms/d/1K1K-pePiTCvzNsWikOkqqr-JLDBgK94TbTcOl_oopVI/formResponse",
                    data: { "entry.638654042": 
                    latitude, "entry.1096711903": longitude ,"entry.1109094520": dates,"entry.1077049954": enddate,"entry.211131386" : title,
					"entry.531418752" : description, "entry.170212528" : location},
                    type: "POST",
                    dataType: "xml",
                    statusCode: {
                        0: function () {
                            window.location.replace("ThankYou.html");
                        },
                        200: function () {
                            window.location.replace("ThankYou.html");
                        }
                    }
                });
        }
 function initialize() {

 var myLatLng = new google.maps.LatLng(53.344103999999990000,-6.267493699999932000);
    var myOptions = {
      zoom: 10,
      center: myLatLng
    
    }
map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
var input = (document.getElementById("pac-input"));
map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));
var markers1= [];
  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
	
    var places = searchBox.getPlaces();
    for (var i = 0, marker; marker = markers1[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
   
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

      markers1.push(marker);

      bounds.extend(place.geometry.location);
    }

    map.fitBounds(bounds);
  });
   google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
  google.maps.event.addListener(map, 'click', function(event) {
var location = event.latLng;
var lat1 = location.lat();
var lon1 = location.lng();
sessionStorage.setItem("lll", lat1);
sessionStorage.setItem("llll", lon1);
document.getElementById("latitude").value = lat1;
document.getElementById("longitude").value = lon1;

  });

 }
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<body onload="initialize()" class="view">


  <div class="container">
    


 <div class="col-xs-3" >
              <!-- Button to trigger modal --> 
    <a href="#myModal" role="button" class="btn btn-primary btn-large btn-block" data-toggle="modal" align="left" style="width:150px;">Add Entry</a>
    <!-- Modal -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" align="center" style="width:90%;height:100%;" >
        <div class="modal-content" align="center" >
        <div class="modal-header" align="center" >
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="background-color:#0FF;color:#F00;">Add Entry</h4>
          

        </div>
        
        <div class="modal-body">
          
<form class="form-horizontal" name="commentform" method="post" action="https://docs.google.com/forms/d/1K1K-pePiTCvzNsWikOkqqr-JLDBgK94TbTcOl_oopVI/formResponse" align="center">
  <div class="form-group" >
     </br>
     
<input id="pac-input" class="controls1" type="text"  placeholder="Search Box">
<div id="map_canvas"  style="width:100%;float:right;"></div>
    </br>
    <div class="form-group" >
     </br>
    
        <label class="control-label col-md-4" for="title" style="margin-top:10px;">Title</label>
       </br>
         </br>
      
                     <input type="text" class="form-control" style="margin-top:10px;margin-left:2px;" id="title" name="title" placeholder="Enter Title"/>
              </br>
       
    </div>
    
    
    
        <div class="form-group">
         </br>
        <label class="control-label col-md-4" for="description">Description</label>
        
        <div class="col-md-6">
        
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description"/>
              </br>
        </div>
    </div>
     <div class="form-group">
         </br>
        <label class="control-label col-md-4" for="latitude">Latitude</label>
        
        <div class="col-md-6">
            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Enter Latitude"/>
              </br>
        </div>
    </div>
    
     <div class="form-group">
         </br>
        <label class="control-label col-md-4" for="longitude">Longitude</label>
        
        <div class="col-md-6">
            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Enter Longitude"/>
              </br>
        </div>
    </div>
      <div class="form-group">
         </br>
        <label class="control-label col-md-4" for="dates">Start Date</label>
        
        <div class="col-md-6">
            <input type="date" class="form-control" id="dates" name="dates" placeholder="Enter Longitude"/>
              </br>
        </div>
    </div>
      <div class="form-group">
         </br>
        <label class="control-label col-md-4" for="enddate">End Date</label>
        
        <div class="col-md-6">
            <input type="date" class="form-control" id="enddate" name="enddate" placeholder="Enter Longitude"/>
              </br>
        </div>
    </div>
      
         </br>
        <label class="control-label col-md-4" for="location">Location</label>
        
        
            <input type="text" class="form-control" id="location" style="margin-left:4px;" name="location" placeholder="Enter Location"/>
              </br>
       
   
    
      <div class="form-group">
         </br>
        <label class="control-label col-md-4" for="uploadfile">Upload File</label>
        
        <div class="col-md-6">
            <input type="file" class="form-control" id="uploadfile" name="uploadfile" placeholder="Upload File"/>
              </br>
        </div>
    </div>
      <div class="form-group">
         </br>
        <label class="control-label col-md-4" for="uploadphoto">Upload Photograph</label>
        
        <div class="col-md-6" style="margin-left:10px;">
            <input type="file" class="form-control" id="uploadphoto" name="uploadphoto" placeholder="Upload Photograph"/>
              </br>
        </div>
    </div>
    
     
    
    
    
     </br>
    <div class="form-group">
        <div class="col-md-6" align="center">
           <input id="ButtonSubmit" class="btn btn-primary btn-large btn-block" style="width:150px;"  onclick="postContactToGoogle()" 
type="submit" >Send</button>
        </div>
    </div>
</form>     
   </div><!-- End of Modal body -->
        </div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->
</div>
</div>



<div class="container">
<div class="content">


<div class="data-views">
  <div class="controls">
    <div class="toolbox hideme">
      <form action="" method="GET" class="form-inline">
        <div class="input-append text-query">
          <input type="text" name="q" value="" class="span3" placeholder="Search data ..." class="search-query" />
          <a class="js-show-toolbox" href="#"><span class="add-on"><i class="icon-search"></i></span></a>
        </div>
      </form>
    </div>
  </div>
  <div class="panes">
    <div class="timeline-pane">
      <div class="timeline"></div>
      &nbsp;
    </div>
    <div class="map-pane">
      <div class="map"></div>
    </div>
  </div>
</div>

</div>

<div class="loading js-loading"><i class="icon-spinner icon-spin icon-large"></i> Loading data...</div>

  </div>
</div> <!-- /content -->
</div> <!-- / container-fluid -->

<div class="footer">
  
  <a href="http://timemapper.okfnlabs.org/anon/gocu1r-medieval-philosophers-timeliner">Medieval Philosophers - Timeliner</a> by <a href="http://timemapper.okfnlabs.org/anon">anon</a> using <a href="http://timemapper.okfnlabs.org/">TimeMapper</a>
  
  &ndash;
  <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons Attribution">License</a>
  
  &ndash;
  <a href="https://docs.google.com/spreadsheets/d/1MCTVMlnYCqJV6IguLwAtFowPyUATO6Tb50a8MYukxYU/edit#gid=1962735018">Source Data</a>

</div>

<script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/jquery/1.7.1/jquery.js"></script>
<script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/underscore/1.4.4/underscore.js"></script>
<script src="http://assets.okfn.org/themes/okfn/collapse.min.js" type="text/javascript"></script>
<script src="http://assets.okfn.org/themes/okfn/okf-panel.js" type="text/javascript"></script>

<script type="text/javascript">
  // define global TM object and set some config
  var TM = TM || {};
  TM.locals = {
    currentUser: ""
  };
</script>


  <script type="text/javascript">
    var VIZDATA = {"licenses":[{"type":"cc-by","name":"Creative Commons Attribution","version":"3.0","url":"http://creativecommons.org/licenses/by/3.0/"}],"resources":[{"backend":"gdocs","url":"https://docs.google.com/spreadsheets/d/1MCTVMlnYCqJV6IguLwAtFowPyUATO6Tb50a8MYukxYU/edit#gid=1962735018"}],"title":"Medieval Philosophers - Timeliner","tmconfig":{"viewtype":"timemap","dayfirst":true,"startfrom":"start"},"owner":"anon","name":"gocu1r-medieval-philosophers-timeliner","_last_modified":"2015-02-27T16:15:06.644Z","_created":"2015-02-27T16:15:06.644Z"};
  </script>
  <!-- 3rd party JS libraries -->
  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/jquery/1.7.1/jquery.js"></script>
  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/underscore/1.4.4/underscore.js"></script>
  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/underscore.deferred/0.4.0/underscore.deferred.js"></script>
  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/backbone/1.0.0/backbone.js"></script>
  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/moment/2.0.0/moment.js"></script>
  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/mustache/0.5.0-dev/mustache.js"></script>
  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/bootstrap/2.0.2/bootstrap.js"></script>
  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/leaflet/0.4.4/leaflet.js"></script>
  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/leaflet.markercluster/leaflet.markercluster.js"></script>
  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/vendor/timeline/js/timeline.js"></script>
  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/leaflet.label/leaflet.label.js"></script>

  <script type="text/javascript" src="http://timemapper.okfnlabs.org//vendor/recline/dist/recline.js"></script>
  <script type="text/javascript" src="http://okfnlabs.org/recline.backend.gdocs/backend.gdocs.js"></script>

  <!-- non-library javascript specific to this demo -->
  <script type="text/javascript" src="http://timemapper.okfnlabs.org/js/view.js"></script>


<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33874954-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
