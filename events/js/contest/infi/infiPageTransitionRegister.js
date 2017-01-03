function checkInfiInsideRegister() {
    if(window.location.href.indexOf("foodathon") > -1){
        $(".infi").trigger("click");
        $(".infiBigDiv").html(getInfiContent('foodathon'));
    }

    if(window.location.href.indexOf("minutetowinit") > -1){
        $(".infi").trigger("click");
        $(".infiBigDiv").html(getInfiContent('minutetowinit'));
    }
    if(window.location.href.indexOf("langaming") > -1){
        $(".infi").trigger("click");
        $(".infiBigDiv").html(getInfiContent('langaming'));
    }

    if(window.location.href.indexOf("finaldestination") > -1){
        $(".infi").trigger("click");
        $(".infiBigDiv").html(getInfiContent('finaldestination'));
    }


    if(window.location.href.indexOf("madads") > -1){
        $(".infi").trigger("click");
        $(".infiBigDiv").html(getInfiContent('madads'));
    }


    if(window.location.href.indexOf("casino_royale") > -1){
        $(".infi").trigger("click");
        $(".infiBigDiv").html(getInfiContent('casino_royale'));
    }


    if(window.location.href.indexOf("snake") > -1){
        $(".infi").trigger("click");
        $(".infiBigDiv").html(getInfiContent('snake'));
    }

    if(window.location.href.indexOf("convcoffee") > -1){
        $(".infi").trigger("click");
        $(".infiBigDiv").html(getInfiContent('convcoffee'));
    }


    if(window.location.href.indexOf("walk_the_ramp") > -1){
        $(".infi").trigger("click");
        $(".infiBigDiv").html(getInfiContent('walk_the_ramp'));
    }

}
