$(document).ready(function() {
    checkInfiInsideRegister(), $("body").on("click", ".foodathon", function() {
        $(".infiBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".infiBigDiv").html(getInfiContent("foodathon")), $(".infiBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#foodathon")
    }), $("body").on("click", ".minutetowinit", function() {
        $(".infiBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".infiBigDiv").html(getInfiContent("minutetowinit")), $(".infiBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#minutetowinit")
    }), $("body").on("click", ".wheel_of_fortune", function() {
        $(".infiBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".infiBigDiv").html(getInfiContent("wheel_of_fortune")), $(".infiBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#wheel_of_fortune")
    }), $("body").on("click", ".langaming", function() {
        $(".infiBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".infiBigDiv").html(getInfiContent("langaming")), $(".infiBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#langaming")
    }), $("body").on("click", ".finaldestination", function() {
        $(".infiBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".infiBigDiv").html(getInfiContent("finaldestination")), $(".infiBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#finaldestination")
    }), $("body").on("click", ".madads", function() {
        $(".infiBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".infiBigDiv").html(getInfiContent("madads")), $(".infiBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#madads")
    }), $("body").on("click", ".casino_royale", function() {
        $(".infiBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".infiBigDiv").html(getInfiContent("casino_royale")), $(".infiBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#casino_royale")
    }), $("body").on("click", ".snake", function() {
        $(".infiBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".infiBigDiv").html(getInfiContent("snake")), $(".infiBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#snake")
    }), $("body").on("click", ".convcoffee", function() {
        $(".infiBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".infiBigDiv").html(getInfiContent("convcoffee")), $(".infiBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#convcoffee")
    }), $("body").on("click", ".walk_the_ramp", function() {
        $(".infiBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".infiBigDiv").html(getInfiContent("walk_the_ramp")), $(".infiBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#walk_the_ramp")
    }), $("body").on("click", ".poker", function() {
        $(".infiBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".infiBigDiv").html(getInfiContent("poker")), $(".infiBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#poker")
    }), $("body").on("click", "#backInfi", function() {
        setTimeout(function() {
            changeInfiContent(), $(".infiDiv").css("display", "block")
        }, 50)
    }), $("body").on("click", ".walk_the_rampButton", function() {
        return 0 == track ? void alert("Please Sign In Before Registering") : 2 == verified ? void alert("Please Verify Your Mail Id First") : void(-1 == events.indexOf("walk_the_ramp") ? $.post("../registerEvent.php", {
            id: _id,
            email: email,
            elanId: elanId,
            contest: "walk_the_ramp"
        }, function(i) {
            "failure" != i ? (alert("Successfully Registered For Walk The Ramp"), $(".walk_the_rampButton").html("DEREGISTER"), events = i) : alert("Some Error Ocurred While Registering")
        }) : $.post("../unregisterEvent.php", {
            id: _id,
            email: email,
            elanId: elanId,
            contest: "walk_the_ramp"
        }, function(i) {
            "failure" != i ? (alert("Successfully Unregistered From Walk The Ramp"), $(".walk_the_rampButton").html("REGISTER"), events = i) : alert("Some Error Ocurred While Deregistering")
        }))
    })
});