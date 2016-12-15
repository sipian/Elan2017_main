$(function() {
	$('.contestName').textillate({
  loop: true,
  in: { 
    effect: 'tada',    
    delayScale: 1,
    delay: 150,
    shuffle: true
  }, 
  out: { 
    effect: 'flipOutY',
    reverse: true
  } 
});
});