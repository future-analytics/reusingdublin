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
			<dd><?php if(isset($site['description'])) echo $site['description']; ?></dd>
			<dt>Suggested Uses</dt>
			<dd><?php if(isset($site['suggested'])) echo $site['suggested']; ?></dd>
			<dt>Why Has This Area Been Highlighted?</dt>
			<dd><?php if(isset($site['highlighted'])) echo $site['highlighted']; ?></dd>
		</dl>
	</div>

	<div class="container-fluid">
		<div class="row">

			<span class="col-xs-6">
				<p class="title">Connect</p>
				<div class="row">
					<p>Have we made a mistake</p>
					<a target="_self" href="/site/letUsKnow/?modal=1&id=<?php echo $site['id']; ?>" class="btn btn-primary">LET US KNOW</a>
				</div>
				<div class="row">
					<p>Further info</p>
					<a target="_self" href="/site/letUsKnow/?modal=1&id=<?php echo $site['id']; ?>" class="btn btn-primary">TELL US MORE</a>
				</div>
				<div class="row">
					<p>Connect</p>
					<a target="_self" href="/site/connect/?modal=1&id=<?php echo $site['id']; ?>" class="btn btn-primary">CONNECT</a>
				</div>
			</span>

			<span class="col-xs-6">
				<p class="title">Share</p>
				<div class="row">
					<p>Share</p>
					<a target="_self" href="/site/share/?modal=1&id=<?php echo $site['id']; ?>" class="btn btn-primary">SHARE</a>
				</div>
				<div class="row">
					<p>Upload your files</p>
					<input type="file" id="uploadFile" name="files[]">
				</div>
				<div class="row">
					<p>Upload your videos</p>
					<input type="file" id="uploadVideo" name="videos[]">
				</div>
				<div class="row">
					<p>Upload your photos</p>
					<input type="file" id="uploadPhoto" name="photos[]">
				</div>
			</span>

		</div>
	</div>
<?php
