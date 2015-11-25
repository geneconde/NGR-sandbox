(function (lib, img, cjs) {

var p; // shortcut to reference prototypes
var rect; // used to reference frame bounds

// stage content:
(lib._2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// funnel
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AhUgVIAAAtICpAAIAAgvg");
	this.shape.setTransform(762.8,425);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#AC9E97").s().p("AhUAYIAAgtICogCIAAAvg");
	this.shape_1.setTransform(762.8,425);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("AARAAQAAAIgFAHQgFAGgHAAQgFAAgFgGQgFgHAAgIQAAgHAFgHQAFgGAFAAQAHAAAFAGQAFAHAAAHg");
	this.shape_2.setTransform(772.4,402.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#00B4A4").s().p("AgLAPQgEgHAAgIQAAgHAEgHQAFgGAGAAQAGAAAGAGQAEAHAAAHQAAAIgEAHQgGAGgGAAQgGAAgFgGg");
	this.shape_3.setTransform(772.4,402.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#8B5224").p("AAKAAQAAAEgEADQgCADgEAAQgCAAgDgDQgEgDAAgEQAAgDAEgDQADgDACAAQAEAAACADQAEADAAADg");
	this.shape_4.setTransform(766.7,407.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#00B4A4").s().p("AgGAHQgDgDAAgEQAAgDADgDQAEgDACAAQADAAAEADQACADAAADQAAAEgCADQgEADgDAAQgCAAgEgDg");
	this.shape_5.setTransform(766.7,407.9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#8B5224").p("AAVAAQAAAJgGAGQgHAGgIAAQgIAAgGgGQgGgGAAgJQAAgHAGgHQAGgGAIAAQAIAAAHAGQAGAHAAAHg");
	this.shape_6.setTransform(758,407.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#00B4A4").s().p("AgOAPQgGgGAAgJQAAgHAGgHQAGgGAIAAQAJAAAGAGQAGAHAAAHQAAAJgGAGQgGAGgJAAQgIAAgGgGg");
	this.shape_7.setTransform(758,407.2);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#8B5224").p("AANAAQAAAFgEAEQgEADgFAAQgEAAgEgDQgEgEAAgFQAAgEAEgDQAEgEAEAAQAFAAAEAEQAEADAAAEg");
	this.shape_8.setTransform(752.9,401.3);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#00B4A4").s().p("AgIAJQgEgFAAgEQAAgEAEgDQAEgEAEAAQAFAAAEAEQAEADAAAEQAAAFgEAEQgEADgFAAQgEAAgEgDg");
	this.shape_9.setTransform(752.9,401.3);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#8B5224").p("AAVAAQAAAJgGAGQgHAGgIAAQgIAAgGgGQgGgGAAgJQAAgHAGgHQAGgGAIAAQAIAAAHAGQAGAHAAAHg");
	this.shape_10.setTransform(765.1,400.2);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#00B4A4").s().p("AgNAPQgHgGAAgJQAAgHAHgHQAGgGAHAAQAIAAAHAGQAGAHAAAHQAAAJgGAGQgHAGgIAAQgHAAgGgGg");
	this.shape_11.setTransform(765.1,400.2);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#8B5224").p("AC4hcQAOgoAFgjImVAIQAFAeANAlQAbBKArAfQAvAlAYAnQAVAgAAAaQAAASAiADQASABASgDQgCgaAHggQAOg/AsgeQAsgbAdhQg");
	this.shape_12.setTransform(761.4,407.8);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#BADBF5").s().p("AAMCoQgigDAAgSQAAgagVggQgYgngvglQgrgfgbhKQgNglgFgeIGVgIQgFAjgOAoQgdBQgsAbQgsAegOA/QgHAgACAaQgNACgMAAIgLAAg");
	this.shape_13.setTransform(761.4,407.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(200));

	// walking
	this.instance = new lib.walking();
	this.instance.setTransform(-84.8,543.3,1,1,0,0,0,74.5,110.8);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:1001.4},199).wait(1));

	// flame
	this.instance_1 = new lib.flame();
	this.instance_1.setTransform(256.7,510.8,1,1,0,0,0,5.1,8.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_1}]}).wait(200));

	// equipments
	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#E5D9B3").s().p("AgDAAQAGgCADAAQAJAAgUAFQgGAAAIgDg");
	this.shape_14.setTransform(824.9,168.7);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#8B5224").p("EBAmgA5Ugb+AAJgkogADUgKXgABg2RgAIIAIB2UAzsgAHAM5gABUAkhgABAcDAAMg");
	this.shape_15.setTransform(458.1,548.4);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#F1F3F3").s().p("AAFAyUgM5AABgzsAAHIgIh2MBAoAAJUAkoAADAb+gAJIADB2UgcDgAMgkhAABg");
	this.shape_16.setTransform(458.1,548.4);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#8B5224").p("ABQiJIgSIzIBaAIIAftkIheAIIgIDxIjfjxIgjAEg");
	this.shape_17.setTransform(834,594);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#858E8B").s().p("AA7GqIASoyIkBkdIAkgFIDfDxIAIjxIBegHIggNjg");
	this.shape_18.setTransform(834.3,594);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#8B5224").p("Ai+muIAINcIBSAEIAIo4IEUkiIg9AAIjXD4IAEkCg");
	this.shape_19.setTransform(692.4,594);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#858E8B").s().p("AizGvIgItdIBmgDIgDEBIDXj3IA9AAIkVEhIgHI4g");
	this.shape_20.setTransform(692.1,594);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#8B5224").p("AizmpIDmFbIAAIOIBogDIAdt8IiFAEIAAE7IjDkpg");
	this.shape_21.setTransform(611.4,594.2);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#858E8B").s().p("AAxhOIjmlbIAjAAIDDEpIAAk7ICFgEIgdN8IhoADg");
	this.shape_22.setTransform(611.6,594.2);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("#8B5224").p("ACTmhIjeESIAAkvQgfgDgfgBQg9gDAAAJIAXOAIBkAAIAAoTIEMlTg");
	this.shape_23.setTransform(476.2,593.3);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#858E8B").s().p("AisHEIgXuAQAAgJA9ADIA+AEIAAEvIDekSIAugBIkMFTIAAITg");
	this.shape_24.setTransform(475.9,593.3);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#8B5224").p("AitmjIDwFJIABgEIgHIoIA+AEIA3ubIhqAUIgDEjIjEkNg");
	this.shape_25.setTransform(406.1,593.6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#858E8B").s().p("AA7HKIAGooIgBADIjvlIIAtAAIDEENIAEkkIBqgTIg3Obg");
	this.shape_26.setTransform(406.4,593.6);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#8B5224").p("AismuIELFSIAEIUIBPgGIgOtnIhHgDIACEoIjakig");
	this.shape_27.setTransform(200.9,597.9);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#858E8B").s().p("ABdhcIkMlSIAxgEIDbEiIgCkoIBGAEIAPNnIhPAFg");
	this.shape_28.setTransform(201.2,597.9);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#8B5224").p("Ai8mtIADNYIBVADIACnsIEalnIgfgBIj7FBIABlFg");
	this.shape_29.setTransform(280.7,593.7);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#858E8B").s().p("Ai2GrIgEtYIBbADIgBFFID7lBIAgABIkbFnIgCHsg");
	this.shape_30.setTransform(280.5,593.7);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#8B5224").p("AiknEIAIORIBgADIADqDIDbj2IgUgIIjHDZIABj3g");
	this.shape_31.setTransform(85,594.7);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#858E8B").s().p("AibHNIgHuRIBsgLIgBD3IDHjZIAUAIIjcD2IgCKDg");
	this.shape_32.setTransform(84.9,594.7);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f().s("#8B5224").p("AhLg8IgEB/ICfgFIgEiAg");
	this.shape_33.setTransform(700.5,491.2);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#C3491D").s().p("AhLg8ICXgGIAECAIifAFg");
	this.shape_34.setTransform(700.5,491.2);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f().s("#8B5224").p("AjQAgIGhgNIAAgxImdAOg");
	this.shape_35.setTransform(513.5,387.1);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#988679").s().p("AjMgRIGdgNIAAAwImhAOg");
	this.shape_36.setTransform(513.5,387.1);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("#8B5224").p("AA0g7Ih1AIIAEBvIB/gGg");
	this.shape_37.setTransform(804.8,422.3);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#AC9E97").s().p("AhBgzIB1gIIAOBxIh/AGg");
	this.shape_38.setTransform(804.8,422.3);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f().s("#8B5224").p("AhBgpIAABcICAgCIAChig");
	this.shape_39.setTransform(803.1,471.7);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#AC9E97").s().p("AhBgqICDgIIgDBjIiAACg");
	this.shape_40.setTransform(803.1,471.7);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f().s("#8B5224").p("AhZAxICzADIAAhoIizAAg");
	this.shape_41.setTransform(762.5,471.8);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#AC8A79").s().p("AhZAyIAAhmICyAAIAABog");
	this.shape_42.setTransform(762.5,471.8);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f().s("#8B5224").p("ACdAFQAAA9AECWIkeACQAJhNABhvQgBh8ABhAQgTgOgGgFQgOgLgIgLQC0gfCUAZQgJBhAABxg");
	this.shape_43.setTransform(618.7,523.5);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#F0C9D6").s().p("Ah1AeQAAh8ABhAIgagTQgNgLgIgLQC0gfCTAZQgIBhAABxQAAA9ADCWIkeACQAKhNAAhvg");
	this.shape_44.setTransform(618.8,523.5);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f().s("#8B5224").p("AhHgfIgCBOICTgDIgChZg");
	this.shape_45.setTransform(578.2,395.1);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#988679").s().p("AhHgfICPgOIACBZIiTACg");
	this.shape_46.setTransform(578.2,395.1);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f().s("#8B5224").p("AC6g/IlzgGIAGCLIFqgDg");
	this.shape_47.setTransform(631.1,397.1);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#988679").s().p("Ai5hFIFzAGIgDCCIlqADg");
	this.shape_48.setTransform(631.1,397.2);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f().s("#8B5224").p("ADDgcImCADIgDAzIF8ADg");
	this.shape_49.setTransform(629.9,381.3);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#EA714E").s().p("AjCAaIADgzIGCgDIgIA5g");
	this.shape_50.setTransform(629.9,381.3);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f().s("#8B5224").p("AhBgnIgDBPICIAAIgDhPg");
	this.shape_51.setTransform(631.1,375.5);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#EA714E").s().p("AhDAoIAChOICDAAIADBOg");
	this.shape_52.setTransform(631.1,375.5);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f().s("#8B5224").p("AilgQIAAAtIFHgDIADg2g");
	this.shape_53.setTransform(547.1,363.3);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#988679").s().p("AilgQIFKgMIgDA2IlHADg");
	this.shape_54.setTransform(547.1,363.4);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f().s("#8B5224").p("AgxCJQABA0gCAwIB0AAQgCg5ABg6QAAh1AJgFQAPgMBbjgIlnAXIA3BsQA4BtAJAPQAJAOABBog");
	this.shape_55.setTransform(546.7,372.7);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#D6BCBF").s().p("AgyDtQACgwgBg0QgBhogJgOQgJgPg4htIg3hsIFngXQhbDggPALQgJAGAAB1QgBA6ACA5g");
	this.shape_56.setTransform(546.7,372.8);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f().s("#8B5224").p("AhLgdIAHA7ICRAAIAAg7g");
	this.shape_57.setTransform(576.8,481.5);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#988679").s().p("AhFAdIgHg5ICYAAIAAA5g");
	this.shape_58.setTransform(576.8,481.5);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f().s("#8B5224").p("AiEhOIEJAFIgBAXQgDAdgJAWQgcBMhPACQhOACgng/QgXglgFg7g");
	this.shape_59.setTransform(549.4,519.7);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#FB8758").s().p("AhoASQgXglgFg7IEJAFIgBAXQgDAdgJAWQgcBMhPACIgFAAQhKAAgmg9g");
	this.shape_60.setTransform(549.4,519.7);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f().s("#8B5224").p("ACrgLIlUgHIgEAlIFbgIg");
	this.shape_61.setTransform(556.7,480.7);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#988679").s().p("AipgSIFUAHIADAWIlbAIg");
	this.shape_62.setTransform(556.7,480.7);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f().s("#8B5224").p("Ag8gjIgGBEICFADIgGhFg");
	this.shape_63.setTransform(548.6,467.3);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#988679").s().p("AhCAhIAGhEIB5ACIAGBFg");
	this.shape_64.setTransform(548.6,467.3);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f().s("#8B5224").p("AA8AAQAAAWgSARQgRAQgZAAQgXAAgSgQQgSgQAAgXQAAgWASgQQASgQAXAAQAZAAARAQQASAQAAAWg");
	this.shape_65.setTransform(548.5,423);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#988679").s().p("AgpAnQgSgQAAgXQAAgWASgQQASgQAXAAQAZAAARAQQASAQAAAWQAAAWgSARQgRAQgZAAQgXAAgSgQg");
	this.shape_66.setTransform(548.5,423);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f().s("#8B5224").p("AAnhAIhGAAIgHCAIBNgIg");
	this.shape_67.setTransform(563.5,422);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#988679").s().p("Agfg/IBGAAIAAB3IhNAIg");
	this.shape_68.setTransform(563.6,422);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f().s("#8B5224").p("AlOBUIKdgIIgDifIqaAQg");
	this.shape_69.setTransform(563,538.9);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#34372E").s().p("AlOhDIKagQIADCfIqdAIg");
	this.shape_70.setTransform(563,538.9);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f().s("#8B5224").p("ABOAnQgzACgdgDQgvgBgbgCQgygEgFgQQgEgOAVgUQAXgXAWAEQASADAbATQAYAQAGAAQADAAAbgMQAWgJANAEQARAHAVANQAXARABAIQACAIg5ADg");
	this.shape_71.setTransform(765.5,510.6);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#3B30FC").s().p("AgCAmQgvgBgbgCQgygEgFgQQgEgOAVgUQAXgXAWAEQASADAbATQAYAQAGAAIAegMQAWgJANAEQARAHAVANQAXARABAIQACAIg5ADIgmABQgaAAgQgCg");
	this.shape_72.setTransform(765.5,510.6);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f().s("#8B5224").p("AAHAAQAAAEgHAAQgHAAAAgEQAAgDAHAAQAHAAAAADg");
	this.shape_73.setTransform(768.2,505.8);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#3B30FC").s().p("AgHAAQAAgDAHAAQAIAAAAADQAAAEgIAAQgHAAAAgEg");
	this.shape_74.setTransform(768.2,505.8);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f().s("#8B5224").p("AATAAQAAAGgFAEQgGAEgIAAQgHAAgFgEQgGgEAAgGQAAgEAGgEQAGgEAGAAQAIAAAGAEQAFAEAAAEg");
	this.shape_75.setTransform(773.6,504.1);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#3B30FC").s().p("AgMAKQgGgFAAgFQAAgEAGgFQAGgDAGgBQAIABAGADQAFAFAAAEQAAAFgFAFQgGADgIAAQgHAAgFgDg");
	this.shape_76.setTransform(773.6,504.1);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f().s("#8B5224").p("AALAAQAAAFgDACQgDADgFAAQgDAAgEgDQgDgCAAgFQAAgDADgDQAEgEADAAQAFAAADAEQADADAAADg");
	this.shape_77.setTransform(760,499.4);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#3B30FC").s().p("AgHAHQgDgCAAgFQAAgDADgDQAEgDADgBQAFABADADQADADAAADQAAAFgDACQgDADgFABQgDgBgEgDg");
	this.shape_78.setTransform(760,499.4);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f().s("#8B5224").p("AATAAQAAAKgGAGQgFAHgIAAQgHAAgFgHQgGgHAAgJQAAgIAGgHQAFgHAHAAQAIAAAFAHQAGAHAAAIg");
	this.shape_79.setTransform(764.2,493.3);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#3B30FC").s().p("AgMAQQgGgHAAgJQAAgIAGgHQAFgHAHAAQAIAAAFAHQAGAHAAAIQAAAJgGAHQgFAHgIAAQgHAAgFgHg");
	this.shape_80.setTransform(764.2,493.3);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f().s("#8B5224").p("AiDAPQgEgNAVgVQAXgXAWAEQASADAbATQAYAQAGAAQADAAAbgLQAWgKANAEQARAHAVANQAXARABAIQACAIg5ADQg0ADgcgEQgvgBgbgCQgygDgFgRg");
	this.shape_81.setTransform(702,533.7);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#623261").s().p("AgCAmQgvgBgbgCQgygDgFgRQgEgNAVgVQAXgXAWAEQASADAbATQAYAQAGAAQADAAAbgLQAWgKANAEQARAHAVANQAXARABAIQACAIg5ADIgoABQgZAAgPgCg");
	this.shape_82.setTransform(702,533.7);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f().s("#8B5224").p("AA3gFQAFAAARgNQAPgMAKADQAJADgLARQgNAQADAFQAEAGAIAMQAGAKgCAIQgCAGgrgHQgwgIgLADQgaAKgQAEQgeAIgQgIQgYgNAGgtQAFgxAsgLQAYgGAoAeQAsAfACAAg");
	this.shape_83.setTransform(631.7,413.8);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#F7FB62").s().p("AhWA6QgYgNAGgtQAFgxAsgLQAYgGAoAeQAsAfACAAQAFAAARgNQAPgMAKADQAJADgLARQgNAQADAFIAMASQAGAKgCAIQgCAGgrgHQgwgIgLADIgqAOQgPAEgLAAQgMAAgIgEg");
	this.shape_84.setTransform(631.7,413.8);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f().s("#8B5224").p("AGDAKIsGASIAAgaIMCgdg");
	this.shape_85.setTransform(808.3,422.2);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#AC8A79").s().p("AmCACIMCgdIADAlIsFASg");
	this.shape_86.setTransform(808.3,422.2);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f().s("#8B5224").p("AgKrWIgRWtIAtAAIAK2sg");
	this.shape_87.setTransform(816,459.7);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#AC8A79").s().p("AgbLXIAR2tIAmABIgKWsg");
	this.shape_88.setTransform(816,459.7);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f().s("#8B5224").p("AgtgKIgDARIBhAEIAAgRg");
	this.shape_89.setTransform(804.5,411.7);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#AC8A79").s().p("AgwAHIACgRIBfAEIAAARg");
	this.shape_90.setTransform(804.6,411.7);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f().s("#8B5224").p("AgLgXIgCAvIAbACIgGgzg");
	this.shape_91.setTransform(805.1,415.3);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f("#AC8A79").s().p("AgNAYIACgvIATgCIAGAzg");
	this.shape_92.setTransform(805.1,415.4);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f().s("#8B5224").p("AEqAQIpRgEIAGgUIJLgHg");
	this.shape_93.setTransform(799.7,470.4);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f("#AC8A79").s().p("AkoAMIAHgUIJKgHIAAAfg");
	this.shape_94.setTransform(799.8,470.4);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f().s("#8B5224").p("AgzgLIgCAXIBqACIgEgbg");
	this.shape_95.setTransform(802.5,460.6);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f("#AC8A79").s().p("Ag0AMIACgXIBjgCIAFAbg");
	this.shape_96.setTransform(802.5,460.6);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f().s("#8B5224").p("AgJgfIABBGIASgCIgChKg");
	this.shape_97.setTransform(802.9,464.4);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f("#AC8A79").s().p("AgJggIARgGIACBLIgSACg");
	this.shape_98.setTransform(802.9,464.5);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f().s("#8B5224").p("AF4hDIrrAOIgEBtILrAMg");
	this.shape_99.setTransform(790.7,538.5);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.f("#34372E").s().p("Al3A4IAEhtILrgOIgECHg");
	this.shape_100.setTransform(790.7,538.6);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.f().s("#8B5224").p("ABYhYQgzgshRAOQhbAPg3BzQgSAlgOAwQgHAZgGAaQgGATgOgMIgMgPQALhGAghGQBAiPBngNQBJgJA0AVQA1AUAXAvQAfA9AxAFQAZACATgJIAAAlQgSACgWgDQgtgFgXgTQgsg5gcgZg");
	this.shape_101.setTransform(728.6,471.3);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.f("#C59C91").s().p("Aj/CbIgMgPQALhGAghGQA/iPBogNQBJgJA0AVQA0AUAYAvQAeA9AyAFQAZACATgJIAAAlQgSACgXgDQgsgFgXgTQgsg5gcgZQgzgshSAOQhaAPg3BzQgSAlgOAwIgNAzQgEAMgHAAQgEAAgFgFg");
	this.shape_102.setTransform(728.7,471.3);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.f().s("#8B5224").p("AgtjgQgdB+gUAjQgmBAgbAvQgyBYAAAMQAAAUAvA/IFXgMIAdhYIh/jOIgzibg");
	this.shape_103.setTransform(763.7,497.6);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.f("#BADBF5").s().p("AjRCUQAAgMAyhYIBBhvQAUgjAdh+IBNgGIAzCbIB/DOIgdBYIlXAMQgvg/AAgUg");
	this.shape_104.setTransform(763.7,497.6);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.f().s("#8B5224").p("AhLgdICWAAIgEA7IiSAAg");
	this.shape_105.setTransform(762.1,439.5);

	this.shape_106 = new cjs.Shape();
	this.shape_106.graphics.f("#EA714E").s().p("AhLAeIAAg7ICWAAIgDA7g");
	this.shape_106.setTransform(762.1,439.5);

	this.shape_107 = new cjs.Shape();
	this.shape_107.graphics.f().s("#8B5224").p("AgjiPIgDEhIBNgFIgKkeg");
	this.shape_107.setTransform(762.8,453.9);

	this.shape_108 = new cjs.Shape();
	this.shape_108.graphics.f("#BADBF5").s().p("AgjiPIBAgCIAKEeIhNAFg");
	this.shape_108.setTransform(762.8,453.9);

	this.shape_109 = new cjs.Shape();
	this.shape_109.graphics.f().s("#8B5224").p("AAHAAQAAAEgHAAQgHAAAAgEQAAgDAHAAQAHAAAAADg");
	this.shape_109.setTransform(704.7,528.9);

	this.shape_110 = new cjs.Shape();
	this.shape_110.graphics.f("#623261").s().p("AgGAAQAAgDAGAAQAHAAAAADQAAAEgHAAQgGAAAAgEg");
	this.shape_110.setTransform(704.7,528.9);

	this.shape_111 = new cjs.Shape();
	this.shape_111.graphics.f().s("#8B5224").p("AATAAQAAAFgFAFQgGADgIAAQgGAAgGgDQgGgFAAgFQAAgFAGgEQAFgDAHAAQAIAAAGADQAFAEAAAFg");
	this.shape_111.setTransform(710.1,527.3);

	this.shape_112 = new cjs.Shape();
	this.shape_112.graphics.f("#623261").s().p("AgMAJQgGgEAAgFQAAgFAGgEQAFgDAHAAQAIAAAGADQAFAEAAAFQAAAFgFAEQgGAFgIAAQgGAAgGgFg");
	this.shape_112.setTransform(710.1,527.3);

	this.shape_113 = new cjs.Shape();
	this.shape_113.graphics.f().s("#8B5224").p("AALAAQAAAEgDAEQgDADgFAAQgDAAgEgDQgDgEAAgEQAAgEADgCQAEgDADAAQAFAAADADQADACAAAEg");
	this.shape_113.setTransform(696.5,522.6);

	this.shape_114 = new cjs.Shape();
	this.shape_114.graphics.f("#623261").s().p("AgHAHQgDgDAAgEQAAgEADgDQAEgCADAAQAFAAADACQADADAAAEQAAAEgDADQgDADgFAAQgDAAgEgDg");
	this.shape_114.setTransform(696.5,522.6);

	this.shape_115 = new cjs.Shape();
	this.shape_115.graphics.f().s("#8B5224").p("AATAAQAAAKgFAGQgGAHgIAAQgGAAgGgHQgGgGAAgKQAAgIAGgHQAGgHAGAAQAIAAAGAHQAFAGAAAJg");
	this.shape_115.setTransform(700.7,516.5);

	this.shape_116 = new cjs.Shape();
	this.shape_116.graphics.f("#623261").s().p("AgMAQQgGgHAAgJQAAgIAGgHQAGgHAGAAQAIAAAGAHQAFAHAAAIQAAAJgFAHQgGAHgIAAQgGAAgGgHg");
	this.shape_116.setTransform(700.7,516.5);

	this.shape_117 = new cjs.Shape();
	this.shape_117.graphics.f().s("#8B5224").p("AgzjpIgFBxQgiA2ghA9QhEB3gBAhQgBAhAdAmQAPATAPAMID9ACIAlgpQAlgrAAgQQAAgQhPiHIhPiDIAAh2IhXAK");
	this.shape_117.setTransform(701.9,519.5);

	this.shape_118 = new cjs.Shape();
	this.shape_118.graphics.f("#BADBF5").s().p("AiGD5QgPgMgPgTQgdgmABghQABghBEh4QAhg8Aig3IAFhxIgBgGIBXgJIAAB1IBPCEQBPCGAAAQQAAAQglAsIglAog");
	this.shape_118.setTransform(701.9,519.5);

	this.shape_119 = new cjs.Shape();
	this.shape_119.graphics.f().s("#8B5224").p("AE/zxMgLZAnjIB2AAMAK/gnjg");
	this.shape_119.setTransform(467.5,514.8);

	this.shape_120 = new cjs.Shape();
	this.shape_120.graphics.f("#A65EA5").s().p("AmaTyMALZgnjIBcAAMgK/Anjg");
	this.shape_120.setTransform(467.5,514.8);

	this.shape_121 = new cjs.Shape();
	this.shape_121.graphics.f().s("#8B5224").p("AAfz6MAAzAn5IhwgIMgAzgn1g");
	this.shape_121.setTransform(528.6,514.6);

	this.shape_122 = new cjs.Shape();
	this.shape_122.graphics.f("#A65EA5").s().p("AgeT3MgAzgn1IBwAEMAAzAn5g");
	this.shape_122.setTransform(528.6,514.6);

	this.shape_123 = new cjs.Shape();
	this.shape_123.graphics.f().s("#8B5224").p("AASAAQAAAHgFAFQgGAFgHAAQgGAAgGgFQgFgFAAgHQAAgFAFgGQAGgFAGAAQAHAAAGAFQAFAGAAAFg");
	this.shape_123.setTransform(615.5,337.1);

	this.shape_124 = new cjs.Shape();
	this.shape_124.graphics.f("#EA714E").s().p("AgMAMQgFgFAAgHQAAgFAFgGQAGgFAGAAQAHAAAGAFQAFAGAAAFQAAAHgFAFQgGAFgHAAQgGAAgGgFg");
	this.shape_124.setTransform(615.5,337.1);

	this.shape_125 = new cjs.Shape();
	this.shape_125.graphics.f().s("#8B5224").p("AAdAAQAAALgIAIQgJAHgMAAQgLAAgJgHQgIgIAAgLQAAgKAIgHQAJgIALAAQAMAAAJAIQAIAHAAAKg");
	this.shape_125.setTransform(621.3,348.7);

	this.shape_126 = new cjs.Shape();
	this.shape_126.graphics.f("#F7FB62").s().p("AgUATQgIgIAAgLQAAgKAIgIQAJgHALgBQAMABAIAHQAJAIAAAKQAAALgJAIQgIAHgMAAQgLAAgJgHg");
	this.shape_126.setTransform(621.3,348.7);

	this.shape_127 = new cjs.Shape();
	this.shape_127.graphics.f().s("#8B5224").p("AANgLQAGAFAAAGQAAAHgGAGQgFAFgIAAQgHAAgFgFQgGgGAAgHQAAgGAGgFQAGgGAGAAQAIAAAFAGg");
	this.shape_127.setTransform(632,346.6);

	this.shape_128 = new cjs.Shape();
	this.shape_128.graphics.f("#EA714E").s().p("AgMANQgGgGAAgHQAAgGAGgFQAGgGAGAAQAIAAAFAGQAGAFAAAGQAAAHgGAGQgFAFgIAAQgHAAgFgFg");
	this.shape_128.setTransform(632,346.6);

	this.shape_129 = new cjs.Shape();
	this.shape_129.graphics.f().s("#8B5224").p("AAXAAQAAAIgHAHQgHAGgJAAQgIAAgHgGQgHgHAAgIQAAgHAHgHQAHgGAIAAQAJAAAHAGQAHAHAAAHg");
	this.shape_129.setTransform(632.4,339.9);

	this.shape_130 = new cjs.Shape();
	this.shape_130.graphics.f("#EA714E").s().p("AgPAPQgHgHAAgIQAAgHAHgHQAHgGAIAAQAJAAAHAGQAHAHAAAHQAAAIgHAHQgHAGgJAAQgIAAgHgGg");
	this.shape_130.setTransform(632.4,339.9);

	this.shape_131 = new cjs.Shape();
	this.shape_131.graphics.f().s("#8B5224").p("AAjAAQAAANgKAJQgLAKgOAAQgNAAgKgKQgLgJAAgNQAAgMALgJQAKgKANAAQAOAAALAKQAKAJAAAMg");
	this.shape_131.setTransform(628.9,332.8);

	this.shape_132 = new cjs.Shape();
	this.shape_132.graphics.f("#EA714E").s().p("AgXAWQgLgJAAgNQAAgMALgJQAKgKANAAQAOAAALAKQAKAJAAAMQAAANgKAJQgLAKgOAAQgNAAgKgKg");
	this.shape_132.setTransform(628.9,332.8);

	this.shape_133 = new cjs.Shape();
	this.shape_133.graphics.f().s("#8B5224").p("AAjAAQAAAKgKAIQgLAIgOAAQgNAAgKgIQgLgIAAgKQAAgKALgHQAKgIANAAQAOAAALAIQAKAHAAAKg");
	this.shape_133.setTransform(621.8,341.6);

	this.shape_134 = new cjs.Shape();
	this.shape_134.graphics.f("#EA714E").s().p("AgXASQgLgIAAgKQAAgJALgIQAKgIANAAQAOAAALAIQAKAIAAAJQAAAKgKAIQgLAIgOAAQgNAAgKgIg");
	this.shape_134.setTransform(621.8,341.6);

	this.shape_135 = new cjs.Shape();
	this.shape_135.graphics.f().s("#8B5224").p("ACfgsQASA+giA6QgiA6hCATQhBATg7ggQg8gggRg/QgSg+Aig6QAig6BCgTQBAgSA8AfQA7AgASA/g");
	this.shape_135.setTransform(625.7,340);

	this.shape_136 = new cjs.Shape();
	this.shape_136.graphics.f("#BADBF5").s().p("AhRCMQg8gggRg/QgSg+Aig6QAig6BCgTQBAgSA8AfQA7AgASA/QASA+giA6QgiA6hCATQgZAHgVAAQgpAAglgUg");
	this.shape_136.setTransform(625.7,340);

	this.shape_137 = new cjs.Shape();
	this.shape_137.graphics.f().s("#8B5224").p("AgjhOIAUC6IAzgDIgRjSg");
	this.shape_137.setTransform(629.3,362.2);

	this.shape_138 = new cjs.Shape();
	this.shape_138.graphics.f("#BADBF5").s().p("AgjhPIA2gbIARDSIgzADg");
	this.shape_138.setTransform(629.3,362.3);

	this.shape_139 = new cjs.Shape();
	this.shape_139.graphics.f().s("#8B5224").p("AA1gYIgDAxIhlAAIAMgxg");
	this.shape_139.setTransform(652.6,397);

	this.shape_140 = new cjs.Shape();
	this.shape_140.graphics.f("#EA714E").s().p("Ag0AZIANgxIBbAAIgCAxg");
	this.shape_140.setTransform(652.7,397);

	this.shape_141 = new cjs.Shape();
	this.shape_141.graphics.f().s("#8B5224").p("AidjFIADGFIE4AMIgLmXg");
	this.shape_141.setTransform(631.2,402.9);

	this.shape_142 = new cjs.Shape();
	this.shape_142.graphics.f("#BADBF5").s().p("AiaDAIgDmFIEwgGIALGXg");
	this.shape_142.setTransform(631.2,402.9);

	this.shape_143 = new cjs.Shape();
	this.shape_143.graphics.f().s("#8B5224").p("ACcgMIgDAWIkyADIAJgWg");
	this.shape_143.setTransform(599.4,395.2);

	this.shape_144 = new cjs.Shape();
	this.shape_144.graphics.f("#988679").s().p("AiRgJIEsgDIgDAWIkyADg");
	this.shape_144.setTransform(599.5,395.2);

	this.shape_145 = new cjs.Shape();
	this.shape_145.graphics.f().s("#8B5224").p("AhFg3IAABqICLAFIAAhvg");
	this.shape_145.setTransform(575.5,361.2);

	this.shape_146 = new cjs.Shape();
	this.shape_146.graphics.f("#988679").s().p("AhEAzIAAhqICJAAIAABvg");
	this.shape_146.setTransform(575.5,361.2);

	this.shape_147 = new cjs.Shape();
	this.shape_147.graphics.f().s("#8B5224").p("AgrgLIBTgCIADAVIhTAGg");
	this.shape_147.setTransform(557.2,421.3);

	this.shape_148 = new cjs.Shape();
	this.shape_148.graphics.f("#988679").s().p("AgqgLIBSgCIADAWIhTAFg");
	this.shape_148.setTransform(557.2,421.3);

	this.shape_149 = new cjs.Shape();
	this.shape_149.graphics.f().s("#8B5224").p("ABwAjIjeAAIgBhBIDfgEg");
	this.shape_149.setTransform(576.2,421);

	this.shape_150 = new cjs.Shape();
	this.shape_150.graphics.f("#988679").s().p("AhuAjIgBhBIDfgEIAABFg");
	this.shape_150.setTransform(576.2,421);

	this.shape_151 = new cjs.Shape();
	this.shape_151.graphics.f().s("#8B5224").p("AAFvdIAYe6IgjgDIgW+3g");
	this.shape_151.setTransform(576.3,434.5);

	this.shape_152 = new cjs.Shape();
	this.shape_152.graphics.f("#988679").s().p("AgGPaIgW+2IAhAAIAYe6g");
	this.shape_152.setTransform(576.3,434.5);

	this.shape_153 = new cjs.Shape();
	this.shape_153.graphics.f().s("#8B5224").p("AgYjCIADGFIAtgGIgGl2g");
	this.shape_153.setTransform(548.5,445.8);

	this.shape_154 = new cjs.Shape();
	this.shape_154.graphics.f("#988679").s().p("AgXjCIAqAJIAFF2IgtAGg");
	this.shape_154.setTransform(548.5,445.8);

	this.shape_155 = new cjs.Shape();
	this.shape_155.graphics.f().s("#8B5224").p("AgcguIgDBfIA/AGIgDhtg");
	this.shape_155.setTransform(548.3,473.9);

	this.shape_156 = new cjs.Shape();
	this.shape_156.graphics.f("#EA714E").s().p("AgfAxIADhfIA5gIIADBtg");
	this.shape_156.setTransform(548.3,473.9);

	this.shape_157 = new cjs.Shape();
	this.shape_157.graphics.f().s("#8B5224").p("Agxj6IAACUQg1ASgfAvQggAtAAA9QAABMAxA1QAxA1BDAAQBFAAAwg1QAxg1AAhMQAAhFgogyQgpg0hCgHIAAiNg");
	this.shape_157.setTransform(549.6,505.7);

	this.shape_158 = new cjs.Shape();
	this.shape_158.graphics.f("#BADBF5").s().p("Ah0DGQgxg1AAhMQAAg9AggtQAfgvA1gTIAAiTIBEAAIAACNQBCAHApA0QAoAyAABFQAABMgxA1QgwA1hFABQhDgBgxg1g");
	this.shape_158.setTransform(549.6,505.7);

	this.shape_159 = new cjs.Shape();
	this.shape_159.graphics.f().s("#8B5224").p("ACxgnIlkAAQgHAWABAUQAAAVAIAQIFkAAQAGgjABgLQABgUgKgNg");
	this.shape_159.setTransform(632,454.5);

	this.shape_160 = new cjs.Shape();
	this.shape_160.graphics.f("#EA714E").s().p("AixAnQgIgPAAgVQgBgUAHgVIFkAAQAKAMgBAUIgHAtg");
	this.shape_160.setTransform(632,454.5);

	this.shape_161 = new cjs.Shape();
	this.shape_161.graphics.f().s("#8B5224").p("ADYjhQgthDg7g1IAEhmIkPgHIAKB7QgqAlgeAxQgEEFAEG3IGxgIQAJlSgJlOg");
	this.shape_161.setTransform(634.6,500.6);

	this.shape_162 = new cjs.Shape();
	this.shape_162.graphics.f("#BADBF5").s().p("AjZj1QAdgxArglIgJh7IEOAHIgDBmQA6A1AsBDQAKFOgKFSImwAIQgDm3ADkFg");
	this.shape_162.setTransform(634.6,500.6);

	this.shape_163 = new cjs.Shape();
	this.shape_163.graphics.f().s("#8B5224").p("AAYiBQgagFgOAPQgEAEgGAEQgEBwAEAzQAGBRAWgCQAZgBAChaQABgTgGiWg");
	this.shape_163.setTransform(396.1,519.5);

	this.shape_164 = new cjs.Shape();
	this.shape_164.graphics.f("#D9A9B7").s().p("AgaA0QgEgzAEhwQAGgEAEgEQAOgPAaAFQAGCWgBATQgCBagZABIgBAAQgWAAgFhPg");
	this.shape_164.setTransform(396.1,519.5);

	this.shape_165 = new cjs.Shape();
	this.shape_165.graphics.f().s("#8B5224").p("AgYihQgBA3gDCVQACB7AcgCQAdgCgCh7QgHiTABgzQgWgFgZADg");
	this.shape_165.setTransform(396.1,516.2);

	this.shape_166 = new cjs.Shape();
	this.shape_166.graphics.f("#BADBF5").s().p("AgcArIAEjMQAZgDAWAFQgBAzAHCTQACB7gdACIgBAAQgbAAgCh5g");
	this.shape_166.setTransform(396.1,516.2);

	this.shape_167 = new cjs.Shape();
	this.shape_167.graphics.f().s("#8B5224").p("AAYiCQgagDgOANQgEAFgGADQgEBxAEAzQAGBRAWgCQAZgCAChZQABgTgGiXg");
	this.shape_167.setTransform(410.2,518.3);

	this.shape_168 = new cjs.Shape();
	this.shape_168.graphics.f("#1CD5E0").s().p("AgaA0QgEgzAEhxQAGgDAEgFQAOgNAaADQAGCXgBATQgCBZgZACIgBAAQgWAAgFhPg");
	this.shape_168.setTransform(410.2,518.3);

	this.shape_169 = new cjs.Shape();
	this.shape_169.graphics.f().s("#8B5224").p("AgYiiQgBA4gDCVQACB7AbgCQAdgCgBh7QgHiTABg0QgWgEgZACg");
	this.shape_169.setTransform(410.3,515.1);

	this.shape_170 = new cjs.Shape();
	this.shape_170.graphics.f("#BADBF5").s().p("AgcArIAEjNQAZgCAWAEQgBA0AHCTQABB7gdACIAAAAQgbAAgCh5g");
	this.shape_170.setTransform(410.3,515.1);

	this.shape_171 = new cjs.Shape();
	this.shape_171.graphics.f().s("#8B5224").p("AAYiCQgbgDgNANQgFAGgFACQgEBwAEA0QAFBRAXgCQAZgCAChZQABgTgGiXg");
	this.shape_171.setTransform(423.2,518.3);

	this.shape_172 = new cjs.Shape();
	this.shape_172.graphics.f("#F66F24").s().p("AgaA0QgEg0AEhwQAFgCAFgGQANgNAbADQAGCXgBATQgCBZgZACIgBAAQgWAAgFhPg");
	this.shape_172.setTransform(423.2,518.3);

	this.shape_173 = new cjs.Shape();
	this.shape_173.graphics.f().s("#8B5224").p("AgYiiQgBA4gDCVQACB7AcgCQAdgCgCh7QgHiTABg0QgVgEgaACg");
	this.shape_173.setTransform(423.2,515.1);

	this.shape_174 = new cjs.Shape();
	this.shape_174.graphics.f("#BADBF5").s().p("AgcArIAEjNQAagCAVAEQgBA0AHCTQACB7gdACIgBAAQgbAAgCh5g");
	this.shape_174.setTransform(423.2,515.1);

	this.shape_175 = new cjs.Shape();
	this.shape_175.graphics.f().s("#8B5224").p("AjqBwQDyAGDkgKQACiSgKhLQjOAAj5AIQgKBnADByg");
	this.shape_175.setTransform(409,526.3);

	this.shape_176 = new cjs.Shape();
	this.shape_176.graphics.f("#A67C52").s().p("AjqBwQgDhyAKhnQD5gJDOABQAKBLgCCSQiRAGiUAAQhYAAhZgCg");
	this.shape_176.setTransform(409,526.3);

	this.shape_177 = new cjs.Shape();
	this.shape_177.graphics.f().s("#8B5224").p("AjEAxIGIACQACg7gKgpIl0AIQgJAdgDA9g");
	this.shape_177.setTransform(407.7,540.5);

	this.shape_178 = new cjs.Shape();
	this.shape_178.graphics.f("#D9A9B7").s().p("AjEAwQADg8AJgdIF0gIQAKApgCA6g");
	this.shape_178.setTransform(407.7,540.5);

	this.shape_179 = new cjs.Shape();
	this.shape_179.graphics.f().s("#8B5224").p("AjChPQAABUgDBUIGLgDQgBhiAChIQgegGgoADQgjAEggAKQgkALgsgBQgxgBgbgPQgcgPhIAPg");
	this.shape_179.setTransform(349.2,536.3);

	this.shape_180 = new cjs.Shape();
	this.shape_180.graphics.f("#EF9228").s().p("AjChPQBHgPAdAPQAbAPAwABQAtABAkgLQAfgKAkgEQAngDAfAGQgDBIACBiImMADQAEhUAAhUg");
	this.shape_180.setTransform(349.3,536.3);

	this.shape_181 = new cjs.Shape();
	this.shape_181.graphics.f().s("#8B5224").p("AjYjyQDYgNDUAZQgXC/ACEbImLADQAJkLgVjeg");
	this.shape_181.setTransform(349.9,520.5);

	this.shape_182 = new cjs.Shape();
	this.shape_182.graphics.f("#BADBF5").s().p("AjVjyQDXgNDUAZQgWC/ACEbImLADQAJkLgVjeg");
	this.shape_182.setTransform(349.6,520.5);

	this.shape_183 = new cjs.Shape();
	this.shape_183.graphics.f().s("#8B5224").p("AizhLIggCKIGoAMIgMiWg");
	this.shape_183.setTransform(194.5,538.1);

	this.shape_184 = new cjs.Shape();
	this.shape_184.graphics.f("#CE5426").s().p("AjUA/IAhiKIF8AAIAMCWg");
	this.shape_184.setTransform(194.6,538.1);

	this.shape_185 = new cjs.Shape();
	this.shape_185.graphics.f().s("#8B5224").p("AhogxIDSAAIghBjIiOAAg");
	this.shape_185.setTransform(185.3,528.5);

	this.shape_186 = new cjs.Shape();
	this.shape_186.graphics.f("#988679").s().p("AhFAyIgkhiIDTAAIghBig");
	this.shape_186.setTransform(185.3,528.5);

	this.shape_187 = new cjs.Shape();
	this.shape_187.graphics.f().s("#8B5224").p("AhrgYQgBAOADAjIDRAAQAEgfAAgSg");
	this.shape_187.setTransform(257,541);

	this.shape_188 = new cjs.Shape();
	this.shape_188.graphics.f("#988679").s().p("AhpAZQgDgjABgOIDXAAQAAASgEAfg");
	this.shape_188.setTransform(257,541);

	this.shape_189 = new cjs.Shape();
	this.shape_189.graphics.f().s("#8B5224").p("AFAAoIp/AAIAAhPIJ/AAg");
	this.shape_189.setTransform(256.5,479.5);

	this.shape_190 = new cjs.Shape();
	this.shape_190.graphics.f("#988679").s().p("Ak/AnIAAhOIJ/AAIAABOg");
	this.shape_190.setTransform(256.5,479.5);

	this.shape_191 = new cjs.Shape();
	this.shape_191.graphics.f().s("#8B5224").p("AhpBhQgSi8B3gFQBBgCAdA1QAcAygOBcg");
	this.shape_191.setTransform(257,533.8);

	this.shape_192 = new cjs.Shape();
	this.shape_192.graphics.f("#988679").s().p("AhpBhQgSi8B3gFQBBgCAdA1QAcAygOBcg");
	this.shape_192.setTransform(257,533.8);

	this.shape_193 = new cjs.Shape();
	this.shape_193.graphics.f().s("#8B5224").p("AAFA8IgJAAIAAh3IAJAAg");
	this.shape_193.setTransform(257,522.5);

	this.shape_194 = new cjs.Shape();
	this.shape_194.graphics.f("#988679").s().p("AgEA7IAAh1IAIAAIAAB1g");
	this.shape_194.setTransform(257,522.5);

	this.shape_195 = new cjs.Shape();
	this.shape_195.graphics.f().s("#8B5224").p("AAlAAQAAAPgLALQgLALgPAAQgOAAgLgLQgLgLAAgPQAAgOALgLQALgLAOAAQAPAAALALQALALAAAOg");
	this.shape_195.setTransform(247.6,459.3);

	this.shape_196 = new cjs.Shape();
	this.shape_196.graphics.f("#9CCA39").s().p("AgZAaQgLgLAAgPQAAgOALgLQALgLAOAAQAPAAALALQALALAAAOQAAAPgLALQgLALgPAAQgOAAgLgLg");
	this.shape_196.setTransform(247.6,459.3);

	this.shape_197 = new cjs.Shape();
	this.shape_197.graphics.f().s("#8B5224").p("AAPAAQAAAGgFAFQgEAEgGAAQgFAAgEgEQgFgFAAgGQAAgFAFgFQAEgEAFAAQAGAAAEAEQAFAFAAAFg");
	this.shape_197.setTransform(258.7,451);

	this.shape_198 = new cjs.Shape();
	this.shape_198.graphics.f("#9CCA39").s().p("AgJAKQgFgEAAgGQAAgFAFgEQAEgFAFAAQAGAAAEAFQAFAEAAAFQAAAGgFAEQgEAFgGAAQgFAAgEgFg");
	this.shape_198.setTransform(258.7,451);

	this.shape_199 = new cjs.Shape();
	this.shape_199.graphics.f().s("#8B5224").p("AATAAQAAAIgGAFQgFAGgIAAQgGAAgGgGQgFgFAAgIQAAgGAFgGQAGgFAGAAQAIAAAFAFQAGAGAAAGg");
	this.shape_199.setTransform(268.1,448.2);

	this.shape_200 = new cjs.Shape();
	this.shape_200.graphics.f("#9CCA39").s().p("AgMANQgFgFgBgIQABgGAFgGQAGgGAGAAQAIAAAFAGQAGAGgBAGQABAIgGAFQgFAGgIAAQgGAAgGgGg");
	this.shape_200.setTransform(268.1,448.2);

	this.shape_201 = new cjs.Shape();
	this.shape_201.graphics.f().s("#8B5224").p("AAaAAQAAALgIAHQgHAIgLAAQgJAAgIgIQgIgHAAgLQAAgJAIgIQAIgIAJAAQALAAAHAIQAIAIAAAJg");
	this.shape_201.setTransform(269.3,460.2);

	this.shape_202 = new cjs.Shape();
	this.shape_202.graphics.f("#9CCA39").s().p("AgRASQgIgHAAgLQAAgJAIgIQAIgIAJAAQALAAAHAIQAIAIAAAJQAAALgIAHQgHAIgLAAQgJAAgIgIg");
	this.shape_202.setTransform(269.3,460.2);

	this.shape_203 = new cjs.Shape();
	this.shape_203.graphics.f().s("#8B5224").p("AgohrQAqAVAJACQAaAFBUgFQA3gEALAdQAUAygcAyQgdA3g/AVQgbAJgmgQQgpgSgSABQgxAFgogUQgrgWgSguQgRgqAWgkQAXgoA7gKQAagEAiAPg");
	this.shape_203.setTransform(256.3,477.1);

	this.shape_204 = new cjs.Shape();
	this.shape_204.graphics.f("#9CCA39").s().p("AAWBuQgpgSgSABQgxAFgogUQgrgWgSguQgRgqAWgkQAXgoA7gKQAagEAiAPQAqAVAJACQAaAFBUgFQA3gEALAdQAUAygcAyQgdA3g/AVQgKADgLAAQgUAAgYgKg");
	this.shape_204.setTransform(256.3,477.1);

	this.shape_205 = new cjs.Shape();
	this.shape_205.graphics.f().s("#8B5224").p("AgilHIAAKPIBFgGIAAqJg");
	this.shape_205.setTransform(283,513.4);

	this.shape_206 = new cjs.Shape();
	this.shape_206.graphics.f("#988679").s().p("AghlHIBDAAIAAKJIhDAGg");
	this.shape_206.setTransform(283,513.4);

	this.shape_207 = new cjs.Shape();
	this.shape_207.graphics.f().s("#8B5224").p("AgmlJIASKTIA8AAIgQqTg");
	this.shape_207.setTransform(231.8,512.5);

	this.shape_208 = new cjs.Shape();
	this.shape_208.graphics.f("#988679").s().p("AgUFJIgSqRIA+AAIAQKRg");
	this.shape_208.setTransform(231.9,512.5);

	this.shape_209 = new cjs.Shape();
	this.shape_209.graphics.f().s("#8B5224").p("AAiA6Qgkgtg3gsQAIgQARgJQA2AoAkAwQgHASgRAIg");
	this.shape_209.setTransform(299.3,418);

	this.shape_210 = new cjs.Shape();
	this.shape_210.graphics.f("#BADBF5").s().p("Ag5gfQAIgQAQgJQA2AoAlAwQgHARgRAIQgkgtg3grg");
	this.shape_210.setTransform(299.4,418);

	this.shape_211 = new cjs.Shape();
	this.shape_211.graphics.f().s("#8B5224").p("AE2mHIkAD+QhAglhMAAQh1AAhUBTQhTBTAAB0QAAB2BTBTQBUBTB1AAQB0AABThTQBThTAAh2QAAhohChMIDwkHQgWgjgmgVg");
	this.shape_211.setTransform(265.1,454.5);

	this.shape_212 = new cjs.Shape();
	this.shape_212.graphics.f("#BADBF5").s().p("AkeE1QhThTAAh3QAAhzBThTQBThUB2ABQBMgBA/AmIEAj+QAmAVAWAjIjvEGQBCBNAABnQAAB3hTBTQhUBThzAAQh2AAhThTg");
	this.shape_212.setTransform(265.1,454.5);

	this.shape_213 = new cjs.Shape();
	this.shape_213.graphics.f().s("#8B5224").p("AgugJIBcAAIgDATIhZAAg");
	this.shape_213.setTransform(566.3,363.5);

	this.shape_214 = new cjs.Shape();
	this.shape_214.graphics.f("#988679").s().p("AguAKIAAgSIBdAAIgEASg");
	this.shape_214.setTransform(566.2,363.5);

	this.shape_215 = new cjs.Shape();
	this.shape_215.graphics.f().s("#8B5224").p("AgVh/IAAEAIApAAIACkBg");
	this.shape_215.setTransform(547.8,408.6);

	this.shape_216 = new cjs.Shape();
	this.shape_216.graphics.f("#988679").s().p("AgVCBIAAkAIArgBIgCEBg");
	this.shape_216.setTransform(547.8,408.6);

	this.shape_217 = new cjs.Shape();
	this.shape_217.graphics.f().s("#8B5224").p("AgIAyIgmg2IA2gsIAmA/g");
	this.shape_217.setTransform(618.3,323.6);

	this.shape_218 = new cjs.Shape();
	this.shape_218.graphics.f("#BADBF5").s().p("AgtgFIA2grIAlA/Ig2Ajg");
	this.shape_218.setTransform(618.3,323.7);

	this.shape_219 = new cjs.Shape();
	this.shape_219.graphics.f().s("#8B5224").p("AgogxIAABoIBPgKIABhjg");
	this.shape_219.setTransform(762.6,432.4);

	this.shape_220 = new cjs.Shape();
	this.shape_220.graphics.f("#AC8A79").s().p("AgngxIBQgFIgCBjIhOAKg");
	this.shape_220.setTransform(762.6,432.4);

	this.shape_221 = new cjs.Shape();
	this.shape_221.graphics.f().s("#8B5224").p("AlEgRIKOgEIgGAsIqNgDg");
	this.shape_221.setTransform(493.2,616.2);

	this.shape_222 = new cjs.Shape();
	this.shape_222.graphics.f("#988679").s().p("AlJAUIAFglIKOgFIgGAsg");
	this.shape_222.setTransform(493.2,616.2);

	this.shape_223 = new cjs.Shape();
	this.shape_223.graphics.f().s("#8B5224").p("AFDAXIqMgDIAFglIKNgEg");
	this.shape_223.setTransform(494.4,591.5);

	this.shape_224 = new cjs.Shape();
	this.shape_224.graphics.f("#988679").s().p("AlJATIAFgkIKNgEIgFAsg");
	this.shape_224.setTransform(494.4,591.5);

	this.shape_225 = new cjs.Shape();
	this.shape_225.graphics.f().s("#8B5224").p("AFEAXIqNgDIAFgkIKOgFg");
	this.shape_225.setTransform(493.2,564.4);

	this.shape_226 = new cjs.Shape();
	this.shape_226.graphics.f("#988679").s().p("AlJAUIAFgkIKOgGIgGAsg");
	this.shape_226.setTransform(493.2,564.5);

	this.shape_227 = new cjs.Shape();
	this.shape_227.graphics.f().s("#8B5224").p("AFDAXIqMgDIAFglIKNgEg");
	this.shape_227.setTransform(494.4,525.6);

	this.shape_228 = new cjs.Shape();
	this.shape_228.graphics.f("#988679").s().p("AlJAUIAFglIKNgFIgFAsg");
	this.shape_228.setTransform(494.4,525.7);

	this.shape_229 = new cjs.Shape();
	this.shape_229.graphics.f().s("#8B5224").p("AFDAXIqMgDIAFgkIKNgFg");
	this.shape_229.setTransform(496.7,500.9);

	this.shape_230 = new cjs.Shape();
	this.shape_230.graphics.f("#988679").s().p("AlJATIAFgkIKOgEIgGAsg");
	this.shape_230.setTransform(496.7,501);

	this.shape_231 = new cjs.Shape();
	this.shape_231.graphics.f().s("#8B5224").p("AFEAXIqNgDIAFglIKOgEg");
	this.shape_231.setTransform(495.5,477.4);

	this.shape_232 = new cjs.Shape();
	this.shape_232.graphics.f("#988679").s().p("AlJATIAFgkIKOgFIgGAtg");
	this.shape_232.setTransform(495.5,477.5);

	this.shape_233 = new cjs.Shape();
	this.shape_233.graphics.f().s("#8B5224").p("AFEAXIqNgDIAFgkIKOgFg");
	this.shape_233.setTransform(493.2,455.1);

	this.shape_234 = new cjs.Shape();
	this.shape_234.graphics.f("#988679").s().p("AlJAUIAFgkIKOgGIgGAsg");
	this.shape_234.setTransform(493.2,455.1);

	this.shape_235 = new cjs.Shape();
	this.shape_235.graphics.f().s("#8B5224").p("AFEAWIqNgDIAFgkIKOgEg");
	this.shape_235.setTransform(490.8,435.1);

	this.shape_236 = new cjs.Shape();
	this.shape_236.graphics.f("#988679").s().p("AlJATIAFgkIKOgEIgGArg");
	this.shape_236.setTransform(490.8,435.1);

	this.shape_237 = new cjs.Shape();
	this.shape_237.graphics.f().s("#8B5224").p("AignOQA6ADAqATQCGA8hIDFQg6CpgKAkQgmCPAgBIQAWAyBiAPQA5AIARAFQAmALARAXQAOAUAMAxQAHAYADAVIgsgDQAGgLABgSQABgjgegcQgcgchYgKQhVgJgkglQg7g9AlikQAWheAmhRQA0hzgLhOQgSh/i4ALIAEgkg");
	this.shape_237.setTransform(678.3,441.3);

	this.shape_238 = new cjs.Shape();
	this.shape_238.graphics.f("#C59C91").s().p("ACpHMQAHgLAAgSQABgjgdgcQgdgchYgKQhVgJgkglQg7g9AmikQAVheAmhRQA0hzgLhOQgRh/i5ALIAEgkIAxgBQA6ADAqATQCGA8hIDFQg6CpgJAkQgmCPAfBIQAWAyBiAPQA6AIARAFQAmALAQAXQAOAUANAxQAGAYAEAVg");
	this.shape_238.setTransform(678.3,441.3);

	this.shape_239 = new cjs.Shape();
	this.shape_239.graphics.f().s("#8B5224").p("AhLhGIADCZICUgDIgGiig");
	this.shape_239.setTransform(546.9,345.1);

	this.shape_240 = new cjs.Shape();
	this.shape_240.graphics.f("#EA714E").s().p("AhLhGICRgMIAGCiIiUADg");
	this.shape_240.setTransform(546.9,345.1);

	this.shape_241 = new cjs.Shape();
	this.shape_241.graphics.f().s("#8B5224").p("Al/C5QgGg5ALhFQAXiJBXhAQB4haCJAAQCGgBBhBVQBRBFAyBrQAZA3AJAoIg1AbQgMgrgYg1Qgxhog+gzQhLg/h5gCQiEgDhjBKQhWBAgKCGQgFBEANA3g");
	this.shape_241.setTransform(585.3,319.8);

	this.shape_242 = new cjs.Shape();
	this.shape_242.graphics.f("#D38AC5").s().p("Al/C9QgGg5AMhFQAXiJBWhAQB4haCKAAQCFgBBiBVQBRBFAyBrQAZA3AJAoIg1AbQgMgrgZg1Qgxhog9gzQhMg/h4gCQiEgDhjBKQhXBAgJCGQgFBEAMA3g");
	this.shape_242.setTransform(585.3,319.4);

	this.shape_243 = new cjs.Shape();
	this.shape_243.graphics.f().s("#8B5224").p("AG3ijIuLAAIgGD+IimAhIAAEbIB/AIIgCixILYgGIAICsIGkAFIgmspIjVgOgAFig5IgCCqIrSALIAAiXg");
	this.shape_243.setTransform(712.6,592.9);

	this.shape_244 = new cjs.Shape();
	this.shape_244.graphics.f("#F46B25").s().p("AqAGXIAAkbICmghIAGj+IOLAAIgxj7IDVAOIAmMpImkgFIgIisIrYAGIACCxgAlygbIAACXILSgLIACiqg");
	this.shape_244.setTransform(712.6,592.9);

	this.shape_245 = new cjs.Shape();
	this.shape_245.graphics.f().s("#8B5224").p("AAKmZIC3AKIA2MpInoAAIgFjcICIAEIgTkWICRgFg");
	this.shape_245.setTransform(684.4,591.4);

	this.shape_246 = new cjs.Shape();
	this.shape_246.graphics.f("#9F4207").s().p("AjxGaIgFjcICIAEIgTkWICRgFIgGlAIC3AJIA2Mqg");
	this.shape_246.setTransform(684.4,591.5);

	this.shape_247 = new cjs.Shape();
	this.shape_247.graphics.f("#8B5224").s().p("AgOAnQgCgiABgpQARgEANAGQACAgAAAoIgcABg");
	this.shape_247.setTransform(192.4,326.5);

	this.shape_248 = new cjs.Shape();
	this.shape_248.graphics.f("#8B5224").s().p("AgNgeQANgCALAAIAFABIgBA+IgeACg");
	this.shape_248.setTransform(190.1,276);

	this.shape_249 = new cjs.Shape();
	this.shape_249.graphics.f("#8B5224").s().p("Ag0A6IBah7IAPAIIhaB7g");
	this.shape_249.setTransform(196,295.3);

	this.shape_250 = new cjs.Shape();
	this.shape_250.graphics.f("#8B5224").s().p("AgzAVIACgpIBhgFQAEAZAAAVIAAAFg");
	this.shape_250.setTransform(214.9,299.5);

	this.shape_251 = new cjs.Shape();
	this.shape_251.graphics.f("#8B5224").s().p("AgvgMIAAgNIBdAFIACApIhcAFQgDgUAAgSg");
	this.shape_251.setTransform(167.2,303);

	this.shape_252 = new cjs.Shape();
	this.shape_252.graphics.f("#8B5224").s().p("AhYg+IAOgKICjCCQgIANgQACg");
	this.shape_252.setTransform(198.9,309.4);

	this.shape_253 = new cjs.Shape();
	this.shape_253.graphics.f("#8B5224").s().p("AgbDpQgNgMAAgRQAAgMAHgKQAGgKALgFIgEmaQATgDAQAHIgGGTQAOAEAJALQAJALgBAOQAAARgMAMQgMAMgQAAQgPAAgMgMg");
	this.shape_253.setTransform(249.2,298.4);

	this.shape_254 = new cjs.Shape();
	this.shape_254.graphics.f().s("#8B5224").p("ABZAHQACiugLiDQhigTg5AZQgQE/AEEPQAqAKAvgBQAZgBA4gGQAEjDAChig");
	this.shape_254.setTransform(249.2,297.1);

	this.shape_255 = new cjs.Shape();
	this.shape_255.graphics.f("#D0C0A8").s().p("AhXEqQgEkPAQk/QA5gZBiATQALCDgCCuIgGElQg4AGgZABIgHAAQgsAAgmgJg");
	this.shape_255.setTransform(249.2,297.1);

	this.shape_256 = new cjs.Shape();
	this.shape_256.graphics.f().s("#8B5224").ss(0.5).p("AiLArQCRAHCJgVQAHgegFgqQiRAOiLgIQgPAxAPAfg");
	this.shape_256.setTransform(243.5,339.6);

	this.shape_257 = new cjs.Shape();
	this.shape_257.graphics.f("#FD6930").s().p("AiLArQgPgfAPgyQCLAICRgOQAFAqgHAfQhnAQhqAAQgkAAglgCg");
	this.shape_257.setTransform(243.5,339.6);

	this.shape_258 = new cjs.Shape();
	this.shape_258.graphics.f("#8B5224").s().p("AgQASQgIgIAAgKQAAgJAIgHQAGgIAKAAQAKAAAIAIQAHAHAAAJQAAAKgHAIQgIAHgKAAQgKAAgGgHg");
	this.shape_258.setTransform(191.4,302);

	this.shape_259 = new cjs.Shape();
	this.shape_259.graphics.f().s("#8B5224").p("AAAkgQB3AABVBVQBVBVAAB2QAAB3hVBVQhVBVh3AAQh2AAhVhVQhUhVAAh3QAAh2BUhVQBVhVB2AAg");
	this.shape_259.setTransform(191.2,301.6);

	this.shape_260 = new cjs.Shape();
	this.shape_260.graphics.f("#D0C0A8").s().p("AjLDMQhVhVAAh3QAAh2BVhVQBVhVB2AAQB3AABVBVQBVBVAAB2QAAB3hVBVQhVBVh3AAQh2AAhVhVg");
	this.shape_260.setTransform(191.2,301.6);

	this.shape_261 = new cjs.Shape();
	this.shape_261.graphics.f().s("#8B5224").p("AAAlnQCVAABqBpQBpBqAACUQAACVhpBqQhqBpiVAAQiUAAhqhpQhphqAAiVQAAiUBphqQBqhpCUAAg");
	this.shape_261.setTransform(191.2,301.6);

	this.shape_262 = new cjs.Shape();
	this.shape_262.graphics.f("#8198E3").s().p("Aj+D+QhphpAAiVQAAiTBphqQBqhqCUAAQCVAABqBqQBpBpAACUQAACVhpBpQhqBqiVAAQiUAAhqhqg");
	this.shape_262.setTransform(191.2,301.6);

	this.shape_263 = new cjs.Shape();
	this.shape_263.graphics.f().s("#8B5224").p("ApYHDQJdArJXgpQAmmugjnqQp6gNpIAYQgbH/AmGMg");
	this.shape_263.setTransform(205,303.7);

	this.shape_264 = new cjs.Shape();
	this.shape_264.graphics.f("#F5B05C").s().p("ApYHDQgmmMAbn/QJIgYJ6ANQAjHqgmGuQkjAUkkAAQk1AAk4gWg");
	this.shape_264.setTransform(205,303.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_264},{t:this.shape_263},{t:this.shape_262},{t:this.shape_261},{t:this.shape_260},{t:this.shape_259},{t:this.shape_258},{t:this.shape_257},{t:this.shape_256},{t:this.shape_255},{t:this.shape_254},{t:this.shape_253},{t:this.shape_252},{t:this.shape_251},{t:this.shape_250},{t:this.shape_249},{t:this.shape_248},{t:this.shape_247},{t:this.shape_246},{t:this.shape_245},{t:this.shape_244},{t:this.shape_243},{t:this.shape_242},{t:this.shape_241},{t:this.shape_240},{t:this.shape_239},{t:this.shape_238},{t:this.shape_237},{t:this.shape_236},{t:this.shape_235},{t:this.shape_234},{t:this.shape_233},{t:this.shape_232},{t:this.shape_231},{t:this.shape_230},{t:this.shape_229},{t:this.shape_228},{t:this.shape_227},{t:this.shape_226},{t:this.shape_225},{t:this.shape_224},{t:this.shape_223},{t:this.shape_222},{t:this.shape_221},{t:this.shape_220},{t:this.shape_219},{t:this.shape_218},{t:this.shape_217},{t:this.shape_216},{t:this.shape_215},{t:this.shape_214},{t:this.shape_213},{t:this.shape_212},{t:this.shape_211},{t:this.shape_210},{t:this.shape_209},{t:this.shape_208},{t:this.shape_207},{t:this.shape_206},{t:this.shape_205},{t:this.shape_204},{t:this.shape_203},{t:this.shape_202},{t:this.shape_201},{t:this.shape_200},{t:this.shape_199},{t:this.shape_198},{t:this.shape_197},{t:this.shape_196},{t:this.shape_195},{t:this.shape_194},{t:this.shape_193},{t:this.shape_192},{t:this.shape_191},{t:this.shape_190},{t:this.shape_189},{t:this.shape_188},{t:this.shape_187},{t:this.shape_186},{t:this.shape_185},{t:this.shape_184},{t:this.shape_183},{t:this.shape_182},{t:this.shape_181},{t:this.shape_180},{t:this.shape_179},{t:this.shape_178},{t:this.shape_177},{t:this.shape_176},{t:this.shape_175},{t:this.shape_174},{t:this.shape_173},{t:this.shape_172},{t:this.shape_171},{t:this.shape_170},{t:this.shape_169},{t:this.shape_168},{t:this.shape_167},{t:this.shape_166},{t:this.shape_165},{t:this.shape_164},{t:this.shape_163},{t:this.shape_162},{t:this.shape_161},{t:this.shape_160},{t:this.shape_159},{t:this.shape_158},{t:this.shape_157},{t:this.shape_156},{t:this.shape_155},{t:this.shape_154},{t:this.shape_153},{t:this.shape_152},{t:this.shape_151},{t:this.shape_150},{t:this.shape_149},{t:this.shape_148},{t:this.shape_147},{t:this.shape_146},{t:this.shape_145},{t:this.shape_144},{t:this.shape_143},{t:this.shape_142},{t:this.shape_141},{t:this.shape_140},{t:this.shape_139},{t:this.shape_138},{t:this.shape_137},{t:this.shape_136},{t:this.shape_135},{t:this.shape_134},{t:this.shape_133},{t:this.shape_132},{t:this.shape_131},{t:this.shape_130},{t:this.shape_129},{t:this.shape_128},{t:this.shape_127},{t:this.shape_126},{t:this.shape_125},{t:this.shape_124},{t:this.shape_123},{t:this.shape_122},{t:this.shape_121},{t:this.shape_120},{t:this.shape_119},{t:this.shape_118},{t:this.shape_117},{t:this.shape_116},{t:this.shape_115},{t:this.shape_114},{t:this.shape_113},{t:this.shape_112},{t:this.shape_111},{t:this.shape_110},{t:this.shape_109},{t:this.shape_108},{t:this.shape_107},{t:this.shape_106},{t:this.shape_105},{t:this.shape_104},{t:this.shape_103},{t:this.shape_102},{t:this.shape_101},{t:this.shape_100},{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14}]}).wait(200));

	// pouring
	this.instance_2 = new lib.pouring();
	this.instance_2.setTransform(727,447.3,1,1,0,0,0,65.5,98.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_2}]}).wait(200));

	// writing
	this.instance_3 = new lib.writing();
	this.instance_3.setTransform(497,341.8,1,1,0,0,0,56,95.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_3}]}).wait(200));

	// lookingup
	this.instance_4 = new lib.lookingup();
	this.instance_4.setTransform(198.4,523,1,1,0,0,0,52.9,115.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_4}]}).wait(200));

	// microscoping
	this.instance_5 = new lib.microscoping();
	this.instance_5.setTransform(80.9,523.9,1,1,0,0,0,52.6,115.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_5}]}).wait(200));

	// microscope
	this.instance_6 = new lib.microscope();
	this.instance_6.setTransform(126.6,507.3,1,1,0,0,0,22.9,39.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_6}]}).wait(200));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(-159.3,168.4,1031.3,484.8);
p.frameBounds = [rect, new cjs.Rectangle(-154.4,168.4,1026.4,486.3), new cjs.Rectangle(-148.9,168.4,1020.9,486.3), new cjs.Rectangle(-143.4,168.4,1015.5,486.3), new cjs.Rectangle(-138,168.4,1010,486.3), new cjs.Rectangle(-132.5,168.4,1004.6,486.3), new cjs.Rectangle(-127.1,168.4,999.1,486.3), new cjs.Rectangle(-121.7,168.4,993.7,486.3), new cjs.Rectangle(-116.2,168.4,988.2,486.3), new cjs.Rectangle(-110.8,168.4,982.8,486.3), new cjs.Rectangle(-105.3,168.4,977.3,486.3), new cjs.Rectangle(-99.8,168.4,971.8,486.3), new cjs.Rectangle(-94.4,168.4,966.4,486.3), new cjs.Rectangle(-88.9,168.4,960.9,486.3), new cjs.Rectangle(-83.4,168.4,955.4,486.3), new cjs.Rectangle(-77.9,168.4,950,486.3), new cjs.Rectangle(-72.5,168.4,944.5,486.3), new cjs.Rectangle(-67,168.4,939.1,486.3), new cjs.Rectangle(-61.6,168.4,933.6,486.3), new cjs.Rectangle(-56.2,168.4,928.2,486.3), new cjs.Rectangle(-50.7,168.4,922.7,486.3), new cjs.Rectangle(-45.2,168.4,917.2,486.3), new cjs.Rectangle(-39.8,168.4,911.8,486.3), new cjs.Rectangle(-34.3,168.4,906.3,486.3), new cjs.Rectangle(-28.8,168.4,900.9,486.3), new cjs.Rectangle(-23.4,168.4,895.4,486.3), new cjs.Rectangle(-18,168.4,890,486.3), new cjs.Rectangle(-12.5,168.4,884.5,486.3), new cjs.Rectangle(-7,168.4,879,486.3), new cjs.Rectangle(-1.5,168.4,873.6,486.3), new cjs.Rectangle(3.8,168.4,868.1,486.3), new cjs.Rectangle(9.3,168.4,862.7,486.3), new cjs.Rectangle(14.7,168.4,857.2,486.3), new cjs.Rectangle(20.2,168.4,851.7,486.3), new cjs.Rectangle(25.6,168.4,846.3,486.3), rect=new cjs.Rectangle(28.3,168.4,843.6,486.3), rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, new cjs.Rectangle(28.3,168.4,846.2,486.3), new cjs.Rectangle(28.3,168.4,851.7,486.3), new cjs.Rectangle(28.3,168.4,857.1,486.3), new cjs.Rectangle(28.3,168.4,862.6,486.3), new cjs.Rectangle(28.3,168.4,868,486.3), new cjs.Rectangle(28.3,168.4,873.5,486.3), new cjs.Rectangle(28.3,168.4,879,486.3), new cjs.Rectangle(28.3,168.4,884.4,486.3), new cjs.Rectangle(28.3,168.4,889.9,486.3), new cjs.Rectangle(28.3,168.4,895.3,486.3), new cjs.Rectangle(28.3,168.4,900.8,486.3), new cjs.Rectangle(28.3,168.4,906.3,486.3), new cjs.Rectangle(28.3,168.4,911.7,486.3), new cjs.Rectangle(28.3,168.4,917.2,486.3), new cjs.Rectangle(28.3,168.4,922.6,486.3), new cjs.Rectangle(28.3,168.4,928.1,486.3), new cjs.Rectangle(28.3,168.4,933.5,486.3), new cjs.Rectangle(28.3,168.4,939,486.3), new cjs.Rectangle(28.3,168.4,944.5,486.3), new cjs.Rectangle(28.3,168.4,949.9,486.3), new cjs.Rectangle(28.3,168.4,955.4,486.3), new cjs.Rectangle(28.3,168.4,960.8,486.3), new cjs.Rectangle(28.3,168.4,966.3,486.3), new cjs.Rectangle(28.3,168.4,971.7,486.3), new cjs.Rectangle(28.3,168.4,977.2,486.3), new cjs.Rectangle(28.3,168.4,982.7,486.3), new cjs.Rectangle(28.3,168.4,988.1,486.3), new cjs.Rectangle(28.3,168.4,993.6,486.3), new cjs.Rectangle(28.3,168.4,999,486.3), new cjs.Rectangle(28.3,168.4,1004.5,486.3), new cjs.Rectangle(28.3,168.4,1010,486.3), new cjs.Rectangle(28.3,168.4,1015.4,486.3), new cjs.Rectangle(28.3,168.4,1020.9,486.3), new cjs.Rectangle(28.3,168.4,1026.3,486.3), new cjs.Rectangle(28.3,168.4,1031.8,486.3), new cjs.Rectangle(28.3,168.4,1037.3,486.3), new cjs.Rectangle(28.3,168.4,1042.7,486.3), new cjs.Rectangle(28.3,168.4,1047.5,484.8)];


// symbols:
(lib.Tween13 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AjyDWQDIjSBFlTIDXCIQhVC/g9BmQhVCRhmBjQg4gNgigYQgvghgOg2g");
	this.shape.setTransform(-8.4,-6.6,1,1,-59.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#0E7360").s().p("Ai0EsQgvghgOg2QDIjSBFlTIDXCIQhVC/g9BmQhWCRhlBjQg4gNgigYg");
	this.shape_1.setTransform(-8.3,-6.4,1,1,-59.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("ABJglIh7h9Qg7AsgyA9QAyBjBCA2QAzArBNAWQAmALAWgZQAUgWgFgiQgDgSgMgMQgOgMgcgHQgYgHgHgaQgHgVAIgZg");
	this.shape_2.setTransform(15.9,26.5,1,1,-59.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#6D370A").s().p("ABUCgQhNgVgzgsQhBg1gyhkQAyg9A7grIB6B9QgIAZAHAVQAIAaAYAGQAcAIANAMQANALACASQAFAjgUAWQgPAQgXAAQgKAAgMgDg");
	this.shape_3.setTransform(16,26.5,1,1,-59.9);

	this.addChild(this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = rect = new cjs.Rectangle(-36.2,-37.6,72.5,75.3);
p.frameBounds = [rect];


(lib.Tween12 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AjyDWQDIjSBFlTIDXCIQhVC/g9BmQhVCRhmBjQg4gNgigYQgvghgOg2g");
	this.shape.setTransform(4.2,-10.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#0E7360").s().p("Ai0EsQgvghgOg2QDIjSBFlTIDXCIQhVC/g9BmQhWCRhlBjQg4gNgigYg");
	this.shape_1.setTransform(4.1,-10.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("ABJglIh7h9Qg7AsgyA9QAyBjBCA2QAzArBNAWQAmALAWgZQAUgWgFgiQgDgSgMgMQgOgMgcgHQgYgHgHgaQgHgVAIgZg");
	this.shape_2.setTransform(-12.3,27.4);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#6D370A").s().p("ABUCgQhNgVgzgsQhBg1gyhkQAyg9A7grIB6B9QgIAZAHAVQAIAaAYAGQAcAIANAMQANALACASQAFAjgUAWQgPAQgXAAQgKAAgMgDg");
	this.shape_3.setTransform(-12.2,27.5);

	this.addChild(this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = rect = new cjs.Rectangle(-28.3,-43.8,56.8,87.8);
p.frameBounds = [rect];


(lib.Tween9 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AAeg1QgIASABAbQABAfAAADQgDAPgLAIQgJAGgFgBQgkgEARgmQAPgfAmgig");

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#00B4A4").s().p("AgFA2QgkgEARgmQAPgfAngiQgIASABAbIAAAiQgDAPgLAIQgHAFgEAAIgDAAg");

	this.addChild(this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = rect = new cjs.Rectangle(-3,-5.4,6.1,11);
p.frameBounds = [rect];


(lib.Tween8 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8B5224").s().p("AgCAUQgFgBgDgGQgDgHABgHQABgIAFgGQAFgFAEABQAFABADAGQADAHgBAGQgBAJgFAFQgFAFgCAAIgCAAg");
	this.shape.setTransform(7.7,-0.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#8B5224").s().p("AgJAQQgEgIAAgIQAAgIAEgHQAEgGAFAAQAGAAAEAGQAEAHAAAIQAAAIgEAIQgEAGgGAAQgFAAgEgGg");
	this.shape_1.setTransform(-7.4,0);

	this.addChild(this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = rect = new cjs.Rectangle(-8.9,-2.2,18.1,4.5);
p.frameBounds = [rect];


(lib.Tween7 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AgPARIAfgh");
	this.shape.setTransform(19.3,5.8);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#8B5224").p("AgaARIA1gh");
	this.shape_1.setTransform(17.2,1.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("AgnADIBPgF");
	this.shape_2.setTransform(14,-2.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#8B5224").p("AhWhAQhYAigGAlQgIA2AaAiQAeAnBAgFQA2gFBEgxQBFgwAEAAQAXAAAPgFQAVgGgFgOQgEgJgSgFQgWgHgHgGQgXghgTgXQgkgtgfgCQgKgBgKAHQgKAIAEAMQACAGgZAKQgkANgWAJg");
	this.shape_3.setTransform(-2.6,13.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#E3DDF2").s().p("AiiBfQgagiAIg2QAGglBYgiIA6gWQAZgKgCgGQgEgMAKgIQAKgHAKABQAfACAkAtQATAXAXAhQAHAGAWAHQASAFAEAJQAFAOgVAGQgPAFgXAAQgEAAhFAwQhEAxg2AFIgOAAQg1AAgbgig");
	this.shape_4.setTransform(-2.6,13.1);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#8B5224").p("AgBBdIhlhUQABgVAIgYQARgwAlgHQAlgGAgAEQARACAJADIAdBDQAaBFgLAXQgLAXgvABg");
	this.shape_5.setTransform(10.9,1.7);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#F4B4A2").s().p("AgBBdIhlhUQABgVAIgYQARgwAlgHQAlgGAgAEQARACAJADIAdBDQAaBFgLAXQgLAXgvABg");
	this.shape_6.setTransform(10.9,1.7);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#8B5224").p("Ah1h8IgfAgID8DJIAsAPIgNgog");
	this.shape_7.setTransform(9,-6.3);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#489C26").s().p("ABpBtIj9jIIAfghID8DQIAOApg");
	this.shape_8.setTransform(9,-6.4);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#8B5224").p("AAegPQAFAKgGAJQgFALgNAHQgLAGgMgBQgMgCgFgKQgFgJAFgJQAGgLAMgHQALgHAMACQANACAFAJg");
	this.shape_9.setTransform(10.8,-7.4);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#F4B4A2").s().p("AgMAbQgMgCgFgKQgFgJAFgJQAGgLAMgHQALgHAMACQANACAFAJQAFAKgGAJQgFALgNAHQgKAFgIAAIgFAAg");
	this.shape_10.setTransform(10.8,-7.4);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#8B5224").p("AiLB3QARAxAQAhQASAkAJAAQAdAAAogNQA1gRAIgdQAKg8AIglQAOhFAUgWQAjgpAChGQAChUhGgaQgUgIgdAEQgzAegsA4QgvA8gIA5QgHAwgFBng");
	this.shape_11.setTransform(-9.7,-2.2);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#E3DDF2").s().p("AhqDJQgQghgRgxQAFhnAHgwQAIg5Avg8QAsg4AzgeQAdgEAUAIQBGAagCBUQgCBGgjApQgUAWgOBFIgSBhQgIAdg1ARQgoANgdAAQgJAAgSgkg");
	this.shape_12.setTransform(-9.7,-2.2);

	this.addChild(this.shape_12,this.shape_11,this.shape_10,this.shape_9,this.shape_8,this.shape_7,this.shape_6,this.shape_5,this.shape_4,this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = rect = new cjs.Rectangle(-23.8,-26,47.8,52.2);
p.frameBounds = [rect];


(lib.Tween6 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8B5224").s().p("AgFALQgCgEAAgHQAAgGACgEQADgGACAAQADAAADAGQACAEAAAGQAAAHgCAEQgDAGgDAAQgCAAgDgGg");

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = rect = new cjs.Rectangle(-0.8,-1.6,1.7,3.4);
p.frameBounds = [rect];


(lib.Tween5 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AAWAeIgqg7");
	this.shape.setTransform(-4.2,5.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#8B5224").p("AAXAmIgthL");
	this.shape_1.setTransform(-1,2.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("AAQAwIgghf");
	this.shape_2.setTransform(1.9,0.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#8B5224").p("ABfgWIACAnQgCApgPACIgXAEIgwAXQgTALgCADQgMAKglg3Igig4QALgcATgbQAng2AoAJQArAIAXAkQAMASADAQg");
	this.shape_3.setTransform(-2,-1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#F4B4A2").s().p("Ag9A4Igig4QAKgcAUgbQAmg2ApAJQAqAIAYAkQAMASADAQIABAnQgBApgPACIgXAEIgwAXQgTALgCADQgBAAAAAAQgBABgBAAQAAAAgBAAQAAAAgBAAQgNAAgfgug");
	this.shape_4.setTransform(-2,-1);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#8B5224").p("AgSh8QgWCCgDAlQgGBKAYAMQAZAOARhUQAKguARiPg");
	this.shape_5.setTransform(0.1,11.6);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#A9D94A").s().p("AgZCBQgYgMAGhKQADglAXiCIA+gGQgSCPgKAuQgPBIgUAAQgDAAgEgCg");
	this.shape_6.setTransform(0.1,11.6);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#8B5224").p("AgKj2QAABPgmDmQgcCmAhAQQAjASAXi5QAjkGALglQgLgLgVgHQgVgHgSAAg");
	this.shape_7.setTransform(1.9,0);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#BADBF5").s().p("AgrD1QgggQAbimQAnjmgBhPQATAAAVAHQAUAHALALQgKAlgkEGQgUCpggAAQgDAAgDgCg");
	this.shape_8.setTransform(1.9,0);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#8B5224").p("AAlAAQAAALgLAIQgLAJgPAAQgOAAgLgJQgLgIAAgLQAAgKALgJQALgIAOAAQAPAAALAIQALAJAAAKg");
	this.shape_9.setTransform(8,-2.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#F4B4A2").s().p("AgZATQgLgIAAgLQAAgKALgJQALgIAOAAQAPAAALAIQALAJAAAKQAAALgLAIQgLAJgPAAQgOAAgLgJg");
	this.shape_10.setTransform(8,-2.5);

	this.addChild(this.shape_10,this.shape_9,this.shape_8,this.shape_7,this.shape_6,this.shape_5,this.shape_4,this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = rect = new cjs.Rectangle(-11.7,-24.7,23.6,49.6);
p.frameBounds = [rect];


(lib.Tween4 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AAGAdQANAIAGAIQAcgYARgZQgmgpgmgWQgkAYgbAWQgDAlABAtQAbAGAiACQgBgGgDgaQgJgDgHgFQAAgNACgSQAYgBAUADQgCANgIAQg");
	this.shape.setTransform(6.6,13.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#988679").s().p("AhGA8QgBgtADglQAbgWAkgXQAmAVAmAqQgRAYgcAZQgGgIgNgIQAIgQACgNQgUgEgYACQgCARAAAOQAHAEAJAEQADAaABAFQgigBgbgHg");
	this.shape_1.setTransform(6.5,13.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("AA4heQhKAAhZAaQATBWAiBMQBYgUBJgXQgUhQgfhBg");
	this.shape_2.setTransform(-2.5,0.1);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#988679").s().p("AhqhEQBYgZBKgBQAgBBAUBQQhKAYhXATQgjhMgShWg");
	this.shape_3.setTransform(-2.5,0.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#8B5224").p("AAIhKQgnANgbAUQAYA2AHAoIAEAWIBSgQQgShDghhCg");
	this.shape_4.setTransform(-7.5,-12.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#988679").s().p("AgbA1QgHgogYg1QAbgVAngNQAhBCASBDIhSAQg");
	this.shape_5.setTransform(-7.5,-13);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#8B5224").p("AArAIQgIgTgRgXIg8AeQAQAXAUARg");
	this.shape_6.setTransform(1.3,7.5);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#988679").s().p("AgqgEIA8gfQARAYAIASIgxAcQgUgQgQgXg");
	this.shape_7.setTransform(1.4,7.6);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#8B5224").p("ABUBfIhLApIhcj0IA+gcg");
	this.shape_8.setTransform(-4.6,-6.4);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#988679").s().p("AhThsIA+gbIBpDmIhLApg");
	this.shape_9.setTransform(-4.6,-6.4);

	this.addChild(this.shape_9,this.shape_8,this.shape_7,this.shape_6,this.shape_5,this.shape_4,this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = rect = new cjs.Rectangle(-13.5,-20.5,27.3,41.2);
p.frameBounds = [rect];


(lib.Tween3 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AAsAAQAAASgNANQgNANgSAAQgRAAgNgNQgNgNAAgSQAAgRANgNQANgNARAAQASAAANANQANANAAARg");

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#988679").s().p("AgeAfQgNgNAAgSQAAgRANgNQANgNARAAQASAAANANQANANAAARQAAASgNANQgNANgSAAQgRAAgNgNg");

	this.addChild(this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = rect = new cjs.Rectangle(-4.3,-4.4,8.9,8.9);
p.frameBounds = [rect];


(lib.Tween2 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AAAlFQgzgWg7BAQg/BEgPBvQghDoCZB4QA6AtBLAWQBAATA5gDQgHh3APhBQhMgYg4grQg7guABgmQAAgRATg0QAXhCAHgdQAdh7hSgig");
	this.shape.setTransform(-10.6,0);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#E3DDF2").s().p("ABBE7QhLgWg5gtQiZh4AgjoQAQhvA+hEQA7hAAzAWQBTAigeB7QgHAdgXBCQgSA0gBARQAAAmA7AuQA3ArBNAYQgPBBAHB3IgOABQgzAAg5gRg");
	this.shape_1.setTransform(-10.6,0);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("AAkhrQgIAcgKALQgHAIgKADIAtABQAvADALAJQALAIgEAEQgCADgIABQglgEghAIIAVAEQAYAFANAHQAVAJAPAgQAAASgMgDQgQgXgXgIIgmADIAoANIAlAmQAAASgMgDIgpgfIghADIATAHQAQATAJARQgEANgKgGIgbgQIgdgEQgMALgSAIQgVAKgKgDIg9gHIgDiBQBSgPBGhNQAIAAAAAHg");
	this.shape_2.setTransform(17.7,18.5);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#F4B4A2").s().p("Ag9ByIg8gHIgDiBQBSgPBGhNQAIAAAAAHQgJAcgKALQgGAIgLADIAtABQAwADALAJQALAIgEAEQgCADgIABQglgEghAIIAVAEQAXAFAOAHQAVAJAPAgQAAASgMgDQgQgXgXgIIgmADIAoANIAlAmQgBASgLgDIgpgfIghADIATAHQAQATAIARQgDANgKgGIgbgQIgdgEQgMALgSAIQgRAIgKAAIgFgBg");
	this.shape_3.setTransform(17.7,18.5);

	this.addChild(this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = rect = new cjs.Rectangle(-30.1,-33.1,60.5,66.5);
p.frameBounds = [rect];


(lib.Tween1 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AAAglQgWAZABAbQAAAdAcgIQAYgHgOgXQgRgeAAgNg");
	this.shape.setTransform(1,1.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F15A24").s().p("AgVAPQgBgbAWgZQAAANARAeQAOAXgYAHQgHACgDAAQgSAAAAgXg");
	this.shape_1.setTransform(1,1.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("AA0hUQhJAjgYA8QgYBBBGAIQAkAEAKgQQAIgMgGggQgJgzAAgFQgDgjAPgVg");

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#ED1C24").s().p("AABBUQhGgIAYhBQAYg8BJgjQgPAVADAjIAJA4QAGAggIAMQgIANgZAAIgNgBg");

	this.addChild(this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = rect = new cjs.Rectangle(-5.1,-8.5,10.5,17.2);
p.frameBounds = [rect];


(lib.writing = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.instance = new lib.Tween8("synched",0);
	this.instance.setTransform(76.5,41.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({y:41.5},14).to({y:41.2},15).wait(1));

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AgrARQAFgQAHgPQAPgiALgFQAKgEARAPQAJAIAGAIIAHA+QgIAIgLAFQgWAMgNgLQgPgKgLgMg");
	this.shape.setTransform(102,86.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F4B4A2").s().p("AgKAyQgPgKgLgNIgHgKQAFgQAHgQQAPghALgFQAKgEARAPQAJAHAGAJIAHA9QgIAJgLAFQgLAGgKAAQgHAAgHgFg");
	this.shape_1.setTransform(102,86.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("AB8BoQgNBGAdA0IluBRQgNg1AQhBQAFgYAihfQAchLAHg3QAKhRgWhQQDWgoCsgtQASA+gUBOQgMArgpBgQglBVgJAug");
	this.shape_2.setTransform(86.7,84);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E3DDF2").s().p("AjfC9QAFgYAihfQAchLAHg3QAKhRgWhQQDWgoCsgtQASA+gUBOQgMArgpBgQglBVgJAuQgNBGAdA0IluBRQgNg1AQhBg");
	this.shape_3.setTransform(86.7,84);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(30));

	// Layer 2
	this.instance_1 = new lib.Tween7("synched",0);
	this.instance_1.setTransform(44.6,61,1,1,0,0,0,0,-26);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({regY:-26,rotation:3,y:60.9},14).to({regY:-25.9,rotation:0,y:61},15).wait(1));

	// Layer 1
	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#8B5224").p("AiACNQAjgRARglQALgWAShRQAOhDAagdQAkgpBSACQg9AJgaAoQgNAVgOBCQgPA9gYAhQgeAng4AXQgOAGgRAF");
	this.shape_4.setTransform(21.1,43.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#663100").s().p("AhDBdQALgXAShQQAOhEAYgcQAmgqBSACQg9AJgaApQgNAVgQBCQgNA9gYAgQgeAog4AXQAjgRARglg");
	this.shape_5.setTransform(20.2,43);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#8B5224").p("AAhhJIhBAYIAHB9IAvAAg");
	this.shape_6.setTransform(35.6,27.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#5C55C7").s().p("AgZBLIgHh9IBBgYIgLCVg");
	this.shape_7.setTransform(35.6,28);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#8B5224").p("ADNhJQgvAwhJAnQiPBTh9ggQhLgRC7gvQD6g9AagNg");
	this.shape_8.setTransform(56.4,23.5);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#663100").s().p("Ai3BBQhLgRC7gvQD6g9AagNQgvAwhJAnQhnA8heAAQgkAAgjgJg");
	this.shape_9.setTransform(56.4,23.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#8B5224").p("ADWhQQhsgQhrAsQhpAqhoBh");
	this.shape_10.setTransform(59.8,16.4);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#8B5224").p("AA2CzQAjhWgLhQQgBgNgDgKQgBgEgBgEQgahjhUgnQBSAjAbBiQACAHABAG");
	this.shape_11.setTransform(85.2,24.1);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#8B5224").p("ACngyQAUhAgdgpIgHgIQg9gahCAAQgPAAgNABQhCASg+AtQhVA9gjBNQgjBOAkAxQAjAyBWgJQBVgJBTg9QBJg0AmhDQBWBJAhBgQgDhCgcg5Qgag2gsgig");
	this.shape_12.setTransform(63.7,19.1);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#663100").s().p("Aj6CQQgkgxAjhOQAjhNBVg9QA+gtBCgSQANgBAPAAQBCAAA9AaIAHAIQAdApgUBAQAsAiAaA2QAcA5ADBCQghhghWhJQgmBDhJA0QhTA9hVAJIgYABQhDAAgegqg");
	this.shape_13.setTransform(63.6,18.7);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#8B5224").s().p("AgWAPQgUgSgHgfQAQAWAXAOQAeAWAeAGQgNAFgNAAQgZAAgVgUg");
	this.shape_14.setTransform(66.4,53.8);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#8B5224").s().p("AgiAgQARADAOgGQAMgHAGgMQAHgKgEgOQgCgNgJgLQARAKAHARQAHAPgHAOQgIAQgTAEIgJABQgOAAgPgHg");
	this.shape_15.setTransform(78.2,50.4);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#8B5224").p("AC4iwIhIAHQgZgFgiABQhCACgqAeQgtAhgMBVQgCAIgFBwQgCA3gyAZQAxAEAjgQQA6gaAhhRQAmhXAsgcQAhgUAYAQQARACAOg7g");
	this.shape_16.setTransform(22.3,41);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#663100").s().p("AixCxQAygZACg3QAFhwABgIQANhWAsggQArgfBCgCQAhAAAZAFIBJgIIgKA7QgPA6gQgBQgYgRghAVQgtAcgkBXQgiBQg6AbQgcANglAAIgTgBg");
	this.shape_17.setTransform(23,41.1);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#8B5224").p("AC/jAQg/hQhbAAQhUAAg/BKQg/BJgGBrQgUgSgUgGQgUgGgKAKQgJAKAIAVQAIATAVATQAYAWAXAFQARBZA7A7QA7A7BMAHQBOAHAfglQATgXAdg9QAfgwALgZQATgqAAgrQAAhwhAhQg");
	this.shape_18.setTransform(65.1,37);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#F4B4A2").s().p("AAlEQQhMgHg7g7Qg7g7gRhZQgXgFgYgWQgVgTgIgTQgIgVAJgKQAKgKAUAGQAUAGAUASQAGhrA/hJQA/hKBUAAQBbAAA/BQQBABQAABwQAAArgTAqQgLAZgfAwQgdA9gTAXQgaAfg6AAIgZgBg");
	this.shape_19.setTransform(65.1,37);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("#8B5224").p("AEpAAQAAApgTAkQgZArgNAZQgfA5hFAoQhFAohHAAQh6AAhXhSQhXhTAAh1QAAh0BXhSQBXhTB6AAQB7AABXBTQBXBSAAB0g");
	this.shape_20.setTransform(67,28.3);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#663100").s().p("AjRDIQhXhTAAh1QAAhzBXhTQBXhTB6AAQB7AABXBTQBXBTAABzQAAAogTAlIgmBEQgfA5hEAoQhGAohHAAQh6AAhXhSg");
	this.shape_21.setTransform(67,28.3);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#8B5224").s().p("AhgAaQB1gJBMgwQg/A/hPAAQgZAAgagGg");
	this.shape_22.setTransform(28,125.9);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#8B5224").s().p("AgpgxIACgDQBSAagBBPQgOhBhFglg");
	this.shape_23.setTransform(46,62.8);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#8B5224").p("AhfiQQgFBMgLApQgUBNg1B2QhBCPg4A+QC6CTEgAQQgEiAANjNQANjJAOgaQAUgpAlhmQAsh7ACgnQAChdg4g8Qgugxg1gFQgTAIgXAWQgYAXgMAGQg3AagvA7Qg1A/gIA9QgDAagGBig");
	this.shape_24.setTransform(30.6,108.2);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#E3DDF2").s().p("AkyF1QA4g9BBiQQA1h2AUhNQALgpAFhMQAGhiADgaQAIg9A1g/QAvg7A3gaQAMgGAYgXQAXgVATgJQA1AFAuAxQA4A8gCBdQgCAngsB7QglBmgUApQgOAbgNDIQgNDNAECAQkggQi6iTg");
	this.shape_25.setTransform(30.7,108.2);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#8B5224").p("AhKndQAxAzgPDaQgGBWgOBEQgOBDgOAIQgIAPATDuQAKB3ALB0ICRg7Qg4higYipQgZi+AliYQANh7gLh+IgNhlg");
	this.shape_26.setTransform(72.8,110.5);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#E3DDF2").s().p("AhLETQgTjvAHgOQAOgJAOhDQAOhEAGhWQAPjagwgzIBTgfIAOBlQALB9gNB7QgmCYAZC+QAYCpA4BiIiRA8QgLh1gJh2g");
	this.shape_27.setTransform(72.6,110.5);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#8B5224").p("AghkzIiIJiQAjgDBOgDQBEgGAwgZQgWhfAtikQA+i6AYhUQgmAPgPAFQgYAIgSgBQgogEhDhDg");
	this.shape_28.setTransform(58,94.2);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#FFC310").s().p("AggkwQBCBDAoADQASABAZgIIA0gUQgYBVg9C5QguCkAXBgQgxAYhEAGQhNADgjADg");
	this.shape_29.setTransform(58,94);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#8B5224").p("Ag9CmICJhGQAIhkgDiAIihggQATCoAACig");
	this.shape_30.setTransform(33.1,170.7);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#004F84").s().p("AhQilIChAhQACB/gIBkIiJBGQABihgTipg");
	this.shape_31.setTransform(33.2,170.8);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#8B5224").p("Ah5hJIBmgiICPBUIgMCEIiZAAg");
	this.shape_32.setTransform(60.2,63.6);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#F4B4A2").s().p("AgqBtIhQi3IBmghICPBTIgMCFg");
	this.shape_33.setTransform(60.3,63.7);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f().s("#8B5224").p("AhQkYQAAAKATEWQALCugSB0ICUgSQACiAgHilQgJi9gEhfg");
	this.shape_34.setTransform(54.3,149.6);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#004F84").s().p("Ag9AIIgTkgICOgRIANEcQAHClgCCAIiUASQASh0gLiug");
	this.shape_35.setTransform(54.3,149.6);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f().s("#8B5224").p("AhJmXIARMzICDgFIgMszg");
	this.shape_36.setTransform(63,117.9);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#CEC8DD").s().p("AhJmWICIgGIALMzIiCAGg");
	this.shape_37.setTransform(63.1,117.9);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f().s("#8B5224").p("AgQgxIA6ASQA8AUAEAKQAFANgGAmIjUAAIAAhPg");
	this.shape_38.setTransform(38.6,185.5);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#302C2D").s().p("AhrAyIAAhQIBbgTIA6ASQA8AUAEAJQAFAOgGAmg");
	this.shape_39.setTransform(38.6,185.5);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f().s("#8B5224").p("AgQguIA6AQQA9ATADAJQAFAOgFAjIjWAAIAAhJg");
	this.shape_40.setTransform(59.7,182.8);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#302C2D").s().p("AhsAvIAAhJIBcgUIA6AQQA9ATADAJQAFAOgFAjg");
	this.shape_41.setTransform(59.7,182.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4}]}).wait(30));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,110.2,190.6);
p.frameBounds = [rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect];


(lib.walking = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8B5224").s().p("AgJAcQhUgkgqg1IBUA3QBkA3BXANIgQAAQg5AAhIgig");
	this.shape.setTransform(65.8,107.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#8B5224").ss(1,2).p("AFtlyQgDgqgeg5QgihCgtgbQgagQhOglIhIghQgSBCgCBFIAYAAIgBAsQgRARgjAhQgcAegLAcQgYA1gSBuQgKA6gNBQQgNA2glBOQg/CEgDAHQgOAigeBbQgYBKgOAXQgTAehCBTQAcAEAhAGQBBALAWAJQAMAFAqAkQAlAfAMAAQCwgHDWAK");
	this.shape_1.setTransform(38.7,127);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").ss(1,2).p("AjkB2QAAAAABAAQBWAOBngGQBIgFBCgRQAygNBPgcIgli8QgfAQgyAPQhkAdhbgCQgqgCgegJQgdgJgbgS");
	this.shape_2.setTransform(96.4,101);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#8B5224").s().p("AAeAkQAtg0AAhCQAAgOgCgRQAOAgAAAgQAABAgzAwQgxAvhJADQBJgYArg1g");
	this.shape_3.setTransform(35.2,147.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#8B5224").p("AgrAKQgLAPAGAIQAGAJATgEQASgDATgPQAUgPAKgNQALgRgGgIQgGgIgSAEQgTAEgTAOQgUAOgKAPg");
	this.shape_4.setTransform(125.9,57.1);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#F4B4A2").s().p("AgwAiQgGgJALgQQAKgOAUgOQATgOATgEQASgEAGAIQAGAIgLARQgKAOgUAOQgTAPgSADIgLABQgKAAgEgFg");
	this.shape_5.setTransform(125.9,57.1);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#8B5224").p("AAfgpQgWAGgVARQgYAQgNAQQgNARAGAIQAGAJAVgGQAVgGAVgQQAYgRANgPQANgSgGgIQgFgIgVAFg");
	this.shape_6.setTransform(124.8,52.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#F4B4A2").s().p("Ag4AnQgGgIANgRQANgQAYgQQAVgRAWgGQAVgFAFAIQAGAIgNASQgNAPgYARQgVAQgVAGQgJACgFAAQgKAAgDgFg");
	this.shape_7.setTransform(124.8,52.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#8B5224").p("AhSgpIgsB1ID4AHIh7iOIAAgXIhRAAg");
	this.shape_8.setTransform(121.6,62.5);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#F66F24").s().p("Ah7BMIAsh1IAAgpIBPAAIAAAXIB8COg");
	this.shape_9.setTransform(121.4,62.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#8B5224").p("AgMgTQgWAQgMAOQgLARAFAIQAGAJAUgFQAUgFAUgPQAWgQALgOQAMgRgGgIQgGgIgTAEQgUAFgUAPg");
	this.shape_10.setTransform(124.4,48);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#F4B4A2").s().p("Ag0AkQgGgIAMgRQALgOAXgQQATgPAUgFQAUgEAGAIQAFAIgLARQgLAOgWAQQgUAPgVAFIgLACQgKAAgEgGg");
	this.shape_11.setTransform(124.4,48);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#8B5224").p("AgLgRQgTANgKANQgJAOAFAIQAFAHARgDQASgEAQgNQATgNAKgNQAJgOgFgIQgFgIgRAEQgRAEgRANg");
	this.shape_12.setTransform(123.9,43.2);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#F4B4A2").s().p("AgsAfQgFgIAJgOQAKgNATgNQARgNARgEQARgEAFAIQAFAIgJAOQgKANgTANQgQANgSAEIgJABQgJAAgEgFg");
	this.shape_13.setTransform(123.9,43.2);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#8B5224").p("AAgAAQAAAJgJAHQgKAGgNAAQgMAAgKgGQgJgHAAgJQAAgIAJgHQAKgGAMAAQANAAAKAGQAJAHAAAIg");
	this.shape_14.setTransform(114.2,45.9);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#F4B4A2").s().p("AgWAQQgJgHAAgJQAAgIAJgHQAKgGAMAAQANAAAKAGQAJAHAAAIQAAAJgJAHQgKAGgNAAQgMAAgKgGg");
	this.shape_15.setTransform(114.2,45.9);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#8B5224").p("AhRjHIgBETIgsB3ID4AHIh7iQIgGkDg");
	this.shape_16.setTransform(121.6,50.6);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#E3DDF2").s().p("Ah7DDIAsh3IABkTIBKgCIAEEDIB8CQg");
	this.shape_17.setTransform(121.4,50.6);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#8B5224").s().p("ABbAiQhMgvhpAFIABgZQBvALBFA4g");
	this.shape_18.setTransform(53.7,76.5);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#8B5224").p("ADIlXQgagKgdgTQgBgBAAAAQAAgBgBgBQgDgogdg2QgihCgtgbQgagQhMglIhIghQgSBCgCBFIAYAAIgBAsQgRARgjAhQgdAegMAcQgYA1gSBuQgKA6gNBQQgNA2glBOQg/CEgDAHQgOAigeBbQgYBKgOAXQgTAehCBTQAcAEAhAGQBBALAWAJQAMAFAqAkQAlAfAMAAQCygHDUAKQBYjVgXpAIAAgCQBWAOBogGQBKgFBCgRQAygNBPgcIgli+QgfAQgyAPQhkAdhdgCQgngCgjgOg");
	this.shape_19.setTransform(60.8,127);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#E3DDF2").s().p("AlLKHQgMAAglgfQgqgkgMgFQgWgJhBgLIg9gKQBChTATgeQAPgXAXhKQAfhbANgiIBCiLQAmhOAMg2IAXiKQAShuAYg1QANgcAcgeIA0gyIABgsIgYAAQAChFAShCIBIAhQBMAlAaAQQAtAbAjBCQAcA3AEApQAeAUAaAKQAkAOAnACQBcACBkgdQAygPAfgQIAlC+QhPAcgyANQhCARhKAFQhnAGhXgOIAAACQAXJAhYDVQjUgKiyAHg");
	this.shape_20.setTransform(61,127.1);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#8B5224").p("ADXj1Qg0gMg8AGQgHgigWgnQgvAZgUAiQgrgehIgJQAJAoAZAYQgbABgrARQgyASgXAWQABAFAVAIQAWAIAPAAQhLAOg1A0QAQAMAcAMQgbAjg6BDQAdATAjgGQgVAsgCBEQAuAHAkgOQAIAQACAfQADAdgEAEQACAEAPADQAOADAJgBQgDAoANAVQAygHA+AgIABg7QgOgGgMgLQgWgSgHgWQgHgXAMgNQAIgKARAAQAQAAASAJQADhCgJhAQAdAxAgAQQAlg/gJhTQAaAnAoAQQAfgGAOgXQAxAeA7gaQgHgbgZgaQAsAHAlgPQgdgqgxgXQAkgQAUgrQg1gPguACQAKgSgCgTg");
	this.shape_21.setTransform(53.7,32.6);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#FACD31").s().p("AiREsQgNgWADgnQgJABgOgDQgPgDgBgEQADgEgCgdQgDgfgHgRQglAOgugGQAChEAVgsQgiAFgegSQA7hDAagkQgcgMgQgLQA1g0BLgOQgPAAgVgJQgWgHgBgFQAYgWAxgSQArgRAbgBQgZgYgJgoQBIAJArAeQAUgjAvgZQAWAnAHAjQA9gHAzANQACATgKARQAugBA1APQgUArgkAPQAxAYAdApQglAPgsgGQAaAaAGAbQg7AagxgeQgOAXgfAFQgogPgagnQAJBTglA+QgggQgdgwQAJBAgDBBQgSgIgQgBQgRABgIAKQgMANAIAXQAHAVAVATQANAKAOAHIgCA6Qg+gfgyAHg");
	this.shape_22.setTransform(53.7,32.5);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#8B5224").s().p("AgHANQgDgFAAgIQAAgHADgFQAEgGADAAQAFAAADAGQADAFAAAHQAAAIgDAFQgDAGgFAAQgDAAgEgGg");
	this.shape_23.setTransform(73.3,39);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#8B5224").p("AC0gnQgRgogaggQgpg0gsgaQg3gig9gHQg9gHgtAXQgFACgLAJQg7AwgDBYQgCBZA7BPQARAYAoAeQBcBFBiAIQBpAHAkhDQAJgRADgcIgDAAQgfAAgZgGQgZgGgLgJQAXAGAWAAQAbAAAYgIQAAgrgLguQAUABAPgIQAPgIAAgKQABgMgOgJQgPgJgUgBQgKgBgLADg");
	this.shape_24.setTransform(62.8,46.6);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#F4B4A2").s().p("AA4DoQhigIhchFQgogegRgYQg7hPAChZQADhYA7gwQALgJAFgCQAtgXA9AHQA9AHA3AiQAsAaApA0QAaAgARAoQALgDAKABQAUABAPAJQAOAJgBAMQAAAKgPAIQgPAIgUgBQALAuAAArQgYAIgbAAQgWAAgXgGQALAJAZAGQAZAGAfAAIADAAQgDAcgJARQghA8hYAAIgUAAg");
	this.shape_25.setTransform(62.8,46.6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#8B5224").p("ABDgbQACAkgHAzIh/g6IAVg+g");
	this.shape_26.setTransform(60.7,70.7);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#F4B4A2").s().p("AhCADIAVg/IBvAiQADAjgIA0g");
	this.shape_27.setTransform(60.8,70.7);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#8B5224").p("ABCgbQADAkgIAzIh+g6IAUg+g");
	this.shape_28.setTransform(65.5,75.4);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#E3DDF2").s().p("AhCADIAVg/IBvAiQACAjgHA0g");
	this.shape_29.setTransform(65.5,75.4);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#8B5224").p("AhbCUIiKAmIgRitIBJgOQBUgVA7gZQBjgrA9gyQAfgZAKgRIBMB3QhRBXgvAhQg+AsiUAvg");
	this.shape_30.setTransform(92.8,75.2);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#E3DDF2").s().p("Aj2AMIBJgOQBUgVA7gZQBjgsA9gyQAfgZAKgQIBMB3QhRBWgvAhQg9AsiVAvIiKAmg");
	this.shape_31.setTransform(92.8,75.4);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#8B5224").p("AimAjIAOBrIAeAEQAhADALgFQAJgDAPgUQARgWAGgEQAHgFAMgBQACAAASAAIA/AEQA+ADABgJQACgMiDgoIAAgBQArADAugCQBIgCABgNQAAgPhSgMQhSgMgBAAQCEgLAAgOQAAgOiFAEQBVhPgLgMQgHgHgjAcIghAdQglAjg4ArQgRhagcALQACBRgFAfg");
	this.shape_32.setTransform(132.2,88.4);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#F4B4A2").s().p("Ah6CSIgegEIgOhrIAZgTQAFgfgChRQAcgLARBaQA4grAlgjIAhgdQAjgcAHAHQALAMhVBPQCFgEAAAOQAAAOiEALIBTAMQBSAMAAAPQgBANhIACQguACgrgDIAAABQCDAogCAMQgBAJg+gDIg/gEIgUAAQgMABgHAFQgGAEgRAWQgPAUgJADQgGADgPAAIgXgBg");
	this.shape_33.setTransform(132.2,88.4);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f().s("#8B5224").p("AhRBjICXgvIAYg7IikhbIgZBig");
	this.shape_34.setTransform(120.1,57.9);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#F4B4A2").s().p("AheAAIAZhiICkBaIgYA8IiYAvg");
	this.shape_35.setTransform(120.1,58);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(30));

	// Layer 5
	this.instance = new lib.Tween12("synched",0);
	this.instance.setTransform(56.8,133,1,1,0,0,0,28.4,-43.8);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:-59.8,x:56.9},14).to({rotation:0,x:56.8},15).wait(1));

	// Layer 4
	this.instance_1 = new lib.Tween13("synched",0);
	this.instance_1.setTransform(44.8,133,1,1,0,0,0,-36.2,-37.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({rotation:65.7,x:44.6},14).to({rotation:0,x:44.8},15).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,149,220.7);
p.frameBounds = [rect, new cjs.Rectangle(0.2,0,148.8,224.6), new cjs.Rectangle(0.7,0,148.3,228.1), new cjs.Rectangle(1.5,0,147.5,231), new cjs.Rectangle(2.6,0,146.4,233.4), new cjs.Rectangle(2.7,0,146.3,235.2), new cjs.Rectangle(2.7,0,146.3,236.5), new cjs.Rectangle(2.7,0,146.3,237.2), new cjs.Rectangle(-1.1,0,150.1,237.3), new cjs.Rectangle(-5.7,0,154.7,237.2), new cjs.Rectangle(-10.1,0,159.1,237.1), new cjs.Rectangle(-14.2,0,163.2,236.3), new cjs.Rectangle(-17.8,0,166.9,234.8), new cjs.Rectangle(-21.1,0,170.1,232.6), new cjs.Rectangle(-23.8,0,172.9,230), new cjs.Rectangle(-23.5,0,172.6,234.7), new cjs.Rectangle(-22.9,0,172,239.1), new cjs.Rectangle(-22,0,171,242.8), new cjs.Rectangle(-20.5,0,169.6,246), new cjs.Rectangle(-18.9,0,167.9,248.3), new cjs.Rectangle(-16.6,0,165.7,250.1), new cjs.Rectangle(-14.2,0,163.2,251.2), new cjs.Rectangle(-16.6,0,165.7,252), new cjs.Rectangle(-20.9,0,170,252.7), new cjs.Rectangle(-24.8,0,173.8,252.8), new cjs.Rectangle(-28.3,0,177.3,252.5), new cjs.Rectangle(-31.4,0,180.4,251.5), new cjs.Rectangle(-34,0,183.1,249.9), new cjs.Rectangle(-36.3,0,185.3,247.8), new cjs.Rectangle(0,0,149,220.7)];


(lib.pouring = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween9("synched",0);
	this.instance.setTransform(104.7,35.8);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:101.7,y:51},14).wait(16));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AApAAQAAALgMAIQgMAIgRAAQgQAAgMgIQgMgIAAgLQAAgKAMgIQANgIAPAAQARAAAMAIQAMAIAAAKg");
	this.shape.setTransform(123.5,19);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#DF9C6D").s().p("AgcATQgMgIAAgLQAAgKAMgIQANgIAPAAQARAAAMAIQAMAIAAAKQAAALgMAIQgMAIgRAAQgQAAgMgIg");
	this.shape_1.setTransform(123.5,19);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("AAQgVQAUAOAJAPQAJARgHAKQgGAJgTgEQgTgEgSgPQgUgOgJgPQgJgQAHgKQAHgJASAEQATAEASAOg");
	this.shape_2.setTransform(107.3,16);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#DF9C6D").s().p("AAWAoQgTgEgSgOQgUgPgJgPQgJgQAHgKQAHgJASAEQATAEASAOQAUAOAJAPQAJARgHAJQgEAHgLAAIgKgBg");
	this.shape_3.setTransform(107.3,16);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#8B5224").p("AATgSQARARAHARQAGASgIAIQgIAIgSgHQgQgHgRgRQgSgSgGgQQgGgSAIgIQAIgIASAHQAQAGARASg");
	this.shape_4.setTransform(109.7,12.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#DF9C6D").s().p("AAPArQgQgHgRgRQgSgSgGgQQgGgSAIgIQAIgIASAHQAQAGARASQARARAHARQAGASgIAIQgEAEgIAAQgGAAgIgDg");
	this.shape_5.setTransform(109.7,12.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#8B5224").p("AAUgRQARARAFASQAFASgIAIQgJAIgSgIQgQgHgQgTQgQgSgGgQQgFgTAJgIQAIgIASAIQARAHAPATg");
	this.shape_6.setTransform(113.2,9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#DF9C6D").s().p("AAMAsQgPgHgRgTQgQgSgGgQQgEgTAIgIQAJgIARAIQARAHAPATQARARAGASQAEASgIAIQgEAEgHAAQgHAAgJgEg");
	this.shape_7.setTransform(113.2,9);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#8B5224").p("AAVgRQAQARAGASQAFASgJAIQgJAIgRgIQgQgHgRgTQgQgSgFgQQgGgTAJgIQAJgIASAIQAPAHARATg");
	this.shape_8.setTransform(116.7,6.6);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#DF9C6D").s().p("AANAsQgQgHgRgTQgQgSgFgQQgGgTAJgIQAJgIASAIQAPAHARATQAQARAGASQAFASgJAIQgFAEgGAAQgHAAgIgEg");
	this.shape_9.setTransform(116.7,6.6);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#8B5224").p("AAGhoQgWACgNAWIgpBGQAiAyANA6QAmg8ArgxQASgWgFgYQgEgVgUgOQgUgOgVACg");
	this.shape_10.setTransform(122.6,10.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#00B4A4").s().p("AhHgGIAphGQAOgXAVgCQAWgCATAOQAUAOAFAWQAFAXgSAWQgrAygnA8QgNg7gigxg");
	this.shape_11.setTransform(122.6,10.3);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#8B5224").p("ABzhCQhNBZhOCJQgzgIgjgsQAlgyAqhCQAKgSA+htQAOgWAXgCQAWgCATAOQAUAOAFAVQAFAYgSAWg");
	this.shape_12.setTransform(116.9,16.1);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#BADBF5").s().p("Ah/BsQAlgyAqhCIBIh/QAOgWAXgCQAWgCATAOQAUAOAFAVQAFAYgSAWQhNBZhOCJQgzgIgjgsg");
	this.shape_13.setTransform(117,16.1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#8B5224").p("AgaAKQgSAjARAbQAdgzAbhRQgpAugOAYg");
	this.shape_14.setTransform(10.3,44.4);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#514839").s().p("AgWAFQANgYAqguQgcBQgdA0QgRgbATgjg");
	this.shape_15.setTransform(9.9,44.9);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#8B5224").p("AAmimQgfA0ggBoQgSA5gmB5QBchkAdgvQA+higShmg");
	this.shape_16.setTransform(21.5,21.4);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#514839").s().p("AgcgDQAghpAfg0IAugNQASBmg+BiQgdAvhcBkIA4ixg");
	this.shape_17.setTransform(21.8,20.8);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("#8B5224").p("ADCkDIgkgCIgoAEIgyALIgVAHQg0AJg1AhIiKFmQAdA0A9AvQBPg4BWigQBGh+AWhPQADgLAohXg");
	this.shape_18.setTransform(22.4,28.3);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#514839").s().p("AjDCiICKlmQA1ghA0gKIAWgHIAxgLIAogDIAkACIABAAQgoBXgDALQgXBOhFB/QhXCghPA4Qg9gvgdg0g");
	this.shape_19.setTransform(22.3,28.2);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#8B5224").s().p("AhJA0IgCAAQBLg6BNhTQhUByhFBAQAEgTgBgSg");
	this.shape_20.setTransform(31.5,114.7);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#8B5224").s().p("AgvAmIgmgbIAmAQQAsAOAagKQAhgMASgkQAJgTADgRIgDAsQgMAtgqAOQgLAEgMAAQgXAAgegQg");
	this.shape_21.setTransform(44.4,53.3);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#8B5224").s().p("AggAYIgCgDQAJADALgCQALgDAIgHQAMgKAFgLQAEgNgFgKQAGADAEAEQAHAKgEAOQgFAMgNAKQgNALgNAAIgDABQgNAAgGgJg");
	this.shape_22.setTransform(43.1,47.5);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#8B5224").s().p("AgGAWQgHgGgDgMQgEgJADgJQADgKAIgCQAGgCAHAHQAHAGADALQAEAKgDAJQgDAKgIACIgEAAQgDAAgGgFg");
	this.shape_23.setTransform(30.8,40.2);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#8B5224").s().p("AgGAWQgHgGgDgMQgEgJADgJQADgKAIgCQAGgCAHAHQAHAGADALQAEAKgDAJQgDAKgIACIgEAAQgDAAgGgFg");
	this.shape_24.setTransform(48.8,34.2);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#8B5224").p("ADkhqQgKgEgLAGQgshchWgpQhVgphVAgQhRAfgnBTQgmBTAWBdQgJACgDAFQgLAMAHAWQAHAVAUATQAPANASAHQAxBIBNAdQBMAdBLgcQBKgcAnhJQAnhIgKhUQAGgLADgKQAJgagEgWQgEgWgQgFg");
	this.shape_25.setTransform(39.6,38.6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#DF9C6D").s().p("Ag7D2QhNgdgxhIQgSgHgPgNQgUgTgHgVQgHgWALgMQADgFAJgCQgWhdAmhTQAnhTBRgfQBVggBVApQBWApAsBcQALgGAKAEQAQAFAEAWQAEAWgJAaQgDAKgGALQAKBUgnBIQgnBJhKAcQglAOglAAQglAAgogPg");
	this.shape_26.setTransform(39.6,38.6);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#8B5224").p("AhtjWQCcAlApCIQAQAyABBMQABAggEBn");
	this.shape_27.setTransform(52,25.7);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#514839").s().p("AhrjZQCcAmApCHQAQAzABBMQABAggEBng");
	this.shape_28.setTransform(51.8,25.9);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#8B5224").s().p("AhDhUQBABUA+A0IAJAhQhohdgfhMg");
	this.shape_29.setTransform(78.3,121);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#8B5224").s().p("AAsAaQgCgLgXgRQgUgTAAgIQAAgHATgdQAUgbgCgHQgEgOhehkIASgQQBiBwADAQQACAHgPAaQgQAaACAJQABAHASAZQAPATgBAKQgBALgWBhIgWBeQAei2gEgWg");
	this.shape_30.setTransform(60.3,74.3);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#8B5224").p("AAynhQhOBLhLAOQgQADhBgCQhFgDgXACIgvBTIAFB0QAKCBAYBAQAZBDAVElQALCSAGCFQBNAJBSgdQAtgQBGghQgYg1gqh9Qg1iYgIgUQgghVgEhBQgIhwBAhZQAigwCQibQCNiWA5hUIihhHQghBUhOBKg");
	this.shape_31.setTransform(85.6,88.5);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#E3DDF2").s().p("AjcJ/QgGiFgLiTQgVklgZhCQgYhAgKiCIgFh0IAvhSQAXgDBFADQBBADAQgDQBLgPBOhLQBOhKAhhTIChBGQg5BUiNCWQiQCbgiAwQhABaAIBvQAEBCAgBUIA9CsQAqB9AYA2QhGAggtAQQhAAWg8AAQgSAAgRgBg");
	this.shape_32.setTransform(85.5,88.5);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#8B5224").s().p("Ag5hJQAaA4AOARQAaAmAxARIgPATQhDgmghhtg");
	this.shape_33.setTransform(26.5,107.6);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#8B5224").s().p("AgKBJQgGgKAJgsQAHguAAgIQAAgNgdgJQgggIgGgDQgMgGAGh4QAEAKAfACIgGAoQgFArAHALQAGAIAiAPQAeANADAJQADAKgKAqQgLAxAAAJQAAAYA/BoQhMhpgKgRg");
	this.shape_34.setTransform(36.3,79.3);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f().s("#8B5224").p("AjJj/QggBzAIBHQAJBMA6AxQAzArAiAOQASAHAHgBQAFAsgkB9QgvCkAAACQBKAfBdAKQBPAJBogFQgrhZgEibQgDhpARjCQAOiWgkh8QghhzhChBQhAAvhjAxQhMAwggBjg");
	this.shape_35.setTransform(26.6,109.1);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#E3DDF2").s().p("AArHuQhdgKhLgfIAwimQAjh9gEgsQgIABgRgHQgjgOgygrQg6gxgJhMQgIhHAghzQAfhjBMgwQBjgxBAgvQBCBBAhBzQAkB8gNCWQgSDCADBpQAECbAsBZIhFACQg/AAgzgGg");
	this.shape_36.setTransform(26.4,109.2);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("#8B5224").p("AirngIhUE6QgBBPAKBrQgCBcg+ByQgHBrgGAtQgKBIgUAwQDFAQCfgJQC8gKCkguQgYhAgchQQg4ihgUhRIgzk7Ihxj9QgMAHgTAIQgjAPgiAFQgjAFg1gHg");
	this.shape_37.setTransform(51.6,118.8);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#AA4757").s().p("AlhHxQATgwAKhIQAGgtAIhrQA+hyABhcQgKhrAChPIBUk6IAuAIQA1AHAigFQAjgFAjgPQATgIALgHIByD9IAzE7QATBRA4ChQAcBQAYBAQijAui8AKQg4ADg/AAQhvAAh+gKg");
	this.shape_38.setTransform(51.6,118.9);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f().s("#8B5224").p("AhBBSICfgTIgOiPIisAvg");
	this.shape_39.setTransform(46.3,66);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#DF9C6D").s().p("AhdgiICtgvIAOCPIifAUg");
	this.shape_40.setTransform(46.3,66);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f().s("#8B5224").p("AgdiOICDAMIgbDtQg3AjgUAAQgRAAhRgxQAzghAKgWQAKgVgCifg");
	this.shape_41.setTransform(42,175.6);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#DF9C6D").s().p("AhkBeQA0giAJgWQAKgVgCifICEANIgcDsQg3AkgSgBQgTAAhRgwg");
	this.shape_42.setTransform(42.2,175.6);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f().s("#8B5224").p("AgXg6ICtAOIAHBeIklAJQgMgOgGgRQgLggAegPg");
	this.shape_43.setTransform(34.5,190.9);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#A89A8D").s().p("AiZAcQgMggAfgPIBwgnICsAOIAIBeIkmAJQgMgOgFgRg");
	this.shape_44.setTransform(34.5,190.9);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f().s("#8B5224").p("AhliCIAbDtIAeASQAhASALAAQASAABRgxQgzgigKgVQgGgOgChTIAAhTg");
	this.shape_45.setTransform(72.5,176.7);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#DF9C6D").s().p("AgqB9IgegSIgbjtICDgLIAABTQACBTAFAOQAKAVAzAiQhQAxgTgBQgLAAgggRg");
	this.shape_46.setTransform(72.3,176.8);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f().s("#8B5224").p("AicAxIEmAKQAMgOAFgRQALghgegOIhwgnIisANg");
	this.shape_47.setTransform(79.9,192.1);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#A89A8D").s().p("AidAxIAIheICtgNIBvAnQAfAOgLAhQgGARgMAOg");
	this.shape_48.setTransform(80,192.1);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f().s("#8B5224").p("AhqAqQAHggAEgiQAEgrgDgaIDEBMQgRAMgiAnQgaAfgVAeg");
	this.shape_49.setTransform(113.3,23.5);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#DF9C6D").s().p("AhoApQAHgfAEgjQAFgrgEgZIDEBMQgQALgjAoQgaAfgVAdg");
	this.shape_50.setTransform(113.1,23.6);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f().s("#8B5224").p("ADekDQh6hoimA8QhiARhOBDQhvBgASCTQANBnB/BZQAgAWA5AlQApAcAEAUQAVAMAfgsQAqhFAhgtQA5ANAogDQAxgCAzgYQAYgUAVglQAqhKgQhOQgEg2gcg3Qgfg9gxgpg");
	this.shape_51.setTransform(33.9,34.6);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#514839").s().p("Ag9FDQgEgUgpgcIhZg7Qh/hZgNhnQgSiTBvhgQBOhDBigRQCmg8B6BoQAxApAfA9QAcA3AEA2QAQBOgqBKQgVAlgYAUQgzAYgxACQgoADg5gNQghAtgqBFQgYAjgTAAQgFAAgEgDg");
	this.shape_52.setTransform(33.9,34.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(30));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,129.9,198.1);
p.frameBounds = [rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect];


(lib.microscoping = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.instance = new lib.Tween2("synched",0);
	this.instance.setTransform(52.4,63.1,1,1,0,0,0,0,-33.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:-1,x:52.5},14).to({rotation:0,x:52.4},15).wait(1));

	// flash0.ai
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#8B5224").s().p("AgJAPQgDgBABgHQABgFAFgFQAEgHADgDQAFgEADADQADACgBAFQgCAGgEAFQgEAHgDADQgEACgCAAIgCgBg");
	this.shape.setTransform(89.5,52.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#8B5224").s().p("ABJB/Ig5hkQgCgfAigQQgOg7glguQgdgjg4goIACgDQA5AgAmAqQA6A9AAA+IgRAHQgPAOAIAZQAhA7ADAJQATAxgQAvQAJgkgSgpg");
	this.shape_1.setTransform(48.8,77.2);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("AgPgiQgLgDgPgIQAFAogHAnIAFADQAFAFAFAGQAVgZAbgJQAOgEAKABIgBgsQghAHgZgIg");
	this.shape_2.setTransform(67.6,81.4);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#E3DDF2").s().p("AgnAkIgEgCQAHgogFgoQAPAIALADQAYAIAigHIABAsQgKgBgOAFQgbAIgWAZIgKgLg");
	this.shape_3.setTransform(67.6,81.5);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#8B5224").p("AEPlwIAWAXQAXAjACA6QgKCfgKC5QgOEYAHAMQgDAXAaBMQAXBHAWAuQgdAfgmATQg4AchHgEQgxgBhpgPQhegPgoACQiCAGhpgkQB2n5BQkSQCTn7BkgDQAJAAAeASQAnAWAgAgQBfBigVCIg");
	this.shape_4.setTransform(36,121.8);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#E3DDF2").s().p("AClKiQgxgBhpgPQhegPgoACQiCAGhpgkQB2n5BQkSQCTn7BkgDQAJAAAeASQAnAWAgAgQBfBigVCIIAWAXQAXAjACA6QgKCfgKC5QgOEYAHAMQgDAXAaBMQAXBHAWAuQgdAfgmATQgxAZg8AAIgSgBg");
	this.shape_5.setTransform(36,121.8);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#8B5224").p("AEfhGIAegCQAdgFgHgRQgIgWgqgMQgkgJglACQAAgUgXgZQgWgZgjgSQgegPg9gEQg4gDgoAIQAagfAAgZQgEgSgZAFQgWAEgeATQhJAxAJAoQg+gCg0A1Qg/BAAIBnQAOCsBHBJQA1A3AfgXQAegWgShOQgRgFgLgPQgLgQAAgUQAAgYAPgRQAOgRAVAAQAQAAANAKQANAKAGARQAdgKAWgiQAGgIAFgLQAJADASAFQANAEAHgCQALgCADgRIAAgQIAxAhQA1AgAXgGQAYgGAJgTIAFgRIAwAGQA0AEAVgIQArgPgPgqQgMgkglggg");
	this.shape_6.setTransform(71.3,30.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#502A0C").s().p("Aj+ENQhHhJgOisQgIhnA/hAQA0g1A+ACQgJgoBJgxQAegTAWgEQAZgFAEASQAAAZgaAfQAogIA4ADQA9AEAeAPQAjASAWAZQAXAZAAAUQAlgCAkAJQAqAMAIAWQAHARgdAFIgeACQAlAgAMAkQAPAqgrAPQgVAIg0gEIgwgGIgFARQgJATgYAGQgXAGg1ggIgxghIAAAQQgDARgLACQgHACgNgEIgbgIIgLATQgWAigdAKQgGgRgNgKQgNgKgQAAQgVAAgOARQgPARAAAYQAAAUALAQQALAPARAFQASBOgeAWQgJAHgLAAQgaAAgmgng");
	this.shape_7.setTransform(71.3,30.9);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#8B5224").p("AitioQgkAAgaAdQgZAdAAApQAAAnAYAdQAYAbAiACQgBBhAfBDQAfBFA5AQQA8ASBEgzIhGg7IAChBQAMAzAAAGQAAAGBIAwQATgPAVgZIA3ACIAJhhQAdg5ATg/QAdhlgEheQgzAMg9AAQhLAAhBgUQg9gSgpghQgeA1gVA/QgOgGgPAAg");
	this.shape_8.setTransform(72.1,50.1);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#F4B4A2").s().p("Ag8ETQg5gQgfhFQgfhDABhhQgigCgYgaQgYgdAAgoQAAgpAZgcQAagdAkAAQAPAAAOAFQAVg/Aeg0QApAgA9ATQBBATBLAAQA9AAAzgMQAEBegdBmQgTA/gdA5IgJBgIg3gBQgVAZgTAPQhIgxAAgGQAAgFgMgzIgCBAIBGA8QgzAlgsAAQgRAAgQgFg");
	this.shape_9.setTransform(72.1,50.2);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#8B5224").p("AhsivIAIDFQALDKARANIBDgdQBKgeAogBQgHhKgEhTQgJilANgqQANgqhmgIIhmAAg");
	this.shape_10.setTransform(36.7,202);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#8C3911").s().p("AhkAWIgIjFIATg9IBmgBQBmAJgNAqQgNAqAJCkQAEBTAHBLQgoABhKAdIhDAeQgRgOgLjKg");
	this.shape_11.setTransform(36.7,201.9);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("#8B5224").p("ABsgqQgTgRhoANQhoAMgSARIgEAhQABAjAZABQApABDRgFQAHgLABgRQAAgfgjgfg");
	this.shape_12.setTransform(44.9,225.1);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#464E98").s().p("AhzA0QgZgBgCgjIAFghQASgRBngMQBogNAUARQAjAfgBAfQAAARgIALQijAEg9AAIgZAAg");
	this.shape_13.setTransform(44.9,225.1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#8B5224").p("ACVgCQgYg5iDAGQgSAAhCAcIg/AZIAMAzIEgAEQAOgegMgbg");
	this.shape_14.setTransform(53.1,224.8);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#464E98").s().p("AiNAzIgMgzIA+gZQBCgcATAAQCDgGAYA5QAMAbgPAeg");
	this.shape_15.setTransform(53.1,224.8);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#8B5224").p("AhwjfQgFDJAiBBQgYBcAWB0QASBcAkBEIAEAAQBrgxAagBIAIAAIAAgDQgogignlyIggltIhnAAg");
	this.shape_16.setTransform(41.7,183.1);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#8C3911").s().p("AgfGbQgkhEgShcQgWh0AYhcQgihBAFjJIAMi7IBnAAIAgFsQAnFyAoAiIAAAEIgIAAQgaABhrAwg");
	this.shape_17.setTransform(41.7,183.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(30));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,105.4,230.4);
p.frameBounds = [rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect, rect];


(lib.microscope = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 3
	this.instance = new lib.Tween3("synched",0);
	this.instance.setTransform(8.1,63.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:-359.9},14).to({rotation:0},15).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AgbAIIATgNQAUgKATAXg");
	this.shape.setTransform(38.8,48.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#988679").s().p("AgcAIIASgNQAUgKATAXg");
	this.shape_1.setTransform(39,48.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("AgdANQAIgNALgIQAUgPAUAkg");
	this.shape_2.setTransform(35.5,48);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#988679").s().p("AgdANQAIgNALgIQAUgPAUAkg");
	this.shape_3.setTransform(35.5,48);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#8B5224").p("ABBhAQAbAbAAAlQAAAmgbAbQgbAbgmAAQgkAAgcgbQgagbAAgmQAAglAagbQAcgbAkAAQAmAAAbAbg");
	this.shape_4.setTransform(9.2,63.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#988679").s().p("Ag/BBQgbgbAAgmQAAglAbgbQAbgbAkAAQAmAAAaAbQAbAbAAAlQAAAmgbAbQgaAbgmAAQgkAAgbgbg");
	this.shape_5.setTransform(9.2,63.6);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#8B5224").p("AglgkQAQgQAVAAQAWAAAQAQQAPAPAAAVQAAAWgPAQQgQAQgWAAQgVAAgQgQQgPgQAAgWQAAgVAPgPg");
	this.shape_6.setTransform(19.9,21.4);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#988679").s().p("AglAmQgPgRAAgVQAAgVAPgQQAQgQAVAAQAWAAAQAQQAPAQAAAVQAAAVgPARQgQAPgWAAQgVAAgQgPg");
	this.shape_7.setTransform(19.9,21.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#8B5224").p("AhckUIgTANQgWASgTAWQg8BIAABcQAACRAMC+IGVgJQAMg6gGg7QiDgGieADQgEhdgKiKQgFgcADghQAGhDArgZ");
	this.shape_8.setTransform(24.5,50.7);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#988679").s().p("AjUg6QAAhcA8hIQATgXAWgRIATgOIAvAnQgrAagGBDQgDAgAFAdQAKCJAEBdQCegCCDAGQAGA6gMA7ImVAJQgMi+AAiRg");
	this.shape_9.setTransform(24.5,50.6);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#8B5224").p("ACZAMIkvgDIgDgUIEzABg");
	this.shape_10.setTransform(28.4,50.8);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#988679").s().p("AiWAJIgDgUIEzABIgBAWg");
	this.shape_11.setTransform(28.5,50.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(30));

	// Layer 4
	this.instance_1 = new lib.Tween4("synched",0);
	this.instance_1.setTransform(31.2,20.6);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({rotation:2.8},14).to({rotation:0},15).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,45.9,78.3);
p.frameBounds = [rect, rect=new cjs.Rectangle(0,0,45.9,78.4), rect, rect=new cjs.Rectangle(0,-0.1,45.9,78.5), rect, rect, rect=new cjs.Rectangle(0,-0.2,45.9,78.6), rect, rect=new cjs.Rectangle(0,-0.3,45.9,78.7), rect, rect=new cjs.Rectangle(0,-0.4,45.9,78.8), rect, rect=new cjs.Rectangle(0,-0.5,45.9,78.9), rect, new cjs.Rectangle(0,-0.6,45.9,79), new cjs.Rectangle(0,-0.7,46,79.1), new cjs.Rectangle(0,-0.8,46,79.2), rect=new cjs.Rectangle(0,-0.8,46.1,79.2), rect, new cjs.Rectangle(0,-0.9,46.2,79.3), new cjs.Rectangle(0,-0.9,46.3,79.3), rect=new cjs.Rectangle(0,-1,46.4,79.4), rect, rect=new cjs.Rectangle(0,-1.1,46.5,79.5), rect, new cjs.Rectangle(0,-1.2,46.7,79.6), new cjs.Rectangle(0,-1.2,46.6,79.6), new cjs.Rectangle(0,-1.2,46.8,79.6), new cjs.Rectangle(0,-1.3,46.8,79.7), new cjs.Rectangle(0,0,45.9,78.3)];


(lib.lookingup = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Tween5("synched",0);
	this.instance.setTransform(4.3,24.8,1,1,0,0,0,-11.7,0);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:-5.3},14).to({rotation:0},15).wait(1));

	// Layer 3
	this.instance_1 = new lib.Tween6("synched",0);
	this.instance_1.setTransform(51.8,47.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({y:46.7},14).to({y:47.2},15).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#8B5224").p("AADASIBMCDIhbBQQgdgvgSg5QgahQAGhIQAKhwAehXIA2BFQADAdgPCSg");
	this.shape.setTransform(8.2,46.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#F4B4A2").s().p("Ag6B8QgahQAGhIQAKhwAehXIA2BFQADAdgPCSIBMCDIhbBQQgdgvgSg5g");
	this.shape_1.setTransform(8.1,46.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#8B5224").p("Ahmj2QgLA+AAA9IAAArIABADIAAA7QAABJgBAaQgDA+gDDLQBvAgB6gPIAGgeIgFqXQgMAogRAaQgZAngjABQgnACgeg7QgSgigIgpQgVAxgMA9g");
	this.shape_2.setTransform(60.2,118.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#396425").s().p("Ah3FUQADjLADg9IABhjIAAg7IgBgDIAAgrQAAg+ALg9QALg+AWgwQAIAoASAjQAeA6AngBQAigCAagmQARgbALgnIAGKWIgGAfQgnAEglAAQhRAAhMgWg");
	this.shape_3.setTransform(60.2,119.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#8B5224").p("AA+iZQgogQgYgbQhPCyAgDTIA7AHQABhyAHhGQAMhqAgg/g");
	this.shape_4.setTransform(47.8,96.8);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#E3DDF2").s().p("AgyC/QghjTBPixQAZAaAoAQQggA/gMBqQgIBGAABzg");
	this.shape_5.setTransform(47.9,97);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#8B5224").s().p("Ag+AGQAhgUAngQIBAgYQhDAagtAqQgZAXgKASg");
	this.shape_6.setTransform(86.3,111.3);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#8B5224").p("AhRgsQAigUAvAAQAwAAAiAUQAiASAAAaQAAAbgiATQgiATgwAAQgvAAgigTQgigTAAgbQAAgaAigSg");
	this.shape_7.setTransform(86.3,129.8);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#F4B4A2").s().p("AhRAuQgigTAAgbQAAgZAigUQAigTAvAAQAwAAAiATQAiAUAAAZQAAAbgiATQgiATgwAAQgvAAgigTg");
	this.shape_8.setTransform(86.3,129.8);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#8B5224").p("Ag4jlIAEHXIA0gIIA4nPQgTgKgigCQgmgDgVAPg");
	this.shape_9.setTransform(77.4,104.9);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#E3DDF2").s().p("Ag3jlQAUgPAmADQAiACATAKIg4HPIg0AIg");
	this.shape_10.setTransform(77.4,104.9);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#8B5224").p("ABQiAQAnBbgBBAQgBBDgbA9QgNAfgOASIijADIgRmAICegdg");
	this.shape_11.setTransform(87.9,104.6);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#E3DDF2").s().p("Ah1ixICdgdIAoBOQAnBbgBBAQgBBDgbA9QgOAfgNASIijADg");
	this.shape_12.setTransform(87.9,104.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("#8B5224").p("AgXocQhHgMhMAUIAJQ0IFLg1Qgah1gaiAQg1j9AAgzQgBgzgRjVIgQjKQgUgKgigGg");
	this.shape_13.setTransform(88.8,136.4);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#E3DDF2").s().p("AiqoTQBNgVBHANQAhAGAVAKIAQDKQAQDUABAzQABA0A0D9QAbCAAaB1IlMA1g");
	this.shape_14.setTransform(88.8,136.3);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("#8B5224").p("AAlhwQhIA1hCBGQATBlBZABQA6hRAkhVQgXgkgpgXg");
	this.shape_15.setTransform(13.7,71.7);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#E3DDF2").s().p("AhkALQBBhGBIg1QApAXAYAkQglBVg6BRQhZgBgShlg");
	this.shape_16.setTransform(13.7,71.7);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#8B5224").p("AAPk6QAaATgvFUQgoEVg2EOQApAWA7AJQBGAMBugEQgHh+ABjyQACjJAEhOQAAiEAEhVQAJieAohPQg7gYgdgtQgmACgvgGQhdgNgxgsQg1gvg3AYQgbAMgQAVQAgBKBeBeQA+A+A8Aug");
	this.shape_17.setTransform(30.7,128.5);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#E3DDF2").s().p("AAAJvQg6gJgqgWQA2kOAokVQAwlUgagTQg8gug/g+QhehegghKQARgVAbgMQA2gYA1AvQAyAsBdANQAvAGAlgCQAdAtA8AYQgpBPgICeQgFBVABCEQgFBOgBDJQgCDyAIB+Ig3ABQhKAAg0gJg");
	this.shape_18.setTransform(30.6,128.5);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("#8B5224").p("ABVkcQhFgphUAAQhEAAg5AaQg4AYghArQAHAFAOAOQAcAVAyAlQAqAhAgApQAWAbAdAyQADAEAoBIQAGgEAGgCQAUgHAUAGQAUAHAFAQQAFAQgMARQgMARgWAHQgVAHgQgFIgOCzIAfgDQApgEAkgKQB3ggAmhPQBCiFgUh5QgaieiqhGg");
	this.shape_19.setTransform(75.4,50.4);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#FEFC6D").s().p("AgRCTQARAFAUgHQAWgHAMgRQAMgRgFgQQgFgQgUgHQgUgGgUAHIgMAGIgrhMQgdgygWgbQgggpgqghIhOg6QgOgOgHgFQAhgrA4gYQA5gaBEAAQBUAABFApQCqBGAaCeQAUB5hCCFQgmBPh3AgQgkAKgpAEIgfADg");
	this.shape_20.setTransform(75.5,50.4);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("#8B5224").p("ADuiIQgqhnhhggQhAgWhDAUQguAcgmAsQgnAtgZA4QgPAhgJAfIgBAAQgWgCgQAGQgQAFgBAJQAAAIANAHQANAFAUACQgUBwArBKQAgA5BNAZQBfAhBgg5QBfg5AmhxQAmhvgqhng");
	this.shape_21.setTransform(64.1,54.7);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#F4B4A2").s().p("AhSEQQhNgZggg5QgrhKAUhwQgUgCgNgFQgNgHAAgIQABgJAQgFQAQgGAWACIABAAQAJgfAPghQAZg4AngtQAmgsAugcQBDgUBAAWQBhAgAqBnQAqBngmBvQgmBxhfA5Qg9Akg7AAQgjAAgkgMg");
	this.shape_22.setTransform(64.1,54.7);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#F4B4A2").s().p("AhQByQgigvAAhDQAAhBAigwQAigwAuAAQAvAAAjAwQAhAwAABBQAABDghAvQgjAwgvAAQguAAgigwg");
	this.shape_23.setTransform(62.7,83.5);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("#8B5224").p("Aj4AXIgwEIIDDBaQAPhSAPhkQAejGABhVQABhqA3h6QAnB2ABAvQACBDApGjIDGgtIg7qIIjxgUIAFAQIi9AAg");
	this.shape_24.setTransform(58.2,188);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#57483B").s().p("AkoEgIAwkIIA9mBIC9AAIgFgQIDxAUIA7KIIjGAtQgpmjgChDQgBgvgnh2Qg3B6gBBqQgBBVgeDGQgPBkgPBSg");
	this.shape_25.setTransform(58.2,187.9);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#8B5224").p("ACWgwQgxgGguAiQgYARgNARIi6AAIgEgEQAAARAEASQCyALChgMQACgPgBgJQgCgMgKgIg");
	this.shape_26.setTransform(30.4,225.2);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#302C2D").s().p("AioAtQgEgSAAgRIAEAEIC6AAQANgRAYgRQAugiAxAGIAKAwQAKAIACAMQABAJgCAPQhUAGhXAAQhSAAhWgFg");
	this.shape_27.setTransform(30.4,225.2);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#8B5224").p("ACKhPIicA5QhYgWgmAaQgmAYAOBGQC5ALCagLQACgPgBgJQgCgMgKgJg");
	this.shape_28.setTransform(30.4,222);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#7E2900").s().p("AioBLQgOhFAmgYQAmgbBYAWICcg5IAWBuQAKAJACANQABAJgCAOQhNAGhVAAQhTAAhegGg");
	this.shape_29.setTransform(30.4,222.1);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#8B5224").p("AAXAFIhGgEQgjgdghgHIgagBQgHATABARQAAAMAGAVQBFAGBMgEQA9gDBSgLQACgJgCgLQgsAGhQgCg");
	this.shape_30.setTransform(83.5,225.7);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#302C2D").s().p("AiNAhQgGgVAAgMQgBgRAHgTIAaABQAhAHAjAdIBGAEQBQACAsgGQACALgCAJQhSALg9ADQgdACgeAAQgsAAgqgEg");
	this.shape_31.setTransform(83.5,225.7);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#8B5224").p("AAsghIh7g1Ig9BkQgIATABATQABAMAGAVQBEAGBMgEQA+gDBSgLQADgogegcQgZgUg0gSg");
	this.shape_32.setTransform(83.5,220.5);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#7E2900").s().p("AiMBUQgGgVgBgMQgBgTAIgTIA9hkIB7A1QA0ASAZAUQAeAcgDAoQhSALg+ADQgdACgeAAQgsAAgpgEg");
	this.shape_33.setTransform(83.5,220.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(30));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,105.9,230.3);
p.frameBounds = [rect, new cjs.Rectangle(0,-0.1,105.9,230.5), new cjs.Rectangle(0,-0.2,105.9,230.6), new cjs.Rectangle(0,-0.3,105.9,230.7), rect=new cjs.Rectangle(0,-0.6,105.9,231), rect, rect=new cjs.Rectangle(0,-0.9,105.9,231.3), rect, new cjs.Rectangle(0,-1.1,105.9,231.5), new cjs.Rectangle(0,-1.3,105.9,231.7), new cjs.Rectangle(0,-1.5,105.9,231.9), new cjs.Rectangle(0,-1.6,105.9,232), new cjs.Rectangle(0,-1.7,105.9,232.1), new cjs.Rectangle(0,-1.9,105.9,232.3), rect=new cjs.Rectangle(0,-2.1,105.9,232.5), rect, rect, rect, rect, rect=new cjs.Rectangle(0,-2.2,105.9,232.6), rect, rect=new cjs.Rectangle(0,-2.1,105.9,232.5), rect, rect=new cjs.Rectangle(0,-2.2,105.9,232.6), rect, rect, new cjs.Rectangle(-0.1,-2.2,106.1,232.6), new cjs.Rectangle(-0.3,-2.2,106.3,232.6), new cjs.Rectangle(-0.4,-2.2,106.4,232.6), new cjs.Rectangle(0,0,105.9,230.3)];


(lib.flame = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween1("synched",0);
	this.instance.setTransform(5.2,17.2,1,1,0,0,0,0,8.6);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:0.1,rotation:-14.8,x:5.3,y:17.1},14).to({regX:0,rotation:0,x:5.2,y:17.2},15).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = rect = new cjs.Rectangle(0,0,10.5,17.2);
p.frameBounds = [rect, new cjs.Rectangle(-0.2,0,10.8,17.4), new cjs.Rectangle(-0.5,-0.1,11.1,17.5), new cjs.Rectangle(-0.8,-0.1,11.4,17.7), new cjs.Rectangle(-1.2,-0.3,11.7,17.9), new cjs.Rectangle(-1.5,-0.3,12,18), new cjs.Rectangle(-1.8,-0.4,12.3,18.2), new cjs.Rectangle(-2.1,-0.5,12.6,18.4), new cjs.Rectangle(-2.4,-0.5,12.9,18.5), new cjs.Rectangle(-2.7,-0.6,13.2,18.7), new cjs.Rectangle(-3,-0.6,13.4,18.8), new cjs.Rectangle(-3.3,-0.7,13.7,19), new cjs.Rectangle(-3.6,-0.6,14,19), new cjs.Rectangle(-3.9,-0.7,14.3,19.2), new cjs.Rectangle(-4.2,-0.7,14.5,19.3), new cjs.Rectangle(-4.2,-0.8,14.9,19.6), new cjs.Rectangle(-4.2,-1,15.3,19.8), new cjs.Rectangle(-4.2,-1.2,15.6,20), new cjs.Rectangle(-4.2,-1.3,15.9,20.3), new cjs.Rectangle(-4.2,-1.5,16.2,20.5), new cjs.Rectangle(-4.2,-1.6,16.5,20.7), new cjs.Rectangle(-4.2,-1.8,16.8,21), new cjs.Rectangle(-4.2,-1.8,17.1,21.1), new cjs.Rectangle(-4.2,-2,17.4,21.4), new cjs.Rectangle(-4.2,-2.1,17.7,21.5), new cjs.Rectangle(-4.2,-2.1,18,21.7), new cjs.Rectangle(-4.2,-2.3,18.2,21.9), new cjs.Rectangle(-4.2,-2.4,18.5,22.1), new cjs.Rectangle(-4.2,-2.5,18.8,22.3), new cjs.Rectangle(0,0,10.5,17.2)];

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;