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

        $('#uploadFile').fileinput({
            showCaption: false
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
