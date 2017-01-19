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
    </div>

<div id='myModal' class='modal fade' role='dialog'>
  <div class='modal-dialog modal-lg'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>UPDATES</h4>
      </div>
      <div class='modal-body'>
        <p>
        <ul  style='list-style-type: disc;'>
        <li><a href='../Schedule Elan & Nvision 2017.xlsx' target='_blank'>Events Schedule</a> Updated</li>
      <li>Camping & Bonfire Night Details Can Be Found <a href='../camping.pdf' target='_blank'>Here</a></li>
      <li><a href='http://www.meraevents.com/event/elan-and-nvision-2017-camping-night' target='_blank'>Click Here </a> To Book For Camping & Bonfire Night</li>
      <li><a href='../hospitality' target='_blank'>Accomodation Details</a> Updated</li>
      <li><a href='../transport.pdf' target='_blank'>Transportation Details</a> Updated</li>
    </ul>
      </p>
      </div>
      <div class='modal-footer'>
        <button type='button' class='data btn btn-default' data-dismiss='modal'>Close</button>
      </div>
    </div>

  </div>
</div>

";
    echo $ans;

 ?>