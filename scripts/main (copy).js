var app = {};



var Category = Backbone.Model.extend();

var filteredCollection = function(original, filterFn) {

    var filtered;

    // Instantiate new collection
    filtered = new original.constructor();

    // Remove events associated with original
    filtered._callbacks = {};

    filtered.filterItems = function(filter) {
        var items;
        items = original.filter(filter);
        filtered._currentFilter = filterFn;
        return filtered.reset(items);
    };

    // Refilter when original collection is modified
    original.on('reset change destroy', function() {
        return filtered.filterItems(filtered._currentFilter);
    });



    return filtered.filterItems(filterFn);
};



var $root = $('html, body'),
    $mainContent = $('.site__main-content'),
    $home = $('.section__home'),
    $portfolio = $('.site__portfolio-content'),
    whoWeAreSection = $('#who-we-are'),
    whatWeDidSection = $('#what-we-did'),
    contactSection = $('#contact');




var projects;
var portfolioOpen = false ;
var $projectsGrid;



$(document).ready(function() { 
   MMS.home.initialize();
 });


var Category = Backbone.Model.extend();

 


var Project = Backbone.Model.extend();





Handlebars.registerHelper('if_eq', function(a, b, opts) {
  if (a === b) {
      return opts.fn(this);
  } else {
      return opts.inverse(this);
  }
});

Handlebars.registerHelper("selected_language", function() {
  return window.selectedLanguage;
})

this.MMS = this.MMS || {};

(function ($, window, undefined) {

    'use strict';
    var init = function (options) {

        return this.each(function () {
            var $this = $(this),
                data  = $this.data('animateSprite');

            // ASYNC
            // If we don't specify the columns, we
            // can discover using the background size
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
                        // duration overrides fps
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

                // Setting up columns and total frames
                if (!data.settings.columns) {
                    // this is an async function
                    discoverColumns(function (width, height) {
                        // getting amount of columns
                        data.settings.columns = Math.round(width / data.settings.width);
                        // if totalframes are not specified
                        if (!data.settings.totalFrames) {
                            // total frames is columns times rows
                            var rows = Math.round(height / data.settings.height);
                            data.settings.totalFrames = data.settings.columns * rows;
                        }
                        if (data.settings.autoplay) {
                            data.controlTimer();
                        }
                    });
                } else {

                    // if everything is already set up
                    // we start the interval
                    if (data.settings.autoplay) {
                        data.controlTimer();
                    }
                }


            }

        });

    };

    var frame = function (frameNumber) {
        // frame: number of the frame to be displayed
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

            // always st'op animation to prevent overlapping intervals
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

    var play = function (animationName) {
        return this.each(function () {
            var $this = $(this),
                data  = $this.data('animateSprite');

            if (typeof animationName === 'string') {

                $this.animateSprite('stopAnimation');
                if (data.settings.animations[animationName] !== data.currentAnimation) {
                    data.currentFrame = 0;
                    data.currentAnimation = data.settings.animations[animationName];
                }
                data.controlTimer();
            } else {
                $this.animateSprite('stopAnimation');
                data.controlTimer();
            }

        });
    };

    var fps = function (val) {
        return this.each(function () {
            var $this = $(this),
                data  = $this.data('animateSprite');
            // data.fps
            data.settings.fps = val;
        });
    };

    var methods = {
        init: init,
        frame: frame,
        stop: stop,
        resume: resume,
        restart: restart,
        play: play,
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

            //var explodeImage = "../images/cloud_animation1.gif?p" + new Date().getTime();
            var originalImage = "../images/" + part + "-island.png";



            //var explosion = $("." + this.explodeAnimationClassName);

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
            }, 5000);

        },

        panning: function(value, sound) {
            var xDeg = parseInt(value);
            var zDeg = xDeg + 90;
            if (zDeg > 90) {
                zDeg = 180 - zDeg;
            }
            var x = Math.sin(xDeg * (Math.PI / 180));
            var z = Math.sin(zDeg * (Math.PI / 180));
            //p.setPosition(x, 0, z);

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


                //sound.pos3d(pos, 0, 0);
                this.panning(pos, this.swooshSound);
            }
        }
    };

    MMS.home = home_;

})(jQuery, _, TweenMax);

(function(a) {
    (jQuery.browser = jQuery.browser || {}).mobile = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))
})(navigator.userAgent || navigator.vendor || window.opera);

