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
		<p class="title">DISCOVER INFORMATION ABOUT THE LOT</p>

		<dl>
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
					<a class="btn btn-primary">LET US KNOW</a>
				</div>
				<div class="row">
					<p>Further info</p>
					<a class="btn btn-primary">TELL US MORE</a>
				</div>
				<div class="row">
					<p>Connect</p>
					<a class="btn btn-primary">CONNECT</a>
				</div>
			</span>

			<span class="col-xs-6">
				<p class="title">Share</p>
				<div class="row">
					<p>Share</p>
					<a class="btn btn-primary">SHARE</a>
				</div>
				<div class="row">
					<p>Upload your files</p>
					<a class="btn btn-primary">ADD A FILE</a>
				</div>
				<div class="row">
					<p>Upload your videos</p>
					<a class="btn btn-primary">ADD A VIDEO</a>
				</div>
				<div class="row">
					<p>Upload your photos</p>
					<a class="btn btn-primary">ADD A PHOTO</a>
				</div>
			</span>

		</div>
	</div>
<?php
