
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    	
 <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/navbar-fixed-top/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body onload="comments()">




<form id="myForm" method="post" action="Entry_Form.php" enctype="multipart/form-data" autocomplete="off">
  	
                       <form name="form1"  action="Entry_Form.php" method="post"  enctype="multipart/form-data" autocomplete="off">
             	
 

    <!-- Fixed navbar -->
    <div style="background-color:#00afc9;">
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#00afc9;border:none;width:100%;">
      <div class="container" >
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <img src="reusing-drraft-13.04-04.png"  style="margin-top:7%;height:20%;width:20%;border-top:hidden;" />
        </div>
        </div>
        <div class="container">
        <div id="navbar" class="navbar-collapse collapse" style="float:right;margin-top:-4%;">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;margin-left:8%;">HOME</a></li>
            <li><a href="#works" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;">LEARN MORE ABOUT THE SITE</a></li>
            <li><a href="http://www.facebook.com" target="_blank"><img style="float:!important;" href="www.facebook.com" src="facebook.png"></img></a></li>
               <li><a href="http://www.twitter.com" target="_blank"><img style="float:!important" href="www.twitter.com"  src="twitter.png"></img></a></li>
           
       
          </ul>
        
        </div><!--/.nav-collapse -->
        </div>
      </div>
    </nav>
   </div>
    
  
   <div class="container-fluid"  style="height:100%;width:100%;" >
    <div class="row-fluid">
        <div  class="span3">
		 <ul  class="nav nav-list">		
      <input type="hidden" name="lat1" ID="lat" value ="default" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" value ="default" size="40"><br><br/><br/>
          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;" class="well sidebar-nav">
            
           
             
            
            <div id="map-canv"   style="height:300px;width:100%;float:left;" ></div> 
            
   <div id="map-canvas"  style="height:150px;width:150px;float:left;margin-top:-130px;margin-left:50px;" >   </div>
            </div>
            <br/>
    <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;">
    Have you an Idea for the Site?
        <br/>

         </b>
      <br/>
      <label>
       
       
  <textarea name="comments" id="comments"   style="background-color:#FFF;height:240px;width:100%;float:left;margin-left:40px;" wrap="hard"  placeholder="Enter your Idea regarding the Site/Location here"></textarea> 
  </label> 
   <br/><br/>
 <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:60px;">
    Tell me something about this Site/Location as Suggested Below(Example Questions):
        <br/>
         </b>
      <br/>
      <label>
       
   <textarea name="questions" id="question1" style="margin-left:40px;background-color:#FFF;height:240px;width:40%;" wrap="hard" readonly>
  
  Why do you think this site is in its current condition?
  What has the site been previously used for?
  How long has the site been in this condition?
  Is there any activity on the site?
  What is the physical condition of the site?
  What is happening on this site?
  What is happening around the site?
  What are the surrounding buildings used for?
  Is there access to this site?
    </textarea> 
    
  <textarea name="comment" id="commen"   style="margin-left:55%;background-color:#FFF;height:240px;width:43%;float:left;margin-top:-240px;margin-right:2%;" wrap="hard"  placeholder="Enter your Information regarding the Site/Location here"></textarea> 
  </label> 
   <br/><br/>

      
   
   
    </div>
 


 
 
   
     
     <input type="button"  style="color:#FFF;margin-left:40px;" onclick="poppp()"  class="btn btn-primary btn-large"value="Add a Photo"/>
    
   <br/><br/>
  <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
     Address:
     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:100%;border:solid 1px;" name="address" id="address" placeholder=" Enter a valid address" required / >
    </label>
     <br/>  <br/>
      <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
     Ownership Details:
















     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:100%;border:solid 1px;" name="address1" id="address1"  / >
    </label>
     <br/>  <br/>
      <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
     Zoning :
     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:100%;border:solid 1px;" name="address2" id="address2"   / >
    </label>
     <br/>  <br/>
      <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
    Planning History:
     </b>
     <br/>  <br/>
      <label>
      
      <input type="text" style="margin-left:40px;;width:100%;border:solid 1px;" name="address3" id="address3"   / >
    </label>
     <br/>  <br/>
      <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
     Size / Area (Sqm):
     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:100%;border:solid 1px;" name="address4" id="address4"  onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"   / >
       <span id="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
    </label>
     <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
		 specialKeys.push(190);
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57 || keyCode == 46 ) || (specialKeys.indexOf(keyCode) != -1));
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>
     
     <br/>  <br/>
      <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
    Heritage Designation:
     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:100%;border:solid 1px;" name="address5" id="address5" / >
    </label>
     <br/>  <br/>
       <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
    Is the site officially derelict? 
     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:100%;border:solid 1px;" name="address6" id="address6"  / >
    </label>
    
       <br/>  <br/>
    
    

       
   
   
 
    
   </div>
     </ul>
          </div><!--/.well -->
        </div><!--/span-->
</div><!

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
