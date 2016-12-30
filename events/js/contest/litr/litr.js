$(document).ready(function() {
    checkLitrInsideRegister();

    $('body').on("click", ".mrdetective", function() {
        $(".litrBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".litrBigDiv").html(getLitrContent('mrdetective'));
        $(".litrBigDiv").show('slide',{direction:"down"},450);
            window.history.pushState("", "", '#mrdetective');
        });     
    });

    $('body').on("click", ".mrdetectiveButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('mrdetective')==-1){
        $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'mrdetective'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Mr Detective');
                            $('.mrdetectiveButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'mrdetective'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Mr Detective');
                            $('.mrdetectiveButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });
   
    $('body').on("click", ".wheel_of_fortune", function() {
        $(".litrBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".litrBigDiv").html(getLitrContent('wheel_of_fortune'));
        $(".litrBigDiv").show('slide',{direction:"down"},450);
       window.history.pushState("", "", '#wheel_of_fortune');
        });     
    });

    $('body').on("click", ".wheel_of_fortuneButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('wheel_of_fortune')==-1){
        $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'wheel_of_fortune'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Wheel Of Fortune');
                            $('.wheel_of_fortuneButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'wheel_of_fortune'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Wheel Of Fortune');
                            $('.wheel_of_fortuneButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });

    $('body').on("click", ".quizzes", function() {
        $(".litrBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".litrBigDiv").html(getLitrContent('quizzes'));
        $(".litrBigDiv").show('slide',{direction:"down"},450);
       window.history.pushState("", "", '#quizzes');
        });     
    });
    $('body').on("click", ".quizzesButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('quizzes')==-1){
        $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'quizzes'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Quizzes');
                            $('.quizzesButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'quizzes'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Quizzes');
                            $('.quizzesButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });


    $('body').on("click", ".jam", function() {
        $(".litrBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".litrBigDiv").html(getLitrContent('jam'));
        $(".litrBigDiv").show('slide',{direction:"down"},450);
       window.history.pushState("", "", '#jam');
        });     
    });

    $('body').on("click", ".jamButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('jam')==-1){
        $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'jam'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Just A Minute');
                            $('.jamButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'jam'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Just A Minute');
                            $('.jamButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });
    
    $('body').on('click', "#backLitr", function() {
        setTimeout(function() {
                changeLitrContent();
                 $('.litrDiv').css("display", "block");
            }, 50);
        });
});
