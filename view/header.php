<?php
/**
* The header and nav view file.
* @package ReusingDublin
* @author daithi coombes <david.coombes@futureanalytics.ie>
*/
?>
        <header>
            <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img src="/assets/images/logo-200x70.png" alt="Reusing Dublin Brand"/>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <?php
                                (\ReusingDublin\Config::getInstance()->routes[0]=='index') ?
                                    $home_link = '#welcome' :
                                    $home_link = '/';
                                ?>
                                <a href="<?php echo $home_link; ?>">HOME</a>
                            </li>
                            <li><a href="#how-it-works">HOW IT WORKS</a></li>
                            <li><a href="#try-it-out">TRY IT OUT</a></li>
                            <li><a href="#about">ABOUT</a></li>
                            <li><a href="#mailing-list">MAILING LIST</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" id="social-links">
                            <li><a href="https://instagram.com/reusingdublin">
                                <img src="/assets/images/icon_instagram.png" alt="Instagram Profile">
                            </a></li>
                            <li><a href="mailto:reusingdublin@gmail.com">
                                <img src="/assets/images/icon_email.png" alt="Email Link">
                            </a></li>
                            <li><a href="https://facebook.com/reusingdublin">
                                <img src="/assets/images/icon_facebook.png" alt="Facebook Profile">
                            </a></li>
                            <li><a href="https://twitter.com/reusingdublin">
                                <img src="/assets/images/icon_twitter.png" alt="Twitter Profile">
                            </a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>