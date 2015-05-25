<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * Site edit view file
 * @package  ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */

$site = Site::getSite($_GET['id']);
?>

    <div class="container-fluid">
        <form role="form">
            <div class="form-group">
                <label for="idea">
                    Enter any information you have regading the site/location here?
                </label>
                <textarea id="idea" name="data[info]" class="form-control" placeholder="Enter your idea regarding the site/location here"></textarea>
            </div>
            <div class="form-group">
                <label for="tell-us">
                    Tell us something about this site/location. For example:
                </label>
                <select id="tell-us" name="data[tellUs]" class="form-control">
                    <option value="Why do you think the site is in its current condition?">
                        Why do you think the site is in its current condition?
                    </option>
                    <option value="What has the site been previously used for?">
                        What has the site been previously used for?
                    </option>
                    <option value="How long has the site been in this condition?">
                        How long has the site been in this condition?
                    </option>
                    <option value="Is there any activity on the site?">
                        Is there any activity on the site?
                    </option>
                    <option value="What is the physical condition of the site?">
                        What is the physical condition of the site?
                    </option>
                    <option value="What is happending on this site?">
                        What is happending on this site?
                    </option>
                    <option value="What is happening around the site?">
                        What is happening around the site?
                    </option>
                    <option value="What are the surrounding buildinds used for?">
                        What are the surrounding buildinds used for?
                    </option>
                    <option value="Is there access to this site?">
                        Is there access to this site?
                    </option>
                </select>
                <textarea name="data[tellUsInfo]" class="form-control" placeholder"Enter more information here"></textarea>
            </div>
            <div class="form-group">
                <a class="btn btn-primary">ADD A PHOTO</a>
            </div>
            <div class="form-group">
                <a class="btn btn-primary">ADD A FILE</a>
            </div>
            <div class="form-group">
                <label for="address1">Address</label>
                <input type="text" class="form-control" name="data[address1]" id="address1">
            <div class="form-group">
                <label for="ownership">Ownership Details</label>
                <input type="text" class="form-control" name="data[ownership]" id="ownership">
            <div class="form-group">
                <label for="zoning">Zoning</label>
                <input type="text" class="form-control" name="data[zoning]" id="zoning">
            </div>
            <div class="form-group">
                <label for="planning">Planning History</label>
                <input type="text" class="form-control" name="data[planning]" id="planning">
            </div>
            <div class="form-group">
                <label for="size">Size / Area (Sqm)</label>
                <input type="text" class="form-control" name="data[size]" id="size">
            </div>
            <div class="form-group">
                <label for="heritage">Heritage Designation</label>
                <input type="text" class="form-control" name="data[heritage]" id="heritage">
            </div>
            <div class="form-group">
                <label for="derelict">Is the site officially derelict?</label>
                <input type="text" class="form-control" name="data[derelict]" id="derelict">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control" value="Submit">
            </div>
        </form>
    </div>