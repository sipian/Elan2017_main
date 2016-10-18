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
            id:'hospiCoord1',
            type:'image',
            rect:['45.6%','-25%','10.2%','18.1%','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"hospiCoord1.png",'50%','50%','130.03px','130.02px']
         },
         {
            id:'hospiCoord2',
            type:'image',
            rect:['45.6%','-22.6%','10.2%','18.1%','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"hospiCoord2.png",'50%','50%','130px','130px']
         },
         {
            id:'cpCoord2',
            type:'image',
            rect:['45.6%','-22.6%','10.2%','18.1%','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"cpCoord2.png",'50%','50%','130px','130px']
         },
         {
            id:'cpCoord12',
            type:'image',
            rect:['45.6%','-22.6%','10.2%','18.1%','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"cpCoord12.png",'50%','50%','130px','130px']
         },
         {
            id:'hospiCore',
            type:'image',
            rect:['45.6%','-23.3%','10.2%','18.1%','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"hospiCore.png",'50%','50%','130px','130px']
         },
         {
            id:'creatCood3',
            type:'image',
            rect:['585px','-153px','130px','130px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"creatCood3.png",'0px','0px']
         },
         {
            id:'Hospi',
            type:'rect',
            rect:['167px','54px','138px','36px','auto','auto'],
            fill:["rgba(0,0,0,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"],
            c:[
            {
               id:'Text',
               type:'text',
               rect:['39px','4px','auto','auto','auto','auto'],
               text:"hospi<br>",
               font:['Arial, Helvetica, sans-serif',24,"rgba(255,245,245,1.00)","normal","none",""]
            }]
         },
         {
            id:'creatCood2',
            type:'image',
            rect:['591px','-147px','130px','130px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"creatCood2.png",'0px','0px']
         },
         {
            id:'creatCood1',
            type:'image',
            rect:['596px','-141px','130px','130px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"creatCood1.png",'0px','0px']
         },
         {
            id:'creatCore',
            type:'image',
            rect:['584px','-147px','130px','130px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"creatCore.png",'0px','0px']
         },
         {
            id:'Culti',
            type:'rect',
            rect:['372px','54px','138px','36px','auto','auto'],
            fill:["rgba(0,0,0,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"],
            c:[
            {
               id:'Text2',
               type:'text',
               rect:['44px','4px','auto','auto','auto','auto'],
               text:"Culti<br>",
               align:"left",
               font:['Arial, Helvetica, sans-serif',24,"rgba(255,245,245,1)","normal","none","normal"]
            }]
         },
         {
            id:'Infi',
            type:'rect',
            rect:['592px','54px','138px','36px','auto','auto'],
            fill:["rgba(0,0,0,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"],
            c:[
            {
               id:'inf',
               type:'text',
               rect:['49px','4px','51px','auto','auto','auto'],
               text:"Infi",
               align:"left",
               font:['Arial, Helvetica, sans-serif',24,"rgba(255,245,245,1)","normal","none","normal"]
            }]
         },
         {
            id:'Marketing',
            type:'rect',
            rect:['795px','54px','138px','36px','auto','auto'],
            fill:["rgba(0,0,0,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"],
            c:[
            {
               id:'Text4',
               type:'text',
               rect:['17px','4px','auto','auto','auto','auto'],
               text:"Marketing",
               align:"left",
               font:['Arial, Helvetica, sans-serif',24,"rgba(255,245,245,1)","normal","none","normal"]
            }]
         },
         {
            id:'Finance',
            type:'rect',
            rect:['1002px','54px','138px','36px','auto','auto'],
            fill:["rgba(0,0,0,1.00)"],
            stroke:[0,"rgba(0,0,0,1)","none"],
            c:[
            {
               id:'Finan',
               type:'text',
               rect:['20px','4px','auto','auto','auto','auto'],
               text:"Finance",
               align:"left",
               font:['Arial, Helvetica, sans-serif',24,"rgba(255,245,245,1)","normal","none","normal"]
            }]
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_hospiCore}": [
            ["style", "top", '-21.25%'],
            ["style", "left", '45.63%'],
            ["style", "background-position", [50,50], {valueTemplate:'@@0@@% @@1@@%'} ]
         ],
         "${_creatCood2}": [
            ["style", "left", '591px'],
            ["style", "top", '-147px']
         ],
         "${_creatCood1}": [
            ["style", "left", '596px'],
            ["style", "top", '-141px']
         ],
         "${_hospiCoord2}": [
            ["style", "top", '-17.78%'],
            ["style", "left", '45.55%'],
            ["style", "background-position", [50,50], {valueTemplate:'@@0@@% @@1@@%'} ]
         ],
         "${_Hospi}": [
            ["color", "background-color", 'rgba(0,0,0,1.00)'],
            ["style", "left", '167px'],
            ["style", "width", '138px']
         ],
         "${_inf}": [
            ["style", "top", '4px'],
            ["style", "left", '49px'],
            ["style", "width", '51px']
         ],
         "${_Finan}": [
            ["style", "left", '20px'],
            ["style", "top", '4px']
         ],
         "${_Finance}": [
            ["color", "background-color", 'rgba(0,0,0,1.00)'],
            ["style", "top", '54px'],
            ["style", "left", '1002px'],
            ["style", "width", '138px']
         ],
         "${_cpCoord2}": [
            ["style", "top", '-17.78%'],
            ["style", "left", '45.7%'],
            ["style", "background-position", [50,50], {valueTemplate:'@@0@@% @@1@@%'} ]
         ],
         "${_Text4}": [
            ["style", "left", '17px'],
            ["style", "top", '4px']
         ],
         "${_creatCood3}": [
            ["style", "left", '585px'],
            ["style", "top", '-153px']
         ],
         "${_Marketing}": [
            ["color", "background-color", 'rgba(0,0,0,1.00)'],
            ["style", "top", '54px'],
            ["style", "left", '795px'],
            ["style", "width", '138px']
         ],
         "${_creatCore}": [
            ["style", "left", '584px'],
            ["style", "top", '-147px']
         ],
         "${_Text2}": [
            ["style", "left", '44px'],
            ["style", "top", '4px']
         ],
         "${_Text}": [
            ["style", "top", '4px'],
            ["style", "left", '39px'],
            ["color", "color", 'rgba(255,245,245,1.00)']
         ],
         "${_cpCoord12}": [
            ["style", "top", '-17.78%'],
            ["style", "left", '45.7%'],
            ["style", "background-position", [50,50], {valueTemplate:'@@0@@% @@1@@%'} ]
         ],
         "${_Infi}": [
            ["color", "background-color", 'rgba(0,0,0,1.00)'],
            ["style", "top", '54px'],
            ["style", "left", '592px'],
            ["style", "width", '138px']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "min-width", '350px'],
            ["style", "overflow", 'hidden'],
            ["style", "height", '100%'],
            ["style", "width", '100%']
         ],
         "${_Culti}": [
            ["color", "background-color", 'rgba(0,0,0,1.00)'],
            ["style", "top", '54px'],
            ["style", "left", '372px'],
            ["style", "width", '138px']
         ],
         "${_hospiCoord1}": [
            ["style", "top", '-19.58%'],
            ["style", "left", '45.7%'],
            ["style", "background-position", [50,50], {valueTemplate:'@@0@@% @@1@@%'} ]
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 2000,
         autoPlay: true,
         timeline: [
            { id: "eid14", tween: [ "style", "${_hospiCoord2}", "top", '-16.67%', { fromValue: '-17.78%'}], position: 0, duration: 71 },
            { id: "eid17", tween: [ "style", "${_hospiCoord2}", "top", '25.56%', { fromValue: '-16.67%'}], position: 71, duration: 929 },
            { id: "eid61", tween: [ "style", "${_hospiCoord2}", "top", '25.83%', { fromValue: '25.56%'}], position: 1000, duration: 142 },
            { id: "eid63", tween: [ "style", "${_hospiCoord2}", "top", '67.22%', { fromValue: '25.83%'}], position: 1142, duration: 858 },
            { id: "eid13", tween: [ "style", "${_cpCoord12}", "top", '-16.67%', { fromValue: '-17.78%'}], position: 0, duration: 71 },
            { id: "eid16", tween: [ "style", "${_cpCoord12}", "top", '25.69%', { fromValue: '-16.67%'}], position: 71, duration: 929 },
            { id: "eid67", tween: [ "style", "${_cpCoord12}", "top", '67.22%', { fromValue: '25.69%'}], position: 1000, duration: 1000 },
            { id: "eid58", tween: [ "style", "${_hospiCoord1}", "left", '13.05%', { fromValue: '45.7%'}], position: 1142, duration: 858 },
            { id: "eid12", tween: [ "style", "${_cpCoord2}", "top", '-16.67%', { fromValue: '-17.78%'}], position: 0, duration: 71 },
            { id: "eid15", tween: [ "style", "${_cpCoord2}", "top", '25.69%', { fromValue: '-16.67%'}], position: 71, duration: 929 },
            { id: "eid69", tween: [ "style", "${_cpCoord2}", "top", '67.22%', { fromValue: '25.69%'}], position: 1000, duration: 1000 },
            { id: "eid18", tween: [ "style", "${_hospiCore}", "top", '-17.78%', { fromValue: '-21.25%'}], position: 0, duration: 71 },
            { id: "eid19", tween: [ "style", "${_hospiCore}", "top", '25.56%', { fromValue: '-17.78%'}], position: 71, duration: 929 },
            { id: "eid62", tween: [ "style", "${_hospiCoord2}", "left", '34.77%', { fromValue: '45.55%'}], position: 1142, duration: 858 },
            { id: "eid7", tween: [ "style", "${_hospiCoord1}", "top", '-12.5%', { fromValue: '-19.58%'}], position: 0, duration: 71 },
            { id: "eid8", tween: [ "style", "${_hospiCoord1}", "top", '25.56%', { fromValue: '-12.5%'}], position: 71, duration: 929 },
            { id: "eid57", tween: [ "style", "${_hospiCoord1}", "top", '25.69%', { fromValue: '25.56%'}], position: 1000, duration: 142 },
            { id: "eid59", tween: [ "style", "${_hospiCoord1}", "top", '67.22%', { fromValue: '25.69%'}], position: 1142, duration: 858 },
            { id: "eid68", tween: [ "style", "${_cpCoord2}", "left", '55%', { fromValue: '45.7%'}], position: 1000, duration: 1000 },
            { id: "eid66", tween: [ "style", "${_cpCoord12}", "left", '76.41%', { fromValue: '45.7%'}], position: 1000, duration: 1000 }         ]
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
})(jQuery, AdobeEdge, "EDGE-80833650");
