
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
      <div style="background-color:#00afc9;">
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#00afc9;border:none;width:100%;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
            <li><a href="#" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;margin-left:8%;">HOME</a></li>
            <li><a href="#works" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;">LEARN MORE ABOUT THE SITE</a></li>
            <li><a href="http://www.facebook.com" target="_blank"><img style="float:!important;" href="www.facebook.com" src="facebook.png"></img></a></li>
               <li><a href="http://www.twitter.com" target="_blank"><img style="float:!important" href="www.twitter.com"  src="twitter.png"></img></a></li>
           
       
          </ul>
        
        </div><!--/.nav-collapse -->
        </div>
      </div>
    </nav>
   </div> 
  

    <div class="container">
  <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;" class="well sidebar-nav">
            
           
             
            
            <div id="map-canv"   style="height:300px;width:100%;float:left;" ></div> 
            
   <div id="map-canvas"  style="height:150px;width:150px;float:left;margin-top:-130px;margin-left:50px;" >   </div>
            </div>
            <br/>
             
         
        
                    
         <div style="margin-left:100px;margin-top:0px;font-family: Arial, Helvetica, sans-serif;font-weight:bold;background-color:#f4e851;border-color:#f4e851; font-weight:1000;font-size:30px;">
  <?php echo $msg ?>
  </div></br>
  </br>
                  
        <div style="width:90%;float:left;background-color:inherit;border:hidden;opacity:0%;margin-top:20px;" >
     
    
   
     
           
             
 
         
      
            <div style="background-color:#FFF;margin-left:2%;border:hidden;float:left;width:65%;opacity:0%;margin-top:10px;" class="well sidebar-nav">
      
       
  <textarea name="comments" id="comments"   style="background-color:#FFF;height:240px;width:100%;float:left;margin-left:40px;position:inherit;" wrap="hard"  placeholder="Enter your Idea regarding the Site/Location here"></textarea> 
  </label>       
                </div>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:semibold;">
                    Ownership Details:
                </div>
                <div class="lot-detail-information-item-value">
                    <p class="test" name="comment1" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:regular;" id ="addres2"></p> 
  
                </div>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:semibold;">
                   Zoning:
                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment2" style="font-family:'Source Sans Pro', sans-serif;font-size:14px;color:#036A78;font-weight:regular;" id ="addres3"></p>  
  
                </div>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:semibold;">
                   Planning History:
                           
                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment3" style="font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:regular;color:#036A78;" id ="addres4"></p>  
  
                </div>
            </div>
            
                  <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:semibold;">
                  Size / Area (Sqm):
                </div>
                <div class="lot-detail-information-item-value">
                <p class="test" name="comment4" style="font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:regular;color:#036A78;" id ="addres5"></p> 
                </div>
            </div>
            <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:semibold;">
               Heritage Designation:
                </div>
                <div class="lot-detail-information-item-value">
                <p class="test" name="comment5" style="font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:regular;color:#036A78;" id ="addres6"></p> 
                </div>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:semibold;">
               Is the site officially derelict?:
                </div>
                <div class="lot-detail-information-item-value">
                <p class="test" name="comment6" style="font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:regular;color:#036A78;" id ="addres7"></p>  
                </div>
            </div>
               <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:semibold;">
               Description:
                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment7" style="font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:regular;color:#036A78;" id ="addres8"></p>
                </div>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:semibold;">
              Suggested Uses:
                </div>
                <div class="lot-detail-information-item-value">
                    <p class="test" name="comment8" style="font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:regular;color:#036A78;" id ="addres9"></p>
                </div>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:semibold;">
             Why has this area been highlighted
                </div>
                <div class="lot-detail-information-item-value" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:14px;font-weight:regular;">
                   This space has been created to share and connect information about this building/area which has been highlighted as vacant / under utilised.
                </div>
            </div>
       	  </div>
            </div> 

          </div>      
 
     </div>

       </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
