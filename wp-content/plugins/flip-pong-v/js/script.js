$(function(){
 
    var mag = $('#flipbook');
 
    // initiazlie turn.js on the #magazine div
    mag.turn();
 
    // turn.js defines its own events. We are listening
    // for the turned event so we can center the magazine
    mag.bind('turned', function(e, page, pageObj) {
 
        if(page == 1 && $(this).data('done')){
            mag.addClass('centerStart').removeClass('centerEnd');
        }
        else if (page == 32 && $(this).data('done')){
            mag.addClass('centerEnd').removeClass('centerStart');
        }
        else {
            mag.removeClass('centerStart centerEnd');
        }
 
    });
 
    setTimeout(function(){
        // Leave some time for the plugin to
        // initialize, then show the magazine
        mag.fadeTo(500,1);
    },1000);
 
    $(window).bind('keydown', function(e){
 
        // listen for arrow keys
 
        if (e.keyCode == 37){
            mag.turn('previous');
        }
        else if (e.keyCode==39){
            mag.turn('next');
        }
 
    });
 
});

function fullscreen() {
	//get elements
	var bkp = new Array();
	var mag = document.getElementById('magazine');
	var img = document.getElementsByClassName('flipbookimg');
	var turn = document.getElementsByClassName('turn-page-wrapper');
	var imgwidth = (screen.width)/2;
	var imgheight = img[0].height*imgwidth/img[0].width;
	//alert('ScrW:'+screen.width+' // W:'+imgwidth+' // H:'+imgheight);
	
	for (var k= 1; k < img.length+1; k++){
		var bkpName = 'flipbookpage turn-page p' + k ;
		bkp = document.getElementsByClassName(bkpName);
		//alert("k="+k+"nb de bkp:"+bkp.length);
		//alert(bkp[0].style.width);
		bkp[0].style.width = imgwidth+'px';
		bkp[0].style.height = imgheight+'px';	
	}
	
	
	//fullscreen #magazine
	mag.style.width = imgwidth*2+'px';
	mag.style.height = imgheight+'px';
	
	//fullscreen .turn-page-wrapper
	for (var j= 0; j< turn.length; j++){
		turn[j].style.width = imgwidth+'px';
		turn[j].style.height = imgheight+'px';
	}
	//fullscreen img
	for (var i = 0; i < img.length; i++) {
					img[i].width = imgwidth;
					img[i].height = imgheight;
				}
		
  }
  
 /* function supazoomin(){
  
	
	var supazoom = 1.5;
	supazoom = $("#magazine").turn("zoom");
	supazoom += 0.5;
	$("#magazine").turn("zoom", supazoom);
	var img = document.getElementsByClassName('flipbookimg');
	for (var i = 0; i < img.length; i++) {
		var width = img[i].width;
		var width = (width*0.5);
		img[i].width += width;
	}
	
	
	
}
	
function supazoomout(){
	var supazoom = 1.5;
	supazoom = $("#magazine").turn("zoom");
	if(supazoom <= 1){ return 0;}
	supazoom -= 0.5;
	$("#magazine").turn("zoom", supazoom);
	var img = document.getElementsByClassName('flipbookimg');
	for (var i = 0; i < img.length; i++) {
		var width = img[i].width;
		var width = (width*(1/3));
		img[i].width -= width;
	}
}*/