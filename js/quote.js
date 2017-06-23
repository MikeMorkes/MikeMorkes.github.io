// globals	

var quoteArray = [{
		quote: '"Mike maintains and strives for a high level of accuracy."', number: 0
	},  {
		quote: '"[Mike] continues to meet daily requests, even at times when the turn around time is unrealistic he will find a way and always deliver. This is proven time and time again."', number: 1
	}, {
		quote: '"I have seen [Mike] go to great lengths to ensure that the customers expectations are met, not only with the design but also to increase their end result."', number: 2
	},  {
		quote: '"Mike has great attention to detail. Since he manages and maintains his own workflow, this is very important on a daily basis."', number: 3
	},  {
		quote: '"Mike does a wonderful job collaborating with people on a regular basis."', number: 4
	}
];

var currentQuoteNumber = 4;



function quote() {

	// generate a random number to pick a quote from the array
	var randomQuote = Math.floor(Math.random() * (quoteArray.length - 1 + 1));
	
	if (randomQuote === currentQuoteNumber && randomQuote < 4) {
		randomQuote++
		console.log('threw out a rerun for 0-3');
	} else if (randomQuote === 4) {
		randomQuote = 0;
		console.log('threw out a rerun for 4');
	}
	
	console.log(randomQuote);
	
	currentQuoteNumber = randomQuote; 

	// drop new quote and character into these variables that we'll use in the quote box and for any tweets
	displayQuote = quoteArray[randomQuote].quote;
	console.log('generate new quote');
	
	// populate the html objects with their corresponding data, then animate them
	document.getElementById("quoteText").innerHTML = "<em>" + displayQuote + "</em>";
	$("#quoteBox").addClass("animated flipInX").one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
		function(e) {
			$(this).removeClass('animated flipInX');
		}
	);	
	timer();
};


function timer() {

	setTimeout(function() {  
		quote();
	}, 3000);		
	    
}

quote();