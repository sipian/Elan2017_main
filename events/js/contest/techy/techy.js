$(document).ready(function() {

    $('body').on("click", ".robo_soccer", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('robo_soccer'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".robo_wars", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('robo_wars'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".pirates", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('pirates'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

   $('body').on("click", ".robo_epic", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('robo_epic'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });
    $('body').on("click", ".ojo_cada", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('ojo_cada'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".drift_king", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('drift_king'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".bridge_builder", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('bridge_builder'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".junkyard_wars", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('junkyard_wars'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".electronic_champ", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('electronic_champ'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".dtmf_race", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('dtmf_race'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });






    $('body').on("click", ".elixir", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('elixir'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".hack_a_maze", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('hack_a_maze'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".enigma", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('enigma'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".algo", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('algo'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".pro_quest", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('pro_quest'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".quadcopter", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('quadcopter'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".science_quiz", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('science_quiz'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on("click", ".auto_quiz", function() {
        $(".techyBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".techyBigDiv").html(getTechyContent('auto_quiz'));
            $(".techyBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
    });

    $('body').on('click', "#backTechy", function() {
        setTimeout(function() {
            changeTechyContent();
            $(".techyBigDiv").css("display", "block");
        }, 50);
    });

});