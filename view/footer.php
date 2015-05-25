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
        </footer>
    </body>
</html>
