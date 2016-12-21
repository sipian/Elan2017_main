if($(window).height()<500){
                    $("#logo").css({"margin-left":"-108px","width": "400px" , "height": "145px"});
                    $(".qwer").css({"width": "85px" , "height" : "55px"});
                    $(".right").css( "margin-right", "17%");
            }
            else{
                    $("#logo").css({"margin-left":"-105px","width": "400px" , "height": "145px"});
                    $(".qwer").css({"width": "150px" , "height" : "55px"});
                    $(".right").css( "margin-right", "16%");
            }

            $(window).resize(function () {
                if($(window).height()<500){
                    $("#logo").css({"margin-left":"-108px","width": "400px" , "height": "145px"});
                    $(".qwer").css({"width": "85px" , "height" : "55px"});
                    $(".right").css( "margin-right", "17%");
                }
                else{
                    $("#logo").css({"margin-left":"-105px","width": "400px" , "height": "145px"});
                    $(".qwer").css({"width": "150px" , "height" : "55px"});
                    $(".right").css( "margin-right", "16%");
                }
            });
