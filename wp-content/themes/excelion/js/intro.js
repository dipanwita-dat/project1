
// JavaScript Document

// imgs for intro animation
if ($('#intro').length) {
    var intro = ["#intro01", "#intro02", "#intro03", "#intro04"]
}
var backflag = 0;
//public var for position map

$(window).load(
	function(){
		
		}
   );
// trick to enable browser load
$(window).bind("unload", function(){ });
$(function(){
	init();
})

function init(){
    introLogo();	
}


//function for intro
function introLogo(){
    if ($('#intro').length) {
        for (var i = 0; i < intro.length; i++) {
            $(intro[i]).delay(1000 * (i + 1)).fadeIn(800);
        }
        setTimeout("logoFadeOut()", 6000);
        //window.location.href = "http://dboxdev.com/extell/html/extell_development.html";
    }
}

function logoFadeOut(){
    $('#intro').fadeOut(800, function(){
        window.location.href = '../html/index.html'
    })
};

