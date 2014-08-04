//Dynamic text resizing

	var windowWidth = 0;
	var namesWidth = 0;
	var whereWidth = 0;

function variables(){
	windowWidth = window.innerWidth;
	namesWidth = windowWidth / 15.5;
	whereWidth = windowWidth / 27.8;
};

function text(){
	if(window.innerWidth >= 540){
		variables();
	} else{
		namesWidth = 540 / 15.5,
		whereWidth = 540 / 27.8
	};
	$("h1").css("font-size", namesWidth + "px");
	$("h2").css("font-size", whereWidth + "px");
}

$(document).ready(function(){
	text();
});

$(window).resize(function(){
	text();
});
