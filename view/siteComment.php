<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * Site index view file
 * @package  ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */

$site = Site::getSite($_GET['id']);
?>
    <div class="container-fluid">
        <p class="title">Share your information with us</p>

        <form method="post">
            <input type="hidden" name="data[site_id]" value="<?php echo $site['id']; ?>">

            <div class="form-group">
                <label for="questions">
                    Tell me something about this Site/Location as Suggested Below(Example Questions)
                </label>
                <select id="questions" name="data[question]" class="form-control">
                    <option value="" disabled="disabled" selected="selected">Please see the Example Question List</option>
                    <option value="Why do you think this site is in its current condition?">Why do you think this site is in its current condition?</option>
                    <option value="What has the site been previously used for?">What has the site been previously used for?</option>
                    <option value="How long has the site been in this condition?">How long has the site been in this condition?</option>
                    <option value="Is there any activity on the site?">Is there any activity on the site?</option>
                    <option value="What is the physical condition of the site?">What is the physical condition of the site?</option>
                    <option value="What is happening on this site?">What is happening on this site?</option>
                    <option value="What is happening around the site?">What is happening around the site?</option>
                    <option value="What are the surrounding buildings used for?">What are the surrounding buildings used for?</option>
                    <option value="Is there access to this site?">Is there access to this site?</option>
                </select>
            </div>

            <div class="form-group">
                <textarea name="data[message]" class="form-control" placeholder="Enter your Information regarding the Site/Location here"></textarea>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="data[name]" id="name" class="form-control">
            </div>

            <div class="form-group">
                <div class="row">
                    <span class="col-xs-6">
                        <input type="button" value="Back" onclick="window.location.assign('/site/?modal=1&id=<?php echo $site['id']; ?>')" class="form-control">
                    </span>
                    <span class="col-xs-6">
                        <input type="submit" value="Send" class="form-control">
                    </span>
                </div>
            </div>

        </form>

    </div>