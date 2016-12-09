$(document).ready(function() {

    $('body').on("click", ".mrdetective", function() {
        $(".litrBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".litrBigDiv").html(getLitrContent('mrdetective'));
        $(".litrBigDiv").show('slide',{direction:"down"},450);
       });     
    });

   
    $('body').on("click", ".wheel-of-fortune", function() {
        $(".litrBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".litrBigDiv").html(getLitrContent('wheel-of-fortune'));
        $(".litrBigDiv").show('slide',{direction:"down"},450);
       });     
    });

    $('body').on("click", ".quizzes", function() {
        $(".litrBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".litrBigDiv").html(getLitrContent('quizzes'));
        $(".litrBigDiv").show('slide',{direction:"down"},450);
       });     
    });

    $('body').on("click", ".jam", function() {
        $(".litrBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".litrBigDiv").html(getLitrContent('jam'));
        $(".litrBigDiv").show('slide',{direction:"down"},450);
       });     
    });

    $('body').on("click", ".businessquiz", function() {
        $(".litrBigDiv").hide("slide",{direction:"up"}, 450 , function(){
        $(".litrBigDiv").html(getLitrContent('businessquiz'));
        $(".litrBigDiv").show('slide',{direction:"down"},450);
       });     
    });

    
    $('body').on('click', "#backLitr", function() {
        setTimeout(function() {
                changeLitrContent();
                 $('.litrDiv').css("display", "block");
            }, 50);
        });
});
