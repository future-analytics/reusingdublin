<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * Site `Let Us Know` view file
 * @package  ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */

$site = Site::getSite($_GET['id']);
?>
	<div class="container-fluid">
		<p class="title">Connect</p>

		<p>Tell us a little about yourself!</p>
		<p>
			Once you do, why not post a note to tell everyone your vision for the lot? And be sure to post updates on your progress!When you fill out this form, you will receive notifications when other people show interest in growing community on this lot or add notes or a picture. 
		</p>

		<form method="post">
			<input type="hidden" name="data[id]" value="<?php echo $site['id']; ?>">

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" id="name" name="data[name]" class="form-control">
			</div>
			<div class="form-group">
				<label for="phone">Phone Number</label>
				<input type="tel" id="phone" name="data[phone]" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" id="email" name="data[email]" class="form-control">
			</div>
			<div class="form-group">
				<label for="facebook">Facebook Page</label>
				<input type="url" id="facebook" name="data[facebook]" class="form-control">
			</div>
			<div class="form-group">
				<div class="row">
					<span class="col-xs-6">
						<input type="button" onclick="history.back()" class="form-control" value="Back">
					</span>
					<span class="col-xs-6">
						<input type="submit" value="Send" class="form-control">
					</span>
				</div>
			</div>
		</form>
	</div>