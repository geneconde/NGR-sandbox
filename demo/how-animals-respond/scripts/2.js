(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// stage content:
(lib._2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// indication
	this.instance = new lib.off();
	this.instance.setTransform(240,433.5);

	this.instance_1 = new lib.on();
	this.instance_1.setTransform(240,433.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.instance_1}]},10).wait(10));

	// Layer 2
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("ArbKoQgTgUAAgaQAAgcATgTQAUgTAbAAQAbAAATATQATATAAAcQAAAagTAUQgTATgbAAQgbAAgUgTgAoQIFQgfgfAAgtQAAgrAfggQAggfAsAAQAsAAAfAfQAfAgAAArQAAAtgfAfQgfAfgsAAQgsAAgggfgAkPE5QgugvAAhCQAAhDAuguQAvgvBDAAQBCAAAvAvQAtAuAABDQAABCgtAvQgvAvhCAAQhDAAgvgvgAAZAZQh6h6AAiwQAAiwB6h9QB9h8CwAAQCwAAB8B8QB9B9AACwQAACwh9B6Qh8B9iwAAQiwAAh9h9g");
	this.shape.setTransform(231.9,484);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).wait(20));

	// dog
	this.dog = new lib.dog();
	this.dog.setTransform(218.8,604.3,1,1,0,0,0,57.9,47);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.dog}]}).wait(20));

	// man
	this.man = new lib.man();
	this.man.setTransform(110.1,541.2,1,1,0,0,0,69.5,109.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.man}]}).wait(20));

	// bg
	this.instance_2 = new lib.bg();

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_2}]}).wait(20));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,900,670);


// symbols:
(lib.bg = function() {
	this.initialize(img.bg);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,900,670);


(lib.off = function() {
	this.initialize(img.off);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,50,41);


(lib.on = function() {
	this.initialize(img.on);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,50,41);


(lib.running = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAUAoIgGAAIgCgBIgEAAIgJgEIgUgMIgTgUIgCgHIgCgFIAAgCIgBgCIAGgKIAIgIIALgGIAFgBIAHgBIAHAAIAGABIAOAIIAOAMIAJAOIAEAPIAAASIgDAJIgLACg");
	this.shape.setTransform(93.1,9.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#993366").s().p("AgvBkIgSgXIgEgJIgBgBIgBgBIAAAAIgGgNIgIgbIgDhUIAIgiIAFgQIAHgMIAlgHIAwAAIAMABIAQAKIAfAbIAHASIAGAlIgCAiIgJAkIgNAdIgMATIgRAPIgTANIgfAQgAAEhjIgEABIgKAGIgIAIIgGAKIABACIAAADIACAEIACAJIATAUIASANIALADIAEAAIACABIAGAAIAMAAIALgCIADgJIAAgSIgEgRIgJgOIgOgMIgOgIIgIgBIgHAAg");
	this.shape_1.setTransform(91,15.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#993366").s().p("AghAjIgQgDIAAgHIACgHIAGgIIASgLIAigiIAnAPIgrApIgLAIIgCAAIgCACIgJADIgIABg");
	this.shape_2.setTransform(15.6,75.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#993366").s().p("AALAnIgEgCIghg2IAkgXIAFAAIAEAJIAGATIACASIAAAVIgBALIgJADg");
	this.shape_3.setTransform(61.8,71.4);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#993366").s().p("AAWAeIgQgQIgzgmIBGgGIAEAGIAKAUIAFAMIACAPIgEAFIgFACIgFABg");
	this.shape_4.setTransform(72.7,69.3);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#993366").s().p("AAAAgIgCgBIgCgHIgFggIgJgZIAjABIACAQIgCAeIgCARIgKADg");
	this.shape_5.setTransform(34.5,79.1);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#993366").s().p("AACAWIgBgBIgBAAIgMgEIgLgRIgDgCIAMgOIAFgEIAOgCIAGADIANAJIADATIgBAFIgCADIgDAFIgEAAIgFABg");
	this.shape_6.setTransform(43.8,23.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AgEAiIgDAAIgBgBIgCAAIgHgBIgCgBIgEgBIgFgDIgFgLIgCgLIABgQIAGgGIAQgPIAMgCIAJAAIAAABIAFAAIAIAIIAFAHIACADIADAFIAEAKIAAADIgBAIIgBADIgDADIgFAHIgEACIgOAJgAgLgVIgLAKIgGAIIADADIALARIANAEIABAAIAAABIAKABIAFgBIAEAAIADgFIACgEIABgEIgDgUIgNgIIgGgDg");
	this.shape_7.setTransform(44,23.9);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#993366").s().p("AgFATIgCgBIgDgBIgFgCIgIgQIAAgCIgBgCIAIgNIAUgBIAAAAIAFABIABAAIAAABIAIAHIAHANIAAAHIgCACIgDADIgFAEIgFAAIgGABg");
	this.shape_8.setTransform(71.6,13.2);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFFFFF").s().p("AgfAVIgHgSIAGgUIAAgIIAFgFIALgBIAFAAIAIABIANAFIAOAHIALAKIAEAGIAAAMIgBAJIgOAGIgPAFIgJABIgWABgAgPgRIgHANIAAACIAAACIAJAQIAFADIACAAIADACIAJABIAFgBIAGAAIAFgFIADgDIACgBIAAgIIgIgNIgHgGIAAgBIgCAAIgEgCIAAAAg");
	this.shape_9.setTransform(71.5,13.1);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#CC6633").s().p("AiFF5IgIgUIgeg8IgrABIAAADIgCAEIgIALIgcAiIgngOIAlgyIAAgCIgBgCIgBgEIAGgLIgsgGIgBgBIgDAAIgwgLIgmgQIgBgBIgCAAIgEgCIgLgGIgEgBIgTgOIgIgGIgFgHIgCgBIgLgQIgEgJIgBgHIgBgCIgCgTIABgKIAHgcIAIgQIAPgTIAOgKIAQgIIASgHIATgDIAfgCIARAFIANAJIAPAOIAGAIIAHAUIACAGIADAbIgFAaIgIASIgRAWIgGAFIgMAIIgHACIgPAAIgIgCIgIgCIgDgCIgKgGIgMgHIgJgIIgFgHIgBgCIgBAAIAAgBIgBgBIAAgCIgCgCIgCgHIgCgHIAAgDIAAgEIAAgHIABgFIABgBIAAgCIAAgDIABAAIAAgCIABgDIADgIIADgCIAEgBIADAAIACACIACAAIABABIACABIABADIAJAmIAEAHIACADIACACIADADIABABIAIAGIAWAAIANgMIADgEIAIgSIABgIIgBgSIgHghIgCgEIgDgBIgKgJIgHgDIgMgCIgWACIgRAFIgTAKIgQAOIgGAGIgFAJIgCAEIgCAGIAAALIACALIAMAbIASAXIAKAIIACABIAIAGIADABIAUALIAEAAIADABIAOAEIADABIADABIBCAJIAfAIIAMgKIAtgWIBSggIAqgKIgjgYIgCgCIgDgCIgcgbIgBgBIAAAAIgBgBIgHgHIgOgiIgBgDIgFgMIgHghIgFgEIgCgFIAIiAIgSgVIgCgDIgGgIIgFgKIgBgBIgBgBIAAAAIgGgNIgIgZIgCgaIADgDIADgBIAEAAIACAAIAqAMIAbAMIAlAWICyhCIA5gYIgHgVIgEhCIAHgJIAIgHIAIgGIAPgCIAFADIACAAIAaAgIAVApIADAMIACALIgLABIgEAFIgBAIIgGAWIAIASIAJALIAYgBIAQgDIAHgDIAOgGIABgJIAAgOIgEgGIgLgKIgNgHIgPgFIgJgBIgFAAIAIgIIAPgLIAzgZIA4gSIAOgBIgHAMIgFAQIgIAiIADBWIAIAbIAGANIAAAAIABABIABABIAEAJIASAXIAhAcIhKAdIAVA9IAKgDIARgBIASAEIASAHIAIAHIAAAEIACAGIAAADIADABIACADIABAFIAAAEIgKAhIgLAYIg2AlIg8AdIhQAZIhOAOIADACIBNAkIAUAPIARARIAHALIhIAGIhbg3IAOANIAXAgIAHAQIgFAAIgmAXIg5hFIgVgVIhhArIhUAXIANAUIAOAgIAFAXIACALgAAeDTIAAABIgBAAIAAACIADgBIADgBIgCgCgABrgaIg+APIgBBOIgDAbIBQABIAagDIgCh4gAgLALIgNApIAEAHIABAFIACAEIAGAIIAIAGIABABIABABIABACIAOAFIAOABIAGhkgAChBaIBogbIgVhgIgTAEIgaACIgrgCgAEDgjIATBdIAogTIAMgIIAfgaIAIgFIgVg7gAggisIgXAVIAAASIACALIAEALIAGADIADABIADABIAGABIACAAIACAAIADABIAOAAIAMgIIADgDIAGgGIACgEIABgCIACgIIAAgEIgEgMIgDgEIgDgEIgEgGIgGgIIgFAAIAAgBIgLAAg");
	this.shape_10.setTransform(46,37.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]},1).wait(1));

	// Layer 1
	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FFFFFF").s().p("AAUAoIgGAAIgCgBIgEAAIgJgEIgUgMIgTgUIgCgHIgCgFIAAgCIgBgCIAGgKIAIgIIALgGIAFgBIAHgBIAHAAIAGABIAOAIIAOAMIAJAOIAEAPIAAASIgDAJIgLACg");
	this.shape_11.setTransform(93.1,9.6);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#993366").s().p("AgvBkIgSgXIgEgJIgBgBIgBgBIAAAAIgGgNIgIgbIgDhUIAIgiIAFgQIAHgMIAlgHIAwAAIAMABIAQAKIAfAbIAHASIAGAlIgCAiIgJAkIgNAdIgMATIgRAPIgTANIgfAQgAAEhjIgEABIgKAGIgIAIIgGAKIABACIAAADIACAEIACAJIATAUIASANIALADIAEAAIACABIAGAAIAMAAIALgCIADgJIAAgSIgEgRIgJgOIgOgMIgOgIIgIgBIgHAAg");
	this.shape_12.setTransform(91,15.7);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#993366").s().p("AghAjIgQgDIAAgHIACgHIAGgIIASgLIAigiIAnAPIgrApIgLAIIgCAAIgCACIgJADIgIABg");
	this.shape_13.setTransform(15.6,75.2);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#993366").s().p("AALAnIgEgCIghg2IAkgXIAFAAIAEAJIAGATIACASIAAAVIgBALIgJADg");
	this.shape_14.setTransform(61.8,71.4);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#993366").s().p("AAWAeIgQgQIgzgmIBGgGIAEAGIAKAUIAFAMIACAPIgEAFIgFACIgFABg");
	this.shape_15.setTransform(72.7,69.3);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#993366").s().p("AAAAgIgCgBIgCgHIgFggIgJgZIAjABIACAQIgCAeIgCARIgKADg");
	this.shape_16.setTransform(34.5,79.1);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#993366").s().p("AACAWIgBgBIgBAAIgMgEIgLgRIgDgCIAMgOIAFgEIAOgCIAGADIANAJIADATIgBAFIgCADIgDAFIgEAAIgFABg");
	this.shape_17.setTransform(43.8,23.9);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#FFFFFF").s().p("AgEAiIgDAAIgBgBIgCAAIgHgBIgCgBIgEgBIgFgDIgFgLIgCgLIABgQIAGgGIAQgPIAMgCIAJAAIAAABIAFAAIAIAIIAFAHIACADIADAFIAEAKIAAADIgBAIIgBADIgDADIgFAHIgEACIgOAJgAgLgVIgLAKIgGAIIADADIALARIANAEIABAAIAAABIAKABIAFgBIAEAAIADgFIACgEIABgEIgDgUIgNgIIgGgDg");
	this.shape_18.setTransform(44,23.9);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#993366").s().p("AgFATIgCgBIgDgBIgFgCIgIgQIAAgCIgBgCIAIgNIAUgBIAAAAIAFABIABAAIAAABIAIAHIAHANIAAAHIgCACIgDADIgFAEIgFAAIgGABg");
	this.shape_19.setTransform(71.6,13.2);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#FFFFFF").s().p("AgfAVIgHgSIAGgUIAAgIIAFgFIALgBIAFAAIAIABIANAFIAOAHIALAKIAEAGIAAAMIgBAJIgOAGIgPAFIgJABIgWABgAgPgRIgHANIAAACIAAACIAJAQIAFADIACAAIADACIAJABIAFgBIAGAAIAFgFIADgDIACgBIAAgIIgIgNIgHgGIAAgBIgCAAIgEgCIAAAAg");
	this.shape_20.setTransform(71.5,13.1);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#CC6633").s().p("AiFF5IgIgUIgeg8IgrABIAAADIgCAEIgIALIgcAiIgngOIAlgyIAAgCIgBgCIgBgEIAGgLIgsgGIgBgBIgDAAIgwgLIgmgQIgBgBIgCAAIgEgCIgLgGIgEgBIgTgOIgIgGIgFgHIgCgBIgLgQIgEgJIgBgHIgBgCIgCgTIABgKIAHgcIAIgQIAPgTIAOgKIAQgIIASgHIATgDIAfgCIARAFIANAJIAPAOIAGAIIAHAUIACAGIADAbIgFAaIgIASIgRAWIgGAFIgMAIIgHACIgPAAIgIgCIgIgCIgDgCIgKgGIgMgHIgJgIIgFgHIgBgCIgBAAIAAgBIgBgBIAAgCIgCgCIgCgHIgCgHIAAgDIAAgEIAAgHIABgFIABgBIAAgCIAAgDIABAAIAAgCIABgDIADgIIADgCIAEgBIADAAIACACIACAAIABABIACABIABADIAJAmIAEAHIACADIACACIADADIABABIAIAGIAWAAIANgMIADgEIAIgSIABgIIgBgSIgHghIgCgEIgDgBIgKgJIgHgDIgMgCIgWACIgRAFIgTAKIgQAOIgGAGIgFAJIgCAEIgCAGIAAALIACALIAMAbIASAXIAKAIIACABIAIAGIADABIAUALIAEAAIADABIAOAEIADABIADABIBCAJIAfAIIAMgKIAtgWIBSggIAqgKIgjgYIgCgCIgDgCIgcgbIgBgBIAAAAIgBgBIgHgHIgOgiIgBgDIgFgMIgHghIgFgEIgCgFIAIiAIgSgVIgCgDIgGgIIgFgKIgBgBIgBgBIAAAAIgGgNIgIgZIgCgaIADgDIADgBIAEAAIACAAIAqAMIAbAMIAlAWICyhCIA5gYIgHgVIgEhCIAHgJIAIgHIAIgGIAPgCIAFADIACAAIAaAgIAVApIADAMIACALIgLABIgEAFIgBAIIgGAWIAIASIAJALIAYgBIAQgDIAHgDIAOgGIABgJIAAgOIgEgGIgLgKIgNgHIgPgFIgJgBIgFAAIAIgIIAPgLIAzgZIA4gSIAOgBIgHAMIgFAQIgIAiIADBWIAIAbIAGANIAAAAIABABIABABIAEAJIASAXIAhAcIhKAdIAVA9IAKgDIARgBIASAEIASAHIAIAHIAAAEIACAGIAAADIADABIACADIABAFIAAAEIgKAhIgLAYIg2AlIg8AdIhQAZIhOAOIADACIBNAkIAUAPIARARIAHALIhIAGIhbg3IAOANIAXAgIAHAQIgFAAIgmAXIg5hFIgVgVIhhArIhUAXIANAUIAOAgIAFAXIACALgAAeDTIAAABIgBAAIAAACIADgBIADgBIgCgCgABrgaIg+APIgBBOIgDAbIBQABIAagDIgCh4gAgLALIgNApIAEAHIABAFIACAEIAGAIIAIAGIABABIABABIABACIAOAFIAOABIAGhkgAChBaIBogbIgVhgIgTAEIgaACIgrgCgAEDgjIATBdIAogTIAMgIIAfgaIAIgFIgVg7gAggisIgXAVIAAASIACALIAEALIAGADIADABIADABIAGABIACAAIACAAIADABIAOAAIAMgIIADgDIAGgGIACgEIABgCIACgIIAAgEIgEgMIgDgEIgDgEIgEgGIgGgIIgFAAIAAgBIgLAAg");
	this.shape_21.setTransform(46,37.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11}]}).to({state:[]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,99.9,82.6);


(lib.fetching = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAHBeQgDgHgFgmQgHgtgYgaQgKgMgngfQAKgPAGgXQAKAEAuAeQAoAaAKgHQALgJAMgBQAQgBABANQABAHgJAHQgMAJgGAGQgZAWAMAmQAOAugXANQgHAEgFAAQgJAAgFgKg");
	this.shape.setTransform(26.8,48.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F3EBDB").s().p("AgDBZIgLguQgIgggMgUIg5g5QAOgUAHgeQAKAFAtAdQApAYAJgHQAOgKATAFQAVAFADAUQABALgaAWQgZATAKAjQAQA2gdAQQgKAFgIAAQgSAAgGgcg");
	this.shape_1.setTransform(27.4,49.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AAGB0QgIgGgHgZIgIgmQgJgvgMgOQgCgEgXgTQgYgTgGgCQATgXAJgmIAzAhQAkAXAKgIQAQgLAVAGQAWAGADAWQACANgbAWQgZATAKAgQARA5gfARQgMAIgKAAQgGAAgGgEg");
	this.shape_2.setTransform(27.5,49.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#DFCFB4").s().p("AgMBVIgMg0QgGgfgKgMIg8guQAWgXALguQAKAFApAdQAlAYAKgHQARgNAYAHQAZAIAEAZQACARgbAVQgYARAJAeQARA9giAUQgNAHgKAAQgWAAgLgpg");
	this.shape_3.setTransform(27.4,49.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#907C74").s().p("AAFB8QgOgLgKgyQgLg4gKgMIg/gwIAEgFQAVgVAKgrIABgGIAFACQAHAEAoAcQAlAZAHgGQATgOAaAIQAbAJADAbQADAUgZAUQgYAQAIAaQASA/glAVQgOAIgMAAQgJAAgHgFg");
	this.shape_4.setTransform(27.2,49.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AAKBHQgpgZgJAHQgLAJgMABQgPACgDgNQgBgGAJgIIARgPQAYgXgMgmQgPguAWgNQASgLAIAQQADAIAIAlQAHAtAZAZQALANAnAcQgJAPgGAYIg5ggg");
	this.shape_5.setTransform(12.4,33.1);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#F3EBDB").s().p("AAQBUQgpgXgJAHQgNALgUgFQgVgFgDgTQgBgLAZgXQAYgUgLgiQgSg1AdgRQAggUALApQAaBVAIAMIA6A3QgMAUgHAfIg5ggg");
	this.shape_6.setTransform(11.7,32.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AAQBXQglgWgKAIQgPAMgVgFQgXgGgDgVQgCgOAagWQAYgUgLggQgSg4AegTQAVgMAMAHQAKAHAGAZIAJAlQALAuAMAPQADADAYASQAYASAGADQgRAWgJAnIg0gfg");
	this.shape_7.setTransform(11.6,32.2);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#DFCFB4").s().p("AASBcQgmgXgJAHQgRAOgYgGQgagHgEgZQgDgSAagVQAYgTgKgdQgTg9AigUQAqgZAPA5IANA0QAIAfAKALQACADA7ApQgVAWgKAwIg0ggg");
	this.shape_8.setTransform(11.8,32.3);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#907C74").s().p("ABBB9IgvgeQglgYgIAGQgTAQgagIQgbgIgEgbQgEgUAZgUQAYgRgJgaQgVg+AlgWQAZgQARALQAPAKALAyQANA4AKALIBAAvIgEAEQgTAWgJAsIgBAGg");
	this.shape_9.setTransform(11.9,32.4);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#993366").s().p("AgIAnIgHgDIgCgHIgEhDIAWAFIAVAKIgOA7IgGADIgEAAg");
	this.shape_10.setTransform(81.7,97.2,1,1,-44.9);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#993366").s().p("AgKAgIgCgBIgDAAIgDgWIAAgVIABgPIABgDIAAgDIAQAJIATAAIgKA3IgLADg");
	this.shape_11.setTransform(75.5,101,1,1,-44.9);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#993366").s().p("AgLAeIgCgDIgCgBIAAgCIAAgCIABgJIgCgIIAAgCIACgDIADgEIAZgeIgGAXIAJAcIgMAPIgIADg");
	this.shape_12.setTransform(49.5,94.9,1,1,-44.9);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#993366").s().p("AgYAcIgCgDIgCgBIgEgFIAAgGIACgDIADgBIA4gnIADAPIAAAPIgnAcIgKADg");
	this.shape_13.setTransform(41.6,88.5,1,1,-44.9);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FFFFFF").s().p("AAcAlIgDAAIgCgBIgIAAIgFABIgKgEIAAAAIAAgBIgCAAIgGgDIgDgCIgDgBIgCgCIgDgCIgCgCIgDgBIgGgGIgDgCIgJgLIgCgFIgCgFIAAgDIAAAAIgCgJIAAgFIAKgFIATgEIASAAIAPAEIARAIIALALIAEAGIACAHIABAEIgCAMIgCAEIgGAKIgJAHg");
	this.shape_14.setTransform(18.3,6.7,1,1,-44.9);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#993366").s().p("AgwBWIgHAAIgdgHIgPgGIgngWIANgsIAKgRIAPgRIAkgbIARgKIAugQIAlgHIAfABIAMAGIAnAaIAOAsIAHArIgaASIgjAQIgqAMIgvAIIgeABgABPAHIAIgHIAHgIIACgFIABgMIAAgGIgCgGIgFgHIgLgKIgRgJIgRgEIgSAAIgTAFIgIAEIAAAGIAAAIIAAAAIAAADIACAFIADAFIAJAOIACABIAGAGIADACIACACIADABIADACIACABIAEACIAFABIACAAIAAABIACAAIALAFIAEgBIAIAAIACABIADgBg");
	this.shape_15.setTransform(17,12.3,1,1,-44.9);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#993366").s().p("AAAArIAAgDIgDgCIgBgPIADgHIABgBIAAgBIAAgBIgBgFIgPguIAFgEIAEAAIAEABIACABIABACIAGAKIAJAVIABAFIABAOIgEAUIgCAGIgDAFg");
	this.shape_16.setTransform(51,42.1,1,1,-44.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#993366").s().p("AgPAkIgFgDIAYguIAAgDIgBgIIAAgFIAAgKIADAAIAEACIALALIAAALIgDAQIgFAKIgKAQIgOANg");
	this.shape_17.setTransform(36.6,21.9,1,1,-44.9);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#CC6633").s().p("AhBHpIgYgFIAHhCIgWgHIgEgBIgJBHIgUAAIgRgJIAHhIIABgIIAAgFIgQgPIgDgDIgLgLIgOgQIgFgIIgCgFIgDgEIgIgSIgGgTIgBgGIAAgBIgBgEIgDgfIgqA0IgJgfIAHgWIAwgwIAEgdIAEgRIgwAbIAAgPIgEgQIBKgtIAMgSIAagYIgNgGIgBgCIgBAAIgBgBIgKgEIgDgCIgWgWIgUgVIghguIgNgZIgBgEIgFgKIgOgnIgGgWIAAgEIgBgCIgFgXIgHgUIgDhjIAIgxIAahHIALgXIAWgQIAWgNIAFgDIAEgBIAKgCIAGAEIAKgBIACgBIACgBIAJAGIAOAOIAJAOIACAIIACAJIgBAIIBGACIAKhIIAoAWIAaAKIAPADIAHAAIAHABIAeAAIAygJIApgLIAjgQIAagSIgBA2IgHAqIgHAWIgOAaIANgBIAZAAIAxAKIAcALIABACIACAEIABAAIACAOIgBAEIgOAWIhHANIgMABIgNgBIgcCtIgFA8IANAIIAVATIATASIARAWIAIAPIAAAGIgBADIgPADIgKABIgBABIgDABIgeAAIgVgEIgkgLIgLgGIiGApIgGAjIgCAkIAFA3IAgC6IgBABIABACIANARIANAOIARAMIARAHIATAEIAUABIAPgCIABAAIABAAIAdgHIALgDIARgKIAegXIAJgJIAMgTIAIgSIAAgUIgCgPIgDgEIgNgZIgOgPIgLgJIgIgBIgJAAIgRADIgQAGIgXAQIgQAQIgKARIgCAMIgBAGIABAMIAHATIADAHIAdAEIAZgDIAHgCIAQgIIAJgHIAJgJIAEABIAFACIABAAIABADIgBAGIAAAHIABADIgBAFIgCAGIgLAGIgMAGIgGACIgVAEIgNAAIgEAAIgKgBIgGgBIgFgCIgCAAIgNgCIgVgKIgHgHIgDgDIAAgBIgBAAIgBgBIgCgCIgDgNIgBgKIABgBIAAgEIABgLIAEgLIAKgUIAMgRIANgPIAQgMIASgLIAggKIAXgDIAPAHIAFADIAGAFIAGADIAFAFIARAVIANAaIAFAUIABAZIgCAMIgHARIgFALIgIALIgVAVIgYASIgZAMIgnANIgbACIgcgCIgegHIgdgKIgKgHIAAgBIgCAAIgGgGIgRgeIgHAEIgXAJIABAoIgEAogAhegkIAmgVIAJgvIhpAfIAGANIACADIAEAEIACACIABACIAEADIAJAGIADAAIACABIADABIADABIAOAAIADAAgABXh4IAPAwIABAFIAAABIAAABIgBABIgDAHIABAPIADACIACADIAIAAIADgFIACgGIAEgUIgBgQIgBgFIgJgVIgGgKIgDgCIgCgBIgEgBIgEAAgAi2ixIARBFIAJAYIBvgfIABgjIgDgjIgGgXgAi2kjIAAADIgCAKIgDAmIABAAIACAxICAgcIgRg2IAAgDIgBgDIAAgTgACVljIAAAFIABAHIAAAEIgaAvIAFADIAEAFIAQgOIAKgQIAFgJIADgTIAAgLIgLgLIgEgBIgDAAgAiSmGIgJATIgKAQIgHANIgCAHIgHAgIBqgHIABhWIhGgCg");
	this.shape_18.setTransform(49.4,55.3,1,1,-44.9);

	this.addChild(this.shape_18,this.shape_17,this.shape_16,this.shape_15,this.shape_14,this.shape_13,this.shape_12,this.shape_11,this.shape_10,this.shape_9,this.shape_8,this.shape_7,this.shape_6,this.shape_5,this.shape_4,this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,95.4,104.4);


(lib.bone = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAHBeQgDgHgFgmQgHgtgYgaQgKgMgngfQAKgPAGgXQAKAEAuAeQAoAaAKgHQALgJAMgBQAQgBABANQABAHgJAHQgMAJgGAGQgZAWAMAmQAOAugXANQgHAEgFAAQgJAAgFgKg");
	this.shape.setTransform(25.4,29.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F3EBDB").s().p("AgDBZIgLguQgIgggMgUIg5g5QAOgUAHgeQAKAFAtAdQApAYAJgHQAOgKATAFQAVAFADAUQABALgaAWQgZATAKAjQAQA2gdAQQgKAFgIAAQgSAAgGgcg");
	this.shape_1.setTransform(26.1,29.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AAGB0QgIgGgHgZIgIgmQgJgvgMgOQgCgEgXgTQgYgTgGgCQATgXAJgmIAzAhQAkAXAKgIQAQgLAVAGQAWAGADAWQACANgbAWQgZATAKAgQARA5gfARQgMAIgKAAQgGAAgGgEg");
	this.shape_2.setTransform(26.2,30.1);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#DFCFB4").s().p("AgMBVIgMg0QgGgfgKgMIg8guQAWgXALguQAKAFApAdQAlAYAKgHQARgNAYAHQAZAIAEAZQACARgbAVQgYARAJAeQARA9giAUQgNAHgKAAQgWAAgLgpg");
	this.shape_3.setTransform(26,30);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#907C74").s().p("AAFB8QgOgLgKgyQgLg4gKgMIg/gwIAEgFQAVgVAKgrIABgGIAFACQAHAEAoAcQAlAZAHgGQATgOAaAIQAbAJADAbQADAUgZAUQgYAQAIAaQASA/glAVQgOAIgMAAQgJAAgHgFg");
	this.shape_4.setTransform(25.9,29.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AAKBHQgpgZgJAHQgLAJgMABQgPACgDgNQgBgGAJgIIARgPQAYgXgMgmQgPguAWgNQASgLAIAQQADAIAIAlQAHAtAZAZQALANAnAcQgJAPgGAYIg5ggg");
	this.shape_5.setTransform(11.1,13.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#F3EBDB").s().p("AAQBUQgpgXgJAHQgNALgUgFQgVgFgDgTQgBgLAZgXQAYgUgLgiQgSg1AdgRQAggUALApQAaBVAIAMIA6A3QgMAUgHAfIg5ggg");
	this.shape_6.setTransform(10.4,12.8);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AAQBXQglgWgKAIQgPAMgVgFQgXgGgDgVQgCgOAagWQAYgUgLggQgSg4AegTQAVgMAMAHQAKAHAGAZIAJAlQALAuAMAPQADADAYASQAYASAGADQgRAWgJAnIg0gfg");
	this.shape_7.setTransform(10.3,12.6);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#DFCFB4").s().p("AASBcQgmgXgJAHQgRAOgYgGQgagHgEgZQgDgSAagVQAYgTgKgdQgTg9AigUQAqgZAPA5IANA0QAIAfAKALQACADA7ApQgVAWgKAwIg0ggg");
	this.shape_8.setTransform(10.4,12.7);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#907C74").s().p("ABBB9IgvgeQglgYgIAGQgTAQgagIQgbgIgEgbQgEgUAZgUQAYgRgJgaQgVg+AlgWQAZgQARALQAPAKALAyQANA4AKALIBAAvIgEAEQgTAWgJAsIgBAGg");
	this.shape_9.setTransform(10.5,12.8);

	this.addChild(this.shape_9,this.shape_8,this.shape_7,this.shape_6,this.shape_5,this.shape_4,this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(0,0,36.4,42.8);


(lib.man = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_104 = function() {
		this.gotoAndStop(0);
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(104).call(this.frame_104));

	// flash0.ai
	this.instance = new lib.bone();
	this.instance.setTransform(121,124.7,1,1,0,0,0,18.2,21.4);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(20).to({_off:false},0).wait(1).to({rotation:-12.2,x:139.3,y:119},0).wait(1).to({rotation:-24.6,x:157.7,y:113.4},0).wait(1).to({rotation:-37,x:176.1,y:108.2},0).wait(1).to({rotation:-49.5,x:194.6,y:103.2},0).wait(1).to({rotation:-61.9,x:213.2,y:98.4},0).wait(1).to({rotation:-74.3,x:231.8,y:93.9},0).wait(1).to({rotation:-86.7,x:250.5,y:89.7},0).wait(1).to({rotation:-99.1,x:269.2,y:85.8},0).wait(1).to({rotation:-111.5,x:288.1,y:82.1},0).wait(1).to({rotation:-123.9,x:306.9,y:78.6},0).wait(1).to({rotation:-136.4,x:325.8,y:75.4},0).wait(1).to({rotation:-148.8,x:344.8,y:72.5},0).wait(1).to({rotation:-161.2,x:363.8,y:69.9},0).wait(1).to({rotation:-173.6,x:382.8,y:67.6},0).wait(1).to({rotation:-186.1,x:401.9,y:65.5},0).wait(1).to({rotation:-198.5,x:421,y:63.7},0).wait(1).to({rotation:-210.9,x:440.1,y:62.3},0).wait(1).to({rotation:-223.3,x:459.3,y:61},0).wait(1).to({rotation:-235.8,x:478.4,y:60.2},0).wait(1).to({rotation:-248.2,x:497.6,y:59.6},0).wait(1).to({rotation:-260.6,x:516.8,y:59.3},0).wait(1).to({rotation:-273,x:536},0).wait(1).to({rotation:-285.4,x:555.2,y:59.6},0).wait(1).to({rotation:-297.8,x:574.3,y:60.2},0).wait(1).to({rotation:-310.2,x:593.5,y:61.1},0).wait(1).to({rotation:-322.7,x:612.7,y:62.3},0).wait(1).to({rotation:-335.1,x:631.8,y:63.8},0).wait(1).to({rotation:-347.5,x:650.9,y:65.6},0).wait(1).to({rotation:-359.9,x:670,y:67.8},0).to({_off:true},1).wait(55));

	// flash0.ai
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#993366").s().p("AgrAoIgLgCIAAgaIAZgYIAOgKIAegSIAfABIAFABIADAEIgBAIIgBACIgBABIAAABIAAAEIgGAOIgIAKIgKALIgDACIgCACIgVALIgXAHIgKACg");
	this.shape.setTransform(55,214.4);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#666699").s().p("AgGgEIAGgBIAHAAIAAAFIgBAGg");
	this.shape_1.setTransform(79.9,177.8);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#517979").s().p("AhNgiIAOgWICNBDIgdAug");
	this.shape_2.setTransform(88.5,162.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#517979").s().p("AhjAIIAKgOIANgPICwgLIgiBBg");
	this.shape_3.setTransform(95,151);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#669999").s().p("AhhgGIAbgvIADgHIClAaIg2Bfg");
	this.shape_4.setTransform(91.8,158);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#993366").s().p("AAfAzIgagFIgFgCIgOgIIgKgJIgJgLIgHgOIgEgNIgBgQIABgHIACgHIADgEIADgEIABgBIACAAIABgBIAGAAIAaARIAMANIAOAQIAGAHIAIAUIAHAZIgGAFg");
	this.shape_5.setTransform(71.7,209.8);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FF9966").s().p("AgLBCIgagRIgFAAIgCABIgCAAIgBABIgCADIgFgDIADgDIAMgIIANgMIATgaIAHgNIAAgHIAEgXIAAgEIABgEIAAgIIAAAAIAygOIgEAoIgEAOIgBACIAAADIgPAiIgDAEIgCAFIgYAhIgCADIgDAFg");
	this.shape_6.setTransform(72.7,199.6);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FF9966").s().p("AgHBBIgBgDIAAgBIgNgoIgEgZIgDgqIgCgJIAmgKIADgBIADgBIAPBQIABAyIgcgBIgJAGg");
	this.shape_7.setTransform(56.3,204);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#666699").s().p("AiQBIIgJgUIgHgoIgBgSICpgjICDghIATA8IADAFIABAFIAAACIgEAIIhCASIgBAAIgtANIgFgDIgLgLIgCgEIgDgJIAAgFIgBgEIABgDIgBgBIAAgBIgEgCIgEAAIgbALIgeAKIgCALIADAYIgTAHIgCAAIgBABIgDAAIgDABIg2AOIgNACg");
	this.shape_8.setTransform(64.1,191.3);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#517979").s().p("AgDAAIABAAIACAAIAEAAIgEAAIgCAAg");
	this.shape_9.setTransform(44.6,186);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#669999").s().p("Ai9AFIADgBIAFAAIAUgCIAGgBIACgBIADAAIAJgBIEAgiIAfgJIAEgBIABgBIACAAIATgIIACACIAHAAIAJARIACAHIjBAvIi+AkgAiwAlIgBgEIAAAEIABAAg");
	this.shape_10.setTransform(63.4,185.5);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#517979").s().p("AiXAmIAAgBIABAAIAAgBIACgBIABgCIAAgCIAAAAIABAAIABgFIgEgFIgFgDIgEgGIAAgBIABgBIABAAIADgCIAEgBIAJgFIADgCIAAgDID+gmIAFAFIAWgBIANANIAAAJIACAFIgUAIIgCAAIgBABIgDABIggAIIj/Aig");
	this.shape_11.setTransform(64.7,181);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#669999").s().p("AhtgfIDNgjIAOAiIieBjg");
	this.shape_12.setTransform(26.5,164.4);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#669999").s().p("AAAAAIAAAAIAAAAIABAAg");
	this.shape_13.setTransform(45.3,174.8);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FF9966").s().p("AAOA/IgwgGIgsgPIAEAAIAvg3IAegxIAAgBIASAFIAcALIACAFIgBADIAIABIAJAEIACAAIAFAEIADACIACAIIAAAGIgBABIgBACIgCACIgDACIAEAJIABADIAAAJIgDADIgJAGIgEAAIgDACIgBAAIgBABIAAABIAEAGIAFADIAEAFIgBAFIgBABIAAAAIAAABIgBACIgCABIAAABIgBAAIAAABIgDAEIgJADIgEAAIgCABIgGABIgUACg");
	this.shape_14.setTransform(43.1,179.5);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#669999").s().p("AgMBeIgWgRIg5g1IADgFIAGgHIAFgEIB2hlIAAABIAcAqIAJAMIAOAKIAAACIgBACIAAABIAAABIgGAGIgEAFIAAABIhPBog");
	this.shape_15.setTransform(35.4,174.4);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#517979").s().p("AhZAXICfhkIATAnIh1BmIgFADIgHAHIgCAEg");
	this.shape_16.setTransform(30.5,168.8);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#517979").s().p("AhsAAIgCgIIgBgIIAZgQIDCAUIAEAMIjNAhg");
	this.shape_17.setTransform(24.8,157.8);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#669999").s().p("AhzAeIBzhPIAMAIIBJAfIAfAKIgKAIIgDACIgCADIgZAaIADALg");
	this.shape_18.setTransform(27.7,151.4);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#669999").s().p("AAdBAIAAgFIABgFIABgKIgLgNIgCgFIgHgNIgagIIgTgHIgEgCIgCgDIgBAAIgQAEIgHACIgGABIgBAAIAAgQIABgJIABgJIAHgRIAJgSIB+BbIgbAtIgIADg");
	this.shape_19.setTransform(86.1,166.4);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#FF9966").s().p("AgBBJIgCgDIgCgFIACgSIAAgFIgIAAIgHABIgWABIgIgJIADgIIAHgHIAEgIIABgBIACAAIAFgKIAAAAIgTAGIgRABIgSgDIAAgEIACgDIAAgCIADgCIACgJIAAgEIALgOIAXgUIAJgFIAJgEIABgBIAGgDIAHgCIAOgEIABAAIACADIAEADIATAJIAcAHIAHANIACAFIALANIgBAKIgBAFIAAAEIgHAQIgJAQIgKAJIgBABIgJAIIgQALIgIAEIgGAGIgBACgAg/gDIABAAIABgBIAAgEg");
	this.shape_20.setTransform(81.1,172.9);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#FFFFFF").s().p("AAHBeQgCgGgFgnQgIgtgYgaQgLgNglgdQAJgPAHgYQAKAFAtAdQApAbAJgIQALgIANgBQAPgCABAOQABAGgIAHIgSAPQgZAWALAmQAOAvgXAMQgHAEgFAAQgJAAgFgKg");
	this.shape_21.setTransform(86.3,177.8);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#F3EBDB").s().p("AgDBZIgLgvQgIgfgMgUIg5g5QANgTAJgfQAKAFAtAdQAoAYAKgHQANgLAUAGQAUAFADAUQABAKgaAXQgZATAKAjQAQA2gcAPQgLAGgIAAQgSAAgGgcg");
	this.shape_22.setTransform(87,178.6);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#FFFFFF").s().p("AAGB1QgIgHgHgZIgIglQgJgwgMgOQgCgEgYgSQgXgTgGgDQARgUALgoQAKAFAoAbQAlAXAKgHQAPgMAVAGQAXAHADAVQACAOgbAWQgZASAKAhQAQA5geARQgNAGgKAAQgGAAgFgCg");
	this.shape_23.setTransform(87.1,178.8);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#DFCFB4").s().p("AgMBVIgLg0QgHgfgKgMIg8guQAXgXAKguQAKAFAqAdQAlAYAJgHQASgNAXAHQAaAIADAZQACARgaAVQgZARAJAeQASA9gjAUQgNAHgKAAQgXAAgKgpg");
	this.shape_24.setTransform(86.9,178.7);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#907C74").s().p("AAFB8QgOgLgKgyQgLg4gKgMIg/gwIAEgFQAUgUALgsIABgGIAFACIAvAgQAkAZAIgGQATgOAaAIQAbAJADAbQADAUgaAUQgXAQAHAaQAUA/gmAVQgOAIgMAAQgJAAgHgFg");
	this.shape_25.setTransform(86.8,178.6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#FFFFFF").s().p("AAKBHQgpgZgJAHQgLAJgNABQgPACgCgNQgBgGAJgIIARgPQAYgXgMgmQgPguAWgNQASgLAIAQQADAGAIAnQAHAtAZAZQAKAMAoAdQgJAQgGAXIg5ggg");
	this.shape_26.setTransform(72,162.2);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#F3EBDB").s().p("AAQBUQgpgXgJAHQgNALgUgFQgVgFgDgTQgBgLAZgXQAYgUgLgiQgSg2AcgQQAhgUALApQAaBVAIAMIA6A3QgMAUgIAfIg4ggg");
	this.shape_27.setTransform(71.3,161.5);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#FFFFFF").s().p("AARBXQglgWgKAIQgPAMgWgFQgXgGgDgVQgCgOAagXQAYgTgLggQgTg4AfgTQAVgMAMAHQALAHAGAZIAJAlQAKAuANAPQACADAYASQAYASAGADQgSAXgHAmIg0gfg");
	this.shape_28.setTransform(71.2,161.3);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#DFCFB4").s().p("AASBdQgmgYgJAIQgRAOgYgHQgagHgEgZQgDgRAagWQAYgSgKgeQgTg8AigVQAqgZAPA5IAMA0QAIAfAKALQADADA7ApQgWAZgJAuIg0ggg");
	this.shape_29.setTransform(71.4,161.4);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#907C74").s().p("ABBB9IgvgeQgmgYgHAGQgTAQgagIQgbgIgEgbQgEgUAZgUQAXgRgIgaQgVg/AlgVQAZgQAQALQAPAKAMAyQANA4AKALIBAAvIgEAEQgTAWgJAsIgBAGg");
	this.shape_30.setTransform(71.5,161.5);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#517979").s().p("AAMAhIhGgfIgNgGIA0gmIBbAxIgcAkg");
	this.shape_31.setTransform(34.9,146.9);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#517979").s().p("AiEgdIEJgbIAQAvIhrAcIgEACIhuAYIgDAAIgCABIhHALg");
	this.shape_32.setTransform(61.2,159.7);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#669999").s().p("Ah4AqIAAgDIgEgLIADgCIABgCIABgCIACgBIAAgGIgDgIIgCgCIgFgEIgDAAIgIgCIgIgBIAAgDIgBgFIgGgCIEDgiIAAABIgCAJIgCACIAAADIgCAEIAAAFIASADIARgBIAJgCIAKgFIgGAKIgBAAIgBABIgFAIIgGAHIgEAHIAEADIj/Ang");
	this.shape_33.setTransform(63,175.8);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#517979").s().p("AimAiIAFgsIFGggIAAADIACAEIAAAAIgSAKIgXATIgLANIAAACIkDAig");
	this.shape_34.setTransform(62.1,170.1);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#669999").s().p("AieAQIBHgLIACgBIADAAIBugVIAEgCIAFgCIBmgdIAYBFIlFAgg");
	this.shape_35.setTransform(62.2,163.8);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#669999").s().p("Ah5gRIBagCIA5gGIBZgQIASA4IkJAbg");
	this.shape_36.setTransform(61.2,152.5);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#517979").s().p("AhpgUIDQgSIAQA1IhZAQIg6AGIhaACg");
	this.shape_37.setTransform(60.9,146.7);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#517979").s().p("AgnAlIgGgHIADgYIAIgTIAFgKIAOgRIAJgHIA0AUIhDBLg");
	this.shape_38.setTransform(75.1,133.3);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#669999").s().p("AhEAAIA7gwIAkAaIAqAUIguAzg");
	this.shape_39.setTransform(39.8,142.7);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#669999").s().p("AhFA2IgUATIAAgHIhBgtIBLg3IAKgEIAFgBIgEgGIgRg8IAPgFIAhgGIBxgBIAogHIAEAFIgZA7IgDAEIABABIA+AVIgIAHIgOARIgGAKIgHASIgDAZIAGAHIgLgHIgBAAIgCABIAQA+IjRATg");
	this.shape_40.setTransform(58.7,132.1);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#517979").s().p("AgPAUIgmgYIAsgjIA/ArIAAAHIgdAdg");
	this.shape_41.setTransform(44.3,138.3);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#517979").s().p("AhTAXIBehOIBJAfIhzBQg");
	this.shape_42.setTransform(86.1,139);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#669999").s().p("AhKA3IgegYIgBgBIgCgBIgNgJIB1hQIB8A8IgVAxIiwAMg");
	this.shape_43.setTransform(95,142.6);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#669999").s().p("AhGAWIBEhLIBKAdIheBOg");
	this.shape_44.setTransform(80.1,135.9);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#FFFFFF").s().p("AgDAAIACgBIABABIAEAAIgEACg");
	this.shape_45.setTransform(29.2,97.2);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#FFFFFF").s().p("AAAAAIgBAAIAAAAIADAAIAAAAg");
	this.shape_46.setTransform(66.9,106.9);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#993366").s().p("AhJAHIgKgGIgLgHIgCgCIgBgDIABgBIABgBIABAAIAEAAIBcAJIBfgEIABACIAAADIgEAGIhUALg");
	this.shape_47.setTransform(60.4,109.2);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#FFFFFF").s().p("AgDABIAAgBIAHAAIAAABg");
	this.shape_48.setTransform(51.2,106.1);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#FF7C3E").s().p("AgJAnIgNgDIgMgIIgCgFIgCgLIgBgYIAcgYIACgBIADgBIACgBIAUAFIALAGIAEADIAHAIIACAJIAAAJIgEAMIgHAOIgCABIgBACIgCABIgBABIgCABIgBABIgEACIgHACIgMACg");
	this.shape_49.setTransform(103.9,87.5);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#993366").s().p("AAjBFIgbgDIgVgIIgQgHIgWgSIgLgOIgLgTIgKgmIAAgKIACgJIAEgIIAEgDIAHAKIACAEIAAAOIACAPIAEAQIALAWIAJAOIASARIAGAEIAOAGIAXAEIATAAIAUgDIAOgJIAIAEIgDAGIgDACIAAAAIgBABIgBACIgBABIgBAAIAAABIgDACIgGAEg");
	this.shape_50.setTransform(96.9,71.9);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#993366").s().p("AA3AxIgogOIgsgYIgUgOIgjgoIgHgLIAEAAIAwAnIAgASIAVAKIBIAcIAGACIgEAJIgDADg");
	this.shape_51.setTransform(99.2,65.8);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#993366").s().p("AgLAVIgRgFIgDgCIAAgBIgCgDIAAgDIAAgHIAFgFIAFgFIAGgEIANgGIANAAIAIABIAPALIACADIgCAEIgBABIAAAAIgBACIgDADIgCAFIgBAAIgBABIgCABIgDADIgFADIgCABIgEABIgHABg");
	this.shape_52.setTransform(96.9,36.1);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#993366").s().p("AgSAYIABgZIADgMIAFgQIAEgBIADAAIAFABIAEABIAHAPIAEAOIABAJIgFAGIgEAHIgCACIgBACIgMAEg");
	this.shape_53.setTransform(76.8,79.4);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#993366").s().p("AgTAQIACgJIAKgPIAHgIIAJgFIAAgCIAIADIADAKIAAAGIAAAIIgDACIAAABIgCACIAAABIgBAAIAAABIgBAAIAAABIgFAEIgDABIgBAAIAAABIgMAGg");
	this.shape_54.setTransform(54.4,78.3);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#FF7C3E").s().p("AgIAkIgJgCIgIgDIgPgIIgBgLIABgMIAGgLIAFgHIAHgHIAJgEIANgGIACAAIAPADIALAFIAEADIAEAEIAFAHIABAFIAAANIgMAZIgCADIgUADg");
	this.shape_55.setTransform(26.6,81.6);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#993366").s().p("AhAAwIgSgEIgQgIIAeABIAIgBIABgBIANAAIACgBIAFAAIAOgDIAXgHIACAAIAMgEIAtgaIAngpIABgBIACAAIgDAFIgFANIgLARIgaAYIgBACIgSALIgeANIgfAKIgUACg");
	this.shape_56.setTransform(33.8,69.1);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#993366").s().p("AhcAdIgFgCIgDgFIAAgDIABgDIACgCIADgBIACgCIAEgBIAWABIAsgDIAqgIIACgBIApgPIACgCIABgBIAHgDIARgIIAGAAIADADIACACIgTALIgCACIgtAUIgPAFIgBAAIgCABIgGADIhGAMIgaABg");
	this.shape_57.setTransform(36.5,62.6);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#993366").s().p("AAEAYIgEgBIAAgBIgCgBIgEgCIgKgGIgKgKIgFgFIAAgHIACgEIACgDIADgBIACgDIADgBIALgBIAAgBIAJACIAFABIAOAIIAIAIIACABIACADIgCAAIgBAEIgCAFIgDAEIgCADIgBAAIgBABIAAABIgCABIgDADIgCAAIgCABIgDABg");
	this.shape_58.setTransform(42.7,33.5);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#FF9966").s().p("AhzHJIhWgLIhTgUIhVgeIgJgFIg1gfIgsgmIgfglIgcgzIgQguIgOhCIgDhWIADgVIgFABIgNABIAAABIgPgBIgOgEIgCgBIgBgBIAAAAIgDAAIgOgHIgUgLIgPgNIgMgOIgGgLIgFgLIgEgQIAAgRIADgRIAEgOIADgFIAEgJIALgTIAIgIIAMgFIAYgGIANgBIABAAIAIAAIAHgBIAiAFIAcANIATAOIBMiDIBGhUIAwguIBJg1IAsgaIAxgVIAZgHIAcA3IAkBkIAFgCIAFgCIACgHIAJgTIAIgLIAKgLIAJALIAFANIAGAGIAJAKIAIAEIAAgDIACgCIACgLIACgGIAEgJIACgEIAHgHIAKAYIAOAWIARgCIAKgSIAKgNIAHAOIAFAKIAMAMIAHgHIADgDIAMg9IATg7IA7AZIBLAsIASANIA1ArIAtAwIAxBHIAkBNIAOAqIAMBAIAIgIIARgNIAegQIAMgEIAVgFIALgCIAAAAIAIACIAYAKIAMAJIALALIAIAMIAHAOIAFARIADAdIgBAUIgCALIgEAJIgBABIAAABIgCAHIgEAEIgCAEIgFAIIgHAHIgGAFIgCACIgSALIgRAHIgEACIgaAIIgKABIgTAAIgIgCIgRgHIgIgGIgOgNIgDALIAAACIgJAnIgJAZIgBADIgJAWIgaAuIghAtIgzA0Ig6ArIgQAKIgCAAIgCABIgMAIIghAQIgFACIgNAGIhJAZIhiAUIhiAHIAEAzIhgAAgAi6GDIgBABIAAACIACADIADACIASANIBWAHIBRgLIAEgIIAAgEIgBgCIhcAEIhfgIIgEAAIgBAAgAgWF6IAAgBIgFAAIAAABIADAAgAi5FyIAAABIAJAAIAAgDgAmWEXIAFAEIAEgEIgEAAIgDgBgAFQCQIgCABIgDABIgbAYIAAAaIACALIACAFIAMAIIANADIAHABIANgCIAHgCIAEgCIABgBIADgBIABgBIABgBIABgCIACgBIAHgOIAEgMIAAgLIgCgJIgGgIIgFgDIgKgGIgXgFgAmsBYIgNAFIgJAFIgHAGIgGAIIgFALIgCAOIACAKIAOAJIAIADIAJACIASAAIAUgEIADgCIAKgUIACgFIAAgQIgBgEIgGgIIgDgDIgFgDIgLgFIgOgEgAjnCJIABACIABgEIgBAAgAA/BJIgGAPIgDAaIAAAOIAMAHIAPgFIABgCIABgCIAFgHIAEgGIAAgJIgEgQIgHgOIgFgCIgGgBIgEAAgAiMBEIgLAGIgHAIIgJARIgDAJIALAIIAPgGIAAgBIABAAIACgBIAGgFIAAAAIABAAIAAgBIAAAAIABgBIACgCIAAgBIACgCIAAgKIAAgGIgCgLIgJgCgADEglIgEAIIgCAJIAAAKIAIAeIANAbIALAOIAWASIAQAHIAXAIIAaADIAfAAIAGgEIADgCIAAgBIABAAIABgBIABgCIAAgBIABAAIACgCIAEgGIgIgEIgPAJIgTADIgTAAIgZgEIgOgGIgGgEIgSgRIgOgWIgGgQIgFgQIgCgNIAAgOIgBgEIgHgKgAm2AsIASAEIASABIATgCIAYgGIAngRIASgLIABgCIACgBIAYgXIAGgIIANgbIgBAAIgBABIgTAWIgKAKIggAWIgXANIgNAEIgDABIgYAHIgNACIgGAAIgBABIgOAAIgBABIgIABIgegBgADUhMIAZAeIATARIAhAWIAYAJIAoAOIAdAGIAEgDIADgJIgFgDIhJgZIgWgLIgggUIgxgmIgDAAgAj/hXIgGADIgCABIgCABIggANIgIACIgDABIgVAGIgtAHIgsAAIgDABIgCACIgEABIgCACIAAADIAAADIACAEIAGADIAHABIAZgBIBJgNIAFgCIACgBIABAAIAmgPIAWgMIACgCIATgMIgCgBIgCgDIgHAAgAENleIgNAGIgGAEIgFAFIgGAGIAAAIIABADIACADIAAABIADACIARAEIAKABIAJgBIAFgBIACgBIAFgDIADgDIACgCIAAgBIACAAIACgEIADgEIABgCIAAgBIABgBIACgFIgCgCIgQgLIgIgBgAkTl5IgLABIgDABIgDADIgCABIgCACIgCAFIAAAHIAFAHIAJAJIAKAHIAFACIACAAIABACIAFAAIAEAAIADgBIACgBIACAAIADgCIABgCIABgBIAAAAIACAAIACgEIACgEIADgFIABgDIACgDIgCgDIgCgBIgIgHIgOgIIgGgCIgKgBg");
	this.shape_59.setTransform(69.5,69.1);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#53537B").s().p("AgFAQIgFgEIgFgIIgDgIIAAgEIABgEIgBgDIACgCIAHgCIADgCIADAAIANALIAGAKIABAAIABAAIABADIAAAEIgDAGIgEAHIgCAAIgCABIgDAAIgDABg");
	this.shape_60.setTransform(48.9,16.6);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#53537B").s().p("AAJASIgHgBIgKgDIgEgFIgEgEIgCgFIgBgDIgBgEIAAgDIACgFIACgBIACgBIADAAIADAAIADABIAAgBIAWARIACAAIACACIgBAJIgDAHg");
	this.shape_61.setTransform(17.4,48.3);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#53537B").s().p("AgDAQIgBgBIgDAAIgDgBIgBAAIgLgEIgDgBIAAgIIADgDIAigNIADAAIAHAEIADAFIgIANIgDACIgCACIgGAEIgEAAIgCAAIAAABg");
	this.shape_62.setTransform(123.9,54.4);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#53537B").s().p("AgJALIAAgJIgCgHIgBgCIAAgBIAAgDIABgCIACgDIACgBIAHgBIAAgBIADABIAEADIAGANIABAMIgBABIAAADIgEADIgJADg");
	this.shape_63.setTransform(94.5,19.4);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#53537B").s().p("AgOAXIgCgMIABgLIAEgIIAFgKIABgDIACgCIAGgDIADAAIAIAGIACADIABAFIgBAJIgBADIgDAJIgJAOIgDACIgCABIgDAAg");
	this.shape_64.setTransform(100.4,23.6);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#53537B").s().p("AgaAIIgBgCIgBgDIABgCIAAgCIACgEIAVgIIAEgBIASAGIAHACIABAAIACADIABADIgBADIgDAHIgpAFg");
	this.shape_65.setTransform(121.4,46.8);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#53537B").s().p("AgLASIgEgBIgDgFIgBgFIAAgEIAAgCIABgBIABgCIALgLIAFgCIABgCIAAAAIABgBIADAAIAGgBIAHAEIADAEIAAADIAAACIAAACIgBADIgBABIgBAAIAAABIgEAFIgHAHIgCAAIgDAGIgBAAIgGABg");
	this.shape_66.setTransform(118.8,39.7);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#53537B").s().p("AgKAUIgDgBIgEgBIgFgEIgDgDIABgLIAKgHIAKgGIAIgDIALgCIAAgBIABAAIAGAEIAEAFIgBAEIgBAEIgBACIgBAAIgCADIgDAEIgCABIgBACIgJAGIgEACIgHACg");
	this.shape_67.setTransform(113.2,33.8);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#53537B").s().p("AgTASIgCgEIgBgFIAAgEIACgFIAAAAIABgBIALgKIAMgJIAKgBIAAgBIAIAGIACACIgFANIgCADIgIAHIgLAMIgIACg");
	this.shape_68.setTransform(107.2,28.8);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#53537B").s().p("AAAAQIgDgBIgGgCIgCgCIgEgFIgCgFIgBgBIgBgIIAAgDIADgCIADgBIACgCIAEAAIAXARIACABIACADIAAACIgBAEIgBAAIAAABIgBACIgCACg");
	this.shape_69.setTransform(21.3,39.9);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#53537B").s().p("AACAQIgKgFIgFgDIgFgDIgEgFIgEgCIAAgDIABgBIABgCIACgCIABgDIACgBIAJgCIAAAAIABAAIAFAAIAJADIAFAEIAFABIAEAEIAHAHIAAABIABADIgCADIgJAHg");
	this.shape_70.setTransform(34.2,26.7);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#53537B").s().p("AAAAQIgGgCIgMgHIgGgFIgDgEIAAgCIABgCIACgEIADgEIAJAAIAAgCIABAAIAjAOIACABIABABIABAAIAAAIIgCAEIgDADIgQABg");
	this.shape_71.setTransform(27.2,32.8);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#53537B").s().p("AgFAQIgEgBIgFgKIgCgHIAAgIIAEgEIAIgEIADAAIABACIADACIAFAFIAEAGIAEAGIABAFIgCADIgEADIgCABIgBABIgIADg");
	this.shape_72.setTransform(41.1,21.3);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#53537B").s().p("AgFA6IgDgDIgEgDIgDgEIAHhmIACgDIADgBIAGgBIAAgBIAAAAIAEABIAEADIAFBMIgBAgIgDADIgBAAIgCADIgDABIgBAAIgBABIgEABg");
	this.shape_73.setTransform(73.1,19.4);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#53537B").s().p("AgDAPIgGgIIgFgHIgCgJIAAgEIACgDIACgCIAIgCIADAAIAGADIAMAaIAAABIAAAEIgHAFIgDABIgCAAIgBABg");
	this.shape_74.setTransform(57.6,16.4);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#53537B").s().p("AABA5IgEgCIgGgCIgIhFIAAgDIgCgcIAAgCIABgCIAKgFIAEAAIAFAEIAPBDIADAYIAAADIABACIgFAIIgBADIgHACg");
	this.shape_75.setTransform(65.7,19.6);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#666699").s().p("AHrD7IgNgqIgkhOIgkg1Ig7hBIg0gqIgkgZIhNgpIgngQIgbBZIgFAdIgCAEIgIAHIgLgNIgGgHIgHgPIgKANIgKARIgRACIgNgVIgKgXIgHAGIgCAEIgFAKIgCAFIgBAKIAAACIgBADIgHgFIgMgIIgFgGIgGgMIgJgLIgKAKIgIAMIgJAQIgBAHIgGACIgEADIgkhiIgcg4IgyARIhEAlIhJA2IhAA7Ig3BEIhLCEIgHgGIgMgJIgcgMIgIgCIAZhNIAlhLIAfgsIAyg0IArgjIBIgrIAxgWIAmgMIAAAEIADAKIAFAIIAFAEIAJAGIADgBIADAAIACgBIACAAIAEgHIADgGIAAgEIgBgDIgBgBIgBgBIgGgKIgGgFIB7gbIBMgGIARACIgBgMIgCgWIgOghIgMgVIgCgCIgCgCIgDgCIgkgJIgDgDIgBgCIgDgFIAAgCIABgBIADgCIADgBIAIABIAXAHIAaAPIAKAKIADAGIAPAbIADAJIAGAiIAAAMIBlASIgMAEIgFAIIgSAqIgLArIgFAdIAJAEIAEgBIAEgCIAEgDIADgEIAmhxIgBgDIgBgCIBmAhIAAABIgJABIgCABIgCADIgBACIAAADIAAABIABACIACAJIAAAJIALAJIAJgDIAEgDIAAgDIABgBIgBgOIgGgNIgDgCIA3AZIBOAxIA0AqIAuAuIAcAiIAvBLIAVAyIALA0IAEAkIgNADIgLAEIgeAPIgRAOIgIAIgAH6DhIgCAEIAAAIIANAGIACAAIADABIACAAIABAAIAEAAIACAAIABAAIAEgBIAGgDIACgDIAEgCIAIgPIgEgEIgHgEIgDAAgAojCUIgCACIgDABIgCAEIAAAEIABADIABAEIADAGIADAEIAEAFIAMAEIAHABIAIAAIAEgHIAAgJIgBgDIgDgBIgXgSIAAABIgEgBIgDAAgAH0CKIgVAIIgCAEIAAAEIgBACIABADIABACIAKAGIArgEIACgHIABgEIgBgEIgBgDIgBAAIgHgDIgTgFgAHdBAIgFACIgLALIgBADIgBACIAAACIAAAFIABAEIACAFIAFABIAEACIAHgBIADAAIADgFIACgBIAHgGIAEgGIAAgCIAAAAIABgCIABgDIAAgCIABgCIAAgDIgEgEIgHgEIgFABIgDAAIgBABIgCAAgAn8BEIgDABIgCACIgBADIABAEIABAHIACAFIAEAFIADABIAFADIAEABIAQAAIADgDIABgBIAAgBIABAAIAAgEIAAgDIgBgCIgCgBIgTgPIgHgEIgEAAgAG4ADIgMABIgKAEIgKAFIgKAJIgBALIADADIAGAEIADACIAEAAIADAAIAJgBIAEgCIAJgGIACgCIACgCIACgDIACgEIACgCIABgCIABgDIAAgEIgEgFIgGgEIAAAAgAnNAAIgCAFIgBACIAAACIAEAGIAFAFIAMAHIAHACIAQAAIAJgBIACgEIACgDIAAgIIgBgCIgBgBIgCgBIgkgMIgBAAIAAABIgJAAgAF6gxIgKABIgOAJIgLAKIgBACIAAACIgCAEIAAAFIABAEIACAFIAJAEIAIgCIANgLIAIgIIACgFIAFgNIgCgCIgIgGgAl4hAIgJABIgCABIgCADIgCACIAAACIgBACIAAACIADAFIAFAEIAEAEIAGADIALAEIAPABIAJgGIABgEIAAgDIAAgBIgIgJIgDgDIgFgCIgFgDIgLgDIgFgBIgBAAgAEihmIgBACIgBACIgGALIgDAKIgBALIACALIAJAEIACgBIAEAAIAEgCIAIgOIAEgJIACgKIgBgKIgCgCIgJgGIgCAAgAAai0IgIABIgEABIgCADIgHBoIAEAEIADADIAEADIAGADIAFgBIABgBIAAAAIADgBIADgDIABAAIACgDIABggIgEhOIgFgDIgDgBIAAAAgAhFiqIgBACIAAACIACAcIAAADIAIBHIAFACIAGACIAHAAIAHgCIAFgLIgBgCIAAgDIgCgYIgQhFIgHgEIgDAAgAk2h1IgDAEIAAAIIACAKIAFAJIAEACIAFACIAKgDIABgBIACgBIADgCIADgEIgBgFIgEgHIgEgGIgFgFIgDgCIgDgCIgEAAgAiPiqIgDADIgCADIAAAEIACAJIAFAJIAHAHIAJAHIABgBIABAAIADgBIAHgGIAAgDIAAgBIgMgcIgHgDIgEAAg");
	this.shape_76.setTransform(70.8,31.5);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#53537B").s().p("AgeA9IAFgdIALgpIAQgqIAFgIIAMgEIAAgBIABAAIAAgBIAGAEIACABIABABIABADIgkBvIgDAEIgEADIgEACIgEACg");
	this.shape_77.setTransform(81.5,20.3);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#FF9966").s().p("AgLAnIgCAAIgBgBIgBAAIgEAAIgJgEIgBgCIgFgBIgEgDIgBgCIgDgBIgYgRIgOgMIgMgMIAIgLIAHgNIAhAPIAhAIIAiAAIAHgBIACAAIAIgCIAFgBIAEgBIAJgCIAiAYIABAAIABABIggASIglARIgLADIgCAAIgDABIgNABg");
	this.shape_78.setTransform(47.6,203.2);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#517979").s().p("ABIAtIgEgBIgMgBIgKgCIgTgDIgLgCIgEgBIgqgJIhVgaIAWgyIDNAqIAEA7g");
	this.shape_79.setTransform(66.9,146.1);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#517979").s().p("AgBAeIhhglIgJgEIgjgPIAWgtIEEA5IADBWg");
	this.shape_80.setTransform(64.8,159);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#669999").s().p("AiCAAIAag3IBkAdIAfAHIAEAAIAaAEIALADIAMABIADABIAsAGIAEA8g");
	this.shape_81.setTransform(65.7,151.9);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#669999").s().p("AifAAIAhhDIAtATIBfAnICSAoIAAAkg");
	this.shape_82.setTransform(63.1,163.1);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#669999").s().p("AgLA0IhHhfIBZgrIBMCVIhLAYg");
	this.shape_83.setTransform(112.6,118.4);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#669999").s().p("AAcBUIglg9IhNhWIAsghIAJgDIABABIAFACIA6A9IAMAPIAcArIAPAnIgyAmg");
	this.shape_84.setTransform(141.9,104);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#FF9966").s().p("AhbBfIgjgoIA0gWIAHgXIANgRIAIgIIAFgEIAQgJIAHgDIAFgCIgMhYIAEgEIAQgCIABABIACACIACACIABABIAAACIAWBSIAIACIAegYIAqgrIAFAAIAFADIACAEIgBAEIABABIAAABIABADIACABIACACIABAAIABAAIACABIAEACIg5BCIANAIIANAJIADAPIABAZIgBAKIgDATIgaAXIgPAIIgPAGIgPADIgRACIgYgCIgJgBIguARgABKA7IACACIAAgDg");
	this.shape_85.setTransform(155.5,92.3);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#517979").s().p("AhWg2IBIgnIABAAIBkCXIgQAGIgCAAIgDABIhNAeg");
	this.shape_86.setTransform(122.2,115.2);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#517979").s().p("AhOhIIAkgaIBLBZIAvBLIg6Ahg");
	this.shape_87.setTransform(137.5,107.5);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#669999").s().p("AhdgvIgBAAIBZg3IBkCqIhYAkg");
	this.shape_88.setTransform(130.2,110.6);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#517979").s().p("AghAxIAFgxIARhAIAagHIAAAOIgBACIADAvIADALIABAEIACAKIAEAGIAHAUIhDAdg");
	this.shape_89.setTransform(55.4,134.9);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#517979").s().p("Ag8gpIA8ggIA9B6IhMAZg");
	this.shape_90.setTransform(90.1,128.6);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f("#517979").s().p("AhPgvIBFghIBFBfIAUAjIhXAfg");
	this.shape_91.setTransform(105.5,122.1);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f("#669999").s().p("AhHgpIBJgoIBGCBIhRAig");
	this.shape_92.setTransform(97.3,125.4);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f("#669999").s().p("AiygSIAUg4IFRBRIgCBEg");
	this.shape_93.setTransform(61.1,174.9);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f("#993366").s().p("AgqAdIgCgIIAAgEIABgEIACgDIACgBIAQgLIAxgfIABAAIAAAAIAFACIADAAIABABIACADIAHAMIAAABIgIAOIgJAKIgOAMIgOAHIgJADIgJACIgWAAg");
	this.shape_94.setTransform(35.3,200.4);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f("#FF9966").s().p("AAAAAIAAAAIAAAAIABAAg");
	this.shape_95.setTransform(45,190.1);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f("#666699").s().p("AA6CBIgKgGIgLgFIgPgIIgBgBIgBgBIgRgLIgPgOIgMgLIAAgCIAAAAIgBgBIgCgCIgTgSIgHgIIADgEIAHgFIACgEIAJgRIACgFIABgEIABgDIgBgEIiigYIADgdIgFgsIAAgTIAGgDIAXgFIACgCIABAAIAfgNIgIAOIAEAAIABABIABABICzBFICSAvIgLAgIgYAxIgJAOIgOASIgSASIgNAJIgdARgAhegUIgBgCIgBAAIgBACIADAAg");
	this.shape_96.setTransform(54.7,192.3);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f("#669999").s().p("ACSBDIlHhyIgBgBIgCgBIgDAAIAEgHIAJgOIAGgFIAAgBIATAMIArASIAJACIACAAIACABIAEACIEVBEIgEAygACqA5IABAAIAAgEg");
	this.shape_97.setTransform(59.6,184.3);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f("#517979").s().p("AhSAFIgWgFIgCgBIgCAAIgJgCIgrgSIgTgMIAAgOIAFgWIFiBdIgDAug");
	this.shape_98.setTransform(60.7,180);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f("#FF9966").s().p("AASAxIgSgKIgPgUIgKgRIgCgDIAAgCIAAgBIgCgBIgFgSIgBgHIgBgCIAQgJIAPgMIACgBIAAgBIACAEIABAEIABAJIAEAIIACAEIABABIAAABIABACIARAVIAHAFIAEA0g");
	this.shape_99.setTransform(31.9,180.7);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.f("#FF9966").s().p("AgBAAIABAAIAAAAIACAAg");
	this.shape_100.setTransform(29.7,173.1);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.f("#993366").s().p("AgcAWIgQgEIgCgDIgBgBIgBgEIAAgFIAFgDIAYgOIASgGIARgEIASAAIAAABIACAAIABAAIAAABIADAAIAEABIABACIACABIABAFIAAACIAAABIgDAEIAAABIgBABIgQALIgQAIIgMAEIgOACg");
	this.shape_101.setTransform(26.9,175.5);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.f("#517979").s().p("AiogSIASgsIE/BDIgBA6g");
	this.shape_102.setTransform(62.2,169.3);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.f("#669999").s().p("AhwBhIgIgaIgEgIIAAgFIgBgCIgBgCIgJgqIB+guIAUgKIA6gjIAAgHIBDgNIgBBIIgIBIIjpA3g");
	this.shape_103.setTransform(26.6,141.5);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.f("#669999").s().p("AhXgQIBtgRIA8gFIAGAhIg/ALIhnAgg");
	this.shape_104.setTransform(19.7,131.6);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.f("#517979").s().p("AhZgXIBHgJIADAAIBcgHIANA6Ig8AEIhtARg");
	this.shape_105.setTransform(18.9,125.7);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.f("#517979").s().p("AhrgMIBoggIA9gOIAFAcIAugJIAAAHIg7AhIgVAKIh8Awg");
	this.shape_106.setTransform(22.7,136.8);

	this.shape_107 = new cjs.Shape();
	this.shape_107.graphics.f("#517979").s().p("AgjArIADhqIBKgRIgLBAIgBAPIAAABIgBAEIgGA6IhAASg");
	this.shape_107.setTransform(43.6,137.9);

	this.shape_108 = new cjs.Shape();
	this.shape_108.graphics.f("#669999").s().p("AhgBeIAAgCIAAgBIhzAiIAGg6IABgGIAAgBIABgPIALg+IBAgOIgRA+IgGAyIAAAYIBGgdIgIgUIgDgGIgCgKIgCgEIgDgNIgCgtIABgCIAAgOIA6gQIAAgCIgDgTIgJglIgGgSIAEgEIAnAKIARADIABAAIAAABIANACIALAAIABABIAFABIAfACIAhAFIAYAHIAXAKIgUAuIAugZIAsBzIhuAaIADAGIAEA7g");
	this.shape_108.setTransform(67.2,131.6);

	this.shape_109 = new cjs.Shape();
	this.shape_109.graphics.f("#669999").s().p("AhVADIADgDIACAAIArgFIAlgIIA/gWIAHABIACACIACABIABACIALAwIhcAIIgDAAIhHAJg");
	this.shape_109.setTransform(18,119.7);

	this.shape_110 = new cjs.Shape();
	this.shape_110.graphics.f("#FF9966").s().p("AgNA6IgPgFIgDAAIgGgCIgTgKIgBgBIgBAAIgIgHIgHgIIgCgEIgBgDIAAgBIAAAAIgBgBIgDgJIgBgHIAAgBIAAgLIAEgSIAGgQIAJgNIAGgGIANgJIAPgIIASgFIATgCIASAAIANAFIALAHIAFAEIAEAGIADAFIAGAIIAHAOIAEAMIACAIIAAAFIAAANIgDAJIgFALIgEAGIgKAKIAJAlIhHATg");
	this.shape_110.setTransform(14.5,110);

	this.shape_111 = new cjs.Shape();
	this.shape_111.graphics.f("#53537B").s().p("AgHAUIgEAAIgCgBIgCgFIgCgDIgBgDIgBgEIABgDIABgBIACgDIAIgIIAJgHIAFgDIAJAEIADACIABAFIgBAIIgCADIgCAEIgDAFIgDADIgFADIgIAFg");
	this.shape_111.setTransform(96.4,18.3);

	this.shape_112 = new cjs.Shape();
	this.shape_112.graphics.f("#782750").s().p("AAZBLIgQgLIgDgCIgKgIIgPgCIhgAOIgCgCIgBgCIAAgFIANgJIAIgHIAHgJIAFgIIABgFIABgJIg3gqIAEgEIBcAAIADgFIABgDIARgoIACgCIABgBIAFgGIAJgBIADABIABACIAFAGIALANIAJAOIAHARIABAIIAdAJIAgAFIAKADIAQAGIAOAJIAFADIgUAJIgUANIgDgBIgKADIgNAFIgCAHIgBAHIABAiIgFAKIgBADIgIADg");
	this.shape_112.setTransform(68.3,92.1);

	this.shape_113 = new cjs.Shape();
	this.shape_113.graphics.f("#993366").s().p("AhNCvIgrgOIgqgTIgqgaIgOgNIgLgOIgeg/IgJgdIAAgFIgBgEIgEgXIgBghIACggIAEgRIANgyIABgBIgFgDIACgCIAEgDIgBgDIgCgCIADAAIAFAAIABAAIAAABIAMAHIgBgBIACAAIABABIAFAAIAAABIAEABIADABIACAFIBLAdIBCAMIAHABIACABIBJAKIBpAHICmADIgSBxIgTA2IgLAVIgJANIgWAWIgUAOIgXANIgYAJIg8ASIgMACIgXAEIgGAAIgFABIg4AAgAgTBWIAMAIIADADIAuAeIAIgCIABgEIAFgKIgBgiIABgHIACgGIAMgGIALgCIADAAIATgNIAVgIIgFgGIgOgJIgRgGIgKgDIgfgFIgdgHIgCgIIgGgQIgJgPIgJgNIgHgGIgBgCIgDgBIgKACIgEAFIgCABIgBADIgRAnIgBAEIgDAEIhcAAIgEAEIA3AqIgBAKIgCAEIgEAJIgHAIIgIAIIgNAJIAAAEIABACIACADIBggPg");
	this.shape_113.setTransform(69.8,88.8);

	this.shape_114 = new cjs.Shape();
	this.shape_114.graphics.f("#FF9966").s().p("AgVAAIArAAIAAAAIgnAAg");
	this.shape_114.setTransform(34.9,65.7);

	this.shape_115 = new cjs.Shape();
	this.shape_115.graphics.f("#FF7C3E").s().p("AgfAUIgCgCIgDgBIAAgBIgBAAIgCgBIgDgCIgCgCIAAAAIgBgBIgCgBIgBgDIgCgCIgDgEIgCgHIACgDIACgBIAfgLIAfgCIAbAHIAGABIAJAFIADAEIAAAHIgHAHIAAAJIgDAFIgFAEg");
	this.shape_115.setTransform(33.4,64.4);

	this.shape_116 = new cjs.Shape();
	this.shape_116.graphics.f("#993366").s().p("AAEAWIgCAAIgCgBIgLgHIgIgFIgEgHIgBgCIgBgBIABgDIAFgGIAHgFIAOgHIAAABIAFAAIAEABIADABIADADIADABIAFAGIABAEIAAAKIgCAJIgLAHIgEABIgEABg");
	this.shape_116.setTransform(42.8,51.5);

	this.shape_117 = new cjs.Shape();
	this.shape_117.graphics.f("#FFFFFF").s().p("AgGAuIgFgBIgKgFIgKgIIgJgRIgDgOIgBgJIAAgGIADgJIAEgIIAHgGIAFgDIAKgEIANgDIAAABIAHABIAUAOIAHAHIAGAIIAGAQIABARIgCAKIgJAIIgJAHIgJAEIgKACgAgNgNIgHAGIgEAFIgBACIAAACIABADIAFAGIAHAGIAMAHIABABIACAAIACAAIAEAAIADgBIAMgHIABgKIAAgKIgBgEIgEgGIgDgBIgDgCIgEgCIgDAAIgFAAIAAgCg");
	this.shape_117.setTransform(42.8,51.2);

	this.shape_118 = new cjs.Shape();
	this.shape_118.graphics.f("#993366").s().p("AAAAZIgKgCIgCgEIgCgDIgEgPIABgGIABgEIAAgEIAEgDIAMgIIAHABIADABIADAFIAEALIACANIgBAHIgCAEIgDADIgDACIgEACg");
	this.shape_118.setTransform(60.1,63.7);

	this.shape_119 = new cjs.Shape();
	this.shape_119.graphics.f("#993366").s().p("AgDAXIgLgDIgIgQIAEgLIADgEIAGgHIAIgDIADgCIAAACIALABIAEAEIAEAFIACAPIgCAJIgIAHIgDACIgFABIgEABg");
	this.shape_119.setTransform(79.5,66.9);

	this.shape_120 = new cjs.Shape();
	this.shape_120.graphics.f("#993366").s().p("AgDAYIgDAAIgEgBIgDgCIgGgFIgFgHIgBgDIAAgBIAAAAIgDgFIAFgHIAHgIIAEgDIAEgCIAIgDIAGAAIAGABIAFADIAEABIAEADIADAEIABAEIAAALIgBAJIgFADIgMAGIgBAAIgCABIgEABIgGAAg");
	this.shape_120.setTransform(101.2,55.6);

	this.shape_121 = new cjs.Shape();
	this.shape_121.graphics.f("#FFFFFF").s().p("AgZAnIgGgCIgBgBIgDgCIgBgCIgCgCIgEgEIgFgOIgDgMIABgJIABgGIACgEIAEgFIAJgHIAMgFIAIgDIAPgDIAJACIASAKIANANIAHARIACARIgBAKIgSAJIgTAGIgRABgAgSgRIgEACIgEADIgHAHIgFAHIADAGIAAAAIAAABIABACIAFAIIAGAFIADACIAEAAIADAAIABABIAIgBIAEAAIAAgBIABAAIAMgGIAFgDIABgJIAAgMIgBgDIgDgEIgEgDIgEgCIgFgCIgEgBIgGAAg");
	this.shape_121.setTransform(102.2,55.4);

	this.shape_122 = new cjs.Shape();
	this.shape_122.graphics.f("#993366").s().p("AgIAWIgEAAIgCgBIgEgCIgBgBIgEgFIgBgCIAAgBIgBgBIgDgEIgDgKIACgCIALgIIAFgCIANgEIALgBIAAABIALACIAFAEIACACIACAHIABADIgBADIAAAAIgGAGIgQALIgGADIAAAAIgDABIgHACg");
	this.shape_122.setTransform(100.4,35.8);

	this.shape_123 = new cjs.Shape();
	this.shape_123.graphics.f("#993366").s().p("AAAAVIgFgBIgCAAIgGgCIgFgFIgBAAIgBgBIAAAAIgDgCIgFgIIAAgCIAAAAIgBAAIgDgJIACgDIAJgFIAIgEIANAAIAHADIANAGIAEAFIAGAFIADAFIAAAFIgBADIgBAGIgCABIgJACIgRACg");
	this.shape_123.setTransform(46.2,32.2);

	this.shape_124 = new cjs.Shape();
	this.shape_124.graphics.f("#FF7C3E").s().p("AggAUIgCgBIgCAAIgFgCIgIgEIgDgEIgDgDIAAgPIADgJIBAgDIAAABIAeACIAFAFIAEAEIAAAIIABABIABAGIADAFIAAAIIhOADg");
	this.shape_124.setTransform(108.5,70.9);

	this.shape_125 = new cjs.Shape();
	this.shape_125.graphics.f("#FF9966").s().p("AAGH7IgEgBIgBAAIgKgBIgMgCIAAgBIgEAAIgQgCIALgyIg7gIIg6gPIhfghIhEgkIg7gqIg0gyIgGgHIgBgCIgFgFIgLgOIgCgEIgBgCIgCgBIgGgHIgCgEIgBgCIgCgCIgFgHIgUgkIgVgwIgFgNIgLgzIgGg1IgIAHIgQAJIgSAGIgSAAIgTgDIgDgCIgJgDIgGgDIgGgCIgSgLIgDgBIgEgDIgEgCIgIgHIgFgFIgIgKIgIgRIAAAAIgFgTIAAgJIAAgCIAAgLIACgOIAAgCIAAgBIABgFIAJgaIAMgVIAFgGIALgKIANgJIAPgGIAQgEIAJgBIAAAAIAeAKIAVALIASANIAIAIIAOAQIAVg+IAohNIAZgkIA6hAIBZhEIBkgzIBSgZIAPBbIABAfIABACIAAACIAIAIIAPgQIANgSIAIAOIADAHIADAIIACAFIAQAEIAPgVIAMgWIAEADIACAEIAGATIABANIACAEIAOgHIAMgLIAEgGIAJgLIAFgEIAIALIAGANIAIAaIAKAGIAlhNIAuhGIAZAKIAtAaIBLA8IA8BBIAyBHIAoBNIAnBjIAGgEIAVgKIAXgHIAHgBIAcAAIAdAFIAXAIIALAHIAGAJIAIATIAGAUIACASIgBASIgDAOIgIAPIgFAHIgLANIgYARIgVAKIgVAHIgLACIgTAAIgRgFIgFBAIgQA/IgdBGIgbAqIgYAdIgsAmIgQALIgkAUIg7AWIhOASIg4AIIhzAEIAEAoIgBAOgAj8ARIABADIgEACIgCACIAFAEIgBABIgRBCIgBBBIAEAYIABAEIAAAEIAJAgIANAfIARAgIALAOIAOAMIAqAaIAqAUIA2AQIAhAFIA4gBIAFgBIAGAAIAXgDIAMgDIA8gRIAYgKIAXgMIAUgPIAWgWIAJgNIALgUIAJgXIANgvIAPhjIjJgFIiPgQIgCgBIgHgBIhCgMIhLgcIgCgFIgDgCIgEAAIAAgBIgFAAIgBgBIgCgBIABACIgMgIIAAAAIgBAAIgFgBIgDAAgAFPAAIgEAHIABASIADADIADADIAIAFIAFABIACABIACABIAKABIBQgCIAAgIIgDgGIgCgFIAAgEIAAgIIgEgEIgFgDIgegBIAAgBgABggrIgIAEIgGAGIgDAEIgEANIAIAQIALACIAGAAIAEAAIAFgCIADAAIAIgHIACgJIgCgRIgEgEIgEgEIgLgCIAAgCgAl9hEIggAKIgCACIgBACIABAIIADAFIACADIACACIABABIABABIABAAIACADIADABIABABIABAAIAAABIAEABIACACIBKAGIAEgFIADgEIAAgJIAHgIIAAgJIgCgEIgJgFIgGgBIgbgHgAhrhGIgEAEIAAADIgBAEIAAAIIADAPIADADIACAEIAKACIAHAAIAEgCIADgCIAEgDIACgDIAAgIIgBgPIgEgLIgDgEIgDgBIgIgCgAE3iwIgUAIIgJAHIgEAFIgCAEIgBAFIgBALIADANIAFAOIAEAEIACACIABACIADABIABACIAGACIAVAEIATgBIATgGIASgJIABgLIgCgTIgHgQIgNgNIgSgKIgJgCgAkajfIgLAFIgEACIgHAHIgFAIIgCAJIgBAFIACAMIADANIAJASIAKAHIAKAFIAEACIAPACIAJgCIAJgEIAKgHIAIgJIADgKIgBgSIgHgRIgFgHIgIgHIgTgOIgKgCIAAgBgAE0liIgPAEIgFACIgLAIIgCACIAEAMIACAEIABABIAAABIABACIAEAFIABABIAEACIADABIADAAIABABIAJgCIADgBIABAAIAFgDIARgLIAFgHIAAgBIABgDIAAgDIgDgHIgCgCIgEgEIgMgCIAAgBgAj/mCIgJAGIgCACIADAJIABABIAAABIABADIAEAHIADADIABAAIAAAAIABABIAFAEIAGACIACABIAFAAIAFABIARgBIAJgDIACgBIACgFIABgEIAAgFIgEgGIgFgGIgFgFIgMgGIgHgCIgQgBg");
	this.shape_125.setTransform(69.6,69.1);

	this.shape_126 = new cjs.Shape();
	this.shape_126.graphics.f("#53537B").s().p("AAGBAIgGgIIgHgeIgOhVIACgDIABgBIAIgEIAAABIABAAIAAABIAJAGIAEAIIAPA5IADA7IgEABIgFACg");
	this.shape_126.setTransform(63.6,18.3);

	this.shape_127 = new cjs.Shape();
	this.shape_127.graphics.f("#53537B").s().p("AACARIgCgBIgEgBIgDAAIAAgBIgBAAIgBgBIgBgBIgBAAIgCgBIgEgFIgEgGIAAgCIgBgCIgCgEIADgDIACgBIAGgEIAHACIAXALIAHADIABACIAAACIgBAIIgKADIgIACg");
	this.shape_127.setTransform(17,47.3);

	this.shape_128 = new cjs.Shape();
	this.shape_128.graphics.f("#53537B").s().p("AACAUIgCgBIgEgBIgBgDIgCgDIgEgDIgDgDIAAgDIgBgBIgCgCIgBgHIABAAIAAgDIAAgDIACgDIABAAIAEgDIAEgBIAAABIAGACIAAgBIABABIAKAJIAHAIIAAABIABACIAAAFIgBABIgBAFIgCACIgCACIgJADg");
	this.shape_128.setTransform(24,33.3);

	this.shape_129 = new cjs.Shape();
	this.shape_129.graphics.f("#53537B").s().p("AAAAVIAAgDIgCgBIgPgRIgCgDIAAgCIgBgCIgBgFIAAgEIACgCIACgCIAEgCIADgBIAAABIAKACIAKAKIAKAKIACAIIgBAFIgBAEIgBACIgCACIgKADg");
	this.shape_129.setTransform(37,23.8);

	this.shape_130 = new cjs.Shape();
	this.shape_130.graphics.f("#53537B").s().p("AgCAZIgDgDIgDgDIgEgLIgCgIIAAgJIAAgEIACgGIABgCIACgBIAHgEIACABIAHAEIAGAJIABAGIABANIgDARIgFABIgEACg");
	this.shape_130.setTransform(44.4,19.4);

	this.shape_131 = new cjs.Shape();
	this.shape_131.graphics.f("#53537B").s().p("AAHAVIgHgBIgEgCIgHgGIgBgCIgCgBIgDgEIAAgCIAAAAIgBAAIgCgCIgDgGIAAgIIABgCIACgBIAHgEIAAABIAHABIAMAHIAJAGIAIAGIABACIAAADIgBAIIgDADIgDACIgGACg");
	this.shape_131.setTransform(30.3,28.1);

	this.shape_132 = new cjs.Shape();
	this.shape_132.graphics.f("#53537B").s().p("AgYAGIgBgCIgCgFIgBgCIADgEIACgCIABgBIAYgEIAKADIAQAIIABADIAAAEIgBAEIgBACIgDACIgJADg");
	this.shape_132.setTransform(20.4,40.2);

	this.shape_133 = new cjs.Shape();
	this.shape_133.graphics.f("#53537B").s().p("AgNA3IgHgCIgEgHIgBgFIADgEIAbhZIAIgDIADABIACABIAEABIADADIAAAEIAAAEIgWBeIgEACIgHABg");
	this.shape_133.setTransform(79.4,19.4);

	this.shape_134 = new cjs.Shape();
	this.shape_134.graphics.f("#53537B").s().p("AgFA8IAAgBIgBAAIgCAAIgBgBIAAgBIgBAAIgCgBIgCgCIgCgBIAAgBIgCgDIABgEIAMhNIAFgZIAHgDIAAABIAHACIAFAEIAAAJIgGBdIgEAEIgEADIgFADIgEACg");
	this.shape_134.setTransform(71.8,18.3);

	this.shape_135 = new cjs.Shape();
	this.shape_135.graphics.f("#53537B").s().p("AgKARIgIgBIgCgEIAAgBIAAgBIgBgCIABgCIAAgGIABAAIABAAIABgBIAZgPIAEAAIACAAIADABIADADIABADIABACIAAADIgDAFIgDAFIgEAFIgFADIgGACIgEABg");
	this.shape_135.setTransform(123.5,53.2);

	this.shape_136 = new cjs.Shape();
	this.shape_136.graphics.f("#53537B").s().p("AgIAQIgJgBIgBgDIgCgDIAAgEIABgDIADgCIAagPIAJADIACADIgBAHIgDAHIgEAFIgEACIgFACIgEACg");
	this.shape_136.setTransform(120.7,44.5);

	this.shape_137 = new cjs.Shape();
	this.shape_137.graphics.f("#53537B").s().p("AgYANIgDgIIAAgBIgBgBIAAgCIABgBIABgBIAEgEIAlgKIAAACIAJACIACABIABADIACAEIAAADIgFAEIgGAFIgGADIgHADIgNABg");
	this.shape_137.setTransform(115.8,36.8);

	this.shape_138 = new cjs.Shape();
	this.shape_138.graphics.f("#53537B").s().p("AgQAPIgCgCIgDgBIgFgIIAAgCIABgCIAEgCIAEgEIAFgDIAKgEIAJgCIAGABIAAAAIAAAAIAJACIADAFIABACIABAFIgEAEIgFAEIgLAFIgQADg");
	this.shape_138.setTransform(109.7,29.8);

	this.shape_139 = new cjs.Shape();
	this.shape_139.graphics.f("#53537B").s().p("AgHARIgBgBIgCgBIgDgDIgDgDIAAgCIgCgCIACgEIAFgFIADgDIACgCIAGgFIAEgDIAEAAIACACIAJAHIgBADIgFAMIgFAJIgFABIgDABg");
	this.shape_139.setTransform(103.6,23.8);

	this.shape_140 = new cjs.Shape();
	this.shape_140.graphics.f("#666699").s().p("AHdCyIg2hdIgpg0Ig/g9Ig5gtIgugaIgYgKIg4BYIgcA5IgKgGIgHgaIgHgLIgIgLIgFAEIgJALIgDAEIgMALIgPAHIgCgEIAAgNIgHgRIgCgEIgDgDIgNAWIgPATIgQgEIgCgFIgCgIIgEgFIgIgOIgMARIgQAPIgHgIIAAgCIgBgCIgCgdIgOhbIhTAZIhjAzIhaBCIg6BAIgtBJIgZA3IgQAvIgGgIIgQgQIgSgNIgUgLIgMgEIAShFIAjhAIBJhTIAygrIBLgyIAVgLIB7gwIgFACIgEAGIgDAGIgCAHIgBAHIABAEIADAEIAIAEIANgIIABgKIAEgIIABgEIAAgCIgBgBIgBgDIgDgCIgHgCIAAgBIBsgWIgCABIgCABIgCADIAPBXIAIAeIAGAIIAIAEIAFgCIAEgBIgEg7IgPg7IgDgIIgLgGIBkgHIAFgXIAHgVIANgWIAEgGIARgQIAMgJIANgGIAHgCIAZgEIAIAAIABAAIAAABIACABIADADIAAACIgDAFIgFAEIgkAGIgDAAIgCABIgCABIgCACIgOATIgNAVIgMAgIgDALIATABIBLAQIBfAeIAYAKIgHAEIgIAIIgCADIgBADIgBADIABADIABAEIACADIACAEIACABIAEABIADABIAKgFIAFgDIADgDIADgFIACgEIACgFIAAgEIAZAKIA6AhIBCA0IAxAzIAWAdIAiA/IAbBOIAOBQIgIABIgXAHIgUAKIgHAEgAIJDnIgCABIAAABIgCABIAAAGIAAACIAAACIABABIAAABIABAEIAIABIAHAAIAHgBIAFgCIAFgDIAEgFIAEgFIACgHIAAgDIAAgCIgBgDIgDgDIgDgBIgDAAIgEAAgAogChIgCABIgDADIACAEIABACIAAADIAEAHIAEAFIACABIABAAIAAABIACABIAAAAIABABIADABIAEABIAEAAIADAAIAJgBIAJgDIABgIIAAgDIgBgCIgHgFIgYgLIgHgCgAHuCRIgEAEIAAADIAAAEIABADIACADIAJABIAHAAIAHgCIAFgCIADgCIAEgFIAEgJIABgHIgCgDIgJgDgAoBBdIgCAAIgCACIgCAFIABABIABAIIACACIApAJIAJgEIACgCIACgBIAAgEIAAgFIAAgEIgRgJIgJgDgAG3A/IgEAEIgBACIgBACIAAACIABABIAAABIADAIIAQADIAPgBIAHgDIAGgDIAGgFIAFgFIAAgEIgCgEIgBgDIgCgBIgJgCIAAgCgAnRAOIgEADIgCABIgBACIgBADIAAADIAAABIABAHIABADIACACIAAACIADADIADAEIADACIABADIAEACIADAAIADACIAJgEIACgCIABgCIACgEIABgCIAAgFIgBgCIAAgCIgHgJIgKgJIgCgBIgBABIgGgCIAAgBgAGNgMIgKAEIgEADIgEADIgEADIgBABIgBADIAFAIIADABIACACIAHAAIATgCIALgGIAEgDIAFgFIgBgFIgBgCIgDgEIgJgCIAAgBIgBAAIgGAAgAmcghIgCABIgCACIABAIIADAIIACACIAAAAIABAAIAAACIADAEIACABIABACIAHAEIAFACIAIABIADAAIAHgCIADgCIADgBIABgIIAAgDIgBgCIgIgIIgJgGIgPgHIgGgBIAAgBgAlThSIgEACIgBACIgCACIAAAEIABAFIABACIAAACIACAFIAGAIIAIAJIACABIACADIAHADIAKgDIACgCIABgCIACgEIAAgFIgBgJIgKgLIgNgKIgJgCIAAgBgAFThKIgGAEIgCADIgDADIgFAHIgCAEIACABIAAACIADAEIADACIACABIABABIAHACIAFgCIAFgBIAFgJIAFgNIABgEIgJgGIgCgCIgEgBgABnicIgXBEIgGAXIgCAFIABAFIADAHIAHACIAGAAIAHAAIAGgCIAWhgIAAgFIAAgDIgDgDIgEgBIgCgCIgEAAgAAVisIgGAZIgMBPIgBAFIADACIAAABIACACIABACIACABIACAAIAAAAIAAABIADABIABAAIAAAAIABABIAGgCIAEgCIAFgEIADgDIAHhfIAAgJIgFgFIgIgCIAAAAgAkEh+IgCABIgCADIgBAFIgBAEIAAAKIACAJIAFALIADAEIADACIAGACIAFgCIAEgBIAEgQIgBgQIgCgGIgFgJIgHgEIgEgBgACziQIgIAMIgHAOIgBACIABACIAFAGIAGADIAOgJIAGgHIADgEIAEgJIAAgFIgCgCIgCgDIgLgDg");
	this.shape_140.setTransform(69.5,29.8);

	this.shape_141 = new cjs.Shape();
	this.shape_141.graphics.f("#53537B").s().p("AABA5IgFgCIgFgCIgHhFIAAgDIgDgcIAAgCIABgCIALgFIADAAIAFAEIAPBDIADAYIAAADIABACIgFAIIgBADIgHACg");
	this.shape_141.setTransform(65.7,19.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).to({state:[{t:this.shape_140},{t:this.shape_139},{t:this.shape_138},{t:this.shape_137},{t:this.shape_136},{t:this.shape_135},{t:this.shape_134},{t:this.shape_133},{t:this.shape_132},{t:this.shape_131},{t:this.shape_130},{t:this.shape_129},{t:this.shape_128},{t:this.shape_127},{t:this.shape_126},{t:this.shape_125},{t:this.shape_124},{t:this.shape_123},{t:this.shape_122},{t:this.shape_121},{t:this.shape_120},{t:this.shape_119},{t:this.shape_118},{t:this.shape_117},{t:this.shape_116},{t:this.shape_115},{t:this.shape_114},{t:this.shape_113},{t:this.shape_112},{t:this.shape_111},{t:this.shape_110},{t:this.shape_109},{t:this.shape_108},{t:this.shape_107},{t:this.shape_106},{t:this.shape_105},{t:this.shape_104},{t:this.shape_103},{t:this.shape_102},{t:this.shape_101},{t:this.shape_100},{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78}]},20).to({state:[{t:this.shape_77},{t:this.shape_76},{t:this.shape_141},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]},29).wait(56));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,138.9,218.5);


(lib.dog = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_104 = function() {
		this.gotoAndStop(0);
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(104).call(this.frame_104));

	// flash0.ai
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAHBeQgDgHgFgmQgHgtgYgaQgKgMgngfQAKgPAGgXQAKAEAuAeQAoAaAKgHQALgJAMgBQAQgBABANQABAHgJAHQgMAJgGAGQgZAWAMAmQAOAugXANQgHAEgFAAQgJAAgFgKg");
	this.shape.setTransform(706.2,84,1,1,75);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F3EBDB").s().p("AgDBZIgLguQgIgggMgUIg5g5QAOgUAHgeQAKAFAtAdQApAYAJgHQAOgKATAFQAVAFADAUQABALgaAWQgZATAKAjQAQA2gdAQQgKAFgIAAQgSAAgGgcg");
	this.shape_1.setTransform(705.6,84.8,1,1,75);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AAGB0QgIgGgHgZIgIgmQgJgvgMgOQgCgEgXgTQgYgTgGgCQATgXAJgmIAzAhQAkAXAKgIQAQgLAVAGQAWAGADAWQACANgbAWQgZATAKAgQARA5gfARQgMAIgKAAQgGAAgGgEg");
	this.shape_2.setTransform(705.4,85,1,1,75);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#DFCFB4").s().p("AgMBVIgMg0QgGgfgKgMIg8guQAWgXALguQAKAFApAdQAlAYAKgHQARgNAYAHQAZAIAEAZQACARgbAVQgYARAJAeQARA9giAUQgNAHgKAAQgWAAgLgpg");
	this.shape_3.setTransform(705.5,84.8,1,1,75);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#907C74").s().p("AAFB8QgOgLgKgyQgLg4gKgMIg/gwIAEgFQAVgVAKgrIABgGIAFACQAHAEAoAcQAlAZAHgGQATgOAaAIQAbAJADAbQADAUgZAUQgYAQAIAaQASA/glAVQgOAIgMAAQgJAAgHgFg");
	this.shape_4.setTransform(705.6,84.7,1,1,75);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AAKBHQgpgZgJAHQgLAJgMABQgPACgDgNQgBgGAJgIIARgPQAYgXgMgmQgPguAWgNQASgLAIAQQADAIAIAlQAHAtAZAZQALANAnAcQgJAPgGAYIg5ggg");
	this.shape_5.setTransform(717.5,66.1,1,1,75);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#F3EBDB").s().p("AAQBUQgpgXgJAHQgNALgUgFQgVgFgDgTQgBgLAZgXQAYgUgLgiQgSg1AdgRQAggUALApQAaBVAIAMIA6A3QgMAUgHAfIg5ggg");
	this.shape_6.setTransform(718,65.3,1,1,75);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AAQBXQglgWgKAIQgPAMgVgFQgXgGgDgVQgCgOAagWQAYgUgLggQgSg4AegTQAVgMAMAHQAKAHAGAZIAJAlQALAuAMAPQADADAYASQAYASAGADQgRAWgJAnIg0gfg");
	this.shape_7.setTransform(718.2,65.1,1,1,75);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#DFCFB4").s().p("AASBcQgmgXgJAHQgRAOgYgGQgagHgEgZQgDgSAagVQAYgTgKgdQgTg9AigUQAqgZAPA5IANA0QAIAfAKALQACADA7ApQgVAWgKAwIg0ggg");
	this.shape_8.setTransform(718.1,65.3,1,1,75);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#907C74").s().p("ABBB9IgvgeQglgYgIAGQgTAQgagIQgbgIgEgbQgEgUAZgUQAYgRgJgaQgVg+AlgWQAZgQARALQAPAKALAyQANA4AKALIBAAvIgEAEQgTAWgJAsIgBAGg");
	this.shape_9.setTransform(718.1,65.4,1,1,75);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#993366").s().p("AghAUIgIgCIgFgHIgDgEIALgNIAFgGIAGgGIACAAIALgBIAUAAIAJACIASAHIARAKIgDAEIgVAFIAAAAIAAABIgQAFIgIgBIgCAAIgDABIgIAAIgGADIgIACg");
	this.shape_10.setTransform(696.7,100.7,1,1,0,0,180);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#993366").s().p("Ag3AVIAAgEIAAgBIAAgCIACgCIACgCIACAAIBiglIADAJIACAJIACASIhsATg");
	this.shape_11.setTransform(708.9,75.6,1,1,0,0,180);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#993366").s().p("AABAMIgkgIIgCgDIgMgBIAFgQIBTAAIAFACIAFADIABAIIAAAHIgCAJIgKAEg");
	this.shape_12.setTransform(676.5,101.2,1,1,0,0,180);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#993366").s().p("AgSgeIAegRIAGAFIABAMIgCAYIgGAVIgIAQIgKAQIgCABIgDAAg");
	this.shape_13.setTransform(684.1,91.1,1,1,0,0,180);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#CC6633").s().p("ABaCZIg0AEIgBAAIACgFIgQgLIgJgDIgRgGIgKAAIgWABIgCAAIAIgGIgEgZIgZAJIgcAEIgegBIgfgGIgdgLIgRgLIgDgCIgEgDIgOgOIgKgRIgFgQIAAgRIABgJIABgCIABgBIAAAAIABgFIAHgLIAEgGIAJgKIAKgHIAMgFIAGgBIAWgDIARACIAIACIAOAEIAaAPIAcAXIABAGIAAAMIgCAFIgEALIgDAEIgMAMIgIAGIgJAEIgLAEIgIACIgCAAIgFABIgNABIgLgBIgFgCIgBgBIgBAAIgCAAIgGgHIgDgDIAAgDIAAgBIgCgBIAAgCIgBgDIgBgGIAAgLIAEgDIAJgNIACgCIAHgEIAMAAIAGADIADACIgIAJIgHALIgCALIAAACIADAEIABAAIABAAIAYACIAAAAIAQgKIAEgDIADgEIAIgNIADgJIgDgHIgIgIIgLgHIgGgDIgIgCIgdgCIgVAEIgNAFIgPAJIgIAHIgGAOIgBAKIACAKIAEAMIAHAMIAxAeIBwgLIgEgbIABgYIAGgVIAFgLIAGgHIAKAEIAPALIAIAHIATiLIgmARIhBASIgCgUIgCgKIgDgJIBRgfIABAAIAAACIABABIAkALIA3AJIAOABIAEABIAmACIAAACIAKA8IARBGIAFgDIAEgCIAFgCIALgCIAMABIAGACIAGA8IgFAxIgCAHIgFAMIgDAHIAKADIAKAFIhUAAIgFASgABfAZIAHBQIADAAIABgBIAMgQIAIgQIAHgWIACgZIgCgMIgGgFgAADAzIACAEIAAgFg");
	this.shape_14.setTransform(695.7,85.4,1,1,0,0,180);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#66CCCC").s().p("AgCAIIgEAAIgCgDIAAgFIgBgCIACgDIAHgEIABABIAGADIACADIABACIgBACIgJAHg");
	this.shape_15.setTransform(682.2,69.4,1,1,0,0,180);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#66CCCC").s().p("AgGAIIgBgEIgCgGIABgCIABgBIAHgEIAEADIADACIACACIABACIAAADIgKAHg");
	this.shape_16.setTransform(691.6,67.1,1,1,0,0,180);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#66CCCC").s().p("AgGAHIgCgCIgBgGIABgCIABgCIAHgEIACABIACABIADACIADAFIgBACIgJAHg");
	this.shape_17.setTransform(687.2,68.3,1,1,0,0,180);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#666699").s().p("AAPAeIgEAAIgfgDIhIgSIgBgCIAAgCIgBAAIAAgHIACgJIAFgLIAFgGIALgDIAsAAIB2ALIABACIAAACIABACIABADIABALIgMANIAAAFIgBADIgDAKIgZAAIgBABgAAegBIgCABIABAEIAAAFIACADIAEAAIACABIALgHIABgEIgBgCIgCgBIgGgDIgDgBgAgSgNIgBACIgBACIABAJIABAAIAHACIALgGIAAgDIgCgGIgDgBIgDgBIgDgBgAg/gYIgBABIgBACIADAMIAHACIALgHIABgEIgBgDIgCgCIgDgCIgGgDg");
	this.shape_18.setTransform(686.1,69,1,1,0,0,180);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#FFFFFF").s().p("AARAmIgFAAIgMgCIgJgEIgLgHIgVgSIgCgHIgBgCIgBgCIgCgFIABgDIADgGIAHgJIAKgHIANgEIANABIAOAHIAPALIALAMIAGAPIACARIgCAKIgFABIgSADg");
	this.shape_19.setTransform(650.3,15.9,1,1,0,0,180);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#993366").s().p("AgNB1IgDgCIgCgBIgCgBIgXgTIgHgJIgDgCIgLgSIgBgDIgBgBIgBgBIAAAAIAAgCIgBAAIgBgCIgJgWIgLhBIAAgTIADgiIAEgQIAGgOIAMgDIAwgJIAjgCIApAYIALAIIAIASIAJAjIACASIgBAjIgDASIgIAYIgNAaIgDAEIgMANIgRAPIggATgAgGhhIgKAHIgHAJIgDAGIgCADIACAFIACACIABACIABAJIAWASIAJAHIAKAEIAMACIALABIATgDIAFgBIACgKIgCgRIgGgRIgLgMIgPgLIgPgHIgPgBg");
	this.shape_20.setTransform(652.2,22.2,1,1,0,0,180);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#993366").s().p("AgQANIAAgBIgBgBIgCAAIAAgCIgCgCIgCgEIABgCIABgBIABAAIAEgEIAQgDIANgHIAEABIADABIACABIACADIAAACIgCACIgRAKIgSAJg");
	this.shape_21.setTransform(697.3,34.5,1,1,0,0,180);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#FFFFFF").s().p("AgNAiIgBgBIgBAAIgDgBIgCgBIgEgBIgEgGIgFgKIAAgFIgCgPIALgPIAKgJIAUgEIAAABIADAAIABAAIACACIAHAFIAFAGIAEAEIACAEIAGALIABACIAAAEIgCAHIgEAGIgJAKIgKAHgAAEgGIgPADIgDADIgBABIgBABIgBACIACAEIABACIAAACIACAAIABABIAAABIAEACIARgJIASgKIABgCIAAgCIgBgDIgCgBIgEgBIgDgBg");
	this.shape_22.setTransform(697.8,34.4,1,1,0,0,180);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#993366").s().p("AgXAIIgDgDIACgCIABgBIAJgEIAEgDIAKgDIAEgBIAKgBIAGAAIADAAIACAAIAAACIACAAIAAABIgEAEIgJAFIgQAGIgPADg");
	this.shape_23.setTransform(671,22,1,1,0,0,180);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#FFFFFF").s().p("AgUAfIgIgJIgKgRIADgMIAAgIIAAgIIAEgFIALgCIADgBIARABIAOAGIAGADIANAJIAEAGIACALIgBAJIgNAIIgHAEIgPAEIgFACIgRAAgAAJgDIgFABIgJACIgEACIgJAGIgBABIgCACIADADIAGADIANgDIASgGIAJgHIAEgCIAAgBIgCAAIAAgCIgCAAIgDAAIgGAAg");
	this.shape_24.setTransform(671.5,21.4,1,1,0,0,180);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#CC6633").s().p("AA4EhIgBgCIh2gLIgsAAIgLADIgDADIgegEIgggTIgCgCIgIgFIgpggIgZgvIAAgDIgBgCIgJgbIgIgJIgGiBIgEgDIgFgDIgLgLIgSgWIgCgFIAAAAIgBgBIgEgFIgKgaIgGgaIAEgCIADgCIAGAAIAdAEIApANIAbAMIANAHIA8gaICkhWIgIgUIgFggIAAgEIgBAAIgFgcIAKgOIAGgHIADgDIAQgDIAAABIAEAAIACAAIAAABIAHAGIAXAXIAUAeIAJAUIAEAMIgLACIgFAFIABAIIgBAJIgCANIAJARIAJAJIABABIAQAAIAIgCIAPgEIAHgEIANgIIABgJIgCgNIgFgGIgMgJIgHgDIgOgGIgTgBIgCABIAGgIIAPgNIAhgVIBFgfIANgDIgFANIgEAQIgCARIgBAkIALBDIAJAXIABABIAAAAIAAACIABAAIAAABIABACIACADIALASIADABIAHAJIAXATIACABIABABIAUAPIhGAgIAcA6IAIgDIAJgBIAJAAIAXADIAEACIATAKIACANIADAAIADADIACAFIABAJIgCAEIgFAYIgJAZIgTASIhAAvIhJAiIhjAdIgEABIACABIAHADIgXACgAgMBBIgwAOIgMAGIAHBqIBOgGIAZgFIgOh5gAhOC/IgFhnIgtAaIgIAoIACACIABADIAFAMIACACIACACIACABIABACIAFADIAEAEIAKADIAKACIAOABgABnAzIgJABIgEABIgsACIgLACIARB4IBNgaIAYgLIgfhfgACIApIAeBcIAkgVIAMgKIAMgOIAIgIIAPgLIgbg8gAinhDIgKAJIgMAOIACASIABAFIAFAKIADAGIAFABIABABIADABIACAAIABABIAbAAIAKgGIAJgKIAEgGIABgHIAAgEIAAgEIgGgLIgCgFIgEgDIgFgHIgHgEIgDgCIgBAAIgCgBIAAAAg");
	this.shape_25.setTransform(682.5,38.1,1,1,0,0,180);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]},70).wait(35));

	// flash0.ai
	this.instance = new lib.fetching();
	this.instance.setTransform(596.1,-22.5,1,1,0,0,0,47.7,52.1);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(50).to({_off:false},0).wait(1).to({regX:49.4,regY:54.3,x:603.3,y:-18.7},0).wait(1).to({x:608.7,y:-17},0).wait(1).to({x:614,y:-15},0).wait(1).to({x:619.2,y:-12.6},0).wait(1).to({x:624.3,y:-10},0).wait(1).to({x:629.1,y:-7},0).wait(1).to({x:633.8,y:-3.8},0).wait(1).to({x:638.2,y:-0.2},0).wait(1).to({x:642.3,y:3.6},0).wait(1).to({x:646.1,y:7.8},0).wait(1).to({x:649.6,y:12.3},0).wait(1).to({x:652.7,y:17},0).wait(1).to({x:655.5,y:21.9},0).wait(1).to({x:658,y:27.1},0).wait(1).to({x:660.2,y:32.3},0).wait(1).to({x:662,y:37.7},0).wait(1).to({x:663.5,y:43.2},0).wait(1).to({x:664.8,y:48.7},0).wait(1).to({x:665.8,y:54.3},0).to({_off:true},1).wait(35));

	// flash0.ai
	this.instance_1 = new lib.running();
	this.instance_1.setTransform(109,53.3,1,1,0,0,0,50,41.3);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(20).to({_off:false},0).wait(1).to({x:122.6,y:47},0).wait(1).to({x:136.4,y:41.2},0).wait(1).to({x:150.2,y:35.5},0).wait(1).to({x:164.3,y:30.2},0).wait(1).to({x:178.4,y:25.2},0).wait(1).to({x:192.6,y:20.4},0).wait(1).to({x:206.9,y:15.9},0).wait(1).to({x:221.2,y:11.6},0).wait(1).to({x:235.6,y:7.5},0).wait(1).to({x:250.1,y:3.7},0).wait(1).to({x:264.6,y:0},0).wait(1).to({x:279.2,y:-3.2},0).wait(1).to({x:293.9,y:-6.3},0).wait(1).to({x:308.6,y:-9.3},0).wait(1).to({x:323.3,y:-12.1},0).wait(1).to({x:338.1,y:-14.6},0).wait(1).to({x:352.9,y:-17},0).wait(1).to({x:367.7,y:-19.1},0).wait(1).to({x:382.6,y:-21},0).wait(1).to({x:397.4,y:-22.6},0).wait(1).to({x:412.4,y:-24},0).wait(1).to({x:427.3,y:-25.2},0).wait(1).to({x:442.3,y:-26.1},0).wait(1).to({x:457.2,y:-26.8},0).wait(1).to({x:472.2,y:-27.1},0).wait(1).to({x:487.2,y:-27.2},0).wait(1).to({x:502.2,y:-27},0).wait(1).to({x:517.1,y:-26.4},0).wait(1).to({x:532.1,y:-25.5},0).to({_off:true},1).wait(55));

	// Layer 1
	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#993366").s().p("AggAUIgJgBIgGgIIgBgEIAEgHIAMgNIAFgFIACAAIAMgBIASAAIAKADIASAGIARAKIgDAEIgVAFIAAABIAAAAIgPAFIgJgCIgCAAIgDABIgIABIgHAEIgHABg");
	this.shape_26.setTransform(62.2,91.7);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#993366").s().p("Ag3AVIAAgEIAAgBIAAgCIACgCIACgCIACAAIBiglIADAJIACAJIACASIhsATg");
	this.shape_27.setTransform(50,66.6);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#993366").s().p("AgiADIgCgCIgNgBIAGgQIBRAAIAGACIAFADIABAIIgBAHIgCAJIgJAEg");
	this.shape_28.setTransform(82.4,92.2);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#993366").s().p("AgSgeIAegRIAGAFIABAMIgCAYIgGAVIgIAQIgKAQIgCABIgDAAg");
	this.shape_29.setTransform(74.7,82.1);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#CC6633").s().p("ABaCaIg0ACIgBABIACgFIgQgLIgSgGIgIgDIgVAAIgLABIgCAAIAIgGIgEgZIgMAFIgbAHIgcABIgvgGIgdgMIgRgLIgDgCIgEgDIgOgOIgKgRIgFgQIAAgRIABgIIABgDIABgBIAAgBIABgDIALgSIAJgKIAKgHIAMgFIAGgBIAWgCIAZACIAOAGIAaANIAUASIAIAGIABAGIAAAMIgEAKIgCAGIgDAEIgMANIgIAFIgJAFIgLADIgIABIgCAAIgFACIgNABIgLgBIgFgCIgBgBIgBAAIgCgBIgGgGIgDgDIAAgDIAAAAIgCgCIAAgDIgBgCIgBgGIAAgLIAEgDIAJgNIACgCIAHgDIAMgBIAGADIADACIgIAJIgHAKIgCANIAAABIADAEIABAAIABAAIAYACIAAAAIAQgKIAEgDIADgEIAIgNIADgJIgDgHIgIgIIgLgHIgGgDIgIgCIgdgBIgVADIgNAGIgPAIIgIAIIgGANIgBAFIABAKIABAFIAEAMIAHAMIAxAeIBwgLIgEgbIABgXIAGgXIAFgKIAGgHIAKAEIAPALIAIAHIATiLIgmARIhBASIgCgUIgCgJIgDgJIBRghIABABIAAABIABACIAkALIBFAKIAEABIAmABIAAADIAbCCIAFgDIAEgCIAFgCIALgCIAMABIAGACIADASIADAqIgDAqIgJAbIgDAGIAKAEIAKAEIhUAAIgFARgABfAZIAHBQIADAAIABgBIAMgQIAIgQIAHgXIACgYIgCgMIgGgFgAADAzIACAEIAAgFg");
	this.shape_30.setTransform(63.2,76.4);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#66CCCC").s().p("AgCAIIgEAAIgCgDIAAgFIgBgCIACgDIAHgEIABABIAGAEIACACIABACIgBACIgJAHg");
	this.shape_31.setTransform(76.7,60.4);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#66CCCC").s().p("AgGAIIgDgKIABgCIABgBIAHgDIAEACIADABIACADIABACIAAACIgKAIg");
	this.shape_32.setTransform(67.2,58.1);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#66CCCC").s().p("AgGAHIgCgCIgBgHIABgCIABgBIAHgEIACABIACABIADACIADAFIgBACIgJAIg");
	this.shape_33.setTransform(71.6,59.3);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#666699").s().p("AAPAeIgEgBIhDgKIgkgKIgBgCIAAgBIgBgBIAAgHIACgIIAFgMIAFgFIALgEIB6AGIAoAGIABABIAAACIABACIABAEIABAKIgMANIAAAFIgEANIgZAAIgBABgAAegBIgCABIABAEIAAAFIACADIAEAAIACABIALgHIABgEIgBgCIgCAAIgGgEIgDgBgAgSgNIgBACIgBACIABAJIABAAIAHACIALgGIAAgDIgCgGIgDgCIgDgBIgDAAgAg/gYIgBABIgBACIADAMIAHACIALgIIABgDIgBgDIgCgDIgDgBIgGgCg");
	this.shape_34.setTransform(72.8,60);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#FFFFFF").s().p("AAMAnIgMgDIgJgEIgLgHIgVgSIgCgHIgBgCIgBgCIgCgFIABgDIADgHIAHgJIAKgGIANgEIANAAIAOAIIAPAKIALANIAGAOIACASIgCAKIgFABIgSADg");
	this.shape_35.setTransform(108.6,6.9);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#993366").s().p("AgSByIgCgBIgXgTIgHgJIgDgCIgLgSIgCgDIgBgCIAAAAIgBAAIAAgCIAAAAIgBgCIgJgXIgLhJIAAgKIADgiIAEgQIAFgNIANgFIAjgHIAwgDIAoAYIAMAJIAIARIAJAjIADAkIgGAkIgHAXIgOAaIgOARIgSAQIgfASgAgGhhIgKAGIgIAJIgCAHIgCADIACAFIACACIAAACIACAJIAWASIAJAHIAKAEIAMADIALAAIATgDIAEgBIACgKIgCgSIgGgQIgLgNIgOgKIgPgIIgPAAg");
	this.shape_36.setTransform(106.7,13.2);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#993366").s().p("AgQANIgBgBIgBgBIgBAAIAAgCIgCgCIgCgEIACgCIABgBIAAAAIAEgEIAQgDIANgHIAEABIAEABIACABIABADIAAACIgBACIgSAKIgSAJg");
	this.shape_37.setTransform(61.6,25.5);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#FFFFFF").s().p("AgMAiIgCgBIgCAAIgCgBIgBgBIgGgBIgDgGIgFgKIgBgFIgBgPIALgPIAKgJIAUgEIAAABIACAAIABAAIAEACIAGAFIAFAGIAEAEIADAEIAFALIAAACIAAAEIgBAHIgDAGIgKAKIgJAHgAAEgGIgOADIgFADIAAABIgBABIgBACIABAEIACACIAAACIACAAIABABIABABIACACIASgJIASgKIABgCIAAgCIgBgDIgCgBIgDgBIgFgBg");
	this.shape_38.setTransform(61.1,25.4);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#993366").s().p("AgYAIIgCgDIABgCIABgBIAJgEIAGgDIAJgDIAEgBIALgBIAEAAIAFAAIABAAIAAACIACAAIAAABIgDAEIgKAFIgFACIgSAGIgIABg");
	this.shape_39.setTransform(87.9,13);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#FFFFFF").s().p("AgUAfIgJgJIgJgRIACgMIABgIIgBgIIAFgFIALgCIACgBIASABIAOAGIAHADIAMAJIAFAGIABALIAAAJIgOAIIgHAEIgPAEIgFACIgRAAgAAJgDIgFABIgIACIgGACIgJAGIgBABIgBACIACADIAHADIAIgBIASgGIAFgCIAKgHIADgCIAAgBIgCAAIAAgCIgBAAIgFAAIgEAAg");
	this.shape_40.setTransform(87.4,12.4);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#CC6633").s().p("AA4EhIgBgBIhOgJIhUgDIgLAEIgDACIgegEIgggTIgCgCIgIgEIgpghIgZgvIAAgCIgBgDIgJgbIgIgJIgGiBIgEgDIgFgEIgUgVIgJgLIgCgFIAAAAIgBgBIgEgGIgKgZIgGgaIAEgDIADgBIAGAAIAPABIA3AQIAoATIBZgnICHhIIgIgVIgFggIAAgEIgBgBIgFgbIAKgOIAEgEIAFgFIAQgEIAAABIAEAAIACAAIAAABIAHAGIAXAYIAUAdIAFAKIAIAWIgLACIgFAFIABAIIgBAIIgCAOIAJASIAJAIIABACIAQgBIAIgCIAPgEIAHgDIANgJIABgJIgCgNIgFgFIgMgJIgHgEIgOgFIgRgCIgCAAIgCABIAGgIIAPgNIA8gjIAqgRIANgDIgFAOIgEAPIgEAsIAMBMIAJAWIABACIAAAAIAAACIABAAIAAABIABACIACACIALASIADACIAHAJIAXATIACACIAVAOIhGAhIAcA7IAIgEIAJgBIAJAAIAXADIAEACIATAKIAAAEIACAIIADABIADAEIACADIABAKIgCAEIgCAMIgMAlIgTASIhAAuIhJAjIhjAdIgEABIACABIAHADIgXACgAgMBBIgwAOIgMAFIAHBrIAbgBIBMgKIgOh6gAhOC/IgFhnIgtAaIgIAoIACACIABACIAFANIACACIACABIACACIABACIAFADIAEADIAKAFIAKABIAOABgABnAyIgJACIgEABIgNACIgfAAIgLACIARB4IBNgaIAYgLIgfhfgACIApIAeBcIAkgVIAMgKIAMgOIAIgHIAPgMIgbg7gAinhDIgQAQIgGAIIACARIABAEIAFALIADAGIAFABIABABIADAAIACABIABABIAbAAIAKgGIAJgKIAEgGIABgHIAAgEIAAgEIgGgLIgCgFIgEgDIgFgHIgHgEIgDgCIgBAAIgCAAIAAgBg");
	this.shape_41.setTransform(76.4,29.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26}]}).to({state:[]},20).wait(85));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(40.1,0,75.7,94);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;