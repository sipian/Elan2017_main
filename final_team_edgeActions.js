/***********************
* Adobe Edge Animate Composition Actions
*
* Edit this file with caution, being careful to preserve 
* function signatures and comments starting with 'Edge' to maintain the 
* ability to interact with these actions from within Adobe Edge Animate
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // aliases for commonly used Edge classes

   //Edge symbol: 'stage'
   (function(symbolName) {
      
      
      

      

      

      

      

      

      Symbol.bindElementAction(compId, symbolName, "document", "compositionReady", function(sym, e) {
         sym.setVariable("current","");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_creat_btn2}", "click", function(sym, e) {
         // insert code for mouse click here
         var current = sym.getVariable("current");
         if (current != "") {
            sym.getSymbol(current).play("out");
            sym.getSymbol("creatives").play("in");
         }
         else {
            sym.getSymbol("creatives").play("shortIn");
         }
         sym.setVariable("current", "creatives");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_hospi_btn_1}", "click", function(sym, e) {
         // insert code for mouse click here
         var current = sym.getVariable("current");
         if (current != "") {
            sym.getSymbol(current).play("out");
            sym.getSymbol("Symbol_1").play("in");
         }
         else {
            sym.getSymbol("Symbol_1").play("shortIn");
         }
         sym.setVariable("current", "Symbol_1");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_markt_btn}", "click", function(sym, e) {
         // insert code for mouse click here
         var current = sym.getVariable("current");
         if (current != "") {
            sym.getSymbol(current).play("out");
            sym.getSymbol("marketing_sym").play("in");
         }
         else {
            sym.getSymbol("marketing_sym").play("shortIn");
         }
         sym.setVariable("current", "marketing_sym");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_finan_btn}", "click", function(sym, e) {
         // insert code for mouse click here
         var current = sym.getVariable("current");
         if (current != "") {
            sym.getSymbol(current).play("out");
            sym.getSymbol("finance_sym").play("in");
         }
         else {
            sym.getSymbol("finance_sym").play("shortIn");
         }
         sym.setVariable("current", "finance_sym");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_events_btn}", "click", function(sym, e) {
         // insert code for mouse click here
         var current = sym.getVariable("current");
         if (current != "") {
            sym.getSymbol(current).play("out");
            sym.getSymbol("events_sym").play("in");
         }
         else {
            sym.getSymbol("events_sym").play("shortIn");
         }
         sym.setVariable("current", "events_sym");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_optrans_btn}", "click", function(sym, e) {
         // insert code for mouse click here
         var current = sym.getVariable("current");
         if (current != "") {
            sym.getSymbol(current).play("out");
            sym.getSymbol("op_sym").play("in");
         }
         else {
            sym.getSymbol("op_sym").play("shortIn");
         }
         sym.setVariable("current", "op_sym");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_overall_btn}", "click", function(sym, e) {
         // insert code for mouse click here
         var current = sym.getVariable("current");
         if (current != "") {
            sym.getSymbol(current).play("out");
            sym.getSymbol("overall_sym").play("in");
         }
         else {
            sym.getSymbol("overall_sym").play("shortIn");
         }
         sym.setVariable("current", "overall_sym");

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

   //=========================================================
   
   //Edge symbol: 'Symbol_1'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 2467, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

   })("Symbol_1");
   //Edge symbol end:'Symbol_1'

   //=========================================================
   
   //Edge symbol: 'creatives'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 2533, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

   })("creatives");
   //Edge symbol end:'creatives'

   //=========================================================
   
   //Edge symbol: 'marketing_sym'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 2267, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

   })("marketing_sym");
   //Edge symbol end:'marketing_sym'

   //=========================================================
   
   //Edge symbol: 'finance_sym'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1800, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

   })("finance_sym");
   //Edge symbol end:'finance_sym'

   //=========================================================
   
   //Edge symbol: 'events_sym'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1933, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

   })("events_sym");
   //Edge symbol end:'events_sym'

   //=========================================================
   
   //Edge symbol: 'op_sym'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();
         

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1600, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

   })("op_sym");
   //Edge symbol end:'op_sym'

   //=========================================================
   
   //Edge symbol: 'overall_sym'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1733, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

   })("overall_sym");
   //Edge symbol end:'overall_sym'

})(jQuery, AdobeEdge, "EDGE-80833650");