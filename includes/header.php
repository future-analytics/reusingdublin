<?php
/**
 * The header and nav view file.
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */


/**
 * List of php filenames for scripts that will use a back button instead of
 * home link.
 * @var array
 */
$scripts_btn_back = array(
    'emailphp.php',
    'Connect.php',
    'Share.php',
    'InsertDoc.php',
    'InsertVideos.php',
    'InsertPhotographs.php',
);


// get home link status
(in_array(trim($_SERVER['SCRIPT_NAME'], "/"), $scripts_btn_back)) ?
    $home_link = false :
    $home_link = true;

?>
<nav id="reusingdublin" class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a href="/" class="navbar-brand"><img src="images/logo-140x50.png"></a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">

            <ul class="nav navbar-nav nav-stacked page-links">
                <li>
                    <?php if( $home_link===true ): ?>
                        <a href="#menu1" id="fiftha">HOME</a>
                    <?php else: ?>
                        <a href="javascript:history.back()">BACK</a>
                    <?php endif; ?>
                </li>
                <script type="text/javascript">
                    /**
                     * @todo refactor homepage link to View_Form.php
                     */
                     if(window.opener){
                        $('#fiftha').click(function(){
                            window.close();
                        });
                    };
                </script>
                <?php
                    //homepage links
                    if (defined('IS_HOMEPAGE'))
                    {
                        ?>
                        <li><a href="#menu2" id="firsta">HOW IT WORKS</a></li>
                        <li><a href="#menu3" id="seconda">TRY IT OUT</a></li>
                        <li><a href="#menu4" id="thirda">ABOUT</a></li>
                        <li><a href="#menu5" id="fourtha">MAILING LIST</a></li>
                        <?php
                    }
                ?>
                <li class="social-link"><a href="https://instagram.com/reusingdublin/" target="_blank"><img src="instagram19.png"/></a></li>
                <li class="social-link"><a href="mailto:reusingdublin@gmail.com" target="_blank"><img src="email131.png"/></a></li>
                <li class="social-link"><a href="https://www.facebook.com/reusingdublin/" target="_blank"><img href="https://www.facebook.com/reusingdublin/" src="facebook.png"/></a></li>
                <li class="social-link"><a href="https://www.twitter.com/reusingdublin/" target="_blank"><img href="https://www.twitter.com/reusingdublin/"  src="twitter.png"/></a></li>
            </ul>
        </div>

    </div><!-- end container //-->
</nav>





<!--
<div style="background-color:#00afc9;">
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#00afc9">
        <div class="container" >
            <div class="navbar-header" >
                <a onClick="cll();"> <img src="reusing-drraft-13.04-04.png"  style="margin-top:10%;height:37%;width:37%;border-top:hidden;"></a>
            </div>
        </div>
            <div class="container" >
                <div id="navbar" class="navbar-collapse collapse" style="float:right;">
                    <ul class="nav navbar-nav">
                        <li><a href="#menu1" id="fiftha" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;">HOME</a></li>
                        <li><a href="#menu2" id="firsta" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;">HOW IT WORKS</a></li>
                        <li><a href="#menu3" id="seconda" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;">TRY IT OUT</a></li>
                        <li><a href="#menu4" id="thirda"  style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;">ABOUT</a></li>
                        <li><a href="#menu5" id="fourtha"  style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;">MAILING LIST</a></li>
                        <li><a href="https://instagram.com/reusingdublin/" target="_blank"><img src="instagram19.png"/></a></li>
                        <li><a href="mailto:reusingdublin@gmail.com" target="_blank"><img src="email131.png"/></a></li>
                        <li><a href="https://www.facebook.com/reusingdublin/" target="_blank"><img href="https://www.facebook.com/reusingdublin/" src="facebook.png"/></a></li>
                        <li><a href="https://www.twitter.com/reusingdublin/" target="_blank"><img href="https://www.twitter.com/reusingdublin/"  src="twitter.png"/></a></li>
                    </ul>
                </div><!--/.nav-collapse
            </div>
        </div>
    </nav>
</div>
-->