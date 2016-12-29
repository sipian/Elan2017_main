function checkInfiInsideRegister() {
    if(window.location.href.indexOf("campus_princess") > -1 || 
       window.location.href.indexOf("walk_the_ramp") > -1 || 
       window.location.href.indexOf("convcoffee") > -1 || 
       window.location.href.indexOf("casino_royale") > -1 || 
       window.location.href.indexOf("madads") > -1 || 
       window.location.href.indexOf("finaldestination") > -1 || 
       window.location.href.indexOf("campus_princess") > -1)
        $(".infi").trigger("click");
}
