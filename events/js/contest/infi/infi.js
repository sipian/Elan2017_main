$(document).ready(function() {
    checkInfiInsideRegister();

    $('body').on("click", ".foodathon", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('foodathon'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

   
    $('body').on("click", ".minutetowinit", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('minutetowinit'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

    $('body').on("click", ".langaming", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('langaming'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

     
    
    $('body').on("click", ".finaldestination", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('finaldestination'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

     
    
    $('body').on("click", ".madads", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('madads'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

     
    
    $('body').on("click", ".casino_royale", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('casino_royale'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });


    $('body').on("click", ".snake", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('snake'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });


    $('body').on("click", ".convcoffee", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('convcoffee'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

    $('body').on("click", ".walk_the_ramp", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('walk_the_ramp'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });     
    });

    $('body').on("click", ".campus_princess", function() {
        $(".infiBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".infiBigDiv").html(getInfiContent('campus_princess'));
        $(".infiBigDiv").show('slide',{direction:"down"},450);
       });
        window.history.pushState("", "", '#campus_princess');
    });

    $('body').on("click", ".campus_princessButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('campus_princess')==-1){
        $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'campus_princess'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Campus Princess');
                            $('.campus_princessButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'campus_princess'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Campus Princess');
                            $('.campus_princessButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });


   

    $('body').on('click', "#backInfi", function() {
        setTimeout(function() {
                changeInfiContent();
                 $('.infiDiv').css("display", "block");
            }, 50);
        });
});
