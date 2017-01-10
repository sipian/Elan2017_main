function getLitrContent(argument) {

    if(argument=='mrdetective'){
    let ret = `\`
        <p><br></p>
    <div class='contest' 
      style="padding-bottom: 150px;
      padding-left:20px;
      background-image: url('images/event_details.png');  
      background-repeat:  no-repeat;
      background-attachment: scroll;
      background-size: contain;
    ">
    <br><br><br><br><br><br><br>
    <br><br><br><br>
    <div class="container" style="
        width:1040px;
        padding-left:35px;
        text-align:left;
        max-height: 1280px;
        overflow-y:auto;
        overflow-x:hidden;
        ">
        <div class="heading">
            <div class="col-lg-1" id="backLitr">
<img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <h3><strong style="font-weight: 900;margin-left:45px;">MR&nbsp;DETECTIVE</strong> </h3>
            </div>
            <br><br><br>
        </div>
        <div class="photo">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
<img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:6.5%;" src="images/litr/mrdetective.jpg">
  </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-5">&nbsp;</div>
            <div class="col-lg-6">
            <button type="button" class="btn btn-primary btn-lg mrdetectiveButton" style="align:center;">`;
            ret += (events.indexOf('mrdetective')>-1)?"DEREGISTER":"REGISTER";
            ret +=`
            </button></div>
        </div>
        <br>
        <div class="text"  style="font-size:23.5px;">
            <div class="row title">
            </div>


            <div class="row about">
                <h3 style="text-align: center;">ABOUT</h3>
                <div>
                <br>
                 Put your deerstalkers on and get ready to solve the mystery.
                <br><br>
                </div>
            </div>
                        <div class="row details">
                <h3 style="text-align: center;">DETAILS</h3>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 20th , 21st and 22nd of January 2017</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Venue : IIT Hyderabad Permanent Campus</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                    Prize :&nbsp;Coming&nbsp;Soon
                    </div>
                </div>
            </div>
            <br>
                <div class="row rules">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <br>

                <div class="col-lg-5"></div>

                <div class="row">
                    <div class="col-lg-3"  style="margin-left:-12px;">
                &nbsp;Sahil&nbsp;Yerawar
                <br>
                +91-9822977832
                </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
  </div>\``;
    return ret;
    }

  if(argument=='jam'){
    let ret = `\`
        <p><br></p>
    <div class='contest' 
      style="padding-bottom: 150px;
      padding-left:20px;
      background-image: url('images/event_details.png');  
      background-repeat:  no-repeat;
      background-attachment: scroll;
      background-size: contain;
    ">
    <br><br><br><br><br><br><br>
    <br><br><br><br>
    <div class="container" style="
        width:1040px;
        padding-left:35px;
        text-align:left;
        max-height: 1280px;
        overflow-y:auto;
        overflow-x:hidden;
        ">
        <div class="heading">
            <div class="col-lg-1" id="backLitr">
<img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <h3><strong style="font-weight: 900;margin-left:25px;">JUST&nbsp;A&nbsp;MINUTE</strong> </h3>
            </div>
            <br><br><br>
        </div>
        <div class="photo">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
<img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:5.5%;" src="images/litr/jam.jpg">
  </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-5">&nbsp;</div>
            <div class="col-lg-6">
            <button type="button" class="btn btn-primary btn-lg jamButton" style="align:center;">`;
            ret += (events.indexOf('jam')>-1)?"DEREGISTER":"REGISTER";
            ret +=`
            </button></div>
        </div>
        <br>
        <div class="text"  style="font-size:23.5px;">
            <div class="row title">
            </div>


            <div class="row about">
                <h3 style="text-align: center;">ABOUT</h3>
                <div>               
                    Participants are given topics on the spot and they have to speak on them.
                    <br>
                    Err and you will be buzzed and relinquished of the mic
                <br><br>
                </div>
            </div>
                        <div class="row details">
                <h3 style="text-align: center;">DETAILS</h3>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 20th , 21st and 22nd of January 2017</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Venue : IIT Hyderabad Permanent Campus</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                    Prize :&nbsp;Coming&nbsp;Soon
                    </div>
                </div>
            </div>
            <br>
                <div class="row rules">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <br>

                <div class="col-lg-1"></div>

                <div class="row">
                <div class="col-lg-3">
                Shashank&nbsp;Varanasi
                <br>
                +91-8179303345
                <br>
                </div>

                 <div class="col-lg-3"></div>

                 <div class="col-lg-3">
                Gitanjali&nbsp;M
                <br>

                +91-9705512183
                <br>
                </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
  </div>\``;
    return ret;
    }

  if(argument=='wheel_of_fortune'){
    let ret = `\`
        <p><br></p>
    <div class='contest' 
      style="padding-bottom: 150px;
      padding-left:20px;
      background-image: url('images/event_details.png');  
      background-repeat:  no-repeat;
      background-attachment: scroll;
      background-size: contain;
    ">
    <br><br><br><br><br><br><br>
    <br><br><br><br>
    <div class="container" style="
        width:1040px;
        padding-left:35px;
        text-align:left;
        max-height: 1280px;
        overflow-y:auto;
        overflow-x:hidden;
        ">
        <div class="heading">
            <div class="col-lg-1" id="backLitr">
<img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <h3><strong style="font-weight: 900;margin-left:-20px;">WHEEL&nbsp;OF&nbsp;FORTUNE</strong> </h3>
            </div>
            <br><br><br>
        </div>
        <div class="photo">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
<img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/litr/wheel_of_fortune.jpg">
  </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-5">&nbsp;</div>
            <div class="col-lg-6">
            <button type="button" class="btn btn-primary btn-lg wheel_of_fortuneButton" style="align:center;">`;
            ret += (events.indexOf('wheel_of_fortune')>-1)?"DEREGISTER":"REGISTER";
            ret +=`
            </button></div>
        </div>
        <br>
        <div class="text"  style="font-size:23.5px;">
            <div class="row title">
            </div>
  
 
            <div class="row about">
                <h3 style="text-align: center;">ABOUT</h3>
                <div>
                <br>
                Like to quiz? Here’s a chance to put those grey cells to work.
                <br>
                But don’t forget to get your lucky charms because the stakes are high!
                <br>
                May the odds always be in your favour… 
                <br>
                </div>
            </div>
            <br>
                        <div class="row details">
                <h3 style="text-align: center;">DETAILS</h3>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 20th , 21st and 22nd of January 2017</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Venue : IIT Hyderabad Permanent Campus</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                    Prize :&nbsp;Coming&nbsp;Soon
                    <br>
                    <br>
                    </div>
                </div>
                <br>
            </div>
            <br>
                                    <div class="row rules">
                <h3 style="text-align: center;">RULES</h3>
                <br>
                <ul style="list-style-type: disc;margin-left:15px;">
                    <li>Participation in teams of 2.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>Organiser’s decision final and binding to all.
                         <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>Online and Onspot registration with limited number of entries.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                </ul>
            </div>
            <br>
            <div class="row rules">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <br>
                <div class="col-lg-5"></div>
                <div class="row">
                <div class="col-lg-3">
                &nbsp;Vedhamoorthy
                <br>
                +91-8903900986
                </div>
                </div>
                <br><br>
            </div>
                <br><br>
            </div>
        </div>
    </div>
  </div>\``;
    return ret;
    }


  if(argument=='quizzes'){
    let ret = `\`
        <p><br></p>
    <div class='contest' 
      style="padding-bottom: 150px;
      padding-left:20px;
      background-image: url('images/event_details.png');  
      background-repeat:  no-repeat;
      background-attachment: scroll;
      background-size: contain;
    ">
    <br><br><br><br><br><br><br>
    <br><br><br><br>
    <div class="container" style="
        width:1040px;
        padding-left:35px;
        text-align:left;
        max-height: 1280px;
        overflow-y:auto;
        overflow-x:hidden;
        ">
        <div class="heading">
            <div class="col-lg-1" id="backLitr">
<img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <h3><strong style="font-weight: 900;margin-left:30px;">QUIZ&nbsp;CONCLAVE</strong> </h3>
            </div>
            <br><br><br>
        </div>
        <div class="photo">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
<img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:300px;margin-left:6.5%;" src="images/litr/quizzes.jpg">
  </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-5">&nbsp;</div>
            <div class="col-lg-6">
            <button type="button" class="btn btn-primary btn-lg quizzesButton" style="align:center;">`;
            ret += (events.indexOf('quizzes')>-1)?"DEREGISTER":"REGISTER";
            ret +=`
            </button></div>
        </div>
        <br>
        <div class="text"  style="font-size:23.5px;">
            <div class="row title">
            </div>


             <div class="row details">
                <h3 style="text-align: center;">DETAILS</h3>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 20th , 21st and 22nd of January 2017</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Venue : IIT Hyderabad Permanent Campus</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                    Prize :&nbsp;Coming&nbsp;Soon
                    <br>
                    </div>
                </div>
                <br>
            </div>

            <div class="row about">
                <h3 style="text-align: center;">GENERAL&nbsp;QUIZ</h3>
                <div>
                We know you haven’t been living under a rock,
                <br>
                so this quiz should be an easy one for you. Or should it?
                <br>
                </div>
            </div>
            
            <div class="row rules">
                <h3 style="text-align: center;">QUIZMASTER</h3>
                <div class="col-lg-5"></div>
                <div class="row">
                <div class="col-lg-4">
                Rajiv&nbsp;Sanyal
                </div>
                </div>
            </div>

            <br><br>
             <div class="row about">
                <h3 style="text-align: center;">SCI&nbsp;TECH&nbsp;QUIZ</h3>
                <div>
                Come on, this is an IIT. 
                <br>
                We were bound to explore developments in the world of science and technology. 
                <br>
                </div>
            </div>
            
            <div class="row rules">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jnapika
                <br>
                +91-9494354710
                </div>
                <div class="col-lg-3">
                &nbsp;&nbsp;&nbsp;&nbsp;Sreeja<br>
                +91-9397373839
                <br>
                </div>
                <div class="col-lg-3">
                &nbsp;&nbsp;Durgakeerthi<br>
                +91-9603723130
                <br>
                </div>
                </div>
                <br><br>
            </div>


             <div class="row about">
                <h3 style="text-align: center;">MELAS&nbsp;QUIZ</h3>
                <div>
                Enter the world of pop culture. 
                <br>
                This quiz spans exactly five domains - Music, Entertainment, Literature, Art, Sports. 
                <br>
                </div>
            </div>
            
            <div class="row rules">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <br>
                
                <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-3">
                Rama&nbsp;Krishna
                <br>
                </div>
                <div class="col-lg-3">
                Aisha&nbsp;Dantuluri
                </div>
                </div>
                <br><br>
            </div>

             <div class="row about">
                <h3 style="text-align: center;">HARRY&nbsp;POTTER&nbsp;QUIZ</h3>
                <div>
                Calling all potterheads. Can’t get enough of the world of the boy who lived?
                <br>
                 Well, we couldn’t either, so we made a quiz about it.
                <br>
                </div>
            </div>
            
            <div class="row rules">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <div class="col-lg-5"></div>
                <div class="row">
                <div class="col-lg-4" style="margin-left:-15px;">
                Tanya&nbsp;Marwah
                </div>
                </div>
                <br><br>
            </div>

             <div class="row about">
                <h3 style="text-align: center;">TOLLYWOOD&nbsp;QUIZ</h3>
                <div>
                <br>
                Think you know everything about the world of South Indian cinema?
                <br>
                  Think you’d like to win some prizes? Well then, this is the place to be! 
                <br>
                </div>
            </div>
            
            <div class="row rules">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                Prasad Thota
                <br>
                </div>
                <div class="col-lg-3">
                Bhanu&nbsp;Prakash<br>
                +91-9989532541
                <br>
                </div>
                <div class="col-lg-3">
                &nbsp;Aishwarya&nbsp;GM<br>
                +91-9603088406
                <br>
                </div>
                </div>
                <br><br>
            </div>

        </div>
    </div>
  </div>\``;
    return ret;
    }

}
