function changeBiggiesContent() {
    $('.biggiesBigDiv').html(`
     <h2>BIGGIES<br><br></h2>
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <div class="row">
                  <td class="col-lg-4 " style="padding-left: 0%;">
                    <div class="animated bounceInUp col-sm-8 text-center biggiesDiv">
                      <div class="flip-container hvr-float-shadow" ontouchstart="this.classList.toggle('hover');" style="margin-left: 40px;">
                        <div class="flipper">
                          <div class="front">
                            <img class="img-responsive" src="images/biggies/elan-e-jung.jpg"
                              style="width: 250px;height: 300px;">
                          </div>
                          <div class="back" >
                            
                            <div id="text">
                              <br>
                              <h3 class="short_description">
                              WATCH AS THE STAGE IS CONVERTED INTO A BATTLEFIELD AS THE BANDS SWEAT IT OUT IN A WINNER-GET-ALL-NO-HOLDS-BARRED CONTEST
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
                  <td class="col-lg-4" style="padding-left: 0%;" >
                    <div class="animated bounceInUp col-sm-8 text-center biggiesDiv">
                      <div class="flip-container hvr-float-shadow" ontouchstart="this.classList.toggle('hover');" style="margin-left: 40px;">
                        <div class="flipper">
                          <div class="front">
                            <img class="img-responsive" src="images/biggies/manthan.jpg"
                              style="width: 250px;height: 300px;">
                          </div>
                          <div class="back" >
                            
                            <div id="text">
                              <br><br>
                              <h3 class="short_description">
                                Lose yourself in the
                                 lilting guitar 
                                 music dished out by the score.
                              </h3>
                              <br><br>
                              <button type="button" class="btn btn-info manthan clickButton">
                              MANTHAN
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="col-lg-4" style="padding-left: 0%;" >
                    <div class="animated bounceInUp col-sm-8 text-center biggiesDiv">
                      <div class="flip-container hvr-float-shadow" ontouchstart="this.classList.toggle('hover');" style="margin-left: 40px;">
                        <div class="flipper">
                          <div class="front">
                            <img class="img-responsive" src="images/biggies/fmi.jpg"
                              style="width: 250px;height: 300px;">
                          </div>
                          <div class="back" >
                            
                            <div id="text">
                              <br><br>
                              <h3 class="short_description">
                                ZONAL AUDITIONS HELD IN ELAN 2016 ,
                                 ADJUDGED BY AAFREEN VAZ.
                              </h3>
                              <br><br>
                              <button type="button" class="btn btn-info fmi clickButton">
                              CAMPUS PRINCESS <br> AUDITION
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </div>
                </tr>
              <tr>
                <div class="row">
                  <td class="col-lg-4">
                    <div class="animated bounceInUp col-sm-9 text-center biggiesDiv">
                    <br>
                      <span class="contestName" style="margin-left: 70px;">ELAN-E-JUNG </span>
                    </div>
                  </td>
                  <td class="col-lg-4 manthan">
                    <div class="animated bounceInUp col-sm-9 text-center biggiesDiv">
                    <br>
                      <span class="contestName" id="trial2" style="margin-left: 70px;"> MANTHAN </span>
                    </div>
                  </td>
                  <td class="col-lg-4 fmi" >
                    <div class="animated bounceInUp col-sm-9 text-center biggiesDiv">
                    <br>
                      <span class="contestName" id="trial3" style="margin-left: 70px;"> CAMPUS&nbsp;PRINCESS</span>
                      <br>
                      <span class="contestName" id="trial3" style="margin-left: 70px;">AUDITION </span>
                    </div>
                  </td>
                </div>
              </tr>
              <tr>
                <div class="row">
                  <td class="col-lg-4"></td>
                  <td class="col-lg-4 angasutra" style="padding-left: 0%;" id="attakkalariposter">
                    <div class="animated bounceInUp col-sm-8 text-center biggiesDiv">
                      <div class="flip-container hvr-float-shadow" ontouchstart="this.classList.toggle('hover');" style="margin-left: 40px;">
                        <div class="flipper">
                          <div class="front">
                            <img class="img-responsive" src="images/biggies/attakkalariposter.jpg"
                              style="width: 250px;height: 300px;">
                          </div>
                          <div class="back" >
                            
                            <div id="text">
                              <br><br>
                              <h3 class="short_description">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An Evening of Mixed Ball
                              </h3>
                              <br><br>
                              <button type="button" class="btn btn-info fmi clickButton">
                              ANGASUTRA
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </div>
                  </td>
                  <td class="col-lg-4"></td>
                </div>
              </tr>
              <tr>
                <div class="row">
                  <td class="col-lg-4"></td>
                  <td class="col-lg-4 angasutra">
                    <div class="animated bounceInUp col-sm-8 text-center biggiesDiv">
                    <br>
                      <span class="contestName" id="trial4" style="margin-left: 70px;"> ANGASUTRA </span>
                    </div>
                  </td>
                  <td class="col-lg-4"></td>
                </div>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
                `);
}