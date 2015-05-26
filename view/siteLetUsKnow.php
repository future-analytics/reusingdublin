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
		<div class="row">
			<p class="title">Let Us Know</p>

			<form method="post">
				<input type="hidden" name="data[id]" value="<?php echo $site['id']; ?>">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" name="data[email]" class="form-control">
				</div>
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" name="data[name]" class="form-control">
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<textarea id="subject" name="data[subject]" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="message">Matter Of Concern</label>
					<textarea id="message" name="data[message]" class="form-control"></textarea>
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
	</div>
<?php
