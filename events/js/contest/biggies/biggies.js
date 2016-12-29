$(document).ready(function() {
    $('body').on("click", ".elan-e-jung", function() {
        $('.biggiesBigDiv').hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".biggiesBigDiv").html(getBiggiesContent('elan-e-jung'));
            $('.biggiesBigDiv').show('slide', {
                direction: "down"
            }, 450);
        });
        window.history.pushState("", "", '#elanejung');
    });
    if(window.location.href.indexOf("elanejung") > -1)
        $(".biggiesBigDiv").html(getBiggiesContent('elan-e-jung'));


    $('body').on("click", ".elan-e-jungButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==0){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('elanejung')==-1){
        $.post("../registration/registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'elanejung'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Elan E Jung');
                            $('.elan-e-jungButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("../registration/unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'elanejung'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Elan E Jung');
                            $('.elan-e-jungButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }     
    });


    $('body').on("click", ".manthan", function() {
        $('.biggiesBigDiv').hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".biggiesBigDiv").html(getBiggiesContent('manthan'));
            $('.biggiesBigDiv').show('slide', {
                direction: "down"
            }, 450);
            window.history.pushState("", "", '#manthan');
        });
    });
    if(window.location.href.indexOf("manthan") > -1)
        $(".biggiesBigDiv").html(getBiggiesContent('manthan'));
    
    $('body').on('click', "#backBiggies", function() {
        setTimeout(function() {
            changeBiggiesContent();
            $('.biggiesDiv').css("display", "block");
        }, 50);
    });
});