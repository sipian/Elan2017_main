function checkCultiInsideRegister() {
    if(window.location.href.indexOf("breakfree") > -1){
        $(".culti").trigger("click");
        $(".cultiBigDiv").html(getCultiContent('breakfree'));
    }

    if(window.location.href.indexOf("looseyourfeet") > -1){
        $(".culti").trigger("click");
        $(".cultiBigDiv").html(getCultiContent('looseyourfeet'));
    }
    
}