function changeBiggiesContent() {
    $('.biggiesBigDiv').html(`
          <p>
            <br>
          </p>
<div class="table-responsive animated bounceInUp biggiesDiv" style="
            padding-left:35px;
            padding-bottom: 350px;
            background-image: url('images/event_biggies.png');  
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: contain; 
            max-height: 1100px;
            ">
  <h2 style="margin-left: 15px;margin-top: 35px; margin-bottom: 10px;">
    <br>
    <br>
    <br>
    <br>
              BIGGIES
            </h2>
            <table class="table">
              <tbody>
                <tr>
                  <div class="row">
                    <td class="col-lg-4" style="padding-left: 2%;">
                      <div class="animated bounceInUp col-sm-8 text-center biggiesDiv">
                        <div class="flip-container hvr-float-shadow" ontouchstart="this.classList.toggle('hover');" style="margin-left: 40px;">
                          <div class="flipper">
                            <div class="front">
                              <img class="img-responsive pop" src="images/biggies/elan-e-jung.jpg" style="width: 250px;height: 300px;">
                            </div>
                            <div class="back">
                              <div id="text">
                                <br>
                                <h3 class="short_description">
                                  Watch As The Stage Is Converted Into A Battlefield As The Bands Sweat It Out In A Winner-get-all-no-holds-barred Contest
                                </h3>
                                <button type="button" class="btn btn-info elan-e-jung clickButton">
                                ELAN-E-JUNG
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="col-lg-4" style="padding-left: 1%;">
                      <div class="animated bounceInUp col-sm-8 text-center biggiesDiv">
                        <div class="flip-container hvr-float-shadow" ontouchstart="this.classList.toggle('hover');" style="margin-left: 40px;">
                          <div class="flipper">
                            <div class="front">
                              <img class="img-responsive" src="images/biggies/manthan.jpg" style="width: 250px;height: 300px;">
                            </div>
                            <div class="back">
                              <div id="text">
                                <br>
                                <br>
                                <h3 class="short_description">
                                  Lose yourself in the
                                  lilting guitar 
                                  music dished out by the score.
                                </h3>
                                <br>
                                <br>
                                <button type="button" class="btn btn-info manthan clickButton">
                                MANTHAN
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="col-lg-2" style="padding-left: 0%;">
                    </td>
                  </div>
                </tr>
                <tr>
                  <div class="row">
                    <td class="col-lg-4">
                      <div class="animated bounceInUp col-sm-9 text-center biggiesDiv">
                        <span style="margin-left: 60px;">
                        <img src="images/borderImg1.png" class="borderImg"
                          style="margin-bottom: -5px; ">
                        </span>
                        <br>
                        <span class="contestName" style="margin-left: 72px;
                          margin-right: -90px;">Elan-E-jung 
                        </span>
                        <br>
                        <span style="margin-left: 60px;">
                        <img src="images/borderImg2.png" class="borderImg"
                          style="margin-bottom: -3px; ">
                        </span>
                      </div>
                    </td>
                    <td class="col-lg-4 manthan">
                      <div class="animated bounceInUp col-sm-9 text-center biggiesDiv">
                        <span style="margin-left: 45px;">
                        <img src="images/borderImg1.png" class="borderImg"
                          style="margin-bottom: -5px; ">
                        </span>
                        <br>
                        <span class="contestName" style="margin-left: 55px;margin-right: -60px;">Manthan 
                        </span>
                        <br>
                        <span style="margin-left: 45px;">
                        <img src="images/borderImg2.png" class="borderImg"
                          style="margin-bottom: -3px; ">
                        </span>
                      </div>
                    </td>
                    <td class="col-lg-4 fmi">
                    </td>
                  </div>
                </tr>
                <tr>
                  <div class="row">
                    <td class="col-lg-4"></td>
                    <td class="col-lg-4 angasutra" style="padding-left: 1%;" id="attakkalariposter">
                    </td>
                  </div>
                  </td>
                  <td class="col-lg-4"></td>
          </div>
        </tr>
        <tr>
                <div class="row">
                        <td class="col-lg-4"></td>
                        </td>
                        <td class="col-lg-4"></td>
                </div>
        </tr>
        </tbody>
</table>
</div>
   `);
}