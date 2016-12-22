$(document).ready(function() {

    $('body').on("click", ".breakfree", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('breakfree'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".looseyourfeet", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('looseyourfeet'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".nrityanjali", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('nrityanjali'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".just-duet", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('just-duet'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".vibrazione", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('vibrazione'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".octaves", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('octaves'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".andaazapnapna", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('andaazapnapna'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });


    $('body').on("click", ".nukkadnatak", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('nukkadnatak'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".filmfarefiesta", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('filmfarefiesta'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".picelectic", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('picelectic'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".lightscamera", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('lightscamera'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".facepainting", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('facepainting'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".nailart", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('nailart'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".mehendi", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('mehendi'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });


    $('body').on("click", ".claymodelling", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('claymodelling'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });


    $('body').on("click", ".artexhibition", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('artexhibition'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });


    $('body').on("click", ".djwars", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('djwars'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });



    $('body').on("click", ".rjhunt", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('rjhunt'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });



    $('body').on("click", ".lendmeurvoice", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('lendmeurvoice'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on('click', "#backCulti", function() {
        setTimeout(function() {
            changeCultiContent();
            $(".cultiBigDiv").css("display", "block");
        }, 50);
    });
});