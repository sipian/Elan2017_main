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
        window.history.pushState("", "", '#breakfree');
    });

    checkCultiInsideRegister();
    $('body').on("click", ".breakfreeButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('breakfree')==-1){
        $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'breakfree'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Break Free');
                            $('.breakfreeButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'breakfree'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Break Free');
                            $('.breakfreeButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
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
        window.history.pushState("", "", '#looseyourfeet');
    });

$('body').on("click", ".looseyourfeetButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('looseyourfeet')==-1){
        $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'looseyourfeet'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Loose Your Feet');
                            $('.looseyourfeetButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'looseyourfeet'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Loose Your Feet');
                            $('.looseyourfeetButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
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
        window.history.pushState("", "", '#nrityanjali');
    });


    // Event Registration of Nrityanjali starts
    $('body').on("click", ".nrityanjaliButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('nrityanjali')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'nrityanjali'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Nrityanjali');
                                $('.nrityanjaliButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'nrityanjali'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Nrityanjali');
                                $('.nrityanjaliButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

// Event registration of Nrityanjali ends



    $('body').on("click", ".just_duet", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('just_duet'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#just_duet');
    });

// Event registration of just_duet starts

$('body').on("click", ".just_duetButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('just_duet')==-1){
        $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'just_duet'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Just Duet');
                            $('.just_duetButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'just_duet'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Just Duet');
                            $('.just_duetButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });


// Event registration of just_duet ends



    $('body').on("click", ".vibrazione", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('vibrazione'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#vibrazione');
    });

// Event registration of  vibrazione starts


$('body').on("click", ".vibrazioneButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('vibrazione')==-1){
        $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'vibrazione'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Vibrazione');
                            $('.vibrazioneButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'vibrazione'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Vibrazione');
                            $('.vibrazioneButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });

// Event registration of vibrazione ends

    $('body').on("click", ".octaves", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('octaves'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#octaves');
    });

// Event registration of octaves starts


$('body').on("click", ".octavesButton", function() {
        if(track==0){
                        alert('Please Sign In Before Registering');
                        return;
                }
        if(verified==2){
                        alert('Please Verify Your Mail Id First');
                        return;
                }

        if(events.indexOf('octaves')==-1){
        $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'octaves'}, function(result){
            if(result!="failure"){
                            alert('Successfully registered for Octaves');
                            $('.octavesButton').html('UNREGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Registering');
        });
    }
    else{
        $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'octaves'}, function(result){
            if(result!="failure"){
                            alert('Successfully Deregistered from Octaves');
                            $('.octavesButton').html('REGISTER');
                            events=result;
                        }
            else
                alert('Some Error Ocurred While Deregistering');
        });
    }
    });
// Event registration of octaves ends

    $('body').on("click", ".andaazapnapna", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('andaazapnapna'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#andaazapnapna');
    });

    // Event registration of andaazapnapna starts
    $('body').on("click", ".andaazapnapnaButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('andaazapnapna')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'andaazapnapna'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Andaaz Apna Apna');
                                $('.andaazapnapnaButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'andaazapnapna'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Andaaz Apna Apna');
                                $('.andaazapnapnaButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

    // Event registration of andaazapnapna ends
    $('body').on("click", ".nukkadnatak", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('nukkadnatak'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#nukkadnatak');
    });

    // Event registration of nukkadnatak starts

    $('body').on("click", ".nukkadnatakButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('nukkadnatak')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'nukkadnatak'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Nukkad Natak');
                                $('.nukkadnatakButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'nukkadnatak'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Nukkad Natak');
                                $('.nukkadnatakButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

    // Event registration of nukkadnatak ends


    $('body').on("click", ".filmfarefiesta", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('filmfarefiesta'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#filmfarefiesta');
    });
    // Event registration of filmfarefiesta starts

    $('body').on("click", ".filmfarefiestaButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('filmfarefiesta')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'filmfarefiesta'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Film Fare Fiesta');
                                $('.filmfarefiestaButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'filmfarefiesta'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from  Film Fare Fiesta');
                                $('.filmfarefiestaButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });
    // Event registration of filmfarefiesta ends
    $('body').on("click", ".picelectic", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('picelectic'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#picelectic');
    });
    // Event registration of picelectic starts
    $('body').on("click", ".picelecticButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('picelectic')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'picelectic'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Picelectic');
                                $('.picelecticButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'picelectic'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Picelectic');
                                $('.picelecticButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

    // Event registration of picelectic ends
    $('body').on("click", ".lightscamera", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('lightscamera'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#lightscamera');
    });
    // Event registration of lightscamera starts
    $('body').on("click", ".lightscameraButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('lightscamera')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'lightscamera'}, function(result){
                if(result!="failure"){
                                Alert('successfully Registered for Lights Camera Elan');
                                $('.lightscameraButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'lightscamera'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Lights Camera Elan');
                                $('.lightscameraButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

    // Event registration of lightscamera ends
    $('body').on("click", ".facepainting", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('facepainting'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#facepainting');
    });
    // Event registration of facepainting starts

    $('body').on("click", ".facepaintingButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('facepainting')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'facepainting'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Face Painting');
                                $('.facepaintingButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'facepainting'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Face Painting');
                                $('.facepaintingButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });
    // Event registration of facepainting ends
    $('body').on("click", ".nailart", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('nailart'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#nailart');
    });
    // Event registration of nailart starts

    $('body').on("click", ".nailartButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('nailart')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'nailart'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Nail Art');
                                $('.nailartButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'nailart'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Nail Art');
                                $('.nailartButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });
    // Event registration of nailart ends
    $('body').on("click", ".mehendi", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('mehendi'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#mehendi');
    });

    // Event registration of mehendi starts

    $('body').on("click", ".mehendiButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('mehendi')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'mehendi'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Mehendi');
                                $('.mehendiButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'mehendi'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Mehendi');
                                $('.mehendiButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });
    // Event registration of mehendi ends
    $('body').on("click", ".claymodelling", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('claymodelling'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#claymodelling');
    });

    // Event registration of claymodelling starts
    $('body').on("click", ".claymodellingButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('claymodelling')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'claymodelling'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Clay Modelling');
                                $('.claymodellingButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'claymodelling'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Clay Modelling');
                                $('.claymodellingButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

    // Event registration of claymodelling ends
    $('body').on("click", ".artexhibition", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('artexhibition'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#artexhibition');
    });
    // Event registration of artexhibition starts
    $('body').on("click", ".artexhibitionButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('artexhibition')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'artexhibition'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Art Exhibition');
                                $('.artexhibitionButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'artexhibition'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Art Exhibition');
                                $('.artexhibitionButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

    // Event registration of artexhibition ends

    $('body').on("click", ".djwars", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('djwars'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#djwars');
    });

    // Event registration of djwars starts

    $('body').on("click", ".djwarsButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('djwars')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'djwars'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for DJ Wars');
                                $('.djwarsButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'djwars'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from DJ Wars');
                                $('.djwarsButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });
    // Event registration of djwars ends

    $('body').on("click", ".rjhunt", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('rjhunt'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#rjhunt');
    });


    // Event registration of rjhunt starts
    $('body').on("click", ".rjhuntButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('rjhunt')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'rjhunt'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for RJ Hunt');
                                $('.rjhuntButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'rjhunt'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from RJ Hunt');
                                $('.rjhuntButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

    // Event registration of rjhunt ends
    $('body').on("click", ".lendmeurvoice", function() {
        $(".cultiBigDiv").hide("slide", {
            direction: "up"
        }, 500, function() {
            $(".cultiBigDiv").html(getCultiContent('lendmeurvoice'));
            $(".cultiBigDiv").show('slide', {
                direction: "down"
            }, 500);
        });
        window.history.pushState("", "", '#lendmeurvoice');
    });
    // Event registration of lendmeurvoice starts
    $('body').on("click", ".lendmeurvoiceButton", function() {
            if(track==0){
                            alert('Please Sign In Before Registering');
                            return;
                    }
            if(verified==2){
                            alert('Please Verify Your Mail Id First');
                            return;
                    }

            if(events.indexOf('lendmeurvoice')==-1){
            $.post("../registerEvent.php", {id: _id , email: email , elanId:elanId, contest:'lendmeurvoice'}, function(result){
                if(result!="failure"){
                                alert('Successfully registered for Lend Me Your Voice');
                                $('.lendmeurvoiceButton').html('UNREGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Registering');
            });
        }
        else{
            $.post("../unregisterEvent.php", {id: _id , email: email , elanId:elanId, contest:'lendmeurvoice'}, function(result){
                if(result!="failure"){
                                alert('Successfully Deregistered from Lend Me Your Voice');
                                $('.lendmeurvoiceButton').html('REGISTER');
                                events=result;
                            }
                else
                    alert('Some Error Ocurred While Deregistering');
            });
        }
        });

    // Event registration of lendmeurvoice ends
    $('body').on('click', "#backCulti", function() {
        setTimeout(function() {
            changeCultiContent();
            $(".cultiBigDiv").css("display", "block");
        }, 50);
    });
});
