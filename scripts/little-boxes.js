var Boxes = Class.create();

Boxes.prototype = {
	
	initialize: function() {
		this.boxWidth = 180;
		this.boxHeight = 230;
		this.bodyPadding = 10;
		this.boxes = $$('.box');
		this.randomRow = Math.floor(Math.random()*6);
		this.adjustTitle();
		this.colorBoxes();
		Event.observe(window, 'resize', this.colorBoxes.bindAsEventListener(this));
	},
	
	colorBoxes: function(rr) {
		if(typeof rr == "integer") { this.randomRow = rr }
		for (i=0; i<this.boxes.length; i++) {
			this.setColor(this.boxes[i]);
		}
	},
	
	adjustTitle: function() {
		for (i=0; i<this.boxes.length; i++) {
			title = this.boxes[i].getElementsByTagName('h2')
			if(title.length == 1) {
				if(Element.getHeight(title[0]) == 24) {
					title[0].setStyle({ margin : '11px 0 15px 0' });
				}
			}
		}
	},
	
	setColor: function(box) {
		shade = 8 - this.getColumn(box);
		color = this.getRow(box) % 6;
		if (shade < 2) {
			shade = 2;
		}
		switch (color)
		{
			case 0:
				bgcolor = "#" + shade + "" + shade + "" + (shade-1);
				break;
			case 5:
				bgcolor = "#" + shade + "" + (shade-1) + "" + shade;
				break;
			case 4:
				bgcolor = "#" + shade + "" + (shade-1) + "" + (shade-1);
				break;
			case 3:
				bgcolor = "#" + (shade-1) + "" + shade + "" + shade;
				break;
			case 2:
				bgcolor = "#" + (shade-1) + "" + shade + "" + (shade-1);
				break;
			case 1:
				bgcolor = "#" + (shade-1) + "" + (shade-1) + "" + shade;
				break;
		}
		box.setStyle({ backgroundColor: bgcolor });
	},

	getColumn: function(box) {
		offset = Position.cumulativeOffset(box)[0] - this.bodyPadding;
		column = Math.floor(offset / this.boxWidth);
		return column + 1;
	},

	getRow: function(box) {
		offset = Position.cumulativeOffset(box)[1] - this.bodyPadding;
		row = Math.floor(offset / this.boxHeight);
		return row + this.randomRow + 1;
	}
		
}

document.observe("dom:loaded", function() { new Boxes(); });
