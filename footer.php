<?php 
    session_start();
$ans = '<div class="footer">
<div class="container"  style="float: left;">
    <div ';
    if($sponsorPage == 0) $ans .= 'class="row"';
      $ans .= ' >
               <div class="bottomLinkDiv">
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text2">
                           <a href="../proshows" class="linkBT"><span class="spot"></span>&nbsp;&nbsp;
                           &nbsp;&nbsp;&nbsp;PROSHOWS</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv" >
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text3">
                           <a href="../archives"  class="linkBT"><span class="spot"></span>&nbsp;&nbsp;&nbsp;ARCHIVES</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv" >
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text4">
                           <a href="../hospitality"  class="linkBT"><span class="spot"></span>HOSPITALITY</a>
                        </div>
                     </svg>
                  </div>
               </div>

    <div class="bottomLinkDiv">
    <div class="svg-wrapper1" >
    <svg height="40" width="150">
    <rect id="shape1" height="40" width="150" />
    <div id="text5">
      <a href="../workshops" class="linkBT"><span class="spot"></span>&nbsp;&nbsp;WORKSHOPS</a>
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
    </div>';

        if(!isset($_SESSION["id"]))
            $ans .= '
<div class="bottomLinkDiv">
  <div class="svg-wrapper1"  style="background-color:white;">
  <svg height="40" width="150">
  <rect id="shape1" height="40" width="150" />
  <div id="text7">
    <a href="https://id.nvision.org.in/signin?url=http://elan.org.in/token.php" class="linkBT" style="color:black;"><span class="spot"></span>REGISTER</a>
  </div>
  </svg>
  </div>
    </div>';
$ans .= '</div>
</div>
<main>
  <ul id=\'services\'>
    <li>
    <a href="https://www.facebook.com/elan.iithyderabad/?fref=ts" target="_blank" style="text-decoration: none;">
         <div class=\'fa fa-facebook\'></div>
    </a>
    </li>
    <li>
    <a href="https://twitter.com/ELAN_IITH" target="_blank" style="text-decoration: none;">
        <div class=\'fa fa-twitter\'></div>
    </a>
    </li>
    <li>
    <a href="https://www.youtube.com/user/ElanIITHyderabad" target="_blank" style="text-decoration: none;">
        <div class=\'fa fa-youtube\'></div>
    </a>
    </li>
    <li>
    <a href="https://www.instagram.com/elan_iith/" target="_blank" style="text-decoration: none;">
        <div class=\'fa fa-instagram\'></div>
    </a>
    </li>
  </ul>
</main>
</div>';
echo $ans;
 ?>