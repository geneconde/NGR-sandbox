(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// stage content:
(lib._2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// rollers
	this.instance = new lib.roller();
	this.instance.setTransform(33.3,311.7);

	this.instance_1 = new lib.roller();
	this.instance_1.setTransform(74.1,311.7);

	this.instance_2 = new lib.roller();
	this.instance_2.setTransform(114.9,311.7);

	this.instance_3 = new lib.roller();
	this.instance_3.setTransform(155.7,311.7);

	this.instance_4 = new lib.roller();
	this.instance_4.setTransform(196.5,311.7);

	this.instance_5 = new lib.roller();
	this.instance_5.setTransform(237.4,311.7);

	this.instance_6 = new lib.roller();
	this.instance_6.setTransform(656.7,311.7);

	this.instance_7 = new lib.roller();
	this.instance_7.setTransform(697.5,311.7);

	this.instance_8 = new lib.roller();
	this.instance_8.setTransform(738.3,311.7);

	this.instance_9 = new lib.roller();
	this.instance_9.setTransform(779.1,311.7);

	this.instance_10 = new lib.roller();
	this.instance_10.setTransform(819.9,311.7);

	this.instance_11 = new lib.roller();
	this.instance_11.setTransform(860.8,311.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_11},{t:this.instance_10},{t:this.instance_9},{t:this.instance_8},{t:this.instance_7},{t:this.instance_6},{t:this.instance_5},{t:this.instance_4},{t:this.instance_3},{t:this.instance_2},{t:this.instance_1},{t:this.instance}]}).wait(20));

	// red
	this.instance_12 = new lib.red("synched",0);
	this.instance_12.setTransform(547.4,213.1,0.621,0.621);

	this.timeline.addTween(cjs.Tween.get(this.instance_12).to({alpha:0.398},9).to({alpha:1},10).wait(1));

	// green
	this.instance_13 = new lib.green("synched",0);
	this.instance_13.setTransform(354,234.2,0.587,0.587);

	this.timeline.addTween(cjs.Tween.get(this.instance_13).to({alpha:0.398},9).to({alpha:1},10).wait(1));

	// smoke
	this.instance_14 = new lib.smoke_1();
	this.instance_14.setTransform(590.5,94.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_14).wait(1).to({scaleX:1.03,scaleY:1.03,y:90.7,alpha:0.947},0).wait(1).to({scaleX:1.06,scaleY:1.06,y:86.5,alpha:0.895},0).wait(1).to({scaleX:1.08,scaleY:1.08,y:82.4,alpha:0.842},0).wait(1).to({scaleX:1.11,scaleY:1.11,y:78.2,alpha:0.789},0).wait(1).to({scaleX:1.14,scaleY:1.14,y:74.1,alpha:0.737},0).wait(1).to({scaleX:1.17,scaleY:1.17,y:69.9,alpha:0.684},0).wait(1).to({scaleX:1.2,scaleY:1.2,y:65.8,alpha:0.632},0).wait(1).to({scaleX:1.23,scaleY:1.23,y:61.6,alpha:0.579},0).wait(1).to({scaleX:1.25,scaleY:1.25,y:57.5,alpha:0.526},0).wait(1).to({scaleX:1.28,scaleY:1.28,y:53.3,alpha:0.474},0).wait(1).to({scaleX:1.31,scaleY:1.31,y:49.1,alpha:0.421},0).wait(1).to({scaleX:1.34,scaleY:1.34,y:45,alpha:0.368},0).wait(1).to({scaleX:1.37,scaleY:1.37,y:40.8,alpha:0.316},0).wait(1).to({scaleX:1.39,scaleY:1.39,y:36.7,alpha:0.263},0).wait(1).to({scaleX:1.42,scaleY:1.42,y:32.5,alpha:0.211},0).wait(1).to({scaleX:1.45,scaleY:1.45,y:28.4,alpha:0.158},0).wait(1).to({scaleX:1.48,scaleY:1.48,y:24.2,alpha:0.105},0).wait(1).to({scaleX:1.51,scaleY:1.51,y:20.1,alpha:0.053},0).wait(1).to({scaleX:1.54,scaleY:1.54,y:15.9,alpha:0},0).wait(1));

	// bg
	this.instance_15 = new lib.bg();
	this.instance_15.setTransform(287.9,-0.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_15}]}).wait(20));

	// sides
	this.instance_16 = new lib.sides();
	this.instance_16.setTransform(280.5,166.1,0.9,0.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_16}]}).wait(20));

	// glass
	this.instance_17 = new lib.glass_1();
	this.instance_17.setTransform(373.5,273.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_17}]}).wait(20));

	// sand
	this.instance_18 = new lib.sand();
	this.instance_18.setTransform(880.5,279.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_18}]}).wait(20));

	// panels
	this.instance_19 = new lib.panels();
	this.instance_19.setTransform(-2.9,273.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_19}]}).wait(20));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-2.9,-0.3,924,428);


// symbols:
(lib.bg = function() {
	this.initialize(img.bg);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,325,428);


(lib.glass = function() {
	this.initialize(img.glass);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,150,41);


(lib.panels = function() {
	this.initialize(img.panels);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,56);


(lib.sides = function() {
	this.initialize(img.sides);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,371,201);


(lib.smoke = function() {
	this.initialize(img.smoke);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,222,224);


(lib.Symbol1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.glass();

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,150,41);


(lib.smoke_1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.smoke();
	this.instance.setTransform(-29.6,-29.9,0.268,0.268);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-29.6,-29.9,59.5,60);


(lib.rotate = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#3B3B3B").s().p("AAKB3IgKABIgKgBIgIASQgNgBgUgHIADgVIgTgLIgQAMQgOgKgLgOIAMgQIgGgJIgFgKIgUACQgHgRgCgRIATgHIAAgVIgTgIQADgQAGgQIAUACIAFgKIAGgJIgMgQQAMgQANgJIAQAMIAJgGIAKgFIgDgUQAUgHANgCIAIASIAUAAIAIgSQAOACAUAHIgCAUIAKAFIAJAGIAQgMQANAJALAQIgMAQIAGAJIAFAKIAUgCQAHAQACAQIgTAIIAAAVIATAHQgCARgHARIgUgCIgFAKIgGAJIAMAQQgLAOgNAKIgQgMIgTALIACAVQgUAHgOABgAggg4QgPAHgKARQgIAOgBASQABATAIAOQAKAQAPAJQAPAJARAAQASAAAPgJQAQgJAJgQQAIgOABgTQgBgSgIgOQgKgRgPgHQgNgJgUgBQgSABgOAJg");
	this.shape.setTransform(13.8,13.8);

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,27.5,27.5);


(lib.red = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#B62F30").s().p("AhfBgQgogoAAg4QAAg3AogoQAogoA3AAQA4AAAoAoQAoAoAAA3QAAA4goAoQgoAog4AAQg3AAgogog");

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-13.6,-13.6,27.4,27.4);


(lib.movesand = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#FFD682","#FFDA8B","#FFE5A3","#FFE6A6"],[0,0.357,0.933,1],-5.5,3,7.9,-3.2).s().p("AhCAbQgNgEAtgFQApgFgCgNQgBgIgRgIQgOgGgCgEQgCgFAPACQAfADAdAOQAcAMgCAMQgDARhPABQgrAAgLgDg");
	this.shape.setTransform(72.7,12);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["#FFD682","#F9CD7C","#EAB56D","#DB9E5E"],[0.055,0.298,0.694,1],5.9,-5.4,-17.5,14.3).s().p("AAfAtQhFgEgtgQQgfgLhIAAQhEAAgigOQgsgTAzgNQArgMBUgCQA3gBA4AGQAyAGAOgBQA4gDA6AKIBoAQQBgAJgjAUQggAUhYAHQgtAEgrAAQgfAAgegCg");
	this.shape_1.setTransform(34.4,11);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.lf(["#F0BA6E","#FDE299"],[0,1],-18.2,5.7,4.4,-1.7).s().p("AAUAzQi3gBhGgUQg5gPgWgRQgUgQALgPQAFgHAQgKQgIAOAHARQAJATAdALQAkAQA7AHQAiAFA9ACIByAGQBWACA8gHQBCgJATgBQATgBAjAEQgoAAgOADQhDANiZAAIggAAg");
	this.shape_2.setTransform(32.7,12);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.lf(["#FFD682","#F9CD7C","#EAB56D","#DB9E5E"],[0,0.259,0.675,1],6.2,-13.4,-5.8,18.4).s().p("Ag4BWQi5gChGgTQg4gQgXgTQgVgRAMgNQAYgZA7gXQBKgdBdgGQBtgHBrAWQCHAcAkACQBWAFAsAcQAjAUABAcQABAbhYABQhlgDgWAEQhEAOiWAAIggAAg");
	this.shape_3.setTransform(40.5,8.6);

	this.addChild(this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,81,17.2);


(lib.green = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#24E846").s().p("AhfBgQgogoAAg4QAAg3AogoQAogoA3AAQA4AAAoAoQAoAoAAA3QAAA4goAoQgoAog4AAQg3AAgogog");

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-13.6,-13.6,27.4,27.4);


(lib.sand = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.movesand();
	this.instance.setTransform(0.1,0,1,1,0,0,0,40.5,8.6);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({x:-6},0).wait(1).to({x:-12.3},0).wait(1).to({x:-18.7,y:0},0).wait(1).to({x:-25,y:-0.1},0).wait(1).to({x:-31.3,y:-0.2},0).wait(1).to({x:-37.7},0).wait(1).to({x:-44,y:-0.3},0).wait(1).to({x:-50.3,y:-0.4},0).wait(1).to({x:-56.6,y:-0.5},0).wait(1).to({x:-63,y:-0.6},0).wait(1).to({x:-69.3},0).wait(1).to({x:-75.6,y:-0.7},0).wait(1).to({x:-81.9,y:-0.8},0).wait(1).to({x:-88.3,y:-0.9},0).wait(1).to({x:-94.6,y:-1},0).wait(1).to({x:-100.9,y:-1.1},0).wait(1).to({x:-107.3},0).wait(1).to({x:-113.6,y:-1.2},0).wait(1).to({x:-119.9,y:-1.3},0).wait(1).to({x:-126.2,y:-1.4},0).wait(1).to({x:-132.6,y:-1.5},0).wait(1).to({x:-138.9},0).wait(1).to({x:-145.2,y:-1.6},0).wait(1).to({x:-151.5,y:-1.7},0).wait(1).to({x:-157.9,y:-1.8},0).wait(1).to({x:-164.2,y:-1.9},0).wait(1).to({x:-170.5,y:-2},0).wait(1).to({x:-176.8},0).wait(1).to({x:-183.2,y:-2.1},0).wait(1).to({x:-189.5,y:-2.2},0).wait(1).to({x:-195.8,y:-2.3},0).wait(1).to({x:-202.1,y:-2.4},0).wait(1).to({x:-208.5},0).wait(1).to({x:-214.8,y:-2.5},0).wait(1).to({x:-221.1,y:-2.6},0).wait(1).to({x:-227.5,y:-2.7},0).wait(1).to({x:-233.8,y:-2.8},0).wait(1).to({x:-240.1,y:-2.9},0).wait(1).to({x:-246.4},0).wait(1).to({x:-252.8,y:-3},0).wait(1).to({x:-259.1,y:-3.1},0).wait(1).to({x:-265.4,y:-3.2},0).wait(1).to({x:-271.7,y:-3.3},0).wait(1).to({x:-278.1},0).wait(1).to({x:-284.4,y:-3.4},0).wait(1).to({x:-290.7,y:-3.5},0).wait(1).to({x:-297,y:-3.6},0).wait(1).to({x:-303.4,y:-3.7},0).wait(1).to({x:-309.7,y:-3.8},0).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-97.3,-9.2,81,17.2);


(lib.roller = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#999498").s().p("AgUAVQgJgJAAgMQAAgLAJgJQAJgJALAAQAMAAAJAJQAJAJAAALQAAAMgJAJQgJAJgMAAQgLAAgJgJg");

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).wait(30));

	// Layer 2
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#666666").s().p("Ag4A5QgYgYAAghQAAggAYgYQAYgYAgAAQAhAAAYAYQAYAYAAAgQAAAhgYAYQgYAYghAAQggAAgYgYg");

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1}]}).wait(30));

	// Layer 1
	this.instance = new lib.rotate();
	this.instance.setTransform(0.1,0.1,1,1,0,0,0,13.8,13.8);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({rotation:24.8,x:0},0).wait(1).to({rotation:49.7},0).wait(1).to({rotation:74.5},0).wait(1).to({rotation:99.3},0).wait(1).to({rotation:124.1,y:0},0).wait(1).to({rotation:149},0).wait(1).to({rotation:173.8},0).wait(1).to({rotation:198.7},0).wait(1).to({rotation:223.5},0).wait(1).to({rotation:248.4,x:0.1},0).wait(1).to({rotation:273.2},0).wait(1).to({rotation:298},0).wait(1).to({rotation:322.9,y:0.1},0).wait(1).to({rotation:347.7},0).wait(1).to({rotation:372.4},0).wait(1).to({rotation:397.2},0).wait(1).to({rotation:422.1,x:0},0).wait(1).to({rotation:446.9},0).wait(1).to({rotation:471.7},0).wait(1).to({rotation:496.6,y:0},0).wait(1).to({rotation:521.4},0).wait(1).to({rotation:546.3},0).wait(1).to({rotation:571.1},0).wait(1).to({rotation:596},0).wait(1).to({rotation:620.8,x:0.1},0).wait(1).to({rotation:645.6},0).wait(1).to({rotation:670.4},0).wait(1).to({rotation:695.3},0).wait(1).to({rotation:720,y:0.1},0).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-19.3,-19.3,38.8,38.8);


(lib.glass_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Symbol1();
	this.instance.setTransform(21,-5.9,1,1,0,0,0,75,20.5);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(49).to({_off:false},0).wait(1).to({x:14.2},0).wait(1).to({x:7.3},0).wait(1).to({x:0.5},0).wait(1).to({x:-6.2},0).wait(1).to({x:-13},0).wait(1).to({x:-19.9},0).wait(1).to({x:-26.8},0).wait(1).to({x:-33.6},0).wait(1).to({x:-40.5},0).wait(1).to({x:-47.3},0).wait(1).to({x:-54.2},0).wait(1).to({x:-61},0).wait(1).to({x:-67.9},0).wait(1).to({x:-74.8},0).wait(1).to({x:-81.6},0).wait(1).to({x:-88.5},0).wait(1).to({x:-95.3},0).wait(1).to({x:-102.2},0).wait(1).to({x:-109},0).wait(1).to({x:-115.9},0).wait(1).to({x:-122.7},0).wait(1).to({x:-129.6},0).wait(1).to({x:-136.5},0).wait(1).to({x:-143.3},0).wait(1).to({x:-150.2},0).wait(1).to({x:-157},0).wait(1).to({x:-163.9},0).wait(1).to({x:-170.8},0).wait(1).to({x:-177.6},0).wait(1).to({x:-184.5},0).wait(1).to({x:-191.3},0).wait(1).to({x:-198.2},0).wait(1).to({x:-205},0).wait(1).to({x:-211.9},0).wait(1).to({x:-218.8},0).wait(1).to({x:-225.6},0).wait(1).to({x:-232.5},0).wait(1).to({x:-239.3},0).wait(1).to({x:-246.2},0).wait(1).to({x:-253},0).wait(1).to({x:-259.9},0).wait(1).to({x:-266.7},0).wait(1).to({x:-273.6},0).wait(1).to({x:-280.5},0).wait(1).to({x:-287.3},0).wait(1).to({x:-294.2},0).wait(1).to({x:-301},0).wait(1).to({x:-307.9},0).wait(1).to({x:-314.8},0).wait(1).to({x:-321.6},0).wait(1).to({x:-328.5},0).wait(1).to({x:-335.3},0).wait(1).to({x:-342.2},0).wait(1).to({x:-349},0).wait(1).to({x:-355.9},0).wait(1).to({x:-362.8},0).wait(1).to({x:-369.6},0).wait(1).to({x:-376.5},0).wait(1).to({x:-383.3},0).wait(1).to({x:-390.2},0).wait(1).to({x:-397},0).wait(1).to({x:-403.9},0).wait(1).to({x:-410.8},0).wait(1).to({x:-417.6},0).wait(1).to({x:-424.5},0).wait(1).to({x:-431.3},0).wait(1).to({x:-438.2},0).wait(1).to({x:-445},0).wait(1).to({x:-451.9},0).wait(1).to({x:-458.8},0).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,0,0);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;