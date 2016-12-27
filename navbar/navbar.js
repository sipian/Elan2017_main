            $(document).ready(function () {
                 if($(window).height()<400){
                    $("#logo").css({"margin-left":"-138px","width": "200px" , "height": "75px"});
                    $(".qwer").css({"width": "85px" , "height" : "55px"});
                    $(".right").css( "margin-right", "31%");
                }
                else if($(window).height()<500){
                    $("#logo").css({"margin-left":"-108px","width": "300px" , "height": "105px"});
                    $(".qwer").css({"width": "85px" , "height" : "55px"});
                    $(".right").css( "margin-right", "13.5%");
                }
                else{
                    $("#logo").css({"margin-left":"-105px","width": "300px" , "height": "105px"});
                    $(".qwer").css({"width": "150px" , "height" : "55px"});
                    $(".right").css( "margin-right", "13.5%");
                }

            $(window).resize(function () {
                 if($(window).height()<400){
                    $("#logo").css({"margin-left":"-138px","width": "200px" , "height": "75px"});
                    $(".qwer").css({"width": "85px" , "height" : "55px"});
                    $(".right").css( "margin-right", "31%");
                }
                else if($(window).height()<500){
                    $("#logo").css({"margin-left":"-108px","width": "300px" , "height": "105px"});
                    $(".qwer").css({"width": "85px" , "height" : "55px"});
                    $(".right").css( "margin-right", "13.5%");
                }
                else{
                    $("#logo").css({"margin-left":"-105px","width": "300px" , "height": "105px"});
                    $(".qwer").css({"width": "150px" , "height" : "55px"});
                    $(".right").css( "margin-right", "13.5%");
                }
            });

            })
                