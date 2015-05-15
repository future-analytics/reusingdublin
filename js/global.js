/**
 * @constructor
 * @author daithi coombes
 */
$(document).ready(function(){

	reusingDublin.init();

});

/**
 * The main reusingdublin.ie class
 * @class
 */
var ReusingDublin = function(){

	/**
	 * @constructor
	 */
	this.init = function(){

		var self = this;

		$('#navbar ul li a').click(self.navLinks);
		$(document).scroll(self.homeScroll);
	}

	/**
	 * Hack: force nav link highlight on click
	 * @member ReusingDublin
	 * @todo Merge this method with self::homeScroll()
	 */
	this.navLinks = function(){
        $('#navbar ul li a').css('color', '#000');
        $(this).css('color', '#fff');
	}

	/**
	 * Highlight homepage nav link on page scroll
	 * @member ReusingDublin
	 * @author Priyanka
	 */
	this.homeScroll =  function () {

        document.getElementById("fiftha").style.color   = "White";
        //global constants for page part y px's
        var scroll_top  = $(document).scrollTop();
        var one_btm     = $('#menu1').position().top;
        var two_top     = $('#menu2').position().top;
        var three_top   = $('#menu3').position().top;
        var four_top    = $('#menu4').position().top;
        var five_top    = $('#menu5').position().top;

        //home
        //$('a[href="#menu1"]').addClass('active');
        //document.getElementById("fiftha").style.color = "White";
        
        if(scroll_top<two_top)
        {
            console.log('home white');
            document.getElementById("fiftha").style.color = "White";
            document.getElementById("fourtha").style.color  = "Black";
            document.getElementById("thirda").style.color   = "Black";
            document.getElementById("seconda").style.color  = "Black";
            document.getElementById("firsta").style.color   = "Black";
        }

        //how it works
        else if (scroll_top < three_top) {
            console.log('how white');
            document.getElementById("fourtha").style.color  = "Black";
            document.getElementById("thirda").style.color   = "Black";
            document.getElementById("seconda").style.color  = "Black";
            document.getElementById("firsta").style.color   = "White";
            document.getElementById("fiftha").style.color   = "Black";
            $('a[href="#menu3"]').removeClass('active');
            $('a[href="#menu1"]').removeClass('active');
        }

        //try it out
        else if (scroll_top < four_top) {
            console.log('try white');
            $(window).on("hashchange", function(){
                window.scrollTo(window.scrollX, window.scrollY -300);
            });
            document.getElementById("fourtha").style.color  = "Black";
            document.getElementById("thirda").style.color   = "Black";
            document.getElementById("seconda").style.color  = "White";
            document.getElementById("firsta").style.color   = "Black";
            document.getElementById("fiftha").style.color   = "Black";
            $('a[href="#menu2"]').removeClass('active');
            $('a[href="#menu4"]').removeClass('active');
            $('a[href="#menu1"]').removeClass('active');
        }

        //about
        else if(scroll_top < five_top){
            console.log('about white');
            document.getElementById("fourtha").style.color  = "Black";
            document.getElementById("thirda").style.color   = "White";
            document.getElementById("seconda").style.color  = "Black";
            document.getElementById("firsta").style.color   = "Black";
            document.getElementById("fiftha").style.color   = "Black";
            $('a[href="#menu3"]').removeClass('active');
            $('a[href="#menu5"]').removeClass('active');
            $('a[href="#menu1"]').removeClass('active');
        }

        //mailing list
        else {
            $(window).on("hashchange", function(){
                window.scrollTo(window.scrollX, window.scrollY + 300);
            });
            document.getElementById("fourtha").style.color  = "White";
            document.getElementById("thirda").style.color   = "Black";
            document.getElementById("seconda").style.color  = "Black";
            document.getElementById("firsta").style.color   = "Black";
            document.getElementById("fiftha").style.color   = "Black";
            $('a[href="#menu4"]').removeClass('active');
            $('a[href="#menu1"]').removeClass('active');
        }

    }
}
var reusingDublin = new ReusingDublin();
