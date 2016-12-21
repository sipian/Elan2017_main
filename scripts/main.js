$(document).ready(function() { 
   MMS.home.initialize();
 });

this.MMS = this.MMS || {};
(function ($, window, undefined) {
    'use strict';
    var init = function (options) {

        return this.each(function () {
            var $this = $(this),
                data  = $this.data('animateSprite');
            var discoverColumns = function (cb) {
                var imageSrc = $this.css('background-image').replace(/url\((['"])?(.*?)\1\)/gi, '$2');
                var image = new Image();

                image.onload = function () {
                    var width = image.width,
                        height = image.height;
                    cb(width, height);
                };
                image.src = imageSrc;
            };
            if (!data) {
                $this.data('animateSprite', {
                    settings: $.extend({
                        width: $this.width(),
                        height: $this.height(),
                        totalFrames: false,
                        columns: false,
                        fps: 12,
                        complete: function () {},
                        loop: false,
                        autoplay: true
                    }, options),
                    currentFrame: 0,
                    controlAnimation: function () {

                        var checkLoop = function (currentFrame, finalFrame) {
                            currentFrame++;
                            if (currentFrame >= finalFrame) {
                                if (this.settings.loop === true) {
                                    currentFrame = 0;
                                    data.controlTimer();
                                } else {
                                    this.settings.complete();
                                }
                            } else {
                                data.controlTimer();
                            }
                            return currentFrame;
                        };

                        if (this.settings.animations === undefined) {
                            $this.animateSprite('frame', this.currentFrame);
                            this.currentFrame = checkLoop.call(this, this.currentFrame, this.settings.totalFrames);

                        } else {
                            if (this.currentAnimation === undefined) {
                                for (var k in this.settings.animations) {
                                    this.currentAnimation = this.settings.animations[k];
                                    break;
                                }
                            }
                            var newFrame  = this.currentAnimation[this.currentFrame];

                            $this.animateSprite('frame', newFrame);
                            this.currentFrame = checkLoop.call(this, this.currentFrame, this.currentAnimation.length);

                        }

                    },
                    controlTimer: function () {
                        //speed of explosiion
                        var speed = 1000 / data.settings.fps;

                        if (data.settings.duration !== undefined) {
                            speed = data.settings.duration / data.settings.totalFrames;
                        }

                        data.interval = setTimeout(function () {
                            data.controlAnimation();
                        }, speed);

                    }
                });


                data = $this.data('animateSprite');
                if (!data.settings.columns) {
                    discoverColumns(function (width, height) {
                        data.settings.columns = Math.round(width / data.settings.width);
                        if (!data.settings.totalFrames) {
                            var rows = Math.round(height / data.settings.height);
                            data.settings.totalFrames = data.settings.columns * rows;
                        }
                        if (data.settings.autoplay) {
                            data.controlTimer();
                        }
                    });
                } else {
                    if (data.settings.autoplay) {
                        data.controlTimer();
                    }
                }


            }

        });

    };

    var frame = function (frameNumber) {
        return this.each(function () {
            if ($(this).data('animateSprite') !== undefined) {
                var $this = $(this),
                    data  = $this.data('animateSprite'),
                    row = Math.floor(frameNumber / data.settings.columns),
                    column = frameNumber % data.settings.columns;

                $this.css('background-position', (-data.settings.width * column) + 'px ' + (-data.settings.height * row) + 'px');
            }
        });
    };

    var stop = function () {
        return this.each(function () {
            var $this = $(this),
                data  = $this.data('animateSprite');
            clearTimeout(data.interval);
        });
    };

    var resume = function () {
        return this.each(function () {
            var $this = $(this),
                data  = $this.data('animateSprite');
            $this.animateSprite('stopAnimation');
            data.controlTimer();
        });
    };

    var restart = function () {
        return this.each(function () {
            var $this = $(this),
                data  = $this.data('animateSprite');

            $this.animateSprite('stopAnimation');

            data.currentFrame = 0;
            data.controlTimer();
        });
    };


    var fps = function (val) {
        return this.each(function () {
            var $this = $(this),
                data  = $this.data('animateSprite');
            data.settings.fps = val;
        });
    };

    var methods = {
        init: init,
        frame: frame,
        stop: stop,
         resume: resume,
         restart: restart,
        stopAnimation: stop,
        resumeAnimation: resume,
        restartAnimation: restart,
        fps: fps
    };

    $.fn.animateSprite = function (method) {

        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || ! method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' +  method + ' does not exist on jQuery.animateSprite');
        }

    };

})(jQuery, window);

this.MMS = this.MMS || {};

(function($, _, TweenMax) {

    "use strict";

    var home_ = {



        initialize: function() {

            this.name = "home";
            this.parts = ["meyer", "miller", "smith" , "helmet" , "shield" , "crown"];
            this.floatAnimationsClasses = ["animation__float_01", "animation__float_02", "animation__float_03" , "animation__float_04" , "animation__float_05" , "animation__float_06"];
            this.explodeAnimationClassName = this.name + "__bg-island-animation";

            this.$section = $(".section__" + this.name);
            this.islands = [
                $(".js-island-" + this.parts[0]),
                $(".js-island-" + this.parts[1]),
                $(".js-island-" + this.parts[2]),
                $(".js-island-" + this.parts[3]),
                $(".js-island-" + this.parts[4]),
                $(".js-island-" + this.parts[5])
            ];

            this.prepareSounds();

            this.addInteraction();


        },

        prepareSounds: function() {

            this.clickIslandSound = new Howl({
                urls: ["./sounds/island_click.mp3", "./sounds/island_click.ogg", "./sounds/island_click.aac"],
                autoplay: false,
                loop: false,
                volume: 0.4,
                preload: true
            });

            this.swooshSound = new Howl({
                urls: ["./sounds/swoosh.mp3", "./sounds/swoosh.ogg", "./sounds/swoosh.aac"],
                autoplay: false,
                loop: false,
                volume: 0.4,
                preload: true

            });
        },

        addInteraction: function() {
            var self = this;
            var i = 0;
            var l = this.parts.length;
            while (i < l) {

                this.islands[i].on("click", _.bind(this.islandClick, this, i));
                ++i;

            }
        },

        islandClick: function(index) {

            var part = this.parts[index];
            var floatAnimationClass;
 switch(index){
    case 0:{floatAnimationClass="animation__float_01";break;}
    case 1:{floatAnimationClass="animation__float_02";break;}
    case 2:{floatAnimationClass="animation__float_03";break;}
    case 3:{floatAnimationClass="animation__float_04";break;}
    case 4:{floatAnimationClass="animation__float_05";break;}
    case 5:{floatAnimationClass="animation__float_06";break;}
 }           
            var island = this.islands[index];
            var currentIslandTop = island.offset().top;
            var holeTop = $(".home__bg-hole-" + part).offset().top;

            island.off("click touchstart");
            this.playClickSound(index);

            island.removeClass(this.name + "__bg-island-" + part + " " + floatAnimationClass).addClass(this.explodeAnimationClassName);
            var originalImage = "../images/" + part + "-island.png";
            island.animateSprite({
                fps: 25,    //speed
                animations: {
                    explosion: [0, 1, 2, 3]
                },
                loop: false,
                autoplay: false,
                complete: function() {
                    island.animateSprite("frame", 0);
                    island.removeClass(self.explodeAnimationClassName);
                }
            });

            island.animateSprite("frame", 0);
            island.animateSprite("restart");

            var self = this;

            setTimeout(function() {

                island.addClass(self.name + "__bg-island-" + part + " " + floatAnimationClass);
                var targetTop = (parseInt(holeTop, 10) - parseInt(currentIslandTop, 10)) - 100;
                island.css({
                    "opacity": "0",
                    "margin-top": targetTop + "px",
                    "background-position": "top center"
                });

                island.velocity({
                    opacity: 1,
                    "margin-top": 0

                }, {
                    duration: 1400,
                    easing: "easeOuCubic",
                    complete: function() {
                        island.on("click touchstart", _.bind(self.islandClick, self, index));
                    },
                    delay: 200,
                    mobileHA: true
                });
                self.playSwooshSound(index);
            }, 9000000);   //speed of object going up

        },

        panning: function(value, sound) {
            var xDeg = parseInt(value);
            var zDeg = xDeg + 90;
            if (zDeg > 90) {
                zDeg = 180 - zDeg;
            }
            var x = Math.sin(xDeg * (Math.PI / 180));
            var z = Math.sin(zDeg * (Math.PI / 180));
            sound.play();

            sound.pos3d(x, 0, z);

        },

        playClickSound: function(index) {
            if (this.clickIslandSound) {
                var pos = 0;
                switch (index) {
                    case 0:
                        pos = -45;
                        break;
                    case 1:
                        pos = 0;
                        break;
                    case 2:
                        pos = 45;
                        break;
                    default:
                }

                this.panning(pos, this.clickIslandSound);
            }

        },

        playSwooshSound: function(index) {
            if (this.swooshSound) {
                var pos = 0;
                switch (index) {
                    case 0:
                        pos = -45;
                        break;
                    case 1:
                        pos = 0;
                        break;
                    case 2:
                        pos = 45;
                        break;
                    default:
                }

                this.panning(pos, this.swooshSound);
            }
        }
    };

    MMS.home = home_;

})(jQuery, _, TweenMax);