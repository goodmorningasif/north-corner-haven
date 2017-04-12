/**
*
* Element superclass
*
* Specifies properties and methods used in track animation
*
* @param {selector}      :   specify current element
*/

function Element (selector) {
	this.el = $j('#' + selector);
	this.top = this.el.offset().top;
	this.bot = this.top + this.el.outerHeight(false);
	this.visited = false;
}

Element.prototype.hasVisited = function(){
	if (!this.visited){
		this.visited = true;
	}
	return this.visited;
}

Element.prototype.timeOut = function(action, timer=2000){
	return setTimeout(action.bind(this, action), timer);
}

Element.prototype.resetPositions = function(){
	this.top = this.el.offset().top;
	this.bot = this.top + this.el.outerHeight(false);
	this.visited = false;
}