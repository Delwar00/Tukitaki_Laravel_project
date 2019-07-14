jQuery(document).ready(function(){
	jQuery("#lol").hover(function(){
		jQuery("#wow").toggle()

	});
});
	// Scroll down start
  $(document).ready(function(){
     $('.low-to-high').click(function(){
		    $('html, body') .animate({
						scrollTop:0
					  },2050);
				});
		});

 //contact form
$(document).ready(function(){
    $("#name").click(function(){
        $("#name").css({"background-color": "#dcf","text-align":"center"});
    });
    $("#email").click(function(){
        $("#email").css({"background-color": "#dcf","text-align":"center"});
    });
    $("#phone").click(function(){
        $("#phone").css({"background-color": "#dcf","text-align":"center"});
    });
    $("#subject").click(function(){
        $("#subject").css({"background-color": "#dcf","text-align":"center"});
    });
     $("#message").click(function(){
        $("#message").css({"background-color": "#dcf"});
    });
});

jQuery(document).ready(function(){
	jQuery(window).scroll(function(){
		$("#scrolling").addClass("navbar-fixed-top");
		$("#scrolling").css({"background-color":"black"});
	});
});
//typed js cooking
     ityped.init(document.querySelector("#text-shadow"), {
      showCursor: false,
      strings: [ ' COOKING SERVICE IS AVAILABLE',' CHOOSE YOUR CATEGORY'],
        typespeed:0
    });
//typed js baby
     ityped.init(document.querySelector("#text-shadow1"), {
      showCursor: false,
      strings: [ ' BABY SITTING SERVICE IS AVAILABLE',' CHOOSE YOUR CATEGORY'],
        typespeed:0
    });
     //typed js cleaning
     ityped.init(document.querySelector("#text-shadow2"), {
      showCursor: false,
      strings: [ ' CLEANING SERVICE IS AVAILABLE',' CHOOSE YOUR CATEGORY'],
        typespeed:0
    });
      //typed js plumbing
     ityped.init(document.querySelector("#text-shadow3"), {
      showCursor: false,
      strings: [ ' PLUMBING SERVICE IS AVAILABLE',' CHOOSE YOUR CATEGORY'],
        typespeed:0
    });
      //typed js electrical
     ityped.init(document.querySelector("#text-shadow4"), {
      showCursor: false,
      strings: [ ' ELECTRICAL SERVICE IS AVAILABLE',' CHOOSE YOUR CATEGORY'],
        typespeed:0
    });
      //typed js electrical
     ityped.init(document.querySelector("#text-shadow5"), {
      showCursor: false,
      strings: [ ' HOW THIS PAGE WORKS',' SHOW THE VIDEO'],
        typespeed:0
    });
       //typed js electrical
     ityped.init(document.querySelector("#text-shadow6"), {
      showCursor: false,
      strings: [ ' HOW THIS PAGE WORKS',' SHOW THE VIDEO'],
        typespeed:0
    });
		//typed js about
	ityped.init(document.querySelector("#text-shadowa"), {
	 showCursor: false,
	 strings: [ ' About Page',' SHOW THE VIDEO'],
		 typespeed:0
 });
