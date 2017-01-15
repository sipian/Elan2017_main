<?php 
session_start();
$ans = '
<div class=\'loader\'>
   <div class=\'loader-container\'>  
   <img src="../images/loading.png" id="loadImg" style=\'width:100%;box-shadow:none;\' border="0" alt="Null">
    <div class=\'progress progress-striped active\'>
      <div class=\'progress-bar progress-bar-color\' id=\'bar\' role=\'progressbar\' style=\'width: 0%;\'></div>
    </div>
  </div>
</div>

    <div id="nav-outter"  style="z-index: 3;">
        <nav id="topNavBar">
        <div  style="position:fixed;left:4px;top:-5px;" class="qwerDIV">
               <img src="../images/cyient.png" class="qwer" style="float: left;width: 150px;height:55px;" usemap="#cyient">
               <map name="cyient">
                  <area shape="rect" coords="0,0,150,55" href="http://www.cyient.com/" alt="CYIENT" target="_blank" style="outline: none;">
               </map>
        </div>
        <div class="left">
                        <a class="scroll" href="../about">About</a>
                        <a class="scroll" href="../events">Events</a>
                        
        </div>
        
        <div class="center1">
        <a href="../">
            <img src="../images/logo6.png" style="float: left;margin-top: 23px; margin-left: -105px;width: 300px;height: 120px;" id="logo">
        </a>
        </div>
        
        <div class="right">
                        <a class="scroll" href="../team">Team</a>
                        <a class="scroll" href="../sponsors">Sponsors</a>';


                             if(isset($_SESSION["id"]))
                             $ans .= "
                                <div class=\"dropdown\">
                                    <a class=\"dropbtn\" href=\"#\"><span class=\"glyphicon glyphicon-user\"></span></a>
                                    <div class=\"dropdown-content\">
                                        <a class=\"scroll\" href=\"../dashboard.php\">Dashboard</a>
                                        <a class=\"scroll\" href=\"../signout.php\">Sign Out</a>
                                    </div>
                                </div>";
        $ans .= "</div>
        </nav>
    </div>";
    echo $ans;

 ?>