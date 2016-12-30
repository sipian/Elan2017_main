function getBiggiesContent(argument) {

	if(argument=='elan-e-jung'){
		let ret = `\`
        <p><br></p>
    <div class='contest' 
      style="padding-bottom: 150px;
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
        overflow-y:scroll;
        overflow-x:hidden;
        ">
        <div class="heading">
            <div class="col-lg-1" id="backBiggies">
<img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <h3><strong style="font-weight: 900;margin-left:55px;">ELAN-E-JUNG</strong> </h3>
            </div>
            <br><br><br>
        </div>
        <div class="photo">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
<img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:4%;" src="images/biggies/elan-e-jung_small.jpg">
  </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-5">&nbsp;</div>
            <div class="col-lg-6">
            <button type="button" class="btn btn-primary btn-lg elan-e-jungButton" style="align:center;">`;
            ret += (events.indexOf('elanejung')>-1)?"UNREGISTER":"REGISTER";
            ret +=`
            </button></div>
        </div>
        <br>
        <div class="text"  style="font-size:23.5px;">
            <div class="row title">
                <h3 style="text-align: center;font-weight: 900;">METAL BAND COMPETITION</h3>
                <br><br>
            </div>
            <div class="row about">
                <h3 style="text-align: center;">ABOUT</h3>
                <div>
                <br>
                Distorted guitars, emphatic rhythms, dense bass and drums, vigorous vocals, epic riffs and wild headbanging. 
                <br>
                Elan is back with its signature event, the metal battle. 
                <br>
                Get ready to turn up your amps and set the stage on fire at Elan-e-Jung! 
                </div>
            </div>
            <br>
                        <div class="row details">
                <h3 style="text-align: center;">DETAILS</h3>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 21st January 2017</div>
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
                            Prize :&nbsp;1st position : worth Rs 50000<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            (including <strong>studio recording</strong> worth 20000)
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: worth Rs 15000
          </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">No. of Band members allowed : Maximum 7</div>
                </div>
                <br>
            </div>
            <br>
                                    <div class="row rules">
                <h3 style="text-align: center;">EVENT FORMAT</h3>
                <br>
                <h3 style="text-align: center;">PRELIMS</h3>
                <br>
                <ul style="list-style-type: disc;margin-left:15px;font-size:23.5px;">
                    <li>Each band interested in participating should mail their demos/videos to <a href='mailto:yash@elan.org.in'>yash@elan.org.in</a>
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>Deadline to upload videos is <strong>15th January 2017 , 11:59PM</strong>
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>No videos will be considered after the deadline</strong>
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>Only team leader needs to register at elan.org.in
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>Shortlisted bands get to perform at Elan-e-Jung finals, Elan 2017.
                         <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                </ul>

                <h3 style="text-align: center;">FINALS</h3>
                <br>
                <ul style="list-style-type: disc;margin-left:15px;font-size:23.5px;">
                    <li>6 bands will be shortlisted after the preliminary round to perform at the Biggies Stage.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>Each band will be given <strong>20</strong> mins to perform on stage including sound check (subjected to changes).
                         <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>The winner and the first runner up will be given prizes.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                </ul>

            </div>


            <div class="row rules">
                <h3 style="text-align: center;">RULES</h3>
                <br>
                <ul style="list-style-type: disc;margin-left:15px;font-size:23.5px;">
                    <li>Any non-professional band is allowed to register. 
                        <br>
                        You need not be a college band to participate in this event.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>Language is no criterion.
                        <br>
                        The band can be fully instrumental as   well.
                        <br>
                         The genre of the band can be any variation of metal. 
                         <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>Registering team should send/upload only one demo in the process of registration.
                        <br>
                          The demo need not be a studio recording.  
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>Bands cannot have more than 7 members.
                        <br>
                         Also, no person can play for more than 2 different bands.   
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>Bands cannot share the same frontman. 
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>IIT Hyderabad reserves the right to shift any band's slot timings at any point of time before the prelims.
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>In case of any damage to the provided equipment, 
                        <br>
                          the band will be fined for the damage and may be disqualified. 
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>The decision is dependent on the nature of the damage and the judge's discretion.   
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>IIT Hyderabad reserves the right to cancel the event in case of some unforeseen circumstances.  
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>In case of any dispute the decision of the organizers will be final and binding.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>Consumption of Alcohol and Drugs is strictly prohibited on Campus.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>The Judges' decision shall be final and binding for all.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>The decision of the organizers with respect to line-up is final and abiding.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>The Elan 2017 team holds the right to change the rules at any moment of time.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    </ul>
            </div>


                        <div class="row rules">
                <h3 style="text-align: center;">JUDGING CRITERIA</h3>
                <br>
                <ul style="list-style-type: disc;margin-left:15px;">
                    <li>The winners will be announced by the judges immediately after the event.
                        <br>
                         Judge’s decision is considered final and should be abided by everyone.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>All the finalists will be given the participation certificates.
                         <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>The prize money will be distributed only among the top 2 contestants.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>The crowd‘s response is considered important.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>The following will be looked in the contestants/bands performance:
                        <ul style="text-align:center;">
                        <br>
                            <li>Entertainment</li>
                            <br>
                            <li>Public involvement</li>
                            <br>
                            <li>Energy</li>
                            <br>
                            <li>Attitude</li>
                        </ul>    
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    </ul>
            </div>
            <br>   
            <div class="row rules">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <br>

                <div class="col-lg-1"></div>

                <div class="row">
                    <div class="col-lg-3">
                Yash&nbsp;Pitroda
                <br>
                yash@elan.org.in                 
                <br>
                9505464597 
                </div>

                <div class="col-lg-3">
                </div>

                <div class="col-lg-3">
                Siddharth&nbsp;Sonkamble
                <br>
                siddharth@elan.org.in              
                <br>
                9619497727 
                </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
  </div>\``;
    return ret;
    }

  else if(argument=='manthan'){
		let ret = `\`
        <p><br></p>
    <div class='contest' 
      style="padding-bottom: 150px;
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
        overflow-y:scroll;
        overflow-x:hidden;
        ">
        <div class="heading">
            <div class="col-lg-1" id="backBiggies">
<img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <h3><strong style="font-weight: 900;margin-left:90px;">MANTHAN</strong> </h3>
            </div>
            <br><br><br>
        </div>
        <div class="photo">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" 
src="images/biggies/manthan_small.jpg">
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-5">&nbsp;</div>
            <div class="col-lg-6">
            <button type="button" class="btn btn-primary btn-lg manthanButton" style="align:center;">`;
            ret += (events.indexOf('manthan')>-1)?"UNREGISTER":"REGISTER";
            ret +=`
            </button></div>
            </div>
        <br>
        <div class="text"  style="font-size:23.5px;">
            <div class="row title">
                <h3 style="text-align: center;font-weight: 900;">FUSION BAND COMPETITION</h3>
                <br><br>
            </div>


            <div class="row about">
                <h3 style="text-align: center;">ABOUT</h3>
                <div>
                <br>
                Every band has a dream.
                <br>
                 A dream of performing live, on a global scale, in front of fans screaming for more.
                <br>
                 But the journey of a mile begins with the first step.
                 <br>
                 ELAN 2017 brings to you the ultimate Fusion Band Contest, Manthan.
                 <br>
                 This is where you perform live competing with other bands trying to live the dream.
                </div>
            </div>
            <br>
                                        <div class="row details">
                <h3 style="text-align: center;">DETAILS</h3>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">Date : 20th January 2017</div>
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
                            Prize :&nbsp;1st position : worth Rs 45000<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            (including <strong>studio recording</strong> worth 20000)
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: worth Rs 10000
          </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">No. of Band members allowed : Maximum 7</div>
                </div>
                <br>
            </div>
            <br>
            </div>
            <br>
                                    <div class="row rules">
                <h3 style="text-align: center;">EVENT FORMAT</h3>
                <br>
                <h3 style="text-align: center;">PRELIMS</h3>
                <br>
                <ul style="list-style-type: disc;margin-left:15px;font-size:23.5px;">
                    <li>Each band interested in participating should mail their demos/videos to <a href='mailto:yash@elan.org.in'>yash@elan.org.in</a>
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>Deadline to upload videos is <strong>15th January 2017 , 11:59PM</strong>
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>No videos will be considered after the deadline</strong>
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>Only team leader needs to register at elan.org.in
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>Shortlisted bands get to perform at Manthan finals, Elan 2017.
                         <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    
                </ul>

                <h3 style="text-align: center;">FINALS</h3>
                <br>
                <ul style="list-style-type: disc;margin-left:15px;font-size:23.5px;">
                    <li>6 bands will be shortlisted after the preliminary round to perform at the Biggies Stage.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>Each band will be given <strong>20</strong> mins to perform on stage including sound check (subjected to changes).
                         <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>The winner and the first runner up will be given prizes.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                </ul>

            </div>


            <div class="row rules">
                <h3 style="text-align: center;">RULES</h3>
                <br>
                <ul style="list-style-type: disc;margin-left:15px;font-size:23.5px;">
                    <li>Any non-professional band is allowed to register. 
                        <br>
                        You need not be a college band to participate in this event.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>Language is no criterion.
                        <br>
                        We are looking for band that play fusion music.
                        <br>
                         (anything except metal).
                         <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>Registering team should send/upload only one demo in the process of registration.
                        <br>
                          The demo need not be a studio recording.  
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>Bands cannot have more than 7 members.
                        <br>
                         Also, no person can play for more than 2 different bands.   
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>Bands cannot share the same frontman. 
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>IIT Hyderabad reserves the right to shift any band's slot timings at any point of time before the prelims.
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>In case of any damage to the provided equipment, 
                        <br>
                          the band will be fined for the damage and may be disqualified. 
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>The decision is dependent on the nature of the damage and the judge's discretion.   
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>IIT Hyderabad reserves the right to cancel the event in case of some unforeseen circumstances.  
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>In case of any dispute the decision of the organizers will be final and binding.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>Consumption of Alcohol and Drugs is strictly prohibited on Campus.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>The Judges' decision shall be final and binding for all.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>The decision of the organizers with respect to line-up is final and abiding.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>The Elan 2017 team holds the right to change the rules at any moment of     time.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    </ul>
            </div>


                        <div class="row rules">
                <h3 style="text-align: center;">JUDGING CRITERIA</h3>
                <br>
                <ul style="list-style-type: disc;margin-left:15px;font-size:23.5px;">
                    <li>The winners will be announced by the judges immediately after the event.
                        <br>
                         Judge’s decision is considered final and should be abided by everyone.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>All the finalists will be given the participation certificates.
                         <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>The prize money will be distributed only among the top 2 contestants.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    <li>The crowd‘s response is considered important.
                        <br>
                    </li>
                    <li style="list-style-type: none;"><br></li>

                    <li>The following will be looked in the contestants/bands performance:
                        <ul style="text-align:center;">
                        <br>
                            <li>Entertainment</li>
                            <br>
                            <li>Public involvement</li>
                            <br>
                            <li>Energy</li>
                            <br>
                            <li>Attitude</li>
                        </ul>    
                    </li>
                    <li style="list-style-type: none;"><br></li>
                    </ul>
            </div>
            <br>   
            <div class="row rules">
                <h3 style="text-align: center;">ORGANIZERS</h3>
                <br>

                <div class="col-lg-1"></div>

                <div class="row" style="font-size:23.5px;">
                    <div class="col-lg-3">
                Yash&nbsp;Pitroda
                <br>
                yash@elan.org.in                 
                <br>
                9505464597 
                </div>

                <div class="col-lg-3">
                </div>

                <div class="col-lg-3">
                Siddharth&nbsp;Sonkamble
                <br>
                siddharth@elan.org.in              
                <br>
                9619497727 
                </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
  </div>\``
  return ret;
};




  if(argument=='campus_princess'){
    let ret = `\`
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
            <div class="col-lg-1" id="backBiggies">
<img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <h3><strong style="font-weight: 900;margin-left:-11px;">CAMPUS&nbsp;PRINCESS</strong> </h3>
            </div>
            <br><br><br>
        </div>
        <div class="photo">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
<img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:300px;margin-left:8.5%;" src="images/biggies/campus_princess.jpg">
  </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <br>
         <div class="row">
            <div class="col-lg-5">&nbsp;</div>
            <div class="col-lg-6">
            <button type="button" class="btn btn-primary btn-lg campus_princessButton" style="align:center;">`;
            ret += (events.indexOf('campus_princess')>-1)?"UNREGISTER":"REGISTER";
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
                An event for all those pretty ladies out there, here is your chance to get selected 
                <br>
                for the Femina Miss India beauty pageant!
                <br>
                In this star-studded event, watch as the beauty queens bedazzle you with their grace, 
                <br>
                show their grit in the Q&A round and go on to take the crown.
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
            </div>
            <br>
            <br>
        </div>
    </div>
   </div>\``;
    return ret;
    }



}