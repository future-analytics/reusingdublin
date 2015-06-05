<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * Site index view file
 * @package  ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */

if(!isset($_GET['id'])){
    echo '<h2>Error no site found</h2>';
    return false;
}

$site = Site::getSite($_GET['id']);
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
                <div id="streetViewMap"></div>
            </div>
            <div class="col-xs-6">
                <div id="pano"></div>
            </div>
        </div>
        <p class="title">DISCOVER INFORMATION ABOUT THE LOT</p>

        <dl class="dl-horizontal">
            <dt>Address</dt>
            <dd><?php if(isset($site['address1'])) echo $site['address1']; ?></dd>
            <dt>Ownership Details</dt>
            <dd><?php if(isset($site['owner'])) echo $site['owner']; ?></dd>
            <dt>Zoning</dt>
            <dd><?php if(isset($site['zoning'])) echo $site['zoning']; ?></dd>
            <dt>Planning History</dt>
            <dd><?php if(isset($site['planning'])) echo $site['planning']; ?></dd>
            <dt>Size / Area (Sqm)</dt>
            <dd><?php if(isset($site['size'])) echo $site['size']; ?></dd>
            <dt>Heritage Designation</dt>
            <dd><?php if(isset($site['heritage'])) echo $site['heritage'];?></dd>
            <dt>Is The SIte Officially Derelict?</dt>
            <dd><?php if(isset($site['derelict'])) echo $site['derelict']; ?></dd>
            <dt>Description</dt>
            <dd><?php if(isset($site['info'])) echo Controller::autoLinkText($site['info']); ?></dd>
            <dt>Suggested Uses</dt>
            <dd><?php if(isset($site['tellUsInfo'])) echo Controller::autoLinkText($site['tellUsInfo']); ?></dd>
            <dt>Why Has This Area Been Highlighted?</dt>
            <dd><?php if(isset($site['highlighted'])) echo $site['highlighted']; ?></dd>
        </dl>

    </div>

    <div class="container-fluid">
        <div class="row">

            <span class="col-xs-6 connect-box">
                <p class="title">Connect</p>
                <div class="row">
                    <div class="col-xs-12">
                        <p>Have we made a mistake</p>
                        <a target="_self" href="/site/letUsKnow/?modal=1&id=<?php echo $site['id']; ?>" class="btn btn-primary">LET US KNOW</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p>Connect</p>
                        <a target="_self" href="/site/connect/?modal=1&id=<?php echo $site['id']; ?>" class="btn btn-primary">CONNECT</a>
                    </div>
                </div>
            </span>

            <span class="col-xs-6 share-box">
                <p class="title">Share</p>
                <div class="row">
                    <div class="col-xs-12">
                        <p>Share more information with us?</p>
                        <a target="_self" href="/site/comment/?modal=1&id=<?php echo $site['id']; ?>" class="btn btn-primary">SHARE</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p>Upload your files</p>
                        <form method="post" enctype="multipart/form-data">
                            <input type="file" id="uploadFile" name="file">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                        <?php foreach(Site::getFiles($site['id']) as $file): ?>
                            <li><a href="/uploads/<?php echo $file['basename']; ?>" target="_new"><?php echo $file['basename']; ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </span>

        </div>
    </div>

    <div class="container-fluid">
        <?php
        $comments = Site::getComments($site['id']);

        foreach($comments as $comment):?>
            <div class="row comment panel panel-default">
                <div class="col-xs-3 user-details">
                    <div class="row">
                        <span class="col-md-6">
                            <img src="<?php echo Gravatar::get_gravatar($comment['email']); ?>">
                        </span>
                        <div class="col-md-6">
                            <?php echo $comment['name']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-9 message col-xs-height">
                    <div class="row">
                        <span class="col-xs-12">
                            <?php echo $comment['question']; ?>
                        </span>
                    </div>
                    <div class="row">
                        <span class="col-xs-12">
                            <?php echo $comment['message']; ?>
                        </span>
                    </div>
                    <div class="row bottom">
                        <span class="col-xs-12 text-right">
                            <small><?php echo $comment['created']; ?></small>
                        </span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php
