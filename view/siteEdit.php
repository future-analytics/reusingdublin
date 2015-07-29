<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * Site edit view file
 * @package  ReusingDublin
 * @author daithi coombes <daithi.coombes@futureanalytics.ie>
 */

if($_GET['id']!='custom')
    $site = Site::getSite($_GET['id']);
elseif(isset($data))
    $site = $data;
else
    $site = false;
?>
    <div class="container-fluid">

    <?php if(isset($data) && $data['files']): ?>
        <div class="alert alert-success">
            <?php if(isset($data['files'])): foreach($data['files'] as $file): ?>
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> <?php echo $file['basename']; ?> uploaded.
            <?php endforeach; endif; ?>
        </div>
    <?php endif; ?>

        <div class="row">
            <div class="col-xs-6">
                <div id="streetViewMap"></div>
            </div>
            <div class="col-xs-6">
                <div id="pano"></div>
            </div>
        </div>

        <div class="row edit-form">
            <div class="col-xs-12">
                <form role="form" enctype="multipart/form-data" method="post">
                    <?php if($site): ?>
                        <input type="hidden" name="data[id]" value="<?php echo $site['id']; ?>">
                        <input type="hidden" name="data[lat]" value="<?php echo $site['lat']; ?>">
                        <input type="hidden" name="data[lng]" value="<?php echo $site['lng']; ?>">
                    <?php else: ?>
                        <input type="hidden" name="data[lat]" value="<?php echo $_GET['lat']; ?>">
                        <input type="hidden" name="data[lng]" value="<?php echo $_GET['lng']; ?>">
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="idea">
                            Enter your idea for this site
                        </label>
                        <textarea id="idea" name="data[info]" class="form-control" placeholder="Enter your idea for this site here"><?php
                            if(isset($site['info'])) echo $site['info'];
                        ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tell-us">
                            Tell us something about this site/location. For example:
                        </label>
                        <select id="tell-us" name="data[tellUs]" class="form-control">
                            <option value="Why do you think the site is in its current condition?"<?php
                                if(!isset($site) || (isset($site['tellUs']) && $site['tellUs']=='Why do you think the site is in its current condition?')) echo ' selected';
                            ?>>
                                Why do you think the site is in its current condition?
                            </option>
                            <option value="What has the site been previously used for?"<?php
                                if(isset($site) && (isset($site['tellUs']) && $site['tellUs']=='What has the site been previously used for?')) echo ' selected';
                            ?>>
                                What has the site been previously used for?
                            </option>
                            <option value="How long has the site been in this condition?"<?php
                                if(isset($site) && (isset($site['tellUs']) && $site['tellUs']=='How long has the site been in this condition?')) echo ' selected';
                            ?>>
                                How long has the site been in this condition?
                            </option>
                            <option value="Is there any activity on the site?"<?php
                                if(isset($site) && (isset($site['tellUs']) && $site['tellUs']=='Is there any activity on the site?')) echo ' selected';
                            ?>>
                                Is there any activity on the site?
                            </option>
                            <option value="What is the physical condition of the site?"<?php
                                if(isset($site) && (isset($site['tellUs']) && $site['tellUs']=='What is the physical condition of the site?')) echo ' selected';
                            ?>>
                                What is the physical condition of the site?
                            </option>
                            <option value="What is happending on this site?"<?php
                                if(isset($site) && (isset($site['tellUs']) && $site['tellUs']=='What is happending on this site?')) echo ' selected';
                            ?>>
                                What is happending on this site?
                            </option>
                            <option value="What is happening around the site?"<?php
                                if(isset($site) && (isset($site['tellUs']) && $site['tellUs']=='What is happening around the site?')) echo ' selected';
                            ?>>
                                What is happening around the site?
                            </option>
                            <option value="What are the surrounding buildinds used for?"<?php
                                if(isset($site) && (isset($site['tellUs']) && $site['tellUs']=='What are the surrounding buildinds used for?')) echo ' selected';
                            ?>>
                                What are the surrounding buildinds used for?
                            </option>
                            <option value="Is there access to this site?"<?php
                                if(isset($site) && (isset($site['tellUs']) && $site['tellUs']=='Is there access to this site?')) echo ' selected';
                            ?>>
                                Is there access to this site?
                            </option>
                        </select>
                        <textarea name="data[tellUsInfo]" class="form-control" placeholder"Enter more information here"><?php
                            if(isset($site['tellUsInfo'])) echo $site['tellUsInfo'];
                        ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" id="uploadFile" name="files[]" multiple="true">
                    </div>
                    <div class="form-group">
                        <label for="address1">Address</label>
                        <input type="text" class="form-control" name="data[address1]" id="address1" value="<?php if(isset($site['address1'])) echo $site['address1']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="ownership">Ownership Details</label>
                        <input type="text" class="form-control" name="data[ownership]" id="ownership" value="<?php if(isset($site['ownership'])) echo $site['ownership']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="zoning">Zoning</label>
                        <input type="text" class="form-control" name="data[zoning]" id="zoning" value="<?php if(isset($site['zoning'])) echo $site['zoning']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="planning">Planning History</label>
                        <input type="text" class="form-control" name="data[planning]" id="planning" value="<?php if(isset($site['planning'])) echo $site['planning']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="size">Size / Area (Sqm)</label>
                        <input type="text" class="form-control" name="data[size]" id="size" value="<?php if(isset($site['size'])) echo $site['size']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="heritage">Heritage Designation</label>
                        <input type="text" class="form-control" name="data[heritage]" id="heritage" value="<?php if(isset($site['heritage'])) echo $site['heritage']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="derelict">Is the site officially derelict?</label>
                        <input type="text" class="form-control" name="data[derelict]" id="derelict" value="<?php if(isset($site['derelict'])) echo $site['derelict']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
