
(function(compId){"use strict";var _=null,y=true,n=false,x2='5.0.0.375',x1='5.0.0',x5='%',lf='left',x7='Arial, Helvetica, sans-serif',e13='${Stage}',l='normal',x6='150',w='width',x9='none solid rgb(0, 0, 0)',x3='rgba(192,192,192,1)',x='text',e12='${Text}',x11='rgba(255,255,255,1)',tp='top',m='rect',x8='400',x10='break-word',xc='rgba(0,0,0,1)',i='none';var s4="Simple Sample Animation";var im='',aud='',vid='',js='',fonts={},opts={'gAudioPreloadPreference':'auto','gVideoPreloadPreference':'auto'},resources=[],scripts=[],symbols={"stage":{v:x1,mv:x1,b:x2,stf:i,cg:i,rI:n,cn:{dom:[{id:'Rectangle',t:m,r:['3.1%','5.3%','94.1%','90.2%','auto','auto'],f:[x3],s:[0,xc,i]},{id:'Text',t:x,r:['5%','47.3%','50.4%','6.4%','auto','auto'],text:s4,n:[x7,[x6,x5],xc,x8,x9,l,x10,l]}],style:{'${Stage}':{isStage:true,r:['null','null','100%','100%','auto','auto'],overflow:'hidden',f:[x11]}}},tt:{d:4000,a:y,data:[["eid10",lf,0,1000,"linear",e12,'5.04%','24.78%'],["eid12",lf,1000,1000,"linear",e12,'24.78%','44.71%'],["eid14",lf,2000,1000,"linear",e12,'44.71%','24.75%'],["eid16",lf,3000,1000,"linear",e12,'24.75%','5.96%'],["eid11",tp,0,1000,"linear",e12,'47.25%','7.63%'],["eid13",tp,1000,1000,"linear",e12,'7.63%','47.37%'],["eid15",tp,2000,1000,"linear",e12,'47.37%','87.18%'],["eid17",tp,3000,1000,"linear",e12,'87.18%','47.32%'],["eid1",w,0,0,"linear",e13,'100%','100%']]}}};AdobeEdge.registerCompositionDefn(compId,symbols,fonts,scripts,resources,opts);})("EDGE-340995556");
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;Edge.registerEventBinding(compId,function($){
//Edge symbol: 'stage'
(function(symbolName){Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",4000,function(sym,e){this.play(0)});
//Edge binding end
})("stage");
//Edge symbol end:'stage'
})})(AdobeEdge.$,AdobeEdge,"EDGE-340995556");