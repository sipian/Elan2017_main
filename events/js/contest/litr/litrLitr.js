function checkLitrRegister() {
    if(window.location.href.indexOf("mrdetective") > -1)
                $(".mrdetective").trigger("click");

    if(window.location.href.indexOf("jam") > -1)
                $(".jam").trigger("click");

    if(window.location.href.indexOf("quizzes") > -1)
                $(".quizzes").trigger("click");
    if(window.location.href.indexOf("wheel_of_fortune") > -1)
                $(".wheel_of_fortune").trigger("click");

}
