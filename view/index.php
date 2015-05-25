<?php
/**
 * Homepage view file
 * @package ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */

/**
 * @todo  remove this debug code.
 */
?>
    <!-- debug code
    <section class="container-fluid">
        <h1>Index.php</h1>

        <p>
            Pages:
            <ul>
                <li><a href="/site/view/$address_urlencode">Site view page `/site/view/$address_urlencode`</a></li>
                <li><a href="/site/edit">Add / Update a new site `/site/edit</a></li>
                <li><a href="/site/let-us-know">Let Us Know `/site/let-us-know/$address_urlencode`</a></li>
                <li><a href="/site/tell-us-more">Tell Us More `/site/tell-us-more/$address_urlencode`</a></li>
                <li><a href="/site/connect">Connect `/site/connect/$address_urlencode`</a></li>
                <li><a href="/site/share">Share `/site/share/$address_urlencode`</a></li>
            </ul>
        </p>
    </section>
    //-->

        <section id="welcome" class="container-fluid">
            <h2 class="hidden">Welcome</h2>

            <div class="row">
                <div id="welcome-box" class="col-xs-6">
                    <p class="title">
                        Welcome to Reusing Dublin, a
                        space to discover and share
                        information about vacant or
                        underused spaces in Dublin
                    </p>
                    <p class="subtext">
                        Join us in unlocking the potential of the
                        spaces in our city
                    </p>
                </div>
            </div>
        </section>

        <section id="how-it-works" class="container-fluid">
            <h2 class="hidden">How it works</h2>

            <div class="row">
                <div id="how-it-works-box" class="col-xs-6">
                    <p class="title">How it works</p>
                    <p>
                        Using the map below, discover or add
                        information about any underused sites you
                        have noticed.
                    </p>
                    <ul class="instructions">
                        <li>
                            <b>Add a space</b> by clicking the 'add a site' tab
                            and clicking on the location on the map.
                        </li>
                        <li>
                            <b>Share your information</b> about a site.
                        </li>
                        <li>
                            <b>Connect with others</b> who might be
                            interested in the site
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="try-it-out" class="container-fluid">
            <h2 class="hidden">Try It Out</h2>

            <nav id="mapNavBar" class="row">
                <div class="col-md-4">
                    <input type="button" class="blue" value="ADD A SITE" id="mapAddSite">
                </div>
                <div class="col-md-4">
                    <select>
                        <option>MORE INFORMATION</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="button" class="blue" value="FIND AN AREA">
                    <input placeholder="SEARCH BOX">
                    <input type="button" class="red" value="GO">
                </div>
            </nav>

            <div id="map-canvas">
            </div>

        </section>

        <section id="about" class="container-fluid">
            <h2 class="hidden">About</h2>

            <div class="row">

                <div class="col-xs-6">
                    <p class="title">About the Project</p>
                    <p>Reusing Dublin responds to the observation that we don’t use space in our city efficiently - and sometimes we don’t use it at all.</p>
                    <p>Reusing Dublin attempts to map underused spaces in order to identify opportunities for using the city more efficiently for the benefit of everyone.</p>
                    <p>Underused spaces include sites and buildings that are not used at all (vacant) or that are only partly in use. It also includes spaces that may have a use, like a roof or a grassed area, but that could accommodate additional uses.</p>
                    <p>Re-using Dublin is an experimental research project that is part of a wider EU FP7 project called <u>TURAS</u> (Transitioning towards Urban Resilience and Sustainability).</p>
                </div>

                <div id="twitterFeed" class="col-xs-6">
                    <a class="twitter-timeline" href="https://twitter.com/ReusingDublin" data-widget-id="599143046584868864">Tweets by @ReusingDublin</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>

            </div>
        </section>

        <section id="mailing-list" class="container-fluid">
            <h2 class="hidden">Mailing List</h2>

            <div class="row">
                <div class="col-xs-offset-3 col-xs-6 text-center">
                    <p>
                        Subscribe to our newsletter email to get notification about
                        upcoming news, latest project activities and much more!
                    </p>
                </div>
            </div>

            <div class="row">
                <form id="maillist">
                    <div class="col-xs-8">
                        <input type="email" name="data[email]" placeholder="Your email address">
                    </div>
                    <div class="col-xs-4">
                        <input type="submit" value="SUBSCRIBE">
                    </div>
                </form>
            </div>

        </section>
