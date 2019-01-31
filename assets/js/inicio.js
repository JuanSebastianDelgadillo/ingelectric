/**
*Exampe from https://kottenator.github.io/jquery-circle-progress/
*/
var progressBarOptions = {
	startAngle: -1.55,
	size: 300,
    value: 0.75,
    fill: {
		color: '#ffa500'
	}
}

$('.circle').circleProgress(progressBarOptions).on('circle-animation-progress', function(event, progress, stepValue) {
	//$(this).find('strong').text(String(stepValue.toFixed(2)).substr(1));
});

$('#circle-b').circleProgress({
	value : 1,
	fill: {
		color: '#FF0000'
	}
});

