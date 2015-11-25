(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// stage content:
(lib._2 = function() {
	this.initialize();

	// Layer 2
	this.instance = new lib.boy_1();
	this.instance.setTransform(1007.3,410.1,1,1,0,0,0,75,75);

	// flash0.ai
	this.instance_1 = new lib.cloud1();
	this.instance_1.setTransform(605.2,610.1,1,1,0,0,0,605.6,112.7);

	// Layer 1
	this.instance_2 = new lib.Bitmap10();
	this.instance_2.setTransform(0,0,0.818,0.818);

	this.addChild(this.instance_2,this.instance_1,this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-1420.3,0,2502.6,670.1);


// symbols:
(lib.Bitmap10 = function() {
	this.initialize(img.Bitmap10);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1100,819);


(lib.boy = function() {
	this.initialize(img.boy);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,374,374);


(lib.flattoneImage = function() {
	this.initialize(img.flattoneImage);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1100,301);


(lib.Symbol1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.boy();
	this.instance.setTransform(0,0,0.401,0.401);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,149.9,149.9);


(lib.flattone = function() {
	this.initialize();

	// Layer 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("A1uHWIAAjuIgEAAIAAhcIBEAAIAAj7IA8AAIAAghIBiAAIAAgaIB3AAIAAAaIA/AAIAAAdIAuAAIAAAjIAnAAIAAAsIAjAAIAAA6IAfAAIAAB2IA/AAIAAgeIAeAAIAAgcIAhAAIAAgYIAyAAIAAgbIBmAAIAAgbIACAAIAAgCIB0AAIAAAeIBPAAIAAAcIAeAAIAAAWIAjAAIAAAcIAFAAIAAAeIEiAAIAAgbIApAAIAAggIAlAAIAAgZIAwAAIAAgfIBbAAIAAAfIAyAAIAAgkIAJAAIAAg3IAbAAIAAg9IASAAIAAgeIA8AAIAAgYIBcAAIAAg4IAlAAIAAh7IAgAAIAAgdIAYAAIAAgeIAgAAIAAgdIAyAAIAAgWIBnAAIAAgeIB4AAIAAAeIBHAAIAAAWIAcAAIAAAdIAuAAIAAAeIAQAAIAAAdIAgAAIAABBIAZAAIAAB0IAiAAIAAAcIA9AAIAAgDIAFAAIAAADIAZAAIAAAOIAKAAIAAAPIAZAAIAACsIBgAAIAAAwIAbAAIAABCIAXAAIAAETg");
	mask.setTransform(139.5,47.5);

	// Layer 3
	this.instance = new lib.flattoneImage();
	this.instance.setTransform(9.3,0,0.24,0.24);

	this.instance.mask = mask;

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(9.3,0,264,72.3);


(lib.Tween2 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#47A7C7").s().p("AHXFcIAAhYIgcAAIAAhYIAcAAIAAgdIAeAAIAAA7IgeAAIAAAdIAeAAIAAAdIAdAAIAABYgASUFCIAAgdIAcAAIAAgdIAdAAIAAjMIgdAAIAAgeIhXAAIAAA7IgdAAIAAA6Ig6AAIAAgdIAdAAIAAg7IAdAAIAAg6IgdAAIAAhyIgdAAIAAg7IgeAAIAAg6IAeAAIAAAdIAdAAIAAA6IAdAAIAAB1IAdAAIAAAbIBYAAIAAAdIAdAAIAAAdIAdAAIAACSIA8AAIAABYIgCAAIAAg6Ig6AAIAAA6IgdAAIAAAdgAk4EmIAAg6Ig7AAIAAgdIgdAAIAAgeIg6AAIAAgdIh0AAIAAAdIhYAAIAAAeIg6AAIAAAdIgdAAIAAAdIgeAAIAAAdIg6AAIAAAAIgaAAIAAh1IgeAAIAAg6IgdAAIAAg6IAeAAIAAAdIAdAAIAAA6IAdAAIAAB1IAaAAIAAgdIAdAAIAAgdIAdAAIAAgeIA7AAIAAgdIB1AAIAAgdIB1AAIAAAdIBXAAIAAAdIAdAAIAAAeIAeAAIAAAdIAcAAIAAAdIAbAAIAAgBIDpAAIAAgeIAcAAIAAgdIAdAAIAAgdIA7AAIAAgdIB0AAIAAAdIAdAAIAAhXIAdAAIAAg7IAeAAIAAgdIA6AAIAAgbIBYAAIAAg6IAcAAIAAh1IAdAAIAAgdIAeAAIAAgdIAdAAIAAgeIA6AAIAAgdIB1AAIAAAdIhXAAIAAAeIg7AAIAAAdIgdAAIAAAdIgdAAIAAAdIgdAAIAAB2IgeAAIAAA4IgcAAIAAgBIg7AAIAAAdIg6AAIAAAeIgdAAIAAA7IgeAAIAABWIhXAAIAAgdIg7AAIAAAdIg5AAIAAAeIgeAAIAAAdIgdAAIAAAdIkDAAIAAABgAvUA9IAAgeIgdAAIAAgdIg6AAIAAgbIh1AAIAAgdIB1AAIAAAdIBYAAIAAAbIAdAAIAAAdIAcAAIAAAegA0nAfIAAgdIASAAIAAgbIB1AAIAAAbIhYAAIAAAdgAOqjmIAAgdIgdAAIAAgeIg7AAIAAgdIh0AAIAAgdIB1AAIAAAdIBXAAIAAAdIAdAAIAAAeIAdAAIAAAdg");
	this.shape.setTransform(875.6,-4.1,2.357,2.357);

	this.instance = new lib.flattone();
	this.instance.setTransform(871.2,27.6,2.356,2.356,0,0,0,139.5,47.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#47A7C7").s().p("AHXFcIAAhYIgcAAIAAhYIAcAAIAAgdIAeAAIAAA7IgeAAIAAAdIAeAAIAAAdIAdAAIAABYgASUFCIAAgdIAcAAIAAgdIAdAAIAAjMIgdAAIAAgeIhXAAIAAA7IgdAAIAAA6Ig6AAIAAgdIAdAAIAAg7IAdAAIAAg6IgdAAIAAhyIgdAAIAAg7IgeAAIAAg6IAeAAIAAAdIAdAAIAAA6IAdAAIAAB1IAdAAIAAAbIBYAAIAAAdIAdAAIAAAdIAdAAIAACSIA8AAIAABYIgCAAIAAg6Ig6AAIAAA6IgdAAIAAAdgAk4EmIAAg6Ig7AAIAAgdIgdAAIAAgeIg6AAIAAgdIh0AAIAAAdIhYAAIAAAeIg6AAIAAAdIgdAAIAAAdIgeAAIAAAdIg6AAIAAAAIgaAAIAAh1IgeAAIAAg6IgdAAIAAg6IAeAAIAAAdIAdAAIAAA6IAdAAIAAB1IAaAAIAAgdIAdAAIAAgdIAdAAIAAgeIA7AAIAAgdIB1AAIAAgdIB1AAIAAAdIBXAAIAAAdIAdAAIAAAeIAeAAIAAAdIAcAAIAAAdIAbAAIAAgBIDpAAIAAgeIAcAAIAAgdIAdAAIAAgdIA7AAIAAgdIB0AAIAAAdIAdAAIAAhXIAdAAIAAg7IAeAAIAAgdIA6AAIAAgbIBYAAIAAg6IAcAAIAAh1IAdAAIAAgdIAeAAIAAgdIAdAAIAAgeIA6AAIAAgdIB1AAIAAAdIhXAAIAAAeIg7AAIAAAdIgdAAIAAAdIgdAAIAAAdIgdAAIAAB2IgeAAIAAA4IgcAAIAAgBIg7AAIAAAdIg6AAIAAAeIgdAAIAAA7IgeAAIAABWIhXAAIAAgdIg7AAIAAAdIg5AAIAAAeIgeAAIAAAdIgdAAIAAAdIkDAAIAAABgAvUA9IAAgeIgdAAIAAgdIg6AAIAAgbIh1AAIAAgdIB1AAIAAAdIBYAAIAAAbIAdAAIAAAdIAcAAIAAAegA0nAfIAAgdIASAAIAAgbIB1AAIAAAbIhYAAIAAAdgAOqjmIAAgdIgdAAIAAgeIg7AAIAAgdIh0AAIAAgdIB1AAIAAAdIBXAAIAAAdIAdAAIAAAeIAdAAIAAAdg");
	this.shape_1.setTransform(1473.1,-4.1,2.357,2.357);

	this.instance_1 = new lib.flattone();
	this.instance_1.setTransform(1468.7,27.6,2.356,2.356,0,0,0,139.5,47.3);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#47A7C7").s().p("AHXFcIAAhYIgcAAIAAhYIAcAAIAAgdIAeAAIAAA7IgeAAIAAAdIAeAAIAAAdIAdAAIAABYgASUFCIAAgdIAcAAIAAgdIAdAAIAAjMIgdAAIAAgeIhXAAIAAA7IgdAAIAAA6Ig6AAIAAgdIAdAAIAAg7IAdAAIAAg6IgdAAIAAhyIgdAAIAAg7IgeAAIAAg6IAeAAIAAAdIAdAAIAAA6IAdAAIAAB1IAdAAIAAAbIBYAAIAAAdIAdAAIAAAdIAdAAIAACSIA8AAIAABYIgCAAIAAg6Ig6AAIAAA6IgdAAIAAAdgAk4EmIAAg6Ig7AAIAAgdIgdAAIAAgeIg6AAIAAgdIh0AAIAAAdIhYAAIAAAeIg6AAIAAAdIgdAAIAAAdIgeAAIAAAdIg6AAIAAAAIgaAAIAAh1IgeAAIAAg6IgdAAIAAg6IAeAAIAAAdIAdAAIAAA6IAdAAIAAB1IAaAAIAAgdIAdAAIAAgdIAdAAIAAgeIA7AAIAAgdIB1AAIAAgdIB1AAIAAAdIBXAAIAAAdIAdAAIAAAeIAeAAIAAAdIAcAAIAAAdIAbAAIAAgBIDpAAIAAgeIAcAAIAAgdIAdAAIAAgdIA7AAIAAgdIB0AAIAAAdIAdAAIAAhXIAdAAIAAg7IAeAAIAAgdIA6AAIAAgbIBYAAIAAg6IAcAAIAAh1IAdAAIAAgdIAeAAIAAgdIAdAAIAAgeIA6AAIAAgdIB1AAIAAAdIhXAAIAAAeIg7AAIAAAdIgdAAIAAAdIgdAAIAAAdIgdAAIAAB2IgeAAIAAA4IgcAAIAAgBIg7AAIAAAdIg6AAIAAAeIgdAAIAAA7IgeAAIAABWIhXAAIAAgdIg7AAIAAAdIg5AAIAAAeIgeAAIAAAdIgdAAIAAAdIkDAAIAAABgAvUA9IAAgeIgdAAIAAgdIg6AAIAAgbIh1AAIAAgdIB1AAIAAAdIBYAAIAAAbIAdAAIAAAdIAcAAIAAAegA0nAfIAAgdIASAAIAAgbIB1AAIAAAbIhYAAIAAAdgAOqjmIAAgdIgdAAIAAgeIg7AAIAAgdIh0AAIAAgdIB1AAIAAAdIBXAAIAAAdIAdAAIAAAeIAdAAIAAAdg");
	this.shape_2.setTransform(-298.5,-4.1,2.357,2.357);

	this.instance_2 = new lib.flattone();
	this.instance_2.setTransform(-303,27.6,2.356,2.356,0,0,0,139.5,47.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#47A7C7").s().p("AHXFcIAAhYIgcAAIAAhYIAcAAIAAgdIAeAAIAAA7IgeAAIAAAdIAeAAIAAAdIAdAAIAABYgASUFCIAAgdIAcAAIAAgdIAdAAIAAjMIgdAAIAAgeIhXAAIAAA7IgdAAIAAA6Ig6AAIAAgdIAdAAIAAg7IAdAAIAAg6IgdAAIAAhyIgdAAIAAg7IgeAAIAAg6IAeAAIAAAdIAdAAIAAA6IAdAAIAAB1IAdAAIAAAbIBYAAIAAAdIAdAAIAAAdIAdAAIAACSIA8AAIAABYIgCAAIAAg6Ig6AAIAAA6IgdAAIAAAdgAk4EmIAAg6Ig7AAIAAgdIgdAAIAAgeIg6AAIAAgdIh0AAIAAAdIhYAAIAAAeIg6AAIAAAdIgdAAIAAAdIgeAAIAAAdIg6AAIAAAAIgaAAIAAh1IgeAAIAAg6IgdAAIAAg6IAeAAIAAAdIAdAAIAAA6IAdAAIAAB1IAaAAIAAgdIAdAAIAAgdIAdAAIAAgeIA7AAIAAgdIB1AAIAAgdIB1AAIAAAdIBXAAIAAAdIAdAAIAAAeIAeAAIAAAdIAcAAIAAAdIAbAAIAAgBIDpAAIAAgeIAcAAIAAgdIAdAAIAAgdIA7AAIAAgdIB0AAIAAAdIAdAAIAAhXIAdAAIAAg7IAeAAIAAgdIA6AAIAAgbIBYAAIAAg6IAcAAIAAh1IAdAAIAAgdIAeAAIAAgdIAdAAIAAgeIA6AAIAAgdIB1AAIAAAdIhXAAIAAAeIg7AAIAAAdIgdAAIAAAdIgdAAIAAAdIgdAAIAAB2IgeAAIAAA4IgcAAIAAgBIg7AAIAAAdIg6AAIAAAeIgdAAIAAA7IgeAAIAABWIhXAAIAAgdIg7AAIAAAdIg5AAIAAAeIgeAAIAAAdIgdAAIAAAdIkDAAIAAABgAvUA9IAAgeIgdAAIAAgdIg6AAIAAgbIh1AAIAAgdIB1AAIAAAdIBYAAIAAAbIAdAAIAAAdIAcAAIAAAegA0nAfIAAgdIASAAIAAgbIB1AAIAAAbIhYAAIAAAdgAOqjmIAAgdIgdAAIAAgeIg7AAIAAgdIh0AAIAAgdIB1AAIAAAdIBXAAIAAAdIAdAAIAAAeIAdAAIAAAdg");
	this.shape_3.setTransform(298.9,-4.1,2.357,2.357);

	this.instance_3 = new lib.flattone();
	this.instance_3.setTransform(294.4,27.6,2.356,2.356,0,0,0,139.5,47.3);

	this.addChild(this.instance_3,this.shape_3,this.instance_2,this.shape_2,this.instance_1,this.shape_1,this.instance,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-609.9,-86.2,2394.3,172.7);


(lib.cloud1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween2("synched",0);
	this.instance.setTransform(-809.9,86.3);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:346},49).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-1419.9,0,2394.3,172.7);


(lib.boy_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1 copy
	this.instance = new lib.Symbol1();
	this.instance.setTransform(75,75,1,1,0,0,0,75,75);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1).to({x:61.6,y:69.6},0).wait(1).to({x:48,y:64.5},0).wait(1).to({x:34.3,y:59.8},0).wait(1).to({x:20.4,y:55.4},0).wait(1).to({x:6.5,y:51.4},0).wait(1).to({x:-7.4,y:47.7},0).wait(1).to({x:-21.5,y:44.4},0).wait(1).to({x:-35.8,y:41.5},0).wait(1).to({x:-50.1,y:39},0).wait(1).to({x:-64.4,y:36.8},0).wait(1).to({x:-78.8,y:35.1},0).wait(1).to({x:-93.3,y:33.7},0).wait(1).to({x:-107.8,y:32.7},0).wait(1).to({x:-122.3,y:32.2},0).wait(1).to({x:-136.8,y:32},0).wait(1).to({x:-151.3,y:32.2},0).wait(1).to({x:-165.8,y:32.7},0).wait(1).to({x:-180.3,y:33.7},0).wait(1).to({x:-194.8,y:35},0).wait(1).to({x:-214.2,y:36.8},0).wait(1).to({x:-234.7,y:38.4},0).wait(1).to({x:-255,y:39.7},0).wait(1).to({x:-275.2,y:40.8},0).wait(1).to({x:-295.4,y:41.7},0).wait(1).to({x:-315.7,y:42.4},0).wait(1).to({x:-336,y:42.6},0).wait(1).to({x:-353.1,y:42.7},0).wait(1).to({x:-375.5,y:43.9},0).wait(1).to({x:-396,y:45.4},0).wait(1).to({x:-416.2,y:47.3},0).wait(1).to({x:-436.4,y:49.6},0).wait(1).to({x:-456.6,y:52.6},0).wait(1).to({x:-474,y:55.7},0).wait(1).to({x:-495.8,y:57.9},0).wait(1).to({x:-516.3,y:58.9},0).wait(1).to({x:-536.6,y:59},0).wait(1).to({x:-556.7,y:57.9},0).wait(1).to({x:-576.9,y:54.6},0).wait(1).to({x:-595.2,y:49.4},0).wait(1).to({x:-615.2,y:44},0).wait(1).to({x:-634.9,y:38.8},0).wait(1).to({x:-654.5,y:33.7},0).wait(1).to({x:-674.3,y:28.8},0).wait(1).to({x:-693.2,y:24.9},0).wait(1).to({x:-713.6,y:22},0).wait(1).to({x:-734,y:20},0).wait(1).to({x:-754.4,y:18.4},0).wait(1).to({x:-775.6,y:17.1},0).wait(1).to({x:-794.3,y:16.5},0).wait(1).to({x:-809.7,y:17.2},0).wait(1).to({x:-825,y:18.7},0).wait(1).to({x:-840.2,y:20.9},0).wait(1).to({x:-855.3,y:23.8},0).wait(1).to({x:-870.3,y:27.1},0).wait(1).to({x:-885.2,y:30.8},0).wait(1).to({x:-900.1,y:34.8},0).wait(1).to({x:-914.9,y:39},0).wait(1).to({x:-929.6,y:43.4},0).wait(1).to({x:-944.4,y:47.8},0).wait(1).to({x:-959.1,y:52.1},0).wait(1).to({x:-973.9,y:56.4},0).wait(1).to({x:-988.7,y:60.4},0).wait(1).to({x:-1003.7,y:64.2},0).wait(1).to({x:-1018.7,y:67.6},0).wait(1).to({x:-1033.8,y:70.4},0).wait(1).to({x:-1049,y:72.8},0).wait(1).to({x:-1064.3,y:74.4},0).wait(1).to({x:-1079.6,y:75.1},0).wait(1).to({x:-1095,y:75},0).to({_off:true},1).wait(80));

	// Layer 1 copy
	this.instance_1 = new lib.Symbol1();
	this.instance_1.setTransform(-1303.9,75,1,1,0,0,180,75,75);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(70).to({_off:false},0).wait(1).to({x:-1282.7,y:71.7},0).wait(1).to({x:-1261.6,y:68.4},0).wait(1).to({x:-1240.4,y:65.2},0).wait(1).to({x:-1219.2,y:62.2},0).wait(1).to({x:-1198,y:59.4},0).wait(1).to({x:-1176.8,y:56.8},0).wait(1).to({x:-1155.5,y:54.4},0).wait(1).to({x:-1134.3,y:52.3},0).wait(1).to({x:-1112.9,y:50.5},0).wait(1).to({x:-1091.6,y:49.1},0).wait(1).to({x:-1070.2,y:48.1},0).wait(1).to({x:-1048.9,y:47.6},0).wait(1).to({x:-1027.5},0).wait(1).to({x:-1006.1,y:48.1},0).wait(1).to({x:-984.7,y:49.3},0).wait(1).to({x:-963.4,y:51.1},0).wait(1).to({x:-942.2,y:53.6},0).wait(1).to({x:-921.1,y:56.9},0).wait(1).to({x:-900.1,y:61},0).wait(1).to({x:-879.2,y:65.9},0).wait(1).to({x:-858.7,y:71.6},0).wait(1).to({x:-838.3,y:78.2},0).wait(1).to({x:-818.3,y:85.8},0).wait(1).to({x:-798.7,y:94.2},0).wait(1).to({x:-785.4,y:80.4},0).wait(1).to({x:-771,y:68.1},0).wait(1).to({x:-755.3,y:57.1},0).wait(1).to({x:-738.7,y:47.7},0).wait(1).to({x:-721.3,y:39.8},0).wait(1).to({x:-703.4,y:33.3},0).wait(1).to({x:-685,y:28},0).wait(1).to({x:-666.4,y:23.9},0).wait(1).to({x:-647.6,y:20.6},0).wait(1).to({x:-628.6,y:18.1},0).wait(1).to({x:-609.6,y:16.3},0).wait(1).to({x:-590.6,y:15},0).wait(1).to({x:-571.5,y:14.1},0).wait(1).to({x:-552.4,y:13.6},0).wait(1).to({x:-533.3,y:13.4},0).wait(1).to({x:-514.2},0).wait(1).to({x:-495.1,y:13.5},0).wait(1).to({x:-476,y:13.8},0).wait(1).to({x:-456.9,y:14.2},0).wait(1).to({x:-437.8,y:14.6},0).wait(1).to({x:-423.4,y:23.3},0).wait(1).to({x:-408.7,y:31.5},0).wait(1).to({x:-393.7,y:39.3},0).wait(1).to({x:-378.6,y:46.5},0).wait(1).to({x:-363.1,y:53.3},0).wait(1).to({x:-347.5,y:59.5},0).wait(1).to({x:-331.7,y:65.2},0).wait(1).to({x:-315.6,y:70.3},0).wait(1).to({x:-299.4,y:74.8},0).wait(1).to({x:-283,y:78.6},0).wait(1).to({x:-266.5,y:81.8},0).wait(1).to({x:-249.9,y:84.4},0).wait(1).to({x:-233.2,y:86.4},0).wait(1).to({x:-216.4,y:87.6},0).wait(1).to({x:-199.6,y:88.3},0).wait(1).to({x:-182.8,y:88.2},0).wait(1).to({x:-165.9,y:87.6},0).wait(1).to({x:-149.2,y:86.3},0).wait(1).to({x:-136,y:77},0).wait(1).to({x:-122.5,y:68.4},0).wait(1).to({x:-108.5,y:60.5},0).wait(1).to({x:-94.1,y:53.4},0).wait(1).to({x:-79.2,y:47.2},0).wait(1).to({x:-64,y:42.2},0).wait(1).to({x:-48.4,y:38.3},0).wait(1).to({x:-32.5,y:35.8},0).wait(1).to({x:-16.4,y:34.7},0).wait(1).to({x:-0.4,y:35.1},0).wait(1).to({x:15.4,y:37},0).wait(1).to({x:31.1,y:40.3},0).wait(1).to({x:46.5,y:45},0).wait(1).to({x:61.4,y:51},0).wait(1).to({x:75.9,y:58.1},0).wait(1).to({x:89.8,y:66.1},0).wait(1).to({x:103.2,y:75},0).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,149.9,149.9);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;