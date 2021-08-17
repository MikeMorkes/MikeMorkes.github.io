// hacky bit of code to force page to rotate 90 degrees when phone is held in portrait mode - we want the phone to look and be held like a Walkman!
/* $(document).ready(function () {
  function reorient(e) {
    var portrait = (window.orientation % 180 == 0);
    $("body > div").css("-webkit-transform", !portrait ? "rotate(-90deg)" : "");
  }
  window.onorientationchange = reorient;
  window.setTimeout(reorient, 0);
}); 

// might use to make tape run for exact length of songs
			/*for (var i=0; i <= totalTracks; i++) {
				var trackDuration = $('audio[id^="sound"]')[i].duration;
				trackDuration = Math.round(trackDuration);
				totalTime += trackDuration;
				console.log('totalTime: ' + totalTime);
			}
			console.log('totalTime: ' + totalTime); */

//$(".play.active").css('-webkit-animation', 'ClockwiseSpinGrow ' + totalTime + 's infinite linear;');
// console.log($('audio[id^="sound"]')[trackCount].duration); */

var trackCount = 0;
var trackList = [
	["Vintage Electro Pop", "Frankum"],
	["80s Mean", "FurbyGuy"],
	["Techno 80", "Frankum & Frankumjay"],
	["Neutrino", "K-Alpha"],
	["No Solution", "K-Alpha"],
	["Combustion (Experiment)", "K-Alpha"],
	["Pathologically (loop)", "K-Alpha"],
	["Next Step Into the Darkness", "K-Alpha"]
];
var totalTracks = trackList.length;
// var totalTime = 0; // may be used later to change spool size to match total album length

// cassette player sounds
var fastForwardSound = new Audio(
	"http://www.mikemorkes.com/codepen/cassette/fast-forward.mp3"
);
var stopSound = new Audio(
	"http://www.mikemorkes.com/codepen/cassette/buttonClunk.mp3"
);

var angle; // we'll need this later in the pause button

var reset = function() {
	$("#btn1").removeClass("pressed");
	$(".play-gear").addClass("paused");
	$(".play").addClass("paused");
	$(".play-reverse").addClass("paused");
	document.getElementById("title").innerHTML = "Vintage Electro Pop";
	document.getElementById("artist").innerHTML = "Frankum";
	trackCount = 0;
};

function playSound() {
	if (trackCount < totalTracks - 1) {
		trackCount++;
		$('audio[id^="sound"]')[trackCount].play();
		document.getElementById("title").innerHTML = trackList[trackCount][0];
		document.getElementById("artist").innerHTML = trackList[trackCount][1];
		$('audio[id^="sound"]')[trackCount].addEventListener("ended", playSound);
	} else {
		$('audio[id^="sound"]')[trackCount].removeEventListener("ended", playSound);
		playClunk();
		reset();
	}
}

// functions to play cassette player sounds
function playTapeWind() {
	fastForwardSound.play();
}
function playClunk() {
	stopSound.play();
}

// this function loads and unloads styles for animations and button states
function classLoader() {
	// change button states
	$("#playBtn").addClass("pressed");
	$("#pauseBtn").removeClass("pressed");
	//add animations
	$(".play").addClass("active");
	$(".play-gear").addClass("active");
	$(".play-reverse").addClass("reverse");
	//remove pause from gears and spools
	$(".play").removeClass("paused");
	$(".play-gear").removeClass("paused");
	$(".play-reverse").removeClass("paused");
	//remove double speed from gears and spools
	$(".play").removeClass("double");
	$(".play-gear").removeClass("double");
	$(".play-reverse").removeClass("double");	
}

// this function loads and unloads styles for animations and button states at double speed
function doubleLoader() {
	// change button states
	$("#playBtn").addClass("pressed");
	$("#pauseBtn").removeClass("pressed");
	//add animations with delay to match sound
	setTimeout(function() {
		$(".play").addClass("double");
		$(".play-gear").addClass("double");
		$(".play-reverse").addClass("double");
	}, 1200);	
	//remove pause from gears and spools
	$(".play").removeClass("paused");
	$(".play-gear").removeClass("paused");
	$(".play-reverse").removeClass("paused");
	//remove normal speed from gears and spools
	$(".play").removeClass("active");
	$(".play-gear").removeClass("active");
	$(".play-reverse").removeClass("reverse");	
}


// cassette player button functions

//play button
$("#playBtn").click(function() {
	// var $this = $(this); // I might use this to recombine the play and pause buttons
	trackCount--;
	classLoader();
	// play song and update label
	// $this.text('PAUSE'); // save this if I want to make play/pause one button
	playSound();
});

// fast forward button
$("#fastForwardBtn").click(function() {
	$('audio[id^="sound"]')[trackCount].pause();
	if (trackCount < totalTracks - 1) {
		doubleLoader();
		playTapeWind();
		// set the normal speed to load early to match up with the sound
		setTimeout(function() {
			classLoader();
		}, 4000);	
		//this bit keeps overanxious people from repeatedly click the forward button, which makes the audio get completely out of sync. Want to be able to fast forward more quickly? Get an iPod, this is a CASSETTE PLAYER, man!
		var input = this;
        input.disabled = true;
		setTimeout(function() {
			// second bit of the var input code
			input.disabled = false;
			$('audio[id^="sound"]')[trackCount].currentTime = 0;
			playSound();
		}, 5000);
	} else {
		// end of tape. Real life tape player would stop (unless you could afford the fancy ones that auto-rewound or played the back side), so we'll do the same.
		$('audio[id^="sound"]')[trackCount].removeEventListener("ended", playSound);
		playClunk();
		reset();
	}
});

//rewind button
$("#rewindBtn").click(function() {
	// var $this = $('#btn1'); // save this if I want to make play/pause one button
	$('audio[id^="sound"]')[trackCount].pause();
	playTapeWind();
	// set the normal speed to load early to match up with the sound
	setTimeout(function() {
		classLoader();
	}, 4000);	
		//this bit keeps overanxious people from repeatedly click the forward button, which makes the audio get completely out of sync. Want to be able to fast forward more quickly? Get an iPod, this is a CASSETTE PLAYER, man!
		var input = this;
        input.disabled = true;	
	setTimeout(function() {
			// second bit of the var input code
			input.disabled = false;		
		if (trackCount == 0) {
			// $this.text('PAUSE');
			
			$('audio[id^="sound"]')[trackCount].currentTime = 0;
			trackCount--;
			playSound();
		} else {
			
			$('audio[id^="sound"]')[trackCount].currentTime = 0;
			trackCount = trackCount - 2;
			playSound();
		}
	}, 5000);
});

// pause button
$("#pauseBtn").click(function() {
	
	// var $this = $(this); // save this if I want to make play/pause one button
	$('audio[id^="sound"]')[trackCount].pause();

	// adjust button states
	$("#playBtn").removeClass("pressed");
	$("#pauseBtn").addClass("pressed");
	console.log("finished button states");
	// pause tape spools at current width and height
	var widthStore = $("#left-tape").css("width");
	var heightStore = $("#left-tape").css("height");
	console.log(widthStore);
	$("#left-tape")
		.addClass("no-animation")
		.css({ width: widthStore, height: heightStore });
	var widthStore2 = $("#right-tape").css("width");
	var heightStore2 = $("#right-tape").css("height");
	$("#right-tape")
		.addClass("no-animation")
		.css({ width: widthStore2, height: heightStore2 });
	// pause tape transform
	$(".play").addClass("paused");
	$(".play-reverse").addClass("paused");	
	
	// ridiculous chunk of code to track angle of rotation on gears, thanks to Apple killing support for play-state on iOS webkit
	// code created by Chris Coyier: https://css-tricks.com/get-value-of-css-rotation-through-javascript/
	// tweaked by me to stop it from breaking Firefox and IE. Firefox and IE don't actually need to use this, but they will break the .play-gear .paused code if you don't let rotateStore pass a value other than undefined
	var rotateStore = $("#gear").css("-webkit-transform");
	if (rotateStore === undefined) {
		console.log("-webkit didn't fire");
		rotateStore = $("#gear").css("-moz-transform");
		if (rotateStore === undefined) {
			console.log("-moz didn't fire");
			rotateStore = $("#gear").css("transform");
			console.log(rotateStore);
		}
	}

	var values = rotateStore.split("(")[1].split(")")[0].split(",");
	var a = values[0];
	var b = values[1];
	var c = values[2];
	var d = values[3];
	var scale = Math.sqrt(a * a + b * b);
	// arc sin, convert from radians to degrees, round
	var sin = b / scale;
	// next line works for 30deg but not 130deg (returns 50);
	// var angle = Math.round(Math.asin(sin) * (180/Math.PI));
	angle = Math.round(Math.atan2(b, a) * (180 / Math.PI));

	// pause gear rotation
	$(".play-gear").addClass("paused");

	// set gears to correct degree when pause is clicked in -webkit. Firefox and IE don't actually need to use this, but they will break the .play-gear .paused code if you don't let rotateStore pass a value other than undefined
	$("#gear")
		.addClass("no-animation")
		.css({ "-webkit-transform": "rotate(" + angle + "deg)" });
	$("#gear2")
		.addClass("no-animation")
		.css({ "-webkit-transform": "rotate(" + angle + "deg)" });
	$("#gear")
		.addClass("no-animation")
		.css({ "-moz-transform": "rotate(" + angle + "deg)" });
	$("#gear2")
		.addClass("no-animation")
		.css({ "-moz-transform": "rotate(" + angle + "deg)" });
});

function ZoomIn(){
    var p = $(this).offset();
    var w = $(this).width();
    var h = $(this).height();
    var $clone = $(this).clone();
    $clone.css({
        position: "absolute",
        left: p.left + "px",
        top: p.top + "px",
        "z-index": 2
    }).appendTo('body');
    $clone.data("origWidth",w);
    $clone.data("origHeight",h);
    $clone.data("origTop",p.top);
    $clone.data("origLeft",p.left);
    $clone.animate({
        top: "-=" + Math.floor(h * 0.5),
        left: "-=" + Math.floor(w * 0.5),
        width: Math.floor(w * 2),
        height: Math.floor(h * 2)
    }, 10890, function(){
    });
    $clone.click(ZoomOut);
}


function ZoomOut(){
    var w = $(this).data("origWidth");
    var h = $(this).data("origHeight");
    var t = $(this).data("origTop");
    var l = $(this).data("origLeft");
    $(this).animate({
        top: t,
        left: l,
        width: w,
        height: h
    }, 10890, function(){
        $(this).remove();
    });
}