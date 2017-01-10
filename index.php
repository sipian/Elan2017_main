<?php
include 'Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://mobile.elan.org.in');
    exit(0);
}
?>
<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

      <meta name="description" content="IIT Hyderabad Techno Cultural Fest">

      <meta name="author" content="ELAN 2017">

      <meta name="keyword" content="elan,vision,techno,cultural,management,technical,iit hyderabad, iit,fest, competitions,events,event,hyderabad,iith,students,dance,song , drama , dj , informal , fun,sponsors,games,awesome,workshops,biggies,culti,techy,infi,online,litr , workshop , android , app , development , andro , engine , quadcopter , auto mobile , autonomous , robotics , team">  

      <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimal-ui">  
      <link rel='shortcut icon' href=favicon.ico type='image/x-icon'/>

      <meta name="theme-color" content="#000000">
      <meta property=og:url content='http://elan.org.in/' />
      <meta property=og:type content=website />
      <meta property=og:title content="ELAN 2017"/>
      <meta property=og:description content="ELAN IIT Hyderabad Techno Cultural Fest">
      <meta property=og:image content="https://i.ytimg.com/vi/66HbC68mk2o/hqdefault.jpg"/>


      <link rel="stylesheet" href="styles/main.css">
      <link rel="stylesheet" href="styles/footer3.css">
      <link rel="stylesheet" href="navbar/navbar2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- pre loader link sheets -->
      <link rel='stylesheet prefetch' href='http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/loader.css">
<!-- pre loader link sheets ends  -->

      <title>ELAN 2017</title>

      <style type="text/css">
         @font-face {
         font-family: chelsea;
         src: url('fonts/chelsea2/ChelseaAlternates.ttf');
         }
         b {
    color: #F06D06;
    font: 200 30px/1em chelsea;
    }
    #element_to_pop_up , #element_to_pop_up_image { 
    background-color:#fff;
    border-radius:15px;
    color:#000;
    display:none; 
    padding:20px;
    min-width:400px;
    min-height: 180px;
}
.b-close{
    cursor:pointer;
    position:absolute;
    right:10px;
    top:5px;
}
      </style>

   </head>
   <body class="site de" style="height: 100%;">
<?php include 'analyticstracking.php'; ?>
  <!-- Preloader with Bootstrap Progress Bar -->
<div class='loader'>
   <div class='loader-container'>  
   <div style="text-align: center;">
   <img src="images/loading.png" id="loadImg" style='width:100%;' border="0" alt="Null">
   </div>
    <div class='progress progress-striped active'>
      <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
    </div>
  </div>
</div>

    <div id="nav-outter"  style="z-index: 1;">
        <nav id="topNavBar">
        <div  style="position:fixed;left:4px;top:-5px;" class="qwerDIV">
               <img src="images/cyient.png" class="qwer" style="float: left;width: 150px;height:55px;" usemap="#cyient">
               <map name="cyient">
                  <area shape="rect" coords="0,0,150,55" href="http://www.cyient.com/" alt="CYIENT" target="_blank" style="outline: none;">
               </map>
        </div>
        <div class="center1">
        <a href="">
            <img src="images/logo6.png" style="float: left;margin-top: 23px; margin-left: -105px;width: 300px;height: 120px;" id="logo">
        </a>
        </div>
        
        <div class="right" style="background-color: black; text-align: center;">

                <a href="#" style="font-family: chelsea;padding-right: 10px;letter-spacing: 1.5px;font-weight: lighter;color: white;"> UPDATES</a>
        </div>

        </nav>
    </div>
    <div id="element_to_pop_up" style="display: none;">
    <a class="b-close"><span class="glyphicon glyphicon-remove"></span><a/>
    <h2>UPDATES</h2>
    <ul style="list-style-type: none;float: left;">
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 1 IS Going To HAppen</li>
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 2 IS Going To HAppen</li>
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 3 IS Going To HAppen</li>
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 1 IS Going To HAppen</li>
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 2 IS Going To HAppen</li>
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 3 IS Going To HAppen</li>
    </ul>
</div>


   <div id="element_to_pop_up_image" style="display: none;">
    <a class="b-close"><span class="glyphicon glyphicon-remove"></span><a/>
    <img src="images/test13.jpg"/>
</div>


      


      <div class="responsive" style="height: 90px;">&nbsp;</div>
      <div class="site__main-content scrollable" id="back" style="
        background-image: url('images/test13.jpg');  
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        overflow-y: hidden;
        margin-top: -130px;
        ">
         <section class="main-content__section section__home" data-anchor="home"  >
            <div class="home__bg-container" >
               <div class="home__bg-container-left1"  style="text-align:center;z-index: 1;" >
                  <div class="home__bg-island-meyer animation__float_01 js-island-meyer">
                  </div>
               </div>
               <div class="home__bg-container-center1"  style="text-align:center;z-index: 1;">
                  <br>
                  <div class="home__bg-island-miller animation__float_02 js-island-miller">
                  </div>
               </div>
               <div class="home__bg-container-right1"  style="text-align:center;z-index: 1;">
                  <div class="home__bg-island-smith animation__float_03 js-island-smith">
                  </div>
               </div>
               <div class="home__bg-container-left2"  style="text-align:center;z-index: 1;">
                  <div class="home__bg-island-helmet animation__float_04 js-island-helmet">
                  </div>
               </div>
               <div class="home__bg-container-left1 home__bg-container-trans">
                  <div class="home__bg-hole-meyer"></div>
               </div>
               <div class="home__bg-container-center1 home__bg-container-trans">
                  <div class="home__bg-hole-miller"></div>
               </div>
               <div class="home__bg-container-right1 home__bg-container-trans">
                  <div class="home__bg-hole-smith"></div>
               </div>
               <div class="home__bg-container-left2 home__bg-container-trans">
                  <div class="home__bg-hole-helmet"></div>
               </div>
            </div>
         </section>
      </div>

      
      <br><br><br>
      <div class="footer">
         <div class="container"  style="float: left;">
    <div class="row" >
  
    <div class="bottomLinkDiv">
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text1">
                           <a href="literanza" class="linkBT"><span class="spot"></span>LITERANZA</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv">
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text2">
                           <a href="events/#emblazon" class="linkBT"><span class="spot"></span>EMBLAZON</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv" >
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text3">
                           <a href="archives"  class="linkBT"><span class="spot"></span>ARCHIVES</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv" >
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text4">
                           <a href="hospitality"  class="linkBT"><span class="spot"></span>HOSPITALITY</a>
                        </div>
                     </svg>
                  </div>
               </div>

    <div class="bottomLinkDiv">
  <div class="svg-wrapper1" >
  <svg height="40" width="150">
  <rect id="shape1" height="40" width="150" />
  <div id="text5">
    <a href="workshops" class="linkBT"><span class="spot"></span>&nbsp;&nbsp;WORKSHOPS</a>
  </div>
  </svg>
  </div>
    </div>





  <div class="bottomLinkDiv">
  <div class="svg-wrapper1" >
  <svg height="40" width="150">
  <rect id="shape1" height="40" width="150" />
  <div id="text6">
    <a href="http://blog.elan.org.in" target="_blank" class="linkBT"><span class="spot"></span>BLOG</a>
  </div>
  </svg>
  </div>
    </div>

        <?php
                        session_start();
                             if(!isset($_SESSION["id"]))
                             echo "
<div class=\"bottomLinkDiv\">
  <div class=\"svg-wrapper1\"  style=\"background-color:white;\">
  <svg height=\"40\" width=\"150\">
  <rect id=\"shape1\" height=\"40\" width=\"150\" />
  <div id=\"text7\">
    <a href=\"https://id.nvision.org.in/signin?url=http://elan.org.in/token.php\" class=\"linkBT\" style=\"color:black;\"><span class=\"spot\"></span>REGISTER</a>
  </div>
  </svg>
  </div>
    </div>";
    else echo "
<div class=\"bottomLinkDiv\">
  <div class=\"svg-wrapper1\"  style=\"background-color:white;\">
  <svg height=\"40\" width=\"150\">
  <rect id=\"shape1\" height=\"40\" width=\"150\" />
  <div id=\"text7\">
    <a href=\"dashboard.php\" class=\"linkBT\" style=\"color:black;\"><span class=\"spot\"></span>DASHBOARD</a>
  </div>
  </svg>
  </div>
    </div>";
                        ?>


    </div>
</div>
<main>
  <ul id='services'>
    <li>
  <a href="https://www.facebook.com/elan.iithyderabad/?fref=ts" target="_blank" style="text-decoration: none;">
       <div class='fa fa-facebook'></div>
  </a>
    </li>
    <li>
  <a href="https://twitter.com/ELAN_IITH" target="_blank" style="text-decoration: none;">
      <div class='fa fa-twitter'></div>
  </a>
    </li>
    <li>
  <a href="https://www.youtube.com/user/ElanIITHyderabad" target="_blank" style="text-decoration: none;">
      <div class='fa fa-youtube'></div>
  </a>
    </li>
    <li>
  <a href="https://www.instagram.com/elan_iith/" target="_blank" style="text-decoration: none;">
      <div class='fa fa-instagram'></div>
  </a>
    </li>
  </ul>
</main>
      </div>
      <img src="images/explosion.png" style="display: none;">
   </body>

   <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>

   <script src="scripts/vendor.js"></script>
   
<!--     <script src="navbar/navbar1.js"></script>
 -->   <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
            <script src="scripts/main.js"></script>

   <script type="text/javascript">
                 $(document).ready(function () {
                  $('.center').html(`<img src="images/logo6.png" style="float: left;margin-top: 50px; margin-left: -105px;width: 400px;height: 145px;" id="logo" usemap="#mapname">`);
        })
                
   </script>
   <script type="text/javascript">
      $(document).ready(function(argument) {
        /*================================================================================
 * @name: bPopup - if you can't get it up, use bPopup
 * @author: (c)Bjoern Klinggaard (twitter@bklinggaard)
 * @demo: http://dinbror.dk/bpopup
 * @version: 0.9.4.min
 ================================================================================*/
 (function(b){b.fn.bPopup=function(z,F){function K(){a.contentContainer=b(a.contentContainer||c);switch(a.content){case "iframe":var h=b('<iframe class="b-iframe" '+a.iframeAttr+"></iframe>");h.appendTo(a.contentContainer);r=c.outerHeight(!0);s=c.outerWidth(!0);A();h.attr("src",a.loadUrl);k(a.loadCallback);break;case "image":A();b("<img />").load(function(){k(a.loadCallback);G(b(this))}).attr("src",a.loadUrl).hide().appendTo(a.contentContainer);break;default:A(),b('<div class="b-ajax-wrapper"></div>').load(a.loadUrl,a.loadData,function(){k(a.loadCallback);G(b(this))}).hide().appendTo(a.contentContainer)}}function A(){a.modal&&b('<div class="b-modal '+e+'"></div>').css({backgroundColor:a.modalColor,position:"fixed",top:0,right:0,bottom:0,left:0,opacity:0,zIndex:a.zIndex+t}).appendTo(a.appendTo).fadeTo(a.speed,a.opacity);D();c.data("bPopup",a).data("id",e).css({left:"slideIn"==a.transition||"slideBack"==a.transition?"slideBack"==a.transition?g.scrollLeft()+u:-1*(v+s):l(!(!a.follow[0]&&m||f)),position:a.positionStyle||"absolute",top:"slideDown"==a.transition||"slideUp"==a.transition?"slideUp"==a.transition?g.scrollTop()+w:x+-1*r:n(!(!a.follow[1]&&p||f)),"z-index":a.zIndex+t+1}).each(function(){a.appending&&b(this).appendTo(a.appendTo)});H(!0)}function q(){a.modal&&b(".b-modal."+c.data("id")).fadeTo(a.speed,0,function(){b(this).remove()});a.scrollBar||b("html").css("overflow","auto");b(".b-modal."+e).unbind("click");g.unbind("keydown."+e);d.unbind("."+e).data("bPopup",0<d.data("bPopup")-1?d.data("bPopup")-1:null);c.undelegate(".bClose, ."+a.closeClass,"click."+e,q).data("bPopup",null);H();return!1}function G(h){var b=h.width(),e=h.height(),d={};a.contentContainer.css({height:e,width:b});e>=c.height()&&(d.height=c.height());b>=c.width()&&(d.width=c.width());r=c.outerHeight(!0);s=c.outerWidth(!0);D();a.contentContainer.css({height:"auto",width:"auto"});d.left=l(!(!a.follow[0]&&m||f));d.top=n(!(!a.follow[1]&&p||f));c.animate(d,250,function(){h.show();B=E()})}function L(){d.data("bPopup",t);c.delegate(".bClose, ."+a.closeClass,"click."+e,q);a.modalClose&&b(".b-modal."+e).css("cursor","pointer").bind("click",q);M||!a.follow[0]&&!a.follow[1]||d.bind("scroll."+e,function(){B&&c.dequeue().animate({left:a.follow[0]?l(!f):"auto",top:a.follow[1]?n(!f):"auto"},a.followSpeed,a.followEasing)}).bind("resize."+e,function(){w=y.innerHeight||d.height();u=y.innerWidth||d.width();if(B=E())clearTimeout(I),I=setTimeout(function(){D();c.dequeue().each(function(){f?b(this).css({left:v,top:x}):b(this).animate({left:a.follow[0]?l(!0):"auto",top:a.follow[1]?n(!0):"auto"},a.followSpeed,a.followEasing)})},50)});a.escClose&&g.bind("keydown."+e,function(a){27==a.which&&q()})}function H(b){function d(e){c.css({display:"block",opacity:1}).animate(e,a.speed,a.easing,function(){J(b)})}switch(b?a.transition:a.transitionClose||a.transition){case "slideIn":d({left:b?l(!(!a.follow[0]&&m||f)):g.scrollLeft()-(s||c.outerWidth(!0))-C});break;case "slideBack":d({left:b?l(!(!a.follow[0]&&m||f)):g.scrollLeft()+u+C});break;case "slideDown":d({top:b?n(!(!a.follow[1]&&p||f)):g.scrollTop()-(r||c.outerHeight(!0))-C});break;case "slideUp":d({top:b?n(!(!a.follow[1]&&p||f)):g.scrollTop()+w+C});break;default:c.stop().fadeTo(a.speed,b?1:0,function(){J(b)})}}function J(b){b?(L(),k(F),a.autoClose&&setTimeout(q,a.autoClose)):(c.hide(),k(a.onClose),a.loadUrl&&(a.contentContainer.empty(),c.css({height:"auto",width:"auto"})))}function l(a){return a?v+g.scrollLeft():v}function n(a){return a?x+g.scrollTop():x}function k(a){b.isFunction(a)&&a.call(c)}function D(){x=p?a.position[1]:Math.max(0,(w-c.outerHeight(!0))/2-a.amsl);v=m?a.position[0]:(u-c.outerWidth(!0))/2;B=E()}function E(){return w>c.outerHeight(!0)&&u>c.outerWidth(!0)}b.isFunction(z)&&(F=z,z=null);var a=b.extend({},b.fn.bPopup.defaults,z);a.scrollBar||b("html").css("overflow","hidden");var c=this,g=b(document),y=window,d=b(y),w=y.innerHeight||d.height(),u=y.innerWidth||d.width(),M=/OS 6(_\d)+/i.test(navigator.userAgent),C=200,t=0,e,B,p,m,f,x,v,r,s,I;c.close=function(){a=this.data("bPopup");e="__b-popup"+d.data("bPopup")+"__";q()};return c.each(function(){b(this).data("bPopup")||(k(a.onOpen),t=(d.data("bPopup")||0)+1,e="__b-popup"+t+"__",p="auto"!==a.position[1],m="auto"!==a.position[0],f="fixed"===a.positionStyle,r=c.outerHeight(!0),s=c.outerWidth(!0),a.loadUrl?K():A())})};b.fn.bPopup.defaults={amsl:50,appending:!0,appendTo:"body",autoClose:!1,closeClass:"b-close",content:"ajax",contentContainer:!1,easing:"swing",escClose:!0,follow:[!0,!0],followEasing:"swing",followSpeed:500,iframeAttr:'scrolling="no" frameborder="0"',loadCallback:!1,loadData:!1,loadUrl:!1,modal:!0,modalClose:!0,modalColor:"#000",onClose:!1,onOpen:!1,opacity:0.7,position:["auto","auto"],positionStyle:"absolute",scrollBar:!0,speed:250,transition:"fadeIn",transitionClose:!1,zIndex:9997}})(jQuery);


            if($(window).height()>700)
                    $("#back").css("margin-top","-80px");
                else
                    $("#back").css("margin-top","-130px");

            $(window).resize(function () {
                if($(window).height()>700)
                    $("#back").css("margin-top","-80px");
                else
                    $("#back").css("margin-top","-130px");

            });
          $(".home__bg-island-meyer.animation__float_01.js-island-meyer").click(function() {
                $("#about").html("");
                $(".home__bg-island-meyer").html("");
              setTimeout(function(){ 
                window.location = "about"; }, 1000);
          });
      
          $(".home__bg-island-miller.animation__float_02.js-island-miller").click(function() {
                $("#events").html("");
              setTimeout(function(){  window.location = "events"; }, 1000);
          });
      
          $(".home__bg-island-smith.animation__float_03.js-island-smith").click(function() {
                $("#sponsors").html("");
              setTimeout(function(){  window.location = "sponsors"; }, 1000);
          });
      
          $(".home__bg-island-helmet.animation__float_04.js-island-helmet").click(function() {
                $("#team").html("");
              setTimeout(function(){  window.location = "team"; }, 1000);
          });
          $(".right").click(function () {
            $('#element_to_pop_up').bPopup({
               modalClose: false,
            opacity: 0.6,
            positionStyle: 'fixed', //'fixed' or 'absolute'

              speed: 650,
            transition: 'slideIn',
      transitionClose: 'slideBack'
            });
          });

      })
   </script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index_main.js"></script>
</html>