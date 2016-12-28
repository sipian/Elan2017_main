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
        window.history.pushState("", "", '#elan-e-jung');
    });
    if(window.location.href.indexOf("elan-e-jung") > -1)
        $(".biggiesBigDiv").html(getBiggiesContent('elan-e-jung'));

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
    
    $('body').on("click", ".fmi", function() {
        $('.biggiesBigDiv').hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".biggiesBigDiv").html(getBiggiesContent('fmi'));
            $('.biggiesBigDiv').show('slide', {
                direction: "down"
            }, 450);
        });
    });
    $('body').on("click", ".angasutra", function() {
        $('.biggiesBigDiv').hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".biggiesBigDiv").html(getBiggiesContent('angasutra'));
            $('.biggiesBigDiv').show('slide', {
                direction: "down"
            }, 450);
        });
    });
    $('body').on('click', "#backBiggies", function() {
        setTimeout(function() {
            changeBiggiesContent();
            $('.biggiesDiv').css("display", "block");
        }, 50);
    });
});