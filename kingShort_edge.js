/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "1.5.0",
   minimumCompatibleVersion: "1.5.0",
   build: "1.5.0.217",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'spokes_bridge',
            type:'image',
            rect:['0','0px','550px','496px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"spokes_bridge.png",'0px','0px']
         },
         {
            id:'qcBAkkrXi',
            type:'image',
            rect:['142px','12px','200px','220px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"qcBAkkrXi.png",'0px','0px']
         },
         {
            id:'_8TzByjyTp',
            type:'image',
            rect:['0px','150px','98px','100px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"8TzByjyTp.gif",'0px','0px']
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${__8TzByjyTp}": [
            ["style", "top", '150px'],
            ["style", "height", '100px'],
            ["style", "left", '16px'],
            ["style", "width", '98px']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '550px'],
            ["style", "height", '400px'],
            ["style", "overflow", 'hidden']
         ],
         "${_qcBAkkrXi}": [
            ["style", "height", '220px'],
            ["style", "top", '12px'],
            ["style", "left", '142px'],
            ["style", "width", '200px']
         ],
         "${_spokes_bridge}": [
            ["style", "height", '496px'],
            ["style", "width", '550px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 6000,
         autoPlay: true,
         timeline: [
            { id: "eid6", tween: [ "style", "${__8TzByjyTp}", "left", '445px', { fromValue: '16px'}], position: 0, duration: 5000 },
            { id: "eid9", tween: [ "style", "${__8TzByjyTp}", "left", '550px', { fromValue: '445px'}], position: 5000, duration: 1000 }         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-53969102");
