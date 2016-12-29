function checkLitrInsideRegister() {
    if(window.location.href.indexOf("mrdetective") > -1){
        $(".litr").trigger("click");
        $(".litrBigDiv").html(getLitrContent('mrdetective'));
    }

    if(window.location.href.indexOf("wheel_of_fortune") > -1){
        $(".litr").trigger("click");
        $(".litrBigDiv").html(getLitrContent('wheel_of_fortune'));
    }
    if(window.location.href.indexOf("quizzes") > -1){
        $(".litr").trigger("click");
        $(".litrBigDiv").html(getLitrContent('quizzes'));
    }

    if(window.location.href.indexOf("jam") > -1){
        $(".litr").trigger("click");
        $(".litrBigDiv").html(getLitrContent('jam'));
    }
}
