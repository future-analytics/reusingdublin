
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>
    Medieval Philosophers - Timeliner
    - TimeMapper - Make Timelines and TimeMaps fast!
    - from the Open Knowledge Foundation Labs
  </title>
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

  
  <!-- Open links in new window/tab by default -->
  <base target="_blank" />

  <link rel="stylesheet" href="/vendor/recline/vendor/leaflet/0.4.4/leaflet.css">
  <!--[if lte IE 8]>
  <link rel="stylesheet" href="/vendor/recline/vendor/leaflet/0.4.4/leaflet.ie.css" />
  <![endif]-->
  <link rel="stylesheet" href="/vendor/recline/vendor/leaflet.markercluster/MarkerCluster.css">
  <link rel="stylesheet" href="/vendor/recline/vendor/leaflet.markercluster/MarkerCluster.Default.css">

  <link rel="stylesheet" href="/vendor/leaflet.label/leaflet.label.css" />

  <link rel="stylesheet" href="/vendor/recline/vendor/timeline/css/timeline.css">

  <!-- Recline CSS components -->
  <link rel="stylesheet" href="/vendor/recline/dist/recline.css">
  <!-- /Recline CSS components -->


  <!-- Custom CSS for the TimeMapper Online App -->
  <link rel="stylesheet" href="/css/style.css">
</head>
<body class="view">

<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <div class="brand">
        Medieval Philosophers - Timeliner
        <small>by</small> <a href="http://timemapper.okfnlabs.org/anon">anon</a>
        <small>using</small>
        <a href="/" title="Created with TimeMapper" style="color: #333;">Time<span class="brand-ext">Mapper</span></a>
      </div>
      <ul class="nav">
      </ul>
      <ul class="nav pull-right">
        <li class="tweet">
          <a href="https://twitter.com/share" class="twitter-share-button" data-related="OKFNLabs" data-hashtags="timeliner" data-dnt="true">Tweet</a>
        </li>
        <li>
          <a class="js-embed" href="#"><i class="icon-code"></i> Embed</a>
        </li>
        
        <li class="divider-vertical"></li>
        
      </ul>
    </div>
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

<div class="modal hide fade embed-modal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Embed Instructions</h3>
  </div>
  <div class="modal-body">
    <p>Copy and paste the following into your web page</p>
    <textarea style="width: 100%; height: 100px;" ></textarea>
  </div>
</div>
</div>

<div class="loading js-loading"><i class="icon-spinner icon-spin icon-large"></i> Loading data...</div>

  </div>
</div> <!-- /content -->
</div> <!-- / container-fluid -->

<div class="footer">
  
  <a href="http://timemapper.okfnlabs.org/anon/st6o5p-medieval-philosophers-timeliner">Medieval Philosophers - Timeliner</a> by <a href="http://timemapper.okfnlabs.org/anon">anon</a> using <a href="http://timemapper.okfnlabs.org/">TimeMapper</a>
  
  &ndash;
  <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons Attribution">License</a>
  
  &ndash;
  <a href="https://docs.google.com/spreadsheet/ccc?key=0Al6mO9_3Hr2PdGZnRjEwUWxOekhreTNNZEFEMWRZbkE">Source Data</a>

</div>

<script type="text/javascript" src="/vendor/recline/vendor/jquery/1.7.1/jquery.js"></script>
<script type="text/javascript" src="/vendor/recline/vendor/underscore/1.4.4/underscore.js"></script>
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
    var VIZDATA = {"licenses":[{"type":"cc-by","name":"Creative Commons Attribution","version":"3.0","url":"http://creativecommons.org/licenses/by/3.0/"}],"resources":[{"backend":"gdocs","url":"https://docs.google.com/spreadsheet/ccc?key=0Al6mO9_3Hr2PdGZnRjEwUWxOekhreTNNZEFEMWRZbkE"}],"title":"Medieval Philosophers - Timeliner","tmconfig":{"viewtype":"timemap","dayfirst":true,"startfrom":"start"},"owner":"anon","name":"st6o5p-medieval-philosophers-timeliner","_last_modified":"2015-02-24T11:38:19.578Z","_created":"2015-02-24T11:38:19.578Z"};
  </script>
  <!-- 3rd party JS libraries -->
  <script type="text/javascript" src="/vendor/recline/vendor/jquery/1.7.1/jquery.js"></script>
  <script type="text/javascript" src="/vendor/recline/vendor/underscore/1.4.4/underscore.js"></script>
  <script type="text/javascript" src="/vendor/recline/vendor/underscore.deferred/0.4.0/underscore.deferred.js"></script>
  <script type="text/javascript" src="/vendor/recline/vendor/backbone/1.0.0/backbone.js"></script>
  <script type="text/javascript" src="/vendor/recline/vendor/moment/2.0.0/moment.js"></script>
  <script type="text/javascript" src="/vendor/recline/vendor/mustache/0.5.0-dev/mustache.js"></script>
  <script type="text/javascript" src="/vendor/recline/vendor/bootstrap/2.0.2/bootstrap.js"></script>
  <script type="text/javascript" src="/vendor/recline/vendor/leaflet/0.4.4/leaflet.js"></script>
  <script type="text/javascript" src="/vendor/recline/vendor/leaflet.markercluster/leaflet.markercluster.js"></script>
  <script type="text/javascript" src="/vendor/recline/vendor/timeline/js/timeline.js"></script>
  <script type="text/javascript" src="/vendor/leaflet.label/leaflet.label.js"></script>

  <script type="text/javascript" src="/vendor/recline/dist/recline.js"></script>
  <script type="text/javascript" src="http://okfnlabs.org/recline.backend.gdocs/backend.gdocs.js"></script>

  <!-- non-library javascript specific to this demo -->
  <script type="text/javascript" src="/js/view.js"></script>


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
