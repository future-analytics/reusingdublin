/**
 * Onload function
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */
$(document).ready(function(){

    reusingdublin.init();
});

/**
 * The main class for the ReusingDublin site.
 * @class ReusingDublin
 */
var ReusingDublin = function(){

    /**
     * @constructor
     * @member {ReusingDublin}
     * @return {ReusingDublin} Returns self.
     */
    this.init = function(){

        // animate scrolling
        $("#mainNav ul li a[href^='#']")
            .on('click', this.scrollTo);

        $('#uploadPhoto').fileinput({
            showCaption: false,
            previewFileType: "image",
            browseClass: "btn btn-success",
            browseLabel: " Add A Photo",
            browseIcon: '<i class="glyphicon glyphicon-picture"></i>',
            removeClass: "btn btn-danger",
            removeLabel: "Delete",
            removeIcon: '<i class="glyphicon glyphicon-trash"></i>',
            uploadClass: "btn btn-info",
            uploadLabel: "Upload",
            uploadIcon: '<i class="glyphicon glyphicon-upload"></i>',
        });

        $('#uploadFile').fileinput({
            showCaption: false,
            previewFileType: "image",
            browseClass: "btn btn-success",
            browseLabel: " Add A File",
            browseIcon: '<i class="glyphicon glyphicon-open-file"></i>',
            removeClass: "btn btn-danger",
            removeLabel: "Delete",
            removeIcon: '<i class="glyphicon glyphicon-trash"></i>',
            uploadClass: "btn btn-info",
            uploadLabel: "Upload",
            uploadIcon: '<i class="glyphicon glyphicon-upload"></i>',
        })

        return this;
    }

    /**
     * Animate homepage scroll
     * @param  {event}
     * @return {ReusingDublin}   Returns self.
     */
    this.scrollTo = function(e) {

        e.preventDefault();

        var hash      = this.hash
            ,offset   = 122
            ,top;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 700, function(){
            window.location.hash = hash;
        });

        return this;
    }
}
var reusingdublin = new ReusingDublin();
