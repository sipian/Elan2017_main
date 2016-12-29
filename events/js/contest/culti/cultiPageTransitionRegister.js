function checkCultiInsideRegister() {
    if(window.location.href.indexOf("breakfree") > -1){
        $(".culti").trigger("click");
        $(".cultiBigDiv").html(getCultiContent('breakfree'));
    }

    if(window.location.href.indexOf("looseyourfeet") > -1){
        $(".culti").trigger("click");
        $(".cultiBigDiv").html(getCultiContent('looseyourfeet'));
    }
    if(window.location.href.indexOf("nrityanjali") > -1){
        $(".culti").trigger("click");
        $(".cultiBigDiv").html(getCultiContent('nrityanjali'));
    }

    if(window.location.href.indexOf("just-duet") > -1){
        $(".culti").trigger("click");
        $(".cultiBigDiv").html(getCultiContent('just-duet'));
    }


    if(window.location.href.indexOf("vibrazione") > -1){
        $(".culti").trigger("click");
        $(".cultiBigDiv").html(getCultiContent('vibrazione'));
    }


    if(window.location.href.indexOf("octaves") > -1){
        $(".culti").trigger("click");
        $(".cultiBigDiv").html(getCultiContent('octaves'));
    }


    if(window.location.href.indexOf("andaazapnapna") > -1){
        $(".culti").trigger("click");
        $(".cultiBigDiv").html(getCultiContent('andaazapnapna'));
    }

}
