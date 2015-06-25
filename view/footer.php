<?php
/**
* @author  daithi coombes <david.coombes@futureanalytics.ie>
*/
global $data;
?>
        <footer class="footer">

            <?php if(!isset($_GET['modal'])): ?>
                <div class="row affiliates">
                    <img src="/assets/images/logo-185x65.png" alt="reusing dublin logo"/>
                    <img src="/assets/images/logo-eu.png" alt="EU Logo">
                    <img src="/assets/images/logo-turas.png" alt="Turas Logo">
                </div>
                <div class="row license">
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
                        Reusing Dublin is licensed under
                        <img alt="Creative Commons License" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png">
                    </a>
                </div>
            <?php endif; ?>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="/assets/js/bootstrap3-dialog/dist/js/bootstrap-dialog.js"></script>
            <script type="text/javascript" src="/assets/js/bootstrap-fileinput/js/fileinput.min.js"></script>
            <script type="text/javascript" src="/assets/js/nano/nano.js"></script>
            <script src="/assets/js/reusingdublin.js" type="text/javascript"></script>
            <?php if(\ReusingDublin\Config::getInstance()->routes[0]=='index'): ?>
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
                <script type="text/javascript" src="/assets/js/markerclusterer.js"></script>
                <script type="text/javascript" src="/assets/js/jQuery-Autocomplete/dist/jquery.autocomplete.min.js"></script>
                <script type="text/javascript" src="/assets/js/reusingdublinGmaps.js"></script>

                <script type="text/javascript">
                    google.maps.event.addDomListener(window, 'load', function(){
                        reusingDublinMap.init();
                    });
                </script>
            <?php elseif(isset($_GET['modal'])): ?>
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

                <script type="text/javascript">
                    google.maps.event.addDomListener(window, 'load', function(){
                        reusingdublinModal.init('<?php echo $site['lat']; ?>','<?php echo $site['lng']; ?>');
                    });
                </script>
                <script type="text/javascript" src="/assets/js/reusingdublinModal.js"></script>
            <?php endif; ?>
        </footer>
        <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-59451880-1', 'auto');
        ga('send', 'pageview');
        </script>
    </body>
</html>
