// for escape key enthusiasts
window.document.onkeydown = function (e) 
{
    if (!e){
        e = event;
    }
    if (e.keyCode == 27){ 
        lightbox_close();
    }
}

var tempID = "";

// open function
function lightbox_open(id){
    window.scrollTo(0,0);
    tempID = id;
    jqTemp = "#" + id;
    document.getElementById(id).style.display='block';
	$(jqTemp).addClass("fade-in").one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
			function(e) {
				$(this).removeClass('fade-in');
			}
		);    
    document.getElementById('fade').style.display='block';  
    
}

// close function
function lightbox_close(id){
    document.getElementById('fade').style.display='none';
    document.getElementById(tempID).style.display='none';
}
