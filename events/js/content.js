$(document).ready(function(){

    jitterEffect(1 , 4);
    $(".competitionArea").show("bounce",{times:4,distance:60},1000);
    $("#biggies").click(function(){
      $(".competitionArea").fadeOut("slow" , function(){
       $(".competitionArea").html(`
        <br><br>  <h2 >BIGGIES<br><br></h2>
  <p >ENTER INTO THE WORLD OF BIGGIES<br><br></p>
  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
      <div class="row">

        <td class="col-lg-4" style="padding-left: 0%;" id="elan-e-jung">
        <div class="animated bounceInUp col-sm-8 text-center">
        <div class="morph pic">
          <div class="hexagon" style="background-image: url(images/biggies/elan-e-jung.jpg);">
            <div class="hexTop"></div>
            <div class="hexBottom"></div>
          </div>
          </div>
          </div
        </td>
        
        <td class="col-lg-4" style="padding-left: 0%;" id="manthan">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <div class="hexagon" style="background-image: url(images/biggies/manthan.jpg);">
            <div class="hexTop"></div>
            <div class="hexBottom"></div>
          </div>
          </div>
          </div>

        </td>

        <td class="col-lg-4" style="padding-left: 0%;" id="fmi">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
         <div class="hexagon" style="background-image: url(images/biggies/fmi.jpg);">
            <div class="hexTop"></div>
            <div class="hexBottom"></div>
          </div>
          </div>
          </div>
        </td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-4" id="elan-e-jung ">
        <div class="animated bounceInUp col-sm-8 text-center">
         
        <span class="jittery" id="jittery1" > ELAN-E-JUNG </span>
        </div>
       
        </td>
        <td class="col-lg-4" id="manthan">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery2" > MANTHAN </span>
        </div></td>
        <td class="col-lg-4" id="fmi">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery3" style="margin-left: -10%;"> CAMPUS&nbsp;PRINCESS&nbsp;AUDITION </span>
        </div></td>
        </div>
      </tr>

       <tr>
      <div class="row">
        <td class="col-lg-4"></td>
        <td class="col-lg-4" style="padding-left: 0%;" id="attakkalariposter">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
         <div class="hexagon" style="background-image: url(images/biggies/attakkalariposter.jpg);">
            <div class="hexTop"></div>
            <div class="hexBottom"></div>
            </div>
          </div>
          </div>
        </td>
        <td class="col-lg-4"></td>
        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-4" ></td>
        <td class="col-lg-4" id="attakkalariposter_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery4" > ANGASUTRA </span>
        </div></td>
        <td class="col-lg-4" ></td>
        </div>
      </tr>
    </tbody>
  </table>
  </div>
        `);
     $(".competitionArea").show("bounce",{times:4,distance:60},1000);
    jitterEffect(1 , 4);
     });
  });



    $("#culti").click(function(){
      $(".competitionArea").fadeOut("fast",function(){
         $(".competitionArea").html(`
          
          <br><br><h2>CULTI<br><br></h2>
  <p >ENTER INTO THE WORLD OF CULTI<br><br></p>
  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
      <div class="row">
        <td class="col-lg-3" style="padding-left: 0%;" id="breakfree">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/breakfree.jpg" width="180px;">
        </div></div></td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="looseyourfeet">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/looseyourfeet.jpg" width="180px;">
        </div></div></td>

       <td class="col-lg-3" style="padding-left: 0%;" id="nrityanjali">
       <div class="animated bounceInUp col-sm-8 text-center">
        <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/nrityanjali.jpg" width="180px;">
        </div></div></td>

        <td class="col-lg-3" style="padding-left: 0%;" id="just-duet">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/just-duet.jpg" width="180px;">
        <div></div></td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-3" id="breakfree_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery5" > BREAKFREE </span></div></td>
        <td class="col-lg-3" id="looseyourfeet_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery6" > LOOSE&nbsp;YOUR&nbsp;FEET </span></div></td>
        <td class="col-lg-3" id="nrityanjali_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery7" > NRITYANJALI </span></div></td>
        <td class="col-lg-3" id="just-duet_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery8" > JUST&nbsp;DUET </span></div></td>
        </div>
      </tr>

      <tr>
      <div class="row">
        <td class="col-lg-3" style="padding-left: 0%;" id="vibrazione">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/vibrazione.jpg" width="180px;">
        </div></div></td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="octaves">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/octaves.jpg" width="180px;">
        </div></div></td>

        <td class="col-lg-3" style="padding-left: 0%;" id="andaazapnapna">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/andaazapnapna.jpg" width="180px;">
        </div></div></td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="filmfarefiesta">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/filmfarefiesta.jpg" width="180px;">
        </div></div></td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-3" id="vibrazione_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery9" > VIBRAZIONE </span></div></td>
        <td class="col-lg-3" id="octaves_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery10" > OCTAVES </span></div></td>
        <td class="col-lg-3" id="andaazapnapna_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery11" > ANDAZ&nbsp;APNA&nbsp;APNA </span></div></td>
        <td class="col-lg-3" id="filmfarefiesta_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery12" > FILM&nbsp;FARE&nbsp;FIESTA </span></div></td>
        </div>
      </tr>

            <tr>
      <div class="row">
        <td class="col-lg-3" style="padding-left: 0%;" id="picelectic">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/picelectic.jpg" width="180px;">
        </div></div></td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="lightscamera">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/lightscamera.jpg" width="180px;">
        </div></div></td>

        <td class="col-lg-3" style="padding-left: 0%;" id="facepainting">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/facepainting.jpg" width="180px;">
        </div></div></td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="nailart">
        <div class="animated bounceInUp col-sm-8 text-center">
         <div class="morph pic">
          <img class="img-circle img-responsive" src="images/culti/nailart.jpg" width="180px;">
        </div></div></td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-3" id="picelectic_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery13" > PICELECTIC </span></div></td>
        <td class="col-lg-3" id="lightscamera_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery14" > LIGHTS&nbsp;CAMERA&nbsp;ELAN </span></div></td>
        <td class="col-lg-3" id="facepainting_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery15" > FACE&nbsp;PAINTING </span></div></td>
        <td class="col-lg-3" id="nailart_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery16" > NAIL&nbsp;ART </span></div></td>
        </div>
      </tr>

      <tr>
      <div class="row">
        <td class="col-lg-3" style="padding-left: 0%;" id="mehendi">
        <div class="animated bounceInUp col-sm-8 text-center">
          <img class="img-circle img-responsive" src="images/culti/mehendi.jpg" width="180px;">
        </div></td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="claymodelling">
        <div class="animated bounceInUp col-sm-8 text-center">
          <img class="img-circle img-responsive" src="images/culti/claymodelling.jpg" width="180px;">
        </div></td>

       <td class="col-lg-3" style="padding-left: 0%;" id="blindart">
       <div class="animated bounceInUp col-sm-8 text-center">
          <img class="img-circle img-responsive" src="images/culti/blindart.jpg" width="180px;">
        </div></td>

        <td class="col-lg-3" style="padding-left: 0%;" id="artexhibition">
        <div class="animated bounceInUp col-sm-8 text-center">
          <img class="img-circle img-responsive" src="images/culti/artexhibition.jpg" width="180px;">
        </div></td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-3" id="mehendi_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery17" > MEHENDI </span></div></td>
        <td class="col-lg-3" id="claymodelling_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery18" > CLAY&nbsp;MODELING </span></div></td>
        <td class="col-lg-3" id="blindart_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery19" > BLIND&nbsp;ART </span></div></td>
        <td class="col-lg-3" id="artexhibition_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery20" > ART&nbsp;EXHIBITION </span></div></td>
        </div>
      </tr>

      <tr>
      <div class="row">
        <td class="col-lg-3" >
        </td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="djwars">
        <div class="animated bounceInUp col-sm-8 text-center">
          <img class="img-circle img-responsive" src="images/culti/djwars.jpg" width="180px;">
        </div></td>

       <td class="col-lg-3" style="padding-left: 0%;" id="rjhunt">
       <div class="animated bounceInUp col-sm-8 text-center">
          <img class="img-circle img-responsive" src="images/culti/rjhunt.jpg" width="180px;">
        </div></td>

        <td class="col-lg-3" >
        </td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-3" ></td>
        <td class="col-lg-3" id="djwars_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery21" > DJ&nbsp;WARS </span></div></td>
        <td class="col-lg-3" id="rjhunt_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery22" > RJ&nbsp;HUNT </span></div></td>
        <td class="col-lg-3" ></td>
        </div>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
      <div class="row">
        <td class="col-lg-4" style="padding-left: 0%;">
        </td>

        <td class="col-lg-4" style="padding-left: 3%;" id="lendmeurvoice">
        <div class="animated bounceInUp col-sm-8 text-center">
          <img class="img-circle img-responsive" src="images/culti/lendmeurvoice.jpg" width="180px;">
        </div></td>
        
        <td class="col-lg-4" style="padding-left: 0%;">
        </td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-4" ></td>
        <td class="col-lg-4" style="padding-left: 3%;" id="lendmeurvoice_TEXT">
        <div class="animated bounceInUp col-sm-8 text-center">
        <span class="jittery" id="jittery23" > LEND&nbsp;ME&nbsp;YOUR&nbsp;VOICE </span></div></td>
        <td class="col-lg-4" ></td>
        </div>
      </tr>
    </tbody>
  </table>
  </div>
        `);
     $(".competitionArea").show("bounce",{times:4,distance:60},1000);
    jitterEffect(5, 23);
    });
  });


    $("#infi").click(function(){
      $(".competitionArea").fadeOut("slow",function(){
      $(".competitionArea").html(`
        <br><br>  <h2 >INFI<br><br></h2>
  <p >ENTER INTO THE WORLD OF INFI<br><br></p>
  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
      <div class="row">
        <td class="col-lg-3" style="padding-left: 0%;" id="walktheramp">
          <img class="img-rounded img-responsive" src="images/infi/walktheramp.png" width="180px;">
        </td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="minutetowinit">
          <img class="img-rounded img-responsive" src="images/infi/minutetowinit.jpg" width="180px;">
        </td>

       <td class="col-lg-3" style="padding-left: 0%;" id="fieldkings">
          <img class="img-rounded img-responsive" src="images/infi/fieldkings.jpg" width="180px;">
        </td>

        <td class="col-lg-3" style="padding-left: 0%;" id="langaming">
          <img class="img-rounded img-responsive" src="images/infi/langaming.png" width="180px;">
        </td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-3" id="walktheramp_TEXT"><span class="jittery" id="jittery24" > WALK&nbsp;THE&nbsp;RAMP </span></td>
        <td class="col-lg-3" id="minutetowinit_TEXT" ><span class="jittery" id="jittery25" > MINUTE&nbsp;TO&nbsp;WIN&nbsp;IT </span></td>
        <td class="col-lg-3" id="fieldkings_TEXT" ><span class="jittery" id="jittery26" > FIELD&nbsp;KINGS </span></td>
        <td class="col-lg-3" id="langaming_TEXT"><span class="jittery" id="jittery27" > LAN&nbsp;GAMING </span></td>
        </div>
      </tr>

      <tr>
      <div class="row">
        <td class="col-lg-3" ></td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="finaldestination">
          <img class="img-rounded img-responsive" src="images/infi/finaldestination.jpg" width="180px;">
        </td>

       <td class="col-lg-3" style="padding-left: 0%;" id="madads">
          <img class="img-rounded img-responsive" src="images/infi/madads.png" width="180px;">
        </td>

        <td class="col-lg-3" ></td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-3" ></td>
        <td class="col-lg-3" id="finaldestination_TEXT" ><span class="jittery" id="jittery28" > FINAL&nbsp;DESTINATION </span></td>
        <td class="col-lg-3" id="madads_TEXT"><span class="jittery" id="jittery29" > MAD&nbsp;ADS </span></td>
        <td class="col-lg-3" ></td>
        </div>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
      <div class="row">
        <td class="col-lg-4" style="padding-left: 0%;">
        </td>

        <td class="col-lg-4" style="padding-left: 9%;" id="convcoffee">
          <img class="img-rounded img-responsive" src="images/infi/convcoffee.png" width="180px;">
        </td>
        
        <td class="col-lg-4" style="padding-left: 0%;">
        </td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-4" ></td>
        <td class="col-lg-4" id="convcoffee_TEXT">
        <span class="jittery" id="jittery30" style="margin-left: 20%;"> CONVERSATION&nbsp;COFFEE </span></td>
        <td class="col-lg-4" ></td>
        </div>
      </tr>
    </tbody>
  </table>
  </div>
        `);
     $(".competitionArea").show("bounce",{times:4,distance:60},1000);
    jitterEffect(24 , 30);
  });
});


    $("#litr").click(function(){
      $(".competitionArea").fadeOut("fast",function(){

      $(".competitionArea").html(`
          <br><br><h2 >LITR<br><br></h2>
  <p >ENTER INTO THE WORLD OF LITR<br><br></p>
  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
      <div class="row">
        <td class="col-lg-4" style="padding-left: 0%;" id="mrdetective">

          <img class="img-circle img-responsive" src="images/litr/mrdetective.jpg" width="180px;">
        </td>
        
        <td class="col-lg-4" style="padding-left: 0%;" id="wheel-of-fortune">
          <img class="img-circle img-responsive" src="images/litr/wheel-of-fortune.jpg" width="180px;">
        </td>

       <td class="col-lg-4" style="padding-left: 0%;" id="quizzes">
          <img class="img-circle img-responsive" src="images/litr/quizzes.jpg" width="180px;">
        </td>
        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-4" id="mrdetective_TEXT"><span class="jittery" id="jittery31" > MR&nbsp;DETECTIVE </span></td>
        <td class="col-lg-4" id="wheel-of-fortune_TEXT"><span class="jittery" id="jittery32" > WHEEL&nbsp;OF&nbsp;FORTUNE </span></td>
        <td class="col-lg-4" id="quizzes_TEXT"><span class="jittery" id="jittery33" > QUIZ&nbsp;CONCLAVE </span></td>
        </div>
      </tr>

    </tbody>
  </table>
  </div>

  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
      <div class="row">
        <td class="col-lg-3" style="padding-left: 0%;"></td>
        
        <td class="col-lg-4" style="padding-left: 0%;" id="jam">
          <img class="img-circle img-responsive" src="images/litr/jam.jpg" width="180px;">
        </td>

       <td class="col-lg-4" style="padding-left: 0%;" id="businessquiz">
          <img class="img-circle img-responsive" src="images/litr/businessquiz.jpg" width="180px;">
        </td>

        <td class="col-lg-3" style="padding-left: 0%;"></td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-3" ></td>
        <td class="col-lg-3" id="jam_TEXT"><span class="jittery" id="jittery34" > JUST&nbsp;A&nbsp;MINUTE </span></td>
        <td class="col-lg-3" id="businessquiz_TEXT"><span class="jittery" id="jittery35" > BUSINESS&nbsp;QUIZ </span></td>
        <td class="col-lg-3" ></td>
        </div>
      </tr>

    </tbody>
  </table>
  </div>
        `);
     $(".competitionArea").show("bounce",{times:4,distance:60},1000);
    jitterEffect(31 , 35);
  });
    });





    $("#online").click(function(){
      $(".competitionArea").fadeOut("fast",function(){

      $(".competitionArea").html(`
      <br><br><h2 >ONLINE<br><br></h2>
  <p >ENTER INTO THE WORLD OF ONLINE<br><br></p>
  <div class="table-responsive">
  <table class="table">
    <tbody>
      <tr>
      <div class="row">
        <td class="col-lg-3" style="padding-left: 0%;" id="pixeladda">
          <img class="img-circle img-responsive" src="images/online/pixeladda.jpg" width="200px;">
        </td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="zodiac">
          <img class="img-circle img-responsive" src="images/online/zodiac.jpg" width="180px;">
        </td>

       <td class="col-lg-3" style="padding-left: 0%;" id="sweetheart">
          <img class="img-circle img-responsive" src="images/online/sweetheart.jpg" width="180px;">
        </td>

        <td class="col-lg-3" style="padding-left: 0%;" id="tweetatale">
          <img class="img-circle img-responsive" src="images/online/tweetatale.jpg" width="180px;">
        </td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-3" id="pixeladda_TEXT"><span class="jittery" id="jittery36" > PIXEL&nbsp;ADDA </span></td>
        <td class="col-lg-3" id="zodiac_TEXT"><span class="jittery" id="jittery37" > ZODIAC </span></td>
        <td class="col-lg-3"id="sweetheart_TEXT" ><span class="jittery" id="jittery38" > SWEETHEART </span></td>
        <td class="col-lg-3" id="tweetatale_TEXT"><span class="jittery" id="jittery39" > TWEET&nbsp;A&nbsp;TALE </span></td>
        </div>
      </tr>

      <tr>
      <div class="row">
        <td class="col-lg-3" style="padding-left: 0%;" id="twistit">
          <img class="img-circle img-responsive" src="images/online/twistit.jpg" width="180px;">
        </td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="skipit">
          <img class="img-circle img-responsive" src="images/online/skipit.jpg" width="180px;">
        </td>

        <td class="col-lg-3" style="padding-left: 0%;" id="tellatale">
          <img class="img-circle img-responsive" src="images/online/tellatale.jpg" width="180px;">
        </td>
        
        <td class="col-lg-3" style="padding-left: 0%;" id="whatsapp">
          <img class="img-circle img-responsive" src="images/online/whatsapp.jpg" width="180px;">
        </td>

        </div>
      </tr>
      <tr>
      <div class="row">
        <td class="col-lg-3" id="twistit_TEXT"><span class="jittery" id="jittery40" > TWIST&nbsp;IT </span></td>
        <td class="col-lg-3" id="skipit_TEXT"><span class="jittery" id="jittery41" > SKIP&nbsp;IT </span></td>
        <td class="col-lg-3" id="tellatale_TEXT"><span class="jittery" id="jittery42" > TELL&nbsp;A&nbsp;TALE </span></td>
        <td class="col-lg-3" id="whatsapp_TEXT"><span class="jittery" id="jittery43" > STATE&nbsp;YOUR&nbsp;STATUS </span></td>
        </div>
      </tr>
        </tbody>
      </table>
    </div>
        `);
     $(".competitionArea").show("bounce",{times:4,distance:60},1000);
    jitterEffect(36 , 43);
    });
  });
});