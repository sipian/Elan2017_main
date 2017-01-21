$(document).ready(function() {
    $("body").on("click", ".elan-e-jung", function() {
        $(".biggiesBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".biggiesBigDiv").html(getBiggiesContent("elan-e-jung")), $(".biggiesBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#elanejung")
    }), window.location.href.indexOf("elanejung") > -1 && $(".biggiesBigDiv").html(getBiggiesContent("elan-e-jung")), $("body").on("click", ".elan-e-jungButton", function() {
        return 0 == track ? void alert("Please Sign In Before Registering") : 2 == verified ? void alert("Please Verify Your Mail Id First") : void(-1 == events.indexOf("elanejung") ? $.post("../registerEvent.php", {
            id: _id,
            email: email,
            elanId: elanId,
            contest: "elanejung"
        }, function(e) {
            "failure" != e ? (alert("Successfully Registered For Elan E Jung"), $(".elan-e-jungButton").html("DEREGISTER"), events = e) : alert("Some Error Ocurred While Registering")
        }) : $.post("../unregisterEvent.php", {
            id: _id,
            email: email,
            elanId: elanId,
            contest: "elanejung"
        }, function(e) {
            "failure" != e ? (alert("Successfully Unregistered From Elan E Jung"), $(".elan-e-jungButton").html("REGISTER"), events = e) : alert("Some Error Ocurred While Deregistering")
        }))
    }), $("body").on("click", ".manthan", function() {
        $(".biggiesBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".biggiesBigDiv").html(getBiggiesContent("manthan")), $(".biggiesBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#manthan")
    }), $("body").on("click", ".manthanButton", function() {
        return 0 == track ? void alert("Please Sign In Before Registering") : 2 == verified ? void alert("Please Verify Your Mail Id First") : void(-1 == events.indexOf("manthan") ? $.post("../registerEvent.php", {
            id: _id,
            email: email,
            elanId: elanId,
            contest: "manthan"
        }, function(e) {
            "failure" != e ? (alert("Successfully Registered For Manthan"), $(".manthanButton").html("DEREGISTER"), events = e) : alert("Some Error Ocurred While Registering")
        }) : $.post("../unregisterEvent.php", {
            id: _id,
            email: email,
            elanId: elanId,
            contest: "manthan"
        }, function(e) {
            "failure" != e ? (alert("Successfully Unregistered From Manthan"), $(".manthanButton").html("REGISTER"), events = e) : alert("Some Error Ocurred While Deregistering")
        }))
    }), window.location.href.indexOf("manthan") > -1 && $(".biggiesBigDiv").html(getBiggiesContent("manthan")), $("body").on("click", ".campus_princess", function() {
        $(".biggiesBigDiv").hide("slide", {
            direction: "up"
        }, 450, function() {
            $(".biggiesBigDiv").html(getBiggiesContent("campus_princess")), $(".biggiesBigDiv").show("slide", {
                direction: "down"
            }, 450)
        }), window.history.pushState("", "", "#campus_princess")
    }), $("body").on("click", ".campus_princessButton", function() {
        return 0 == track ? void alert("Please Sign In Before Registering") : 2 == verified ? void alert("Please Verify Your Mail Id First") : void(-1 == events.indexOf("campus_princess") ? $.post("../registerEvent.php", {
            id: _id,
            email: email,
            elanId: elanId,
            contest: "campus_princess"
        }, function(e) {
            "failure" != e ? (alert("Successfully Registered For Campus Princess"), $(".campus_princessButton").html("DEREGISTER"), events = e) : alert("Some Error Ocurred While Registering")
        }) : $.post("../unregisterEvent.php", {
            id: _id,
            email: email,
            elanId: elanId,
            contest: "campus_princess"
        }, function(e) {
            "failure" != e ? (alert("Successfully Unregistered From Campus Princess"), $(".campus_princessButton").html("REGISTER"), events = e) : alert("Some Error Ocurred While Deregistering")
        }))
    }), window.location.href.indexOf("campus_princess") > -1 && $(".biggiesBigDiv").html(getBiggiesContent("campus_princess")), $("body").on("click", "#backBiggies", function() {
        setTimeout(function() {
            changeBiggiesContent(), $(".biggiesDiv").css("display", "block")
        }, 50)
    })
});
