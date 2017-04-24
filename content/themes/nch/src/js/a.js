/**
*
* A is for Airplane
*
* Include scripts that need to be compiled first.
*
*/

var $j = jQuery.noConflict();

// extend Element into subclasses
var main = new Element('main');
var land = new Element('land');
var invited = new Element('invited');
var newsletter = new Element('newsletter');


/**
*
* triggerActions
*
* Triggers repeated page animations
*
* @params{currentPos}   :   contains position data for current element
* @params{nextPos}      :   contains position data for next element
* @params{element}      :   section that will be effected by fade in
* @params{track}        :   track that will be effected by fade in
* @params{adjustment}        :   track that will be effected by fade in
*/

var triggerActions = function(currentPos, nextPos, element, track, adjustment){
  if (adjustment) {
    animateTrack(track, currentPos.bot, nextPos.top, adjustment);
  } else {
    animateTrack(track, currentPos.bot, nextPos.top);
  }

  fadeInCopy(element);
	currentPos.timeOut(currentPos.hasVisited);
}

/**
*
* document.ready
*
* Include scripts to run on document.ready
*
*/

$j(document).ready(function(){

  // Fade in Main Background Images
  fadeInCopy('header-bg');
  
  // Start line after time in
  setTimeout(animateTrack.bind(null, 'tr-0', main.bot, land.top), 2100);


  // Define action on scroll down
	$j(window).scroll(function(){
    
    // Keeps track of scroll position
	  var scrollTop = $j(window).scrollTop();
    var browserWidth = $j(window).width();

    // Adjustments to track triggers
    var trigger0 = main.bot/2 - 100;
    var trigger1 = land.bot/2 - 100;
    var trigger2 = invited.bot/2 + 300;
    

    // Track Animations
    if ( scrollTop >= trigger0 && !main.visited) {
	  	triggerActions(main, land, 'land', 'tr-0');
	  }
	  if ( scrollTop >= trigger1 && !land.visited && main.visited) {
	    triggerActions(land, invited, 'invited', 'tr-1', 120);
	  }
	  if ( scrollTop >= trigger2 && !invited.visited && land.visited) {
	    triggerActions(invited, newsletter, 'newsletter', 'tr-2', 160);
	  }

    // Fade in Header
    if ( scrollTop >= main.bot ){
      fadeInCopy('head');
    } 
    if ( scrollTop < main.bot ){
      fadeOutCopy('head');
    }

	});

  
  // Define actions on browser resize
  $j(window).resize(function(){

	  //reset position markers to retrigger track height
	  main.resetPositions();
	  land.resetPositions();
	  invited.resetPositions();
	  newsletter.resetPositions();
  	 
  	if(main.visited){
      triggerActions(main, land, 'land', 'tr-0');
  	}
  	if(land.visited){
      triggerActions(land, invited, 'invited', 'tr-1', 120);
  	}
  	if(invited.visited){
      triggerActions(invited, newsletter, 'newsletter', 'tr-2', 100);
  	}

  })



});