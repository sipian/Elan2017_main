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
      
      
      

      

      

      

      

      

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_2}", "mouseover", function(sym, e) {
         
         sym.getSymbol("Symbol_2").play("in");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_2}", "mouseout", function(sym, e) {
         sym.playReverse();
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_2}", "click", function(sym, e) {
         
         sym.getSymbol("Symbol_2").play("jump");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_1}", "mouseover", function(sym, e) {
         sym.getSymbol("Symbol_1").play("in");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_1}", "mouseout", function(sym, e) {
         sym.playReverse();
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_3}", "mouseover", function(sym, e) {
         sym.getSymbol("Symbol_3").play("in");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_3}", "mouseout", function(sym, e) {
         sym.playReverse();
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_3}", "click", function(sym, e) {
         sym.getSymbol("Symbol_3").play("jump");
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute for a new window)
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_4}", "mouseover", function(sym, e) {
         sym.getSymbol("Symbol_4").play("in");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_4}", "mouseout", function(sym, e) {
         // play the timeline from the given position (ms or label)
         sym.playReverse();
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_4}", "click", function(sym, e) {
         sym.getSymbol("Symbol_4").play("jump");
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute for a new window)
         
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Symbol_1}", "click", function(sym, e) {
         // insert code for mouse click here
         sym.getSymbol("Symbol_1").play("jump");

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

   //=========================================================
   
   //Edge symbol: 'Symbol_1'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1112, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1509, function(sym, e) {
         
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute for a new window)
         window.open("http://elan.org.in/team.html", "_self");

      });
      //Edge binding end

   })("Symbol_1");
   //Edge symbol end:'Symbol_1'

   //=========================================================
   
   //Edge symbol: 'Symbol_2'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1116, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1500, function(sym, e) {
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute for a new window)
         window.open("http://elan.org.in/sponsors.html", "_self");

      });
      //Edge binding end

   })("Symbol_2");
   //Edge symbol end:'Symbol_2'

   //=========================================================
   
   //Edge symbol: 'Symbol_3'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1122, function(sym, e) {
         // insert code here
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1503, function(sym, e) {
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute for a new window)
         window.open("http://blog.elan.org.in", "_self");

      });
      //Edge binding end

   })("Symbol_3");
   //Edge symbol end:'Symbol_3'

   //=========================================================
   
   //Edge symbol: 'Symbol_4'
   (function(symbolName) {   
   
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1104, function(sym, e) {
         sym.stop();

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 1513, function(sym, e) {
         // Navigate to a new URL in the current window
         // (replace "_self" with appropriate target attribute for a new window)
         window.open("http://blog.elan.org.in", "_self");

      });
      //Edge binding end

   })("Symbol_4");
   //Edge symbol end:'Symbol_4'

})(jQuery, AdobeEdge, "EDGE-5802567");