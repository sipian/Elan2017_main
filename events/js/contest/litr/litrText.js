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
    <div class="container" style="
        width:1040px;
        padding-left:35px;
        text-align:left;
        max-height: 1450px;
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
                    <div class="col-lg-10">Date : 22nd January 2017</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Time : 3:00 PM IST</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Venue : Infi Stage, IIT Hyderabad Permanent Campus</div>
                </div>
                <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <br> Prizes :&nbsp;worth Rs 30000
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
    <div class="container" style="
        width:1040px;
        padding-left:35px;
        text-align:left;
        max-height: 1450px;
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
                    <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 20th January 2017</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Time : 6:00 PM IST</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Venue : 117, Academic Block-A, IIT Hyderabad Permanent Campus</div>
                </div>
            <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <br> Prizes :&nbsp;worth Rs 30000
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
    <div class="container" style="
        width:1040px;
        padding-left:35px;
        text-align:left;
        max-height: 1450px;
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
<img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:6.5%;" src="images/litr/quizzes.jpg">
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
          <div class="col-lg-10">
            <br> Prizes :&nbsp;worth Rs 30000
          </div>
        </div>
        <br>

            <div class="row about">
                <h3 style="text-align: center;">GENERAL&nbsp;QUIZ</h3>
                <div>
                We know you haven’t been living under a rock,
                <br>
                so this quiz should be an easy one for you. Or should it?
                <br>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 21st January 2017</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Time : 10:30 A.M. IST</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Venue : LH-1, Academic Block-A, IIT Hyderabad Permanent Campus</div>
                </div>
            </div>
            
            
            <div class="row rules">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                Abhinau&nbsp;Kumar
                ee15btech11001@iith.ac.in<br>
                +91-9445329736
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                Arjun D'Cunha<br>
                 cs14btech11039@iith.ac.in<br>
                +91-9397373839
                <br>
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
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 22nd January 2017</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Time : 10:30 AM IST</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Venue : 415, Academic Block-A, IIT Hyderabad Permanent Campus</div>
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
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 22nd January 2017</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Time : 3:30 PM IST</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Venue : 415, Academic Block-A, IIT Hyderabad Permanent Campus</div>
                </div>
            </div>
            
            <div class="row rules" style="text-align: center;">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <br>
                
                <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                Rama&nbsp;Krishna
                <br>
                es14btech11015@iith.ac.in
                <br>
                +91-8897475035
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                Aisha&nbsp;Dantuluri
                ep14btech11001@iith.ac.in
                <br>
                +91-8897556276
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
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 21st January 2017</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Time : 2:00 PM IST</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Venue : 415, Academic Block-A, IIT Hyderabad Permanent Campus</div>
                </div>
            </div>
            
            <div class="row rules">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <div class="col-lg-5"></div>
                <div class="row">
                <div class="col-lg-3" style="text-align:center;margin-left:-38px;">
                Tanya&nbsp;Marwah
                <br>
                ee13b1044@iith.ac.in
                <br>
                +91-9676822328
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
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 22nd January 2017</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Time : 1:00 PM IST</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Venue : 415, Academic Block-A, IIT Hyderabad Permanent Campus</div>
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
