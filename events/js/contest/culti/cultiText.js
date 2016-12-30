function getCultiContent(argument) {
if (argument == 'breakfree'){
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:75px;">BREAKFREE</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/breakfree_small.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
            <div class="col-lg-5">&nbsp;</div>
            <div class="col-lg-6">
            <button type="button" class="btn btn-primary btn-lg breakfreeButton" style="align:center;">`;
            ret += (events.indexOf('breakfree')>-1)?"UNREGISTER":"REGISTER";
            ret +=`
            </button></div>
        </div>
        <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">GROUP DANCE COMPETITION</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Welcome to the true culture of break dance.
          <br>
          Elan 2017 provides a platform for all the passionate dancers to show their talent and mesmerize the audience.
          <br>
          If you really dance from the heart, if dance runs through your veins
          <br>
          and if dance is in every minute of your life........................... This is where you should be !!!
          <br>
          So rise and shine.
          <br>
          Dance with energy and Elan!!
          <br>
          Coordination is what matters when it comes to a group performance.
          <br>
          Break free is one such group dance event
          <br>
          where one can show off their individual talents or spellbind the crowd with their coordination.
          <br>
          It's time to move n shake n drop.
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
            Prize :&nbsp;1st position : Rs 25000
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 15000 + goodies
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">No. of  members allowed : Minimum 6</div>
        </div>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>The Event will be conducted in 2 rounds - Prelims and Finals.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Minimum size of the team-6.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>All the registered teams shall participate in prelims.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Six teams will be shortlisted from the prelims and will be performing in the finals.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>During the whole competition, at any given time, minimum of 4 performers should be on the stage.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>During the prelims each team will be given 3-5mins to perform.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The song must be of 6-9 minutes long for finale.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Participants should not perform the song (or part of the song) which was performed during the prelims in the finals.
            <br>
            This means, they cannot use the movement sequences of duration greater than 15 secs/music of their previous performances in coming rounds.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
  </div>\``;
    return ret;
    }

if (argument == 'looseyourfeet'){
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:-5px;">LOOSE&nbsp;YOUR&nbsp;FEET</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/looseyourfeet_small.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
            <div class="col-lg-5">&nbsp;</div>
            <div class="col-lg-6">
            <button type="button" class="btn btn-primary btn-lg looseyourfeetButton" style="align:center;">`;
            ret += (events.indexOf('looseyourfeet')>-1)?"UNREGISTER":"REGISTER";
            ret +=`
            </button></div>
        </div>
        <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">PRO&nbsp;SOLO&nbsp;DANCE&nbsp;COMPETITION</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Got your own dance style you think you've mastered?
          <br>
          An event for pro solo dancers​,
          <br>
          Loose your feet is where you can make the crowd go crazy
          <br>with those awesome, super cool moves!!
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
            Prize :&nbsp;1st position : Rs 7000
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 3000 + goodies
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>The event comprises of eliminations followed by finals.( prelims, semi-final and final)
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Registration can be done online or on the spot.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Performance duration should be 3-5 min for prelims, 5-7 min for semi-final and for 2-3 min final.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>For prelims and semi-final you have to bring your own songs.
            <br>
            You cannot repeat dance steps or moves.
            <br>
            You can get similar music beats , but not similar dance steps.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>For final round you will be given a random song and also some time to prepare
            <br> and you have to perform at least 2 min on that song.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Final score will be combined score of semi-final and final.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Prelims will be on first day.
            <br> Semi-finals and final will be on next day depending on the participation**.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Participants should bring their music/song in CD/DVD or a pen drive.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Number of participants for final will depend on participation as well as judges opinion.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>You can perform any type of non-classical dance like hip-hop, stepping, popping, etc.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
  </div>\``;
    return ret;
    }


if (argument == 'nrityanjali'){
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:55px;">NRITYANJALI</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/nrityanjali_small.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
              <div class="col-lg-5">&nbsp;</div>
              <div class="col-lg-6">
              <button type="button" class="btn btn-primary btn-lg nrityanjaliButton" style="align:center;">`;
              ret += (events.indexOf('nrityanjali')>-1)?"UNREGISTER":"REGISTER";
              ret +=`
              </button></div>
          </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">CLASSICAL&nbsp;DANCE&nbsp;COMPETITION</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Dance, as we know ,is one of the 64 forms of art in the Indian Culture.
          <br>
          It embodies all forms of physical art and learning.
          <br>
          It is a kinetic form of body language expressed in unarticulated emotions.
          <br>
          Classical dance is the fusion of mind's emotions and body's articulate movements.
          <br>
          So, we call upon all the classical dancers to come
          <br> and produce the medley of most graceful and most expressive.
          <br>
          Come....drown yourself in divine, grace, beauty, tenderness
          <br>to delight the eyes and souls of the viewers.
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
            Prize :&nbsp;1st position : Rs 7000
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 3000 + goodies
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>Event consists of only one round and the results are decided by the judge.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The competition is open only to college students with a valid ID card.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>You can perform in any Indian classical dance form
            <br>
            [we'd love to see Bharatanatyam, Kuchipudi, Odissi, Mohiniyattam and others].
            <br> However there are no separate judging categories for the different forms.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }

if (argument == 'just_duet'){
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:78px;">JUST&nbsp;DUET</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/just_duet_small.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                <div class="col-lg-5">&nbsp;</div>
                <div class="col-lg-6">
                <button type="button" class="btn btn-primary btn-lg just_duetButton" style="align:center;">`;
                ret += (events.indexOf('just_duet')>-1)?"UNREGISTER":"REGISTER";
                ret +=`
                </button></div>
            </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">DUO(COUPLE)&nbsp;DANCE&nbsp;COMPETITION</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          A perfect event for a pair of dancers.
          <br>
          An event for pro solo dancers​,Participants need to showcase their talent by dancing in duo.
          <br>
          Could be couple or anyone who can dance to the grooves
          <br>
          coordinating each other which is by the way very essential part of this event.
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
            Prize :&nbsp;1st position : Rs 7000
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 3000 + goodies
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>The team should consist of two participants irrespective of their gender.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The event consists of two rounds.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>
            Round 1(preliminary round)<br>
            <ul style="list-style-type: circle;margin-left:10%;">
              <li>Participants can perform any style of dance for any song of their choice.</li>
              <li>Time of performance should not exceed 4 minutes.</li>
              <li>Participants will be given an extra time of 1 minute for settling down.</li>
              <li>A total of 7 teams will get selected for the final round</li>
            </ul>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>
            Round 2(final round)<br>
            <ul style="list-style-type: circle;margin-left:10%;">
              <li>Participants should dance to the tracks given by the Organizers.</li>
              <li>Each team will be given time to choreograph for the song,
                <br>which will not exceed 15 minutes.
              </li>
              <li>An additional time of 2 minutes will be given for settling.</li>
              <li>Time of performance should not exceed 3 minutes</li>
            </ul>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Decision taken by the judges will be final
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }

if (argument == 'vibrazione'){
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:58px;">VIBRAZIONE</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/vibrazione_small.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                  <div class="col-lg-5">&nbsp;</div>
                  <div class="col-lg-6">
                  <button type="button" class="btn btn-primary btn-lg vibrazioneButton" style="align:center;">`;
                  ret += (events.indexOf('vibrazione')>-1)?"UNREGISTER":"REGISTER";
                  ret +=`
                  </button></div>
              </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">SOLO&nbsp;SINGING&nbsp;COMPETITION</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Wanna put your singing skills to the test?
          <br>
          Got a versatile voice that can mesmerize everyone?
          <br>
          Put your heart to it and sing your way to glory!
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
            Prize :&nbsp;1st position : Rs 3000
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 1000 + goodies
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>It is solo singing competition.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Registrations can be online or On Spot during ELAN.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>This competition consists of 2 rounds- Elimination and Finals.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Elimination Round:
            <br>
            To participate in the Vibrazione, you must have 5 songs that you know very well
            <br> and must be ready to perform any of those 5 songs for the competition.
            <br>If someone else has chosen your song,
            <br>or something does not work out with your first choice,
            <br> you will need to be ready to sing your other choice.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Finals:
            <br>
            For finals participant must sing one slow song and one fast song.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>A "People's Choice" award will be given to the winner with the most audience votes*.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
if (argument == 'octaves')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:88px;">OCTAVES</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/octaves_small.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                    <div class="col-lg-5">&nbsp;</div>
                    <div class="col-lg-6">
                    <button type="button" class="btn btn-primary btn-lg octavesButton" style="align:center;">`;
                    ret += (events.indexOf('octaves')>-1)?"UNREGISTER":"REGISTER";
                    ret +=`
                    </button></div>
                </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">SOLO&nbsp;INSTRUMENT&nbsp;COMPETITION</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          This event pits the best against the best on the cultural stage.
          <br>
          The name says it all and if you think you have mastered the instrument of your choice,
          <br>
          Not just that,
          <br>
          this also tests your creativity and sees if you can come up with your own tune to wow us.
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
            Prize :&nbsp;1st position : Rs 3000
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 1000 + goodies
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>This being a solo competition allows no more than one person per team.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Registration: On the spot/Online.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Duration of each performance in the first round: 6 min (empty stage to empty stage).
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Duration of each performance in the second round:
            <br> as long as the backing track lasts (empty stage to empty stage).
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>There will be two categories. Melody and percussion instruments.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>
            Round 1<br>
            <ul style="list-style-type: circle;margin-left:10%;">
              <li>Participants will be given 6 minutes to play anything they want.</li>
              <li>Based on the scores of the first round 2 participants
                <br>from each category progresses into the second round.
              </li>
              <li>Overshooting the time limit will result in a penalty.</li>
            </ul>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>
            Round 2<br>
            <ul style="list-style-type: circle;margin-left:10%;">
              <li>*The second round will be a face-off between the top two from each category.
                <br>i.e. the first in melody vs the second in melody and similarly for percussion.
              </li>
              <li>After qualification after the first round,
                <br>the finalists will be given tracks to play over.
                <br> i.e., the melody finalists will be given tracks with percussion to play over and vice-versa.
                <br>This will be done to ensure fair judging  .
              </li>
            </ul>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
if (argument == 'andaazapnapna')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:-28px;">ANDAAZ&nbsp;APNA&nbsp;APNA</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/andaazapnapna.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                    <div class="col-lg-5">&nbsp;</div>
                    <div class="col-lg-6">
                    <button type="button" class="btn btn-primary btn-lg andaazapnapnaButton" style="align:center;">`;
                    ret += (events.indexOf('andaazapnapna')>-1)?"UNREGISTER":"REGISTER";
                    ret +=`
                    </button></div>
                </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">MONO&nbsp;ACTING&nbsp;COMPETITION</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          This one is for all the pro stage performers out there!
          <br>
          A perfect place for those who can take over the crowd with their humorous comedy and exceptional acting skills.
          <br>
          An unprecedented opportunity to showcase your pro skills as a "Stand-up Comedian", or a "Mono-Actor".
          <br>
          A Stage to perform and a huge crowd to be captivated.
          <br> Step up, and leave the audience enthralled !
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
            Prize :&nbsp;1st position : Rs 3500
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 1500 + goodies worth 3000
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>There will be 2 rounds, prelims and final.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Your performance could either be a "mono-act", or a "stand-up comedy", or both.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Languages preferred are English, Hindi, and Telugu.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Duration of act should be 4-7mins for the prelims. <br>It is 6-10mins for final round.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Registration can be done online or on-spot during Elan-2017.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>Any kind of fluid or flame is not allowed on stage.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Time limit should be strictly followed failing which there will be deduction in your respective score.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Music/background tracks for the performance, if any, are to be arranged by the participants itself.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>If you need any props for mono-acting then bring your own.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Large props like chairs and tables etc. can be arranged,<br> but the participants have to inform earlier.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <liJudge's decisions are final and binding.
          <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }

if (argument == 'filmfarefiesta')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:-5px;">FILM&nbsp;FARE&nbsp;FIESTA</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/filmfarefiesta.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                     <div class="col-lg-5">&nbsp;</div>
                     <div class="col-lg-6">
                     <button type="button" class="btn btn-primary btn-lg filmfarefiestaButton" style="align:center;">`;
                     ret += (events.indexOf('filmfarefiesta')>-1)?"UNREGISTER":"REGISTER";
                     ret +=`
                     </button></div>
                 </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">SHORT&nbsp;FILM&nbsp;COMPETITION</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Do you think you can take after Steven Spielberg, Christopher Nolan and James Cameron?
          <br>
          Make your own short film, enthral and captivate movie buffs with your creativity.
          <br>
          The stage at ELAN is set for you. Get judged by esteemed people in film industry.
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
            Prize :&nbsp; Rs 10000 + goodies
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>The event film fare fiesta is spread over two days.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>All the entries are judged on the first day to shortlist 6 out of them.
            <br> These 6 will be judged on second day by esteemed judges.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>
            The judging criteria will be :<br>
            <ul style="list-style-type: circle;margin-left:10%;">
              <li>Script</li>
              <br>
              <li>Direction</li>
              <br>
              <li>Screenplay</li>
              <br>
              <li>Costumes</li>
              <br>
              <li>Dialogues</li>
              <br>
              <li>Cinematography</li>
              <br>
              <li>Sound editing/ mixing</li>
              <br>
              <li>Visual effects</li>
              <br>
            </ul>
          </li>
          <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>Run time should not be more than 20 minutes.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Movie should be shot at a minimum resolution of 480 pixels.
            <br>Marks might be reduced due to poor video/ audio quality.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Any attempt at copyright infringement can lead to immediate disqualification
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Plagiarism is accepted with due credits.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Films in languages other than English, Hindi, and Telugu should be accompanied with subtitles.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Participants should send their videos/youtube links of the videos to
            <br>nanda@elan.org.in and harsha@elan.org.in
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The decision of the Organizers is final and binding.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }

if (argument == 'picelectic')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:75px;">PICELECTIC</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/picelectic.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                     <div class="col-lg-5">&nbsp;</div>
                     <div class="col-lg-6">
                     <button type="button" class="btn btn-primary btn-lg picelecticButton" style="align:center;">`;
                     ret += (events.indexOf('picelectic')>-1)?"UNREGISTER":"REGISTER";
                     ret +=`
                     </button></div>
                 </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">COMPETITION&nbsp;FOR&nbsp;BEST&nbsp;PICTURES<br>TAKEN&nbsp;DURING&nbsp;ELAN</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Portray your photography skills by shooting pictures in,on and about ELAN 2017
          <br>
          There will be 2 winners announced each day of the 3 days the fest goes on.
          <br>
          The pictures can be submitted any time near the counter that is allocated.
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
            Prize :&nbsp;Rs 5000 + goodies
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>The captures must be only during the 3 days of the ELAN fest
            <br>and only inside IIT Hyderabad premises.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The pics must be taken only using a Digi-cam or a Bluetooth enabled mobile
            (for transfer purpose)
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Winner is judged according to the moments captured in the best way.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Clarity is not considered until there is a tie b/w pics that are similar.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }

if (argument == 'nukkadnatak')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:75px;">NUKKADNATAK</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/nukkadnatak.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                   <div class="col-lg-5">&nbsp;</div>
                   <div class="col-lg-6">
                   <button type="button" class="btn btn-primary btn-lg nukkadnatakButton" style="align:center;">`;
                   ret += (events.indexOf('nukkadnatak')>-1)?"UNREGISTER":"REGISTER";
                   ret +=`
                   </button></div>
               </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">STREET&nbsp;PLAY&nbsp;COMPETITION</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Haven't you ever wanted to change the way our country functions?
          <br>
          Well, it's time to be the change you want to see!
          <br>
          Elan 2017 is bringing Forward, Nukkad Natak-A Street Play Competition.
          <br>
          It is all about creating awareness about social problems that plague our soil
          <br>and bringing about realization in our youth!.
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
            Prize :&nbsp;worth Rs 10000
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>Team Size: 5-15 People(Including Music Accompanists).
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Time Limit:10-15 Minutes.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Atleast 5 persons must be included in the play.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Music Accompanists are included in the team.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Teams are expected to perform at the open air venue,
            <br> on a circular stage with an audience on all sides.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Language of Performance Must be in Hindi/English or both.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Plays can be based on any theme.
            <br>Any content directed against a certain political group or religious community is strictly prohibited.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">JUDGING CRITERIA</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>Dramatization
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Screenplay
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Script
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Crowd interaction
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Overall impact
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
      <br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
if (argument == 'facepainting')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:42px;">FACE&nbsp;PAINTING</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/facepainting_small.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                     <div class="col-lg-5">&nbsp;</div>
                     <div class="col-lg-6">
                     <button type="button" class="btn btn-primary btn-lg facepaintingButton" style="align:center;">`;
                     ret += (events.indexOf('facepainting')>-1)?"UNREGISTER":"REGISTER";
                     ret +=`
                     </button></div>
                 </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Wanna have some fun with painting?
          <br>
          You think you can have a face funkier than infamous "THE MASK".
          <br>
          Then here's something interesting for you. ELAN 2017's infamous Face Painting is back!
          <br>
          Grab a brush and make your friend's face funny and beautiful.
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
            Prize :&nbsp;1st position : Rs 1000
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 1000(worth) + goodies
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>Registrations will be done on the spot during ELAN.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Each Team must consist of 2-3 members.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>
            The following materials will be provided to you<br>
            <ul style="list-style-type: circle;margin-left:10%;">
              <li> Cosmetic grade face paint</li>
              <li>Brushes</li>
              <li>Tissues</li>
            </ul>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Duration of the Event will be 2 hours.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>There are no theme constraints. All kinds of themes and patterns are allowed.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Participants should use only the materials provided by the organizers.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Decision of judge shall be final and binding.
            <br>
          </li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
if (argument == 'nailart')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:65px;">NAIL&nbsp;ART</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/nailart_small.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                      <div class="col-lg-5">&nbsp;</div>
                      <div class="col-lg-6">
                      <button type="button" class="btn btn-primary btn-lg nailartButton" style="align:center;">`;
                      ret += (events.indexOf('nailart')>-1)?"UNREGISTER":"REGISTER";
                      ret +=`
                      </button></div>
                  </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Can you add your intricate details creatively on much smaller canvas like finger nails?
          <br>
          Then come, show up your talent in 'Nail Art' of ELAN 2017!!
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
            Prize :&nbsp;1st position : Rs 750
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 750(worth) + goodies
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li> Contestants shall use only the paints provided to them by the organizers.<br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li> There will be a time limit of 7 minutes and you should complete in that time.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li> Judges decision is final and binding.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">JUDGING CRITERIA</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>Neatness
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li> Time duration
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Attractiveness
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
if (argument == 'mehendi')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left: 42px;">MEHENDI&nbsp;ART</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/mehendi_small.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                      <div class="col-lg-5">&nbsp;</div>
                      <div class="col-lg-6">
                      <button type="button" class="btn btn-primary btn-lg mehendiButton" style="align:center;">`;
                      ret += (events.indexOf('mehendi')>-1)?"UNREGISTER":"REGISTER";
                      ret +=`
                      </button></div>
                  </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Mehndi adorns the hands and Life takes on a new color.
          <br>
          So let the henna flow out of your cones and let's see what color it brings to your life.
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
            Prize :&nbsp;1st position : Rs 750
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 750(woth) + goodies
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>Registrations will be on the spot during ELAN.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Mehendi cones will be provided by the organisers.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Designs are of your own choice.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>There will be a time limit (1 hour).<br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>There is no limit on the number of cones. You can use as many as you want
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>You will be allowed to put mehendi only one hand.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Judges' decision is final and binding
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">JUDGING CRITERIA</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>Attractivness<br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Creativity
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Neatness
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
if (argument == 'claymodelling')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:18px;">CLAY&nbsp;MODELLING</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/claymodelling_small.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                      <div class="col-lg-5">&nbsp;</div>
                      <div class="col-lg-6">
                      <button type="button" class="btn btn-primary btn-lg claymodellingButton" style="align:center;">`;
                      ret += (events.indexOf('claymodelling')>-1)?"UNREGISTER":"REGISTER";
                      ret +=`
                      </button></div>
                  </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Come!
          <br>
          Bring life to figments of your own thoughts and imaginations by moulding beautiful structures out of clay!
          <br>
          Win exciting prizes!!
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
            Prize :&nbsp;1st position : Rs 750
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 750(worth)
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>Registrations will be on the spot during ELAN.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>
            The following materials will be provided to you<br>
            <ul style="list-style-type: circle;margin-left:10%;">
              <li>Polymer clay</li>
              <li>Paints (if required)</li>
            </ul>
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li style="list-style-type: none;"><br></li>
          <li>One can select his/her own theme or model.
            <br> Every participant will be given limited amount of clay and time,
            <br> so one has to really plan out his model so as to not run out of clay.
            <br>
          </li>
        </ul>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>The amount of clay and paint provided will be limited.
            <br>Team size should be less than 3
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The final results will be announced on the final day of ELAN.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li> The decision of the organisers is final and binding to all.<br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
if (argument == 'lendmeurvoice')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:10px;">LEND&nbsp;YOUR&nbsp;VOICE</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/lendmeurvoice.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                        <div class="col-lg-5">&nbsp;</div>
                        <div class="col-lg-6">
                        <button type="button" class="btn btn-primary btn-lg lendmeurvoiceButton" style="align:center;">`;
                        ret += (events.indexOf('lendmeurvoice')>-1)?"UNREGISTER":"REGISTER";
                        ret +=`
                        </button></div>
                    </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          A perfect opportunity to test your ability to be creative and prompt together with the presence of mind.
          <br>
          Ever thought that you could have delivered the dialogues better than the actors in the movie?
          <br>
          Then this is the right place for you to be. ELAN 2017 presents a unique event "Lend Your Voice".
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
            Prize :&nbsp;1st position : Rs 750
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 750(worth)
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>The contestants are provided with an option of a few ACTION HERO VIDEOS.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>They will be given half hour to choose the video.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>After choosing the video the participants will be given another half hour for preparation
            <br> in which they are supposed to come up with a humorous and entertaining version
            <br>of the video by putting their own voice into the characters.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>They are then supposed to perform it on stage while the video is being played,
            <br> with the actual dialogues muted
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>All the videos will be 1 min long.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>It consists of only one round.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The participants will be given a given a movie clipping one hour before the competition.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>During the competition, the audio of the clipping will be muted,
            <Br> and the participants have to make out their own dialogues
            <br>and deliver it parallel in sequence with the video and must make it as funny as possible.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The clippings will be given in English, Telugu or Hindi as per your choice.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>You will be judged based on the dialogues you make and the way you present it.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Use of unparliamentary language is strictly prohibited and will lead to disqualification.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The decision of the judges and organizers is final and binding.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
if (argument == 'artexhibition')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:32px;">ART&nbsp;EXHIBITON</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/artexhibition.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                       <div class="col-lg-5">&nbsp;</div>
                       <div class="col-lg-6">
                       <button type="button" class="btn btn-primary btn-lg artexhibitionButton" style="align:center;">`;
                       ret += (events.indexOf('artexhibition')>-1)?"UNREGISTER":"REGISTER";
                       ret +=`
                       </button></div>
                   </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Ever visited an art gallery?
          <br>
          Ever checked out those portraits costing so much?
          <br>
          Which one of those trillion random colour strokes on the canvas you think makes it so expensive?
          <br>
          It's all about language of the heart which uses the paints and a brush
          <br>to put the emotions flowing in a river of imagination on the canvas.
          <br> And that is "ART".
          <br>
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"EVERYTHING YOU CAN IMAGINE IS REAL" -
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Pablo Picasso
          <br>
          <br>
          Art is an expression,a representation of what a person's vivid thoughts and emotions speak.
          <br>
          Every stroke of the brush dipped, every colour chosen, every shade painted, has its own meaning.
          <br>
          So here is ELAN encouraging you to come up with your meaningful strokes to be a part of its colourful art gallery.
          <br>
          The gallery is open to everyone throughout the fest.
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
            Prize :&nbsp;1st position : Rs 2500
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 1500 + goodies worth 9000
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li> Registrations can be done online or on the spot.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li> Participants are to submit finished works of art.(origami, abstract painting, pencil sketch )
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li> Paintings will be exhibited throughout the fest in ELAN gallery.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li> Paintings will be exhibited throughout the fest in ELAN gallery.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The two best paintings will be selected and prizes will be announced on the last day of the fest.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>There are 3 different prizes as mentioned below for the 3 divisions.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">JUDGING CRITERIA</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li> Topic chosen
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Creativity
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li> Coloration Skills
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">

          <li>Paintings can be either brought in person or can be sent by post*.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>

          <li>Paintings can be either brought in person or can be sent by post*.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>

          
          <li> Entries that are received on or before 22 Jan 2017 will be evaluated.
            <br>Those received through post during ELAN will not be evaluated,
            <br>only those received in person are evaluated.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li> The painting should be at least of A3 size.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li> Judges decision is final and binding.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li> Organizers are not responsible for any delay or damage caused to the entries
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
if (argument == 'djwars')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:88px;">DJ&nbsp;WARS</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/djwars.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                      <div class="col-lg-5">&nbsp;</div>
                      <div class="col-lg-6">
                      <button type="button" class="btn btn-primary btn-lg djwarsButton" style="align:center;">`;
                      ret += (events.indexOf('djwars')>-1)?"UNREGISTER":"REGISTER";
                      ret +=`
                      </button></div>
                  </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">DJ’ying &nbsp;COMPETITION</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          The most awaited event!!!
          <br>
          Back with a bang in ELAN 2017!!
          <br>
          For all the aspiring DJ's out there!! Can you mix'em good enough?!
          <br>
          Spin'em to own'em!!
          <br>
          Battle with beats! Fight with tunes! May the best one win!
          <br>
          This is the War of DJ's, where DJ's compete with each other, on a huge platform, like never before!
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
            Prize :&nbsp;Rs 20000 + goodies
            <br>
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">INFRASTRUCTURE SUPPLIED</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>A DJ console(Mark I) and mixer
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>4 bin DJ sound system
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Effect lights[sprinklers, lasers, cans, and smoke]
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Sound Monitors
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>2 mics
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
if (argument == 'rjhunt')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:88px;">RJ&nbsp;HUNT</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/rjhunt.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                       <div class="col-lg-5">&nbsp;</div>
                       <div class="col-lg-6">
                       <button type="button" class="btn btn-primary btn-lg rjhuntButton" style="align:center;">`;
                       ret += (events.indexOf('rjhunt')>-1)?"UNREGISTER":"REGISTER";
                       ret +=`
                       </button></div>
                   </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row title">
        <h3 style="text-align: center;font-weight: 900;">COMPETITION&nbsp;FOR&nbsp;PRO&nbsp;RJ's</h3>
        <br><br>
      </div>
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          Ever been called a chatterbox?
          <br>
          If you are good at entertaining your friends with non-stop,
          <br>animated, energetic chatter, here's the right platform to test how good you are!
          <br>
          Entertain the crowd, and you might probably find yourself among the RJ legends!
          <br>
          A ramp to your RJ ying future!
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
            Prize :&nbsp;position : Rs 5000 + goodies
            <br>
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>
            Online Round :<br>
            <ul style="list-style-type: circle;margin-left:10%;">
              <li>This round will be an online as well as a spot round for spot registered candidates.</li>
              <br>
              <li>People who have registered online have to send a recorded file
                <br>(.mp3 or .wav format) where they have to speak on a topic for about two minutes
                <br> and the people who are selected go to the interview round directly.
                <br> The recording should be done either in Telugu ,English or Hindi.
              </li>
            </ul>
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>
            Spot Round :<br>
            <ul style="list-style-type: circle;margin-left:10%;">
              <li>This round is like the preliminary round for the spot registered candidates.</li>
              <br>
              <li>Participants will be given a random topic to speak on for about 2 minutes.</li>
              <br>
              Finally, about 10 people will be selected for interview round
              <br> (including the online and spot round).
            </ul>
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>
            Interview Round :<br>
            <ul style="list-style-type: circle;margin-left:10%;">
              <li>These 10 candidates will be interviewed by asking questions and giving them situations.</li>
              <br>
              <li>5 candidates will be selected for the final round.</li>
            </ul>
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>
            Final Round :<br>
            <ul style="list-style-type: circle;margin-left:10%;">
              <li>In final round, the contestant will have to host a show like an actual RJ does.</li>
              <br>
              <li> The Contestants are expected to entertain the audiences
                <br> by telling stories, current affairs (about ELAN 2017), cinema news, etc.
              </li>
              <li> Each contestant has to perform for maximum of 20 minutes.</li>
              <br>
            </ul>
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
if (argument == 'lendmeurvoice')
{
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
      <div class="col-lg-1" id="backCulti">
        <img  class="img-circle img-responsive" style="width:40px;height:40px;position:fixed;cursor:pointer;" src="http://img.freepik.com/free-icon/back-button_318-108687.jpg?size=338&ext=jpg">
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-5">
        <h3><strong style="font-weight: 900;margin-left:-28px;">LEND&nbsp;YOUR&nbsp;VOICE</strong> </h3>
      </div>
      <br><br><br>
    </div>
    <div class="photo">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
          <img  class="img-thumbnail img-responsive" alt="event"  style="width:50%;height:50%;margin-left:10%;" src="images/culti/lendmeurvoice.jpg">
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
    <br>
    <div class="row">
                        <div class="col-lg-5">&nbsp;</div>
                        <div class="col-lg-6">
                        <button type="button" class="btn btn-primary btn-lg lendmeurvoiceButton" style="align:center;">`;
                        ret += (events.indexOf('lendmeurvoice')>-1)?"UNREGISTER":"REGISTER";
                        ret +=`
                        </button></div>
                    </div>
    <br>
    <div class="text"  style="font-size:23.5px;">
      <div class="row about">
        <h3 style="text-align: center;">ABOUT</h3>
        <div>
          <br>
          A perfect opportunity to test your ability to be creative and prompt together with the presence of mind.
          <br>
          Ever thought that you could have delivered the dialogues better than the actors in the movie?
          <br>
          Then this is the right place for you to be. ELAN 2017 presents a unique event "Lend Your Voice".
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
            Prize :&nbsp;1st position : Rs 750
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd position: Rs 750(worth)
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <div class="row rules">
        <h3 style="text-align: center;">EVENT FORMAT</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>The contestants are provided with an option of a few ACTION HERO VIDEOS.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>They will be given half hour to choose the video.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>After choosing the video the participants will be given another half hour for preparation
            <br> in which they are supposed to come up with a humorous and entertaining version
            <br>of the video by putting their own voice into the characters.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>They are then supposed to perform it on stage while the video is being played,
            <br> with the actual dialogues muted
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>All the videos will be 1 min long.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <div class="row rules">
        <h3 style="text-align: center;">RULES</h3>
        <br>
        <ul style="list-style-type: disc;margin-left:15px;">
          <li>It consists of only one round.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The participants will be given a given a movie clipping one hour before the competition.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>During the competition, the audio of the clipping will be muted,
            <Br> and the participants have to make out their own dialogues
            <br>and deliver it parallel in sequence with the video and must make it as funny as possible.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The clippings will be given in English, Telugu or Hindi as per your choice.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>You will be judged based on the dialogues you make and the way you present it.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>Use of unparliamentary language is strictly prohibited and will lead to disqualification.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
          <li>The decision of the judges and organizers is final and binding.
            <br>
          </li>
          <li style="list-style-type: none;"><br></li>
        </ul>
      </div>
      <br><br>
    </div>
  </div>
</div>
</div>\``;
return ret;
   }
}
