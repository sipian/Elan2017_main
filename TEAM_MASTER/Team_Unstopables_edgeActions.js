
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;
//Edge symbol: 'stage'
(function(symbolName){Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",0,function(sym,e){});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",1000,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"document","compositionReady",function(sym,e){sym.setVariable("current","");});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",1391,function(sym,e){});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_overall_btn}","click",function(sym,e){var current=sym.getVariable("current");sym.play("overAllIn");sym.setVariable("current","overall_btn");});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",1952,function(sym,e){sym.stop();var current=sym.getVariable("current");});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",2318,function(sym,e){});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_markt_btn}","click",function(sym,e){var current=sym.getVariable("current");sym.play("marketingIn");sym.setVariable("current","markt_btn");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_hospi_btn_1}","click",function(sym,e){var current=sym.getVariable("current");sym.play("shortIn");sym.setVariable("current","hospi_btn_1");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_creat_btn}","click",function(sym,e){var current=sym.getVariable("current");sym.play("creatIn");sym.setVariable("current","creat_btn");});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",3000,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_finan_btn}","click",function(sym,e){var current=sym.getVariable("current");sym.play("financeIn");sym.setVariable("current","finan_btn");});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",4656,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",5413,function(sym,e){});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",6212,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",7000,function(sym,e){});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_events_btn}","click",function(sym,e){var current=sym.getVariable("current");sym.play("eventsIn");sym.setVariable("current","events_btn");});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_optrans_btn}","click",function(sym,e){var current=sym.getVariable("current");sym.play("opIn");sym.setVariable("current","optrans_btn");});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",7591,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",8250,function(sym,e){});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",8920,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",9436,function(sym,e){});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_hospiCore}","mouseover",function(sym,e){});
//Edge binding end
})("stage");
//Edge symbol end:'stage'
})(jQuery,AdobeEdge,"EDGE-58749904");