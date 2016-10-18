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
      
      
      Symbol.bindElementAction(compId, symbolName, "${_Hospi}", "click", function(sym, e) {
         sym.$("Hospi").css({"opacity":"0.4"});
         
         
         sym.$("Infi").css({"opacity":"100"});
         sym.$("Culti").css({"opacity":"100"});
         sym.$("Marketing").css({"opacity":"100"});
         sym.$("Finance").css({"opacity":"100"});

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Culti}", "click", function(sym, e) {
         sym.$("Culti").css({"opacity":"0.4"});
         
         
         sym.$("Infi").css({"opacity":"100"});
         sym.$("Finance").css({"opacity":"100"});
         sym.$("Marketing").css({"opacity":"100"});
         sym.$("Hospi").css({"opacity":"100"});

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Infi}", "click", function(sym, e) {
         sym.$("Infi").css({"opacity":"0.4"});
         
         
         sym.$("Culti").css({"opacity":"100"});
         sym.$("Hospi").css({"opacity":"100"});
         sym.$("Marketing").css({"opacity":"100"});
         sym.$("Finance").css({"opacity":"100"});

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Marketing}", "click", function(sym, e) {
         sym.$("Marketing").css({"opacity":"0.4"});
         
         
         sym.$("Hospi").css({"opacity":"100"});
         sym.$("Infi").css({"opacity":"100"});
         sym.$("Culti").css({"opacity":"100"});
         sym.$("Finance").css({"opacity":"100"});

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${_Finance}", "click", function(sym, e) {
         sym.$("Finance").css({"opacity":"0.4"});
         
         
         sym.$("Marketing").css({"opacity":"100"});
         sym.$("Infi").css({"opacity":"100"});
         sym.$("Culti").css({"opacity":"100"});
         sym.$("Hospi").css({"opacity":"100"});

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 0, function(sym, e) {
         // insert code here
      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

})(jQuery, AdobeEdge, "EDGE-80833650");