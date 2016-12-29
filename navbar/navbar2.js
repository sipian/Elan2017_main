            $(document).ready(function () {
                console.log($(window).height());
                if($(window).height()<550)
                    $(".qwer").css({"width": "55px" , "height" : "35px"});
                else
                    $(".qwer").css({"width": "150px" , "height" : "55px"});

            })
                