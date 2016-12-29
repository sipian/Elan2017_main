            $(document).ready(function () {
                if($(window).height()<550){
                                    $(".qwer").css({"width": "55px" , "height" : "35px"});
                                    $(".qwerDIV").css("top" ,"5px");
                                    $(".left").css("margin-left" ,"10%");
                                    $(".right").css("margin-right" ,"20px");
                                }
                else{
                                    $(".qwer").css({"width": "155px" , "height" : "55px"});
                                    $(".qwerDIV").css("top" ,"-5px");
                                    $(".left").css("margin-left" ,"7%");
                                    $(".right").css("margin-right" ,"10px");
                                }

                $(window).resize(function () {
                    if($(window).height()<550){
                                    $(".qwer").css({"width": "55px" , "height" : "35px"});
                                    $(".qwerDIV").css("top" ,"5px");
                                }
                else{
                                    $(".qwer").css({"width": "155px" , "height" : "55px"});
                                    $(".qwerDIV").css("top" ,"-5px");
                                }
                });

            })
                