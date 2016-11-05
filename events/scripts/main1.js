/*jshint devel:true */
/*global Backbone */

window.weatherRequestDE = $.getJSON('http://api.wunderground.com/api/be0f277024a01b1f/geolookup/conditions/lang:DL/q/Germany/Berlin.json');
/*
var app = {};

window.App = {

    Polyglot: new Polyglot({locale: "de", phrases: {}}),
    translate: function (text, key, data) {
        var currentLanguage = $('html').attr('lang');

        console.log(text);

        if(currentLanguage == "de") return text;
        if(!data) data = {};
        return App.Polyglot.t(key, data);

    }
}

function handleLocales(languageCode) {
    var currentLanguage = $('html').attr('lang');

  var localePromise = $.Deferred();

    if(currentLanguage && currentLanguage !== "de") {

        localePromise = $.getJSON("/locales/"+currentLanguage+".json")
        .then(function (data) {
            App.Polyglot = new Polyglot({locale: currentLanguage, phrases: data});
        })
        .fail(function() {
            alert("Problem Loading Locale "+currentLanguage);
        });

    } else {
        localePromise.resolve();
    }

    return localePromise;
}


function updateTranslations(html) {

    var currentLanguage = $('html').attr('lang');

    //console.log(currentLanguage, $("body").find("[data-translate]"));

    $("body").find("[data-translate]").each(function(index, element){
    var $element = $(element);
    var key      = $element.data("translate");
    var data     = $element.data("translate-data");

    //console.log("currentLanguage: ", currentLanguage, $element);

    if(currentLanguage === "en") {
        $("body").removeClass("de");
    }

    if(App.Polyglot.phrases[key]) {

      $element.html("<span>"+App.Polyglot.t(key, data)+"</span>");

      if ($element.is("a") || $element.parents().is("a")) {
        if($element.attr("title") !== undefined) {
          $(this).attr("title", App.Polyglot.t(key, data));
        } else if ($(this).closest("a").attr("title") !== undefined) {
          $(this).closest("a").attr("title", App.Polyglot.t(key, data));
        }
      }
    }

    });

}

/*jshint devel:true */
/*jshint camelcase: false */
/*global Backbone */
/*
weatherRequestDE.then(function (data) {
    
    return $('.js-weather-info').html('<p>'+ data.location.city +', '+ data.location.country_name +': '+ data.current_observation.weather +', '+ data.current_observation.temp_c +'°C'+'</p>').addClass("show--weather");
});
/*jshint devel:true */
/*jshint camelcase: false */
/*global Backbone */

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

var CategoryList = Backbone.Collection.extend({
    model: Category,
    url: 'http://admin.meyermillersmith.com/index.json',
    parse: function(response) {

        var categories = _.map(response.categories, function(category) {
            category.projects = _.filter(response.projects, { category_id: category.id.toString() });
            _.keys(category).forEach(function(key) {
                if (key.indexOf("_" + window.selectedLanguage) >= 0) category[key.replace("_" + window.selectedLanguage, "")] = category[key];
            });

            category.projects.forEach(function(project) {
                _.keys(project).forEach(function(key) {
                    if (key.indexOf("_" + window.selectedLanguage) >= 0) project[key.replace("_" + window.selectedLanguage, "")] = project[key];
                });
            });


            //TODO
            if(category.slug=="who-we-are") category.slug="who-we-are-temp";

             //console.log(category);

            return category;
        });

        return categories;
    }


});

var CategoryView = Backbone.View.extend({
    tagName: 'li',
    template: mms.templates['category-template'],

    initialize: function() {

        this.$el = $('#category-list');
    },
    render: function() {

        var filter_ = function(c) {
            return (c.get('id') != 32 && c.get('id') != 33 && c.get('id') != 30);
        };

        var coll = new Backbone.Collection(filteredCollection(this.collection, filter_)); //;//new Backbone.Collection(this.collection.where({ id: 32 }));
        //console.log(coll);

        var categoryTemplate = this.template(coll.toJSON());

        //var categoryTemplate = this.template(this.collection.toJSON());
        this.$el.html(categoryTemplate);
        return this;
    }
});

var CategoryViewNotMake = Backbone.View.extend({
    tagName: 'li',
    template: mms.templates['category-template-not-make'],

    initialize: function() {

        this.$el = $('#category-list-not-make');
    },
    render: function() {

        var filter_ = function(c) {
            return (c.get('id') == 32);
        };

        var coll = new Backbone.Collection(filteredCollection(this.collection, filter_)); //;//new Backbone.Collection(this.collection.where({ id: 32 }));
        //console.log(coll);

        var categoryTemplate = this.template(coll.toJSON());
        this.$el.html(categoryTemplate);
        return this;
    }
});

var CategoryViewWhoWeAreTemp = Backbone.View.extend({
    tagName: 'li',
    template: mms.templates['category-template-who-we-are-temp'],

    initialize: function() {
        this.$el = $('#category-list-who-we-are-temp');
    },
    render: function() {

        var filter_ = function(c) {
            return (c.get('id') == 33 || c.get('id') == 30);
        };

        var coll = new Backbone.Collection(filteredCollection(this.collection, filter_)); //;//new Backbone.Collection(this.collection.where({ id: 32 }));
        //console.log(coll);

        var categoryTemplate = this.template(coll.toJSON());
        this.$el.html(categoryTemplate);
        return this;
    }
});

/*jshint devel:true */
/*global Backbone */


var Project = Backbone.Model.extend();



var ProjectList = Backbone.Collection.extend({
    model: Project,
    url: 'http://admin.meyermillersmith.com/index.json',

    parse: function(response) {
        response.projects.forEach(function(project) {
            _.keys(project).forEach(function(key) {
                if (key.indexOf("_" + window.selectedLanguage) >= 0) project[key.replace("_" + window.selectedLanguage, "")] = project[key];
            });
        });

        // TODO: optimize the loops

        var cats = response.categories;

        var tempCats = [];
        var tempCatsID = [];
        var tempProjects = [];

        var i = 0;
        var l = cats.length;

        var position = 0;
        var j = 0;
        var jl = 0;

        var catIndex = 0;
        var tempProject;

        while (i < l) {
            tempCatsID[i] = String(cats[i].id);

            tempCats[i] = { catID: tempCatsID[i], projects: [] }
                ++i;
        }


        i = 0;
        l = response.projects.length;



        while (i < l) {
            tempProject = response.projects[i];
            catIndex = tempCatsID.indexOf(tempProject.category_id);
            if (catIndex > -1) {
                tempCats[catIndex].projects.push(tempProject);
            }
            ++i;
        }

        // fixed unique position


        i = 0;
        l = tempCats.length;

        var projectCatID;

        while (i < l) {
            jl = tempCats[i].projects.length;
            while (j < jl) {
                projectCatID = tempCats[i].projects[j].category_id;
                //console.log(projectCatID);
                switch (projectCatID) {
                    case "33":
                    case "30":
                        tempCats[i].projects[j].section = "whoWeAre";
                        break;
                    case "32":
                        tempCats[i].projects[j].section = "whatWeDidNotDo";
                        break;
                    default:
                        tempCats[i].projects[j].section = "whatWeMade";
                }
                tempCats[i].projects[j].position = ++position;
                tempProjects.push(tempCats[i].projects[j]);
                ++j;
            }
            j = 0;
            ++i;
        }

        var result = _.sortBy(tempProjects, 'position');


        /*_.each(response.projects, function(p) {

            p.position = ++position;
        });*/


        //var result = _.sortBy(response.projects, 'position');
        return result;
    }
});



var ProjectView = Backbone.View.extend({
    // tagName: 'li',
    template: mms.templates['project-gallery-template'],

    initialize: function() {

        this.$el = $('.js-portfolio-region');
        this.$scrollEl = $(".site__portfolio-content");
        //this.handleScroll();

    },
    render: function() {

        var projectTemplate = this.template(this.model.toJSON());
        this.$el.html(projectTemplate);
        this.$scrollEl = $(".site__portfolio-content");
        //this.$scrollEl.find('.project__gallery').css({'visibility': 'hidden'});
        //this.addScroll();

        this.$scrollEl.scrollTop(0);
        //this.addScrollMagic();
        //this.addScrollMagic();
        // hack
        if (window.selectedLanguage == "en") {
            this.$el.find(".project__next-message").text('Scroll to next project');
        }

        var that = this;

        setTimeout(function() { that.addScrollMagic.call(that) }, 50);

        //var closeButton=this.$el.parent().find('#close--portfolio');
        // var scrollbarWidth = this.$scrollEl.width()-this.$el.width();
        //closeButton.css({right:scrollbarWidth});
        return this;
    },

    show: function() {
        // this.$scrollEl.find('.project__gallery').css({'visibility': 'visible'});

    },


    scrollAdded: false,

    addScrollMagic: function() {
        var that = this;
        if (!this.scrollAdded) {
            this.scrollAdded = true;
            this.$scrollEl.css({
                'overflow': 'scroll'
            });
            this.scrollMagicController = new ScrollMagic.Controller();
            this.scrollMagicTween = TweenMax.to(".project__next-background", 0.5, {
                y: 0,
                ease: Sine.easeOut,
            });



            this.scrollMagicScene = new ScrollMagic.Scene({ triggerElement: ".js-next-project", triggerHook: "onEnter", duration: this.getElHeight })
                .setTween(this.scrollMagicTween)
                .addTo(this.scrollMagicController);

            this.scrollMagicScene.on("end", function(event) {
                that.removeScrollMagic();


                $(".project__next-background").css("top", 0);

                /*var mainContentTween = TweenMax.to(that.$scrollEl, 0.40, {
                scrollTop: 0,
                paused: true,
                delay: 0.0,
                ease: Cubic.easeOut,
                onComplete: function() {


                }
            });

            mainContentTween.play();*/
                setTimeout(function() { that.triggerNext.call(that) }, 50);
            });
        }
    },

    getElHeight: function() {
        return $('.project__next-wrapper').height() - 100;
    },

    removeScrollMagic: function() {
        if (this.scrollAdded) {
            this.scrollAdded = false;


            var reset = false;
            if (this.scrollMagicController) {
                this.scrollMagicController.destroy(reset);
                this.scrollMagicController = null;
            }
            if (this.scrollMagicScene) {
                this.scrollMagicScene.destroy(reset);
                this.scrollMagicScene = null;
            }
            if (this.scrollMagicTween) this.scrollMagicTween = null;
            this.$scrollEl.css({
                'overflow': 'hidden'
            });
        }
    },

    addScroll: function() {

        if (!this.scrollAdded) {
            this.scrollAdded = true;
            this.$scrollEl.css({
                'overflow': 'scroll'
            });
            this.$scrollEl.on('scroll.ProjectView mousewheel.ProjectView DOMMouseScroll.ProjectView', _.bind(this.checkScroll, this));
            //this.$scrollEl.on('mousewheel.ProjectView DOMMouseScroll.ProjectView', _.bind(this.checkScroll, this));

        }
    },

    removeScroll: function() {
        return;
        if (this.scrollAdded) {
            this.scrollAdded = false;
            this.$scrollEl.off('.ProjectView');
            //this.$el.off('.ProjectView');
            this.removeScrollMagic();
            this.$scrollEl.css({
                'overflow': 'hidden'
            });
        }

    },

    checkScroll: function(event) {

        if (!this.scrollAdded) {
            if (event) event.preventDefault();
        }

        if (this.$scrollEl.prop("scrollHeight") - this.$scrollEl.scrollTop() - this.$scrollEl.height() < 300) {
            //if ($(".project__next-background").position().top >= 0) {
            //$(".project__next-background").css("top", 0);
            //}
        }


        if (this.$scrollEl.prop("scrollHeight") - this.$scrollEl.scrollTop() - this.$scrollEl.height() < 100) {
            if (event) event.preventDefault();

            this.removeScroll();
            var that = this;
            //setTimeout(function() { that.triggerNext.call(that) }, 250);
        }

    },

    triggerNext: function() {
      console.log('triggerNext');
        this.$scrollEl.scrollTop(0);
        this.trigger("project:next");
    },

    remove: function() {

        this.$scrollEl.scrollTop(0);
        //this.removeScroll();
        this.removeScrollMagic();
        this.unbind();
        this.stopListening();
        $('.gallery-item__video').empty();
        // No this.$el.remove() since we don't own the `el`
        return this;
    }

    /*handleScroll: function() {
        var _this = this;
        this.triggered = false;
        var $scrollEl = $(".site__portfolio-content");
        $scrollEl.scrollTop(0);

        var fireNextProjectEvent = _.once(function() {

            if (!_this.triggered) {
                _this.triggered = true;
                _this.trigger("project:next");
            }

        });

        var handleScrollCallback = function(event) {
            if (!_this.triggered) {
                if ($scrollEl.prop("scrollHeight") - $scrollEl.scrollTop() - $scrollEl.height() < 300) {
                    if ($(".project__next-background").position().top >= 0) {
                        $(".project__next-background").css("top", "0");
                    }
                }
                if ($scrollEl.prop("scrollHeight") - $scrollEl.scrollTop() - $scrollEl.height() < 100) {
                    _this.$el.off(".ProjectView");
                    _this.$el.parent().off(".ProjectView");
                    fireNextProjectEvent();
                }
            }
        };

        this.$el.on("wheel.ProjectView", handleScrollCallback);
        this.$el.parent().on("scroll.ProjectView", handleScrollCallback);
    }*/
});


// projects.fetch({
//  success: function() {
//      console.log(projects);
//      projectsView.render();
//  }
// });

/*jshint devel:true */
/*global Backbone */

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

(function($, _, window) {
    "use strict";
    var _$window = $(window);
    var _$closeButton = $(".js-close-portfolio");
    var _$intro = $(".section__who-we-are");


    if(server_render) {
      _$closeButton.on('click touchstart', function(event) {
         _$closeButton.off('click touchstart');
          event.preventDefault();
          event.stopPropagation();
          window.handleClosePortfolio();

      });
    }

    var animations_ = {

        _$currentScrollElement: null,

        getViewPortHeight: function() {

            return _$window.height();

        },

        getIntroHeight: function() {

            return _$intro.height();

        },

        setMainContentTranslateY: function($maincontent_, value_) {
            console.log("here");

            if (this.mainContentTargetY) {
                if (this.mainContentTargetY === value_) {
                    return false;
                }
            }

            this.mainContentTargetY = value_;
            $.Velocity.hook($maincontent_, "translateY", value_);

        },




        closeCurrentProject: function($maincontent_, $project_, callback_) {
            var self = this;

            $.Velocity.hook($maincontent_, "translateY", "100%");



            var projectHeight = $project_.height();
            _$closeButton.addClass("hidden");

            $maincontent_.velocity({
                translateY: [this.mainContentTargetY, "100%"],
                translateZ: 0

            }, {
                duration: 400,
                //easing: "ease-out",
                begin: function() {

                    $project_.css({
                        "z-index": "-1000"

                    });

                },
                complete: function() {
                    $project_.velocity("finish");
                    $project_.css({
                        "top": -projectHeight + "px",
                        "z-index": 10,
                    });

                    $.Velocity.hook($project_, "translateY", "0px");

                    $project_.scrollTop(0);
                    $project_.addClass("hidden");
                    callback_ && callback_.call(self);
                },
                delay: 100,
                mobileHA: true
            });

            $project_.velocity({
                translateY: ["-30%", "0px"],
                translateZ: 0

            }, {
                duration: 500,
                //easing: "ease-out",
                delay: 110,
                mobileHA: true
            });


        },

        openCurrentProject: function($maincontent_, $project_, animate_, callback_) {

            $project_.css({
                "top": "36px",
                "z-index": 10,
                "opacity": 0,
            }).removeClass("hidden");

            $.Velocity.hook($project_, "translateY", "0px");

            _$closeButton.css({
                "opacity": 0
            }).removeClass("hidden");


            window.scrollTo(0, 0);

            if (!animate_) {
                $project_.css({ "opacity": 1 });
                _$closeButton.css({ "opacity": 1 });
                $project_.scrollTop(0);
                callback_ && callback_.call(self);
                return;

            }

            var self = this;

            // Better Mobile

            $project_.scrollTop(0);

            $project_.velocity({
                opacity: [1, 0]

            }, {
                duration: 350,
                complete: function() {
                    callback_ && callback_.call(self);
                },
                delay: 250,
                mobileHA: true
            });


            _$closeButton.velocity({
                opacity: "1"

            }, {
                duration: 200,
                complete: function() {
                    _$closeButton.on('click touchstart', function(event)
                        {
                             _$closeButton.off('click touchstart');

                            event.preventDefault();
                            event.stopPropagation();
                            window.handleClosePortfolio();

                        });
                },
                easing: "ease-in",
                delay: 550,
                mobileHA: true
            });

        },

        blockTouch: function($maincontent_, block_) {
            if (block_) {
                if (!this.touchBlocked) {
                    this.touchBlocked = true;
                    $mainContent.on("touchstart touchmove", function(event) {
                        event.preventDefault();
                        return false;
                    });
                }
            } else {
                if (this.touchBlocked) {
                    this.touchBlocked = false;
                    $mainContent.off("touchstart touchmove");
                }

            }

        },

        startScrollAnimation: function($maincontent_, $element_, callback_, scrollPoint_) {
            var self = this;
            this.abortScrollAnimation();
            this._$currentScrollElement = $element_;
            this.blockTouch($maincontent_, true);

            $element_.velocity("stop");

            var duration = Math.abs((2400 * scrollPoint_) / 10000);
            if (duration < 600) {
                duration = 600;
            }


            $element_.velocity("scroll", {
                container: $maincontent_,
                duration: duration,
                complete: function() {
                    self.abortScrollAnimation();
                    self.blockTouch($maincontent_, false);
                    callback_ && callback_.call(self);
                },
                mobileHA: false
            });

        },

        abortScrollAnimation: function() {

            if (this._$currentScrollElement) {
                this._$currentScrollElement.velocity("stop");
                this._$currentScrollElement = null;
            }

        },


        scrollMagicToggleNav: function() {

            if (this.scenes) {
                if (this.triggerElements) {
                    var i = 0;
                    var l = this.scenes.length;
                    var tempScene;
                    var triggerElement;
                    while (i < l) {
                        tempScene = this.scenes[i];
                        triggerElement = this.triggerElements[i];
                        tempScene.duration(triggerElement.height());
                        tempScene.update();
                        ++i;

                    }

                    return;
                }
            }

            this.scenes = [];
            this.triggerElements = [];


            if (!this.navLinks) {
                this.navLinks = $(".js-nav-desktop");
            }

            if (!this.controller) {
                this.controller = new ScrollMagic.Controller();
            }




            var navItemAnchorName;
            var triggerElement;

            var self = this;

            this.navLinks.each(function() {
                var navItem = $(this);

                if (navItem) {
                    navItemAnchorName = navItem.attr('data-scroll');
                    var scene = new ScrollMagic.Scene({ triggerElement: "#" + navItemAnchorName, duration: $("#" + navItemAnchorName).height(), reverse: true })
                        //.setClassToggle(navItem, "selected")
                        .addTo(self.controller)
                        .on("enter", function() {
                            navItem.addClass('selected')
                                .parent()
                                .siblings()
                                .find('a')
                                .removeClass('selected');

                        })

                    .on("leave", function() {

                        navItem.removeClass('selected');

                    });

                    self.scenes.push(scene);
                    self.triggerElements.push($("#" + navItemAnchorName));

                    //scene.reverse(true);

                }

            });

            var revealTextScene = new ScrollMagic.Scene({ triggerElement: "#who-we-are" })
                .setClassToggle("#who-we-are-text", "column-left-show") // add class toggle
                .addTo(this.controller);

        },








    };

    MMS.animations = animations_;
})(jQuery, _, window);

/*! jqueryanimatesprite - v1.3.5 - 2014-10-17
* http://blaiprat.github.io/jquery.animateSprite/
* Copyright (c) 2014 blai Pratdesaba; Licensed MIT */
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


                /*var tween = TweenMax.to(island, 1.40, {

                     css: {
                         "opacity": "1",
                         "margin-top": "0"

                     },

                     paused: true,
                     delay: 0.2,
                     ease: Cubic.easeOut,
                     onComplete: function() {
                         island.on("click touchstart", _.bind(self.islandClick, self, index));
                     }
                 });*/
                self.playSwooshSound(index);
                //tween.play();


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

/*jshint devel:true */

/* PREVENT SCROLL */
//This way will allow scrollable elements while still preventing the overscroll in the browser itself.

//uses document because document will be topmost level in bubbling
/*$(document).on('touchmove',function(e){
  e.preventDefault();
});

$('body').on('touchstart','.scrollable',function(e) {
  if (e.currentTarget.scrollTop === 0) {
    e.currentTarget.scrollTop = 1;
  } else if (e.currentTarget.scrollHeight === e.currentTarget.scrollTop + e.currentTarget.offsetHeight) {
    e.currentTarget.scrollTop -= 1;
  }
});

$('body').on('touchmove','.scrollable',function(e) {
  e.stopPropagation();
});*/



/**
 * jQuery.browser.mobile (http://detectmobilebrowser.com/)
 *
 * jQuery.browser.mobile will be true if the browser is a mobile device
 *
 **/
(function(a) {
    (jQuery.browser = jQuery.browser || {}).mobile = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))
})(navigator.userAgent || navigator.vendor || window.opera);


/*global Backbone */

var $root = $('html, body'),
    $mainContent = $('.site__main-content'),
    $home = $('.section__home'),
    $portfolio = $('.site__portfolio-content'),
    whoWeAreSection = $('#who-we-are'),
    whatWeDidSection = $('#what-we-did'),
    contactSection = $('#contact');




var projects;
var portfolioOpen = false || server_render;
var $projectsGrid;

var Router = Backbone.Router.extend({

    routes: {
        // 'help':                 'help',
        '':'index',
        'en':'index',
        'whoWeAre/:id': 'project',
        'whatWeMade/:id': 'project',
        'whatWeDidNotDo/:id': 'project'
    },

   execute: function(callback, args, name) {
        var match = Backbone.history.getFragment().match("(" + ["en", "de"].join("|") + ")");

        if (match && window.selectedLanguage !== match[0]) {
            window.location.reload();
            return false;
        }

        if(server_render && server_initial_load) {
          server_initial_load = false;
          return false;
        }

        // Detect if it is the index language
        match=Backbone.history.getFragment().match(/\//);
        if(!match) {
            this.index();
        }

        //console.log("EXECUTE "+match);

        if (callback) callback.apply(this, args);
    },

    initialize: function() {
      var _this = this;

      _.each(["en", "de"], function(locale) {
          _.each(_this.routes, function(handler, route) {
              _this.route(locale + "/" + route, handler);
          });
          _this.route(locale, "");
      });


      var match = window.location.pathname.match("(" + ["en", "de"].join("|") + ")");
      window.selectedLanguage = match ? match[0] : "de";


        // mmsDataRequest.then(function(response) {
        var response = bootstrap_data;
            _this.projects = new ProjectList(response, { parse: true });
            var categories = new CategoryList(response, { parse: true });

            var categoryViewWhoWeAreTemp = new CategoryViewWhoWeAreTemp({ collection: categories });
            categoryViewWhoWeAreTemp.render();

            var categoryView = new CategoryView({ collection: categories });
            categoryView.render();

            var categoryViewNotMake = new CategoryViewNotMake({ collection: categories });
            categoryViewNotMake.render();

            $('.js-masonry-projects-block-a').imagesLoaded(function() {
                var pgrid = $('.js-masonry-projects-block-a .grid').masonry({
                    itemSelector: '.grid-item',
                    isResizable: true
                });

                pgrid.on('layoutComplete', function(event, items) {
                    MMS.animations.scrollMagicToggleNav();

                });
                pgrid.masonry();
            });

            $('.js-masonry-projects-block-b').imagesLoaded(function() {
                var pgrid = $('.js-masonry-projects-block-b .grid').masonry({
                    itemSelector: '.grid-item',
                    isResizable: true
                });

                pgrid.on('layoutComplete', function(event, items) {
                    MMS.animations.scrollMagicToggleNav();

                });
                pgrid.masonry();
            });

            $('.js-masonry-projects-block-c').imagesLoaded(function() {
                var pgrid = $('.js-masonry-projects-block-c .grid').masonry({
                    itemSelector: '.grid-item',
                    isResizable: true
                });

                pgrid.on('layoutComplete', function(event, items) {
                    MMS.animations.scrollMagicToggleNav();

                });
                pgrid.masonry();
            });

            // $('#what-we-did-not-make')
            // .prepend('<p data-translate="navigation.what_we_did_not_do" class="tagline bold">Was wir nicht gemacht haben</p>');

            updateTranslations();

        // });



        // var selectedLanguage = $(this).data('language'),
        //      unselectedLanguage = $(this).parent().siblings().find('a').data('language');
        //
        // $('body')
        //  .addClass(selectedLanguage)
        //  .removeClass(unselectedLanguage);

        $('body').addClass(selectedLanguage);
        $('html').attr('lang', selectedLanguage);

        $(".js-language-selection[data-language='" + selectedLanguage + "']")
            .addClass('selected')
            .parent()
            .siblings()
            .find('a')
            .removeClass('selected');

        handleLocales().then(function() {
            updateTranslations();
        });

        //MMS.animations.scrollMagicToggleNav();

    },

    currentProjectView: null,

    index: function() {
        console.log('INDEX');
        if(portfolioOpen && !server_initial_load) handleClosePortfolio();

       // Backbone.history.navigate('#'+window.selectedLanguage, { trigger: false });
    },


    project: function(id, options) {
        var _this = this;
        options = _.defaults(options || {}, {
          render: true,
        });


        // mmsDataRequest.then(function() {
            var currentProject = _this.projects.findWhere({ slug: id });

            var animate = true;

            if (_this.currentProjectView) {
                animate = false;
                _this.currentProjectView.remove();
                _this.currentProjectView = null;
            }

            var currentProjectView = new ProjectView({ model: currentProject });
            _this.currentProjectView = currentProjectView;
            if(options.render) {
              currentProjectView.render();
            } else {
              currentProjectView.addScrollMagic();
            }
            var currentPosition = currentProject.attributes.position;

            if(options.render) {
              MMS.animations.openCurrentProject(
                $mainContent,
                $portfolio,
                animate,
                function() {
                  portfolioOpen = true;
                });
            }

            currentProjectView.once("project:next", function() {
                var nextPosition = currentPosition + 1;
                var nextProject = _this.projects.findWhere({ position: nextPosition }) || _this.projects.findWhere({ position: 1 });
                Backbone.history.navigate(window.selectedLanguage + "/"+nextProject.get("section")+"/" + nextProject.get("slug"), { trigger: true });

            });
        // });
    }

});


function handleClosePortfolio(o, href) {
    if(!portfolioOpen) return false;
    portfolioOpen=false;

    // if (href) {
    Backbone.history.navigate('#'+window.selectedLanguage, { trigger: false });
    //}

    //@see animations.js
    MMS.animations.closeCurrentProject(
        $mainContent,
        $portfolio,
        function() {
           // portfolioOpen = false;
            if (window.router) {
                if (window.router.currentProjectView) {
                    window.router.currentProjectView.remove();
                    window.router.currentProjectView = null;
                }
            }

        });


}


$(document).ready(function() {

    FastClick.attach(document.body);

    Handlebars.registerPartial('projects', mms.templates['project-template']);


    window.router = new Router();
    Backbone.history.start({pushState: true});
    console.log('pushState');


    if(server_render) {
      // var currentProjectView = new ProjectView();
      // currentProjectView.addScrollMagic()
      router.project("atomic-custom-studio", {render: false});
    }


    if (typeof window.HTMLTemplateElement === 'undefined') {
        $('html').addClass('noTemplates');
    }

    // HEADER
    $('.js-header').addClass('show--header');


    // RESIZE

    $(window).resize(function() {
        if ($(this).width() <= 640) {
            MMS.animations.setMainContentTranslateY($mainContent,"36px");
        } else {
            MMS.animations.setMainContentTranslateY($mainContent,"0px");
        }

    });

    //if (!window.isMobile) {
    //if (!$.browser.mobile) {
    //MMS.animations.revealABoutText();
    //MMS.animations.scrollMagicToggleNav();
    //}
    // $(".column-left").css({ "margin-top": "0" });
    //} else {

    // $(".column-left").css({ "margin-top": "0" });

    //}

    // NAVIGATION
    $('.js-nav-link').on('click', function() {
        var animate = true;

        var scrollAnchor = $(this).attr('data-scroll'),
            $activeSection = $('section[data-anchor="' + scrollAnchor + '"]'),
            scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 36;

        if (portfolioOpen) {
            var href = $(this).attr('href');
            animate = false;
            $mainContent.scrollTop($mainContent.scrollTop() + scrollPoint);
            handleClosePortfolio(null, href);
        }

        $activeSection
            .addClass('active')
            .siblings()
            .removeClass('active');


        if (animate) {
            MMS.animations.startScrollAnimation($mainContent, $activeSection, null, scrollPoint);
        }

        // this ection is nested in what we did!


        $(this)
            .addClass('selected')
            .parent()
            .siblings()
            .find('a')
            .removeClass('selected');


        if ($(this).parents().hasClass('nav__mobile')) {
            $('.js-mobile-nav').trigger('click');
        }


        return false;
    });


    $('.js-mobile-nav').on('click', function() {
        var _self = $(this);
        _self.toggleClass('active');
        _self.parent().toggleClass('open')
    });

    // Home Page
    MMS.home.initialize();

    // PORTFOLIO / GALLERY



    //$('body').on('click touchstart', '.js-close-portfolio', handleClosePortfolio);
    //$('body').on('click', '.js-island', function(){alert("Handler for .click() called.");});


    //CONTACT
    $('.js-contact-form-submit').on('click', function() {
        var name = $('.js-contact-name').val();
        var email = $('.js-contact-email').val();
        var message = $('.js-contact-message').val();

        var $form = $('.contact-form'),
            $inputs = $form.find('input, textarea'),
            $labels = $('.contact-form label');

        $inputs.each(function() {
            var label = $(this).parent().find('label');

            if ($(this).val() === "") {
                label.addClass('form-error');
                $form.addClass('form-has-errors');
            } else {
                label.removeClass('form-error');
                $form.removeClass('form-has-errors');
            }
        })

        if (!$form.hasClass('form-has-errors')) {

            $.ajax({
                type: 'GET',
                url: './sendmail.php',
                data: {
                    'name': name,
                    'email': email,
                    'message': message
                },
                error: function(data) {
                    console.log("Error", data);
                },
                success: function(data) {
                    console.log("success", data);
                    $('.js-contact-name').val('');
                    $('.js-contact-email').val('');
                    $('.js-contact-message').val('');
                    $('.js-form-sent').addClass('sent');

                    setTimeout(function() {
                        $('.js-form-sent').removeClass('sent');
                    }, 5000);
                }
            });
        }

    });




    // All navigation that is relative should be passed through the navigate
    // method, to be processed by the router. If the link has a `data-bypass`
    // attribute, bypass the delegation completely.
    $(document).on("click", "a[href]:not([data-bypass])", function(evt) {
      // Get the absolute anchor href.
      var href = { prop: $(this).prop("href"), attr: $(this).attr("href") };
      // Get the absolute root.
      var root = location.protocol + "//" + location.host;

      // Ensure the root is part of the anchor href, meaning it's relative.
      if (href.prop.slice(0, root.length) === root) {
        // Stop the default event to ensure the link will not cause a page
        // refresh.
        evt.preventDefault();

        // Note by using Backbone.history.navigate, router events will not be
        // triggered.  If this is a problem, change this to navigate on your
        // router.
        console.log('href ', href);
        Backbone.history.navigate(href.attr, true);
      }
    });

});
/*jshint devel:true */
/*global Backbone */

window.weatherRequestDE = $.getJSON('http://api.wunderground.com/api/be0f277024a01b1f/geolookup/conditions/lang:DL/q/Germany/Berlin.json');
/*
var app = {};

window.App = {

    Polyglot: new Polyglot({locale: "de", phrases: {}}),
    translate: function (text, key, data) {
        var currentLanguage = $('html').attr('lang');

        console.log(text);

        if(currentLanguage == "de") return text;
        if(!data) data = {};
        return App.Polyglot.t(key, data);

    }
}

function handleLocales(languageCode) {
    var currentLanguage = $('html').attr('lang');

  var localePromise = $.Deferred();

    if(currentLanguage && currentLanguage !== "de") {

        localePromise = $.getJSON("/locales/"+currentLanguage+".json")
        .then(function (data) {
            App.Polyglot = new Polyglot({locale: currentLanguage, phrases: data});
        })
        .fail(function() {
            alert("Problem Loading Locale "+currentLanguage);
        });

    } else {
        localePromise.resolve();
    }

    return localePromise;
}


function updateTranslations(html) {

    var currentLanguage = $('html').attr('lang');

    //console.log(currentLanguage, $("body").find("[data-translate]"));

    $("body").find("[data-translate]").each(function(index, element){
    var $element = $(element);
    var key      = $element.data("translate");
    var data     = $element.data("translate-data");

    //console.log("currentLanguage: ", currentLanguage, $element);

    if(currentLanguage === "en") {
        $("body").removeClass("de");
    }

    if(App.Polyglot.phrases[key]) {

      $element.html("<span>"+App.Polyglot.t(key, data)+"</span>");

      if ($element.is("a") || $element.parents().is("a")) {
        if($element.attr("title") !== undefined) {
          $(this).attr("title", App.Polyglot.t(key, data));
        } else if ($(this).closest("a").attr("title") !== undefined) {
          $(this).closest("a").attr("title", App.Polyglot.t(key, data));
        }
      }
    }

    });

}

/*jshint devel:true */
/*jshint camelcase: false */
/*global Backbone */
/*
weatherRequestDE.then(function (data) {
    
    return $('.js-weather-info').html('<p>'+ data.location.city +', '+ data.location.country_name +': '+ data.current_observation.weather +', '+ data.current_observation.temp_c +'°C'+'</p>').addClass("show--weather");
});
/*jshint devel:true */
/*jshint camelcase: false */
/*global Backbone */

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

var CategoryList = Backbone.Collection.extend({
    model: Category,
    url: 'http://admin.meyermillersmith.com/index.json',
    parse: function(response) {

        var categories = _.map(response.categories, function(category) {
            category.projects = _.filter(response.projects, { category_id: category.id.toString() });
            _.keys(category).forEach(function(key) {
                if (key.indexOf("_" + window.selectedLanguage) >= 0) category[key.replace("_" + window.selectedLanguage, "")] = category[key];
            });

            category.projects.forEach(function(project) {
                _.keys(project).forEach(function(key) {
                    if (key.indexOf("_" + window.selectedLanguage) >= 0) project[key.replace("_" + window.selectedLanguage, "")] = project[key];
                });
            });


            //TODO
            if(category.slug=="who-we-are") category.slug="who-we-are-temp";

             //console.log(category);

            return category;
        });

        return categories;
    }


});

var CategoryView = Backbone.View.extend({
    tagName: 'li',
    template: mms.templates['category-template'],

    initialize: function() {

        this.$el = $('#category-list');
    },
    render: function() {

        var filter_ = function(c) {
            return (c.get('id') != 32 && c.get('id') != 33 && c.get('id') != 30);
        };

        var coll = new Backbone.Collection(filteredCollection(this.collection, filter_)); //;//new Backbone.Collection(this.collection.where({ id: 32 }));
        //console.log(coll);

        var categoryTemplate = this.template(coll.toJSON());

        //var categoryTemplate = this.template(this.collection.toJSON());
        this.$el.html(categoryTemplate);
        return this;
    }
});

var CategoryViewNotMake = Backbone.View.extend({
    tagName: 'li',
    template: mms.templates['category-template-not-make'],

    initialize: function() {

        this.$el = $('#category-list-not-make');
    },
    render: function() {

        var filter_ = function(c) {
            return (c.get('id') == 32);
        };

        var coll = new Backbone.Collection(filteredCollection(this.collection, filter_)); //;//new Backbone.Collection(this.collection.where({ id: 32 }));
        //console.log(coll);

        var categoryTemplate = this.template(coll.toJSON());
        this.$el.html(categoryTemplate);
        return this;
    }
});

var CategoryViewWhoWeAreTemp = Backbone.View.extend({
    tagName: 'li',
    template: mms.templates['category-template-who-we-are-temp'],

    initialize: function() {
        this.$el = $('#category-list-who-we-are-temp');
    },
    render: function() {

        var filter_ = function(c) {
            return (c.get('id') == 33 || c.get('id') == 30);
        };

        var coll = new Backbone.Collection(filteredCollection(this.collection, filter_)); //;//new Backbone.Collection(this.collection.where({ id: 32 }));
        //console.log(coll);

        var categoryTemplate = this.template(coll.toJSON());
        this.$el.html(categoryTemplate);
        return this;
    }
});

/*jshint devel:true */
/*global Backbone */


var Project = Backbone.Model.extend();



var ProjectList = Backbone.Collection.extend({
    model: Project,
    url: 'http://admin.meyermillersmith.com/index.json',

    parse: function(response) {
        response.projects.forEach(function(project) {
            _.keys(project).forEach(function(key) {
                if (key.indexOf("_" + window.selectedLanguage) >= 0) project[key.replace("_" + window.selectedLanguage, "")] = project[key];
            });
        });

        // TODO: optimize the loops

        var cats = response.categories;

        var tempCats = [];
        var tempCatsID = [];
        var tempProjects = [];

        var i = 0;
        var l = cats.length;

        var position = 0;
        var j = 0;
        var jl = 0;

        var catIndex = 0;
        var tempProject;

        while (i < l) {
            tempCatsID[i] = String(cats[i].id);

            tempCats[i] = { catID: tempCatsID[i], projects: [] }
                ++i;
        }


        i = 0;
        l = response.projects.length;



        while (i < l) {
            tempProject = response.projects[i];
            catIndex = tempCatsID.indexOf(tempProject.category_id);
            if (catIndex > -1) {
                tempCats[catIndex].projects.push(tempProject);
            }
            ++i;
        }

        // fixed unique position


        i = 0;
        l = tempCats.length;

        var projectCatID;

        while (i < l) {
            jl = tempCats[i].projects.length;
            while (j < jl) {
                projectCatID = tempCats[i].projects[j].category_id;
                //console.log(projectCatID);
                switch (projectCatID) {
                    case "33":
                    case "30":
                        tempCats[i].projects[j].section = "whoWeAre";
                        break;
                    case "32":
                        tempCats[i].projects[j].section = "whatWeDidNotDo";
                        break;
                    default:
                        tempCats[i].projects[j].section = "whatWeMade";
                }
                tempCats[i].projects[j].position = ++position;
                tempProjects.push(tempCats[i].projects[j]);
                ++j;
            }
            j = 0;
            ++i;
        }

        var result = _.sortBy(tempProjects, 'position');


        /*_.each(response.projects, function(p) {

            p.position = ++position;
        });*/


        //var result = _.sortBy(response.projects, 'position');
        return result;
    }
});



var ProjectView = Backbone.View.extend({
    // tagName: 'li',
    template: mms.templates['project-gallery-template'],

    initialize: function() {

        this.$el = $('.js-portfolio-region');
        this.$scrollEl = $(".site__portfolio-content");
        //this.handleScroll();

    },
    render: function() {

        var projectTemplate = this.template(this.model.toJSON());
        this.$el.html(projectTemplate);
        this.$scrollEl = $(".site__portfolio-content");
        //this.$scrollEl.find('.project__gallery').css({'visibility': 'hidden'});
        //this.addScroll();

        this.$scrollEl.scrollTop(0);
        //this.addScrollMagic();
        //this.addScrollMagic();
        // hack
        if (window.selectedLanguage == "en") {
            this.$el.find(".project__next-message").text('Scroll to next project');
        }

        var that = this;

        setTimeout(function() { that.addScrollMagic.call(that) }, 50);

        //var closeButton=this.$el.parent().find('#close--portfolio');
        // var scrollbarWidth = this.$scrollEl.width()-this.$el.width();
        //closeButton.css({right:scrollbarWidth});
        return this;
    },

    show: function() {
        // this.$scrollEl.find('.project__gallery').css({'visibility': 'visible'});

    },


    scrollAdded: false,

    addScrollMagic: function() {
        var that = this;
        if (!this.scrollAdded) {
            this.scrollAdded = true;
            this.$scrollEl.css({
                'overflow': 'scroll'
            });
            this.scrollMagicController = new ScrollMagic.Controller();
            this.scrollMagicTween = TweenMax.to(".project__next-background", 0.5, {
                y: 0,
                ease: Sine.easeOut,
            });



            this.scrollMagicScene = new ScrollMagic.Scene({ triggerElement: ".js-next-project", triggerHook: "onEnter", duration: this.getElHeight })
                .setTween(this.scrollMagicTween)
                .addTo(this.scrollMagicController);

            this.scrollMagicScene.on("end", function(event) {
                that.removeScrollMagic();


                $(".project__next-background").css("top", 0);

                /*var mainContentTween = TweenMax.to(that.$scrollEl, 0.40, {
                scrollTop: 0,
                paused: true,
                delay: 0.0,
                ease: Cubic.easeOut,
                onComplete: function() {


                }
            });

            mainContentTween.play();*/
                setTimeout(function() { that.triggerNext.call(that) }, 50);
            });
        }
    },

    getElHeight: function() {
        return $('.project__next-wrapper').height() - 100;
    },

    removeScrollMagic: function() {
        if (this.scrollAdded) {
            this.scrollAdded = false;


            var reset = false;
            if (this.scrollMagicController) {
                this.scrollMagicController.destroy(reset);
                this.scrollMagicController = null;
            }
            if (this.scrollMagicScene) {
                this.scrollMagicScene.destroy(reset);
                this.scrollMagicScene = null;
            }
            if (this.scrollMagicTween) this.scrollMagicTween = null;
            this.$scrollEl.css({
                'overflow': 'hidden'
            });
        }
    },

    addScroll: function() {

        if (!this.scrollAdded) {
            this.scrollAdded = true;
            this.$scrollEl.css({
                'overflow': 'scroll'
            });
            this.$scrollEl.on('scroll.ProjectView mousewheel.ProjectView DOMMouseScroll.ProjectView', _.bind(this.checkScroll, this));
            //this.$scrollEl.on('mousewheel.ProjectView DOMMouseScroll.ProjectView', _.bind(this.checkScroll, this));

        }
    },

    removeScroll: function() {
        return;
        if (this.scrollAdded) {
            this.scrollAdded = false;
            this.$scrollEl.off('.ProjectView');
            //this.$el.off('.ProjectView');
            this.removeScrollMagic();
            this.$scrollEl.css({
                'overflow': 'hidden'
            });
        }

    },

    checkScroll: function(event) {

        if (!this.scrollAdded) {
            if (event) event.preventDefault();
        }

        if (this.$scrollEl.prop("scrollHeight") - this.$scrollEl.scrollTop() - this.$scrollEl.height() < 300) {
            //if ($(".project__next-background").position().top >= 0) {
            //$(".project__next-background").css("top", 0);
            //}
        }


        if (this.$scrollEl.prop("scrollHeight") - this.$scrollEl.scrollTop() - this.$scrollEl.height() < 100) {
            if (event) event.preventDefault();

            this.removeScroll();
            var that = this;
            //setTimeout(function() { that.triggerNext.call(that) }, 250);
        }

    },

    triggerNext: function() {
      console.log('triggerNext');
        this.$scrollEl.scrollTop(0);
        this.trigger("project:next");
    },

    remove: function() {

        this.$scrollEl.scrollTop(0);
        //this.removeScroll();
        this.removeScrollMagic();
        this.unbind();
        this.stopListening();
        $('.gallery-item__video').empty();
        // No this.$el.remove() since we don't own the `el`
        return this;
    }

    /*handleScroll: function() {
        var _this = this;
        this.triggered = false;
        var $scrollEl = $(".site__portfolio-content");
        $scrollEl.scrollTop(0);

        var fireNextProjectEvent = _.once(function() {

            if (!_this.triggered) {
                _this.triggered = true;
                _this.trigger("project:next");
            }

        });

        var handleScrollCallback = function(event) {
            if (!_this.triggered) {
                if ($scrollEl.prop("scrollHeight") - $scrollEl.scrollTop() - $scrollEl.height() < 300) {
                    if ($(".project__next-background").position().top >= 0) {
                        $(".project__next-background").css("top", "0");
                    }
                }
                if ($scrollEl.prop("scrollHeight") - $scrollEl.scrollTop() - $scrollEl.height() < 100) {
                    _this.$el.off(".ProjectView");
                    _this.$el.parent().off(".ProjectView");
                    fireNextProjectEvent();
                }
            }
        };

        this.$el.on("wheel.ProjectView", handleScrollCallback);
        this.$el.parent().on("scroll.ProjectView", handleScrollCallback);
    }*/
});


// projects.fetch({
//  success: function() {
//      console.log(projects);
//      projectsView.render();
//  }
// });

/*jshint devel:true */
/*global Backbone */

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

(function($, _, window) {
    "use strict";
    var _$window = $(window);
    var _$closeButton = $(".js-close-portfolio");
    var _$intro = $(".section__who-we-are");


    if(server_render) {
      _$closeButton.on('click touchstart', function(event) {
         _$closeButton.off('click touchstart');
          event.preventDefault();
          event.stopPropagation();
          window.handleClosePortfolio();

      });
    }

    var animations_ = {

        _$currentScrollElement: null,

        getViewPortHeight: function() {

            return _$window.height();

        },

        getIntroHeight: function() {

            return _$intro.height();

        },

        setMainContentTranslateY: function($maincontent_, value_) {
            console.log("here");

            if (this.mainContentTargetY) {
                if (this.mainContentTargetY === value_) {
                    return false;
                }
            }

            this.mainContentTargetY = value_;
            $.Velocity.hook($maincontent_, "translateY", value_);

        },




        closeCurrentProject: function($maincontent_, $project_, callback_) {
            var self = this;

            $.Velocity.hook($maincontent_, "translateY", "100%");



            var projectHeight = $project_.height();
            _$closeButton.addClass("hidden");

            $maincontent_.velocity({
                translateY: [this.mainContentTargetY, "100%"],
                translateZ: 0

            }, {
                duration: 400,
                //easing: "ease-out",
                begin: function() {

                    $project_.css({
                        "z-index": "-1000"

                    });

                },
                complete: function() {
                    $project_.velocity("finish");
                    $project_.css({
                        "top": -projectHeight + "px",
                        "z-index": 10,
                    });

                    $.Velocity.hook($project_, "translateY", "0px");

                    $project_.scrollTop(0);
                    $project_.addClass("hidden");
                    callback_ && callback_.call(self);
                },
                delay: 100,
                mobileHA: true
            });

            $project_.velocity({
                translateY: ["-30%", "0px"],
                translateZ: 0

            }, {
                duration: 500,
                //easing: "ease-out",
                delay: 110,
                mobileHA: true
            });


        },

        openCurrentProject: function($maincontent_, $project_, animate_, callback_) {

            $project_.css({
                "top": "36px",
                "z-index": 10,
                "opacity": 0,
            }).removeClass("hidden");

            $.Velocity.hook($project_, "translateY", "0px");

            _$closeButton.css({
                "opacity": 0
            }).removeClass("hidden");


            window.scrollTo(0, 0);

            if (!animate_) {
                $project_.css({ "opacity": 1 });
                _$closeButton.css({ "opacity": 1 });
                $project_.scrollTop(0);
                callback_ && callback_.call(self);
                return;

            }

            var self = this;

            // Better Mobile

            $project_.scrollTop(0);

            $project_.velocity({
                opacity: [1, 0]

            }, {
                duration: 350,
                complete: function() {
                    callback_ && callback_.call(self);
                },
                delay: 250,
                mobileHA: true
            });


            _$closeButton.velocity({
                opacity: "1"

            }, {
                duration: 200,
                complete: function() {
                    _$closeButton.on('click touchstart', function(event)
                        {
                             _$closeButton.off('click touchstart');

                            event.preventDefault();
                            event.stopPropagation();
                            window.handleClosePortfolio();

                        });
                },
                easing: "ease-in",
                delay: 550,
                mobileHA: true
            });

        },

        blockTouch: function($maincontent_, block_) {
            if (block_) {
                if (!this.touchBlocked) {
                    this.touchBlocked = true;
                    $mainContent.on("touchstart touchmove", function(event) {
                        event.preventDefault();
                        return false;
                    });
                }
            } else {
                if (this.touchBlocked) {
                    this.touchBlocked = false;
                    $mainContent.off("touchstart touchmove");
                }

            }

        },

        startScrollAnimation: function($maincontent_, $element_, callback_, scrollPoint_) {
            var self = this;
            this.abortScrollAnimation();
            this._$currentScrollElement = $element_;
            this.blockTouch($maincontent_, true);

            $element_.velocity("stop");

            var duration = Math.abs((2400 * scrollPoint_) / 10000);
            if (duration < 600) {
                duration = 600;
            }


            $element_.velocity("scroll", {
                container: $maincontent_,
                duration: duration,
                complete: function() {
                    self.abortScrollAnimation();
                    self.blockTouch($maincontent_, false);
                    callback_ && callback_.call(self);
                },
                mobileHA: false
            });

        },

        abortScrollAnimation: function() {

            if (this._$currentScrollElement) {
                this._$currentScrollElement.velocity("stop");
                this._$currentScrollElement = null;
            }

        },


        scrollMagicToggleNav: function() {

            if (this.scenes) {
                if (this.triggerElements) {
                    var i = 0;
                    var l = this.scenes.length;
                    var tempScene;
                    var triggerElement;
                    while (i < l) {
                        tempScene = this.scenes[i];
                        triggerElement = this.triggerElements[i];
                        tempScene.duration(triggerElement.height());
                        tempScene.update();
                        ++i;

                    }

                    return;
                }
            }

            this.scenes = [];
            this.triggerElements = [];


            if (!this.navLinks) {
                this.navLinks = $(".js-nav-desktop");
            }

            if (!this.controller) {
                this.controller = new ScrollMagic.Controller();
            }




            var navItemAnchorName;
            var triggerElement;

            var self = this;

            this.navLinks.each(function() {
                var navItem = $(this);

                if (navItem) {
                    navItemAnchorName = navItem.attr('data-scroll');
                    var scene = new ScrollMagic.Scene({ triggerElement: "#" + navItemAnchorName, duration: $("#" + navItemAnchorName).height(), reverse: true })
                        //.setClassToggle(navItem, "selected")
                        .addTo(self.controller)
                        .on("enter", function() {
                            navItem.addClass('selected')
                                .parent()
                                .siblings()
                                .find('a')
                                .removeClass('selected');

                        })

                    .on("leave", function() {

                        navItem.removeClass('selected');

                    });

                    self.scenes.push(scene);
                    self.triggerElements.push($("#" + navItemAnchorName));

                    //scene.reverse(true);

                }

            });

            var revealTextScene = new ScrollMagic.Scene({ triggerElement: "#who-we-are" })
                .setClassToggle("#who-we-are-text", "column-left-show") // add class toggle
                .addTo(this.controller);

        },








    };

    MMS.animations = animations_;
})(jQuery, _, window);

/*! jqueryanimatesprite - v1.3.5 - 2014-10-17
* http://blaiprat.github.io/jquery.animateSprite/
* Copyright (c) 2014 blai Pratdesaba; Licensed MIT */
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


                /*var tween = TweenMax.to(island, 1.40, {

                     css: {
                         "opacity": "1",
                         "margin-top": "0"

                     },

                     paused: true,
                     delay: 0.2,
                     ease: Cubic.easeOut,
                     onComplete: function() {
                         island.on("click touchstart", _.bind(self.islandClick, self, index));
                     }
                 });*/
                self.playSwooshSound(index);
                //tween.play();


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

/*jshint devel:true */

/* PREVENT SCROLL */
//This way will allow scrollable elements while still preventing the overscroll in the browser itself.

//uses document because document will be topmost level in bubbling
/*$(document).on('touchmove',function(e){
  e.preventDefault();
});

$('body').on('touchstart','.scrollable',function(e) {
  if (e.currentTarget.scrollTop === 0) {
    e.currentTarget.scrollTop = 1;
  } else if (e.currentTarget.scrollHeight === e.currentTarget.scrollTop + e.currentTarget.offsetHeight) {
    e.currentTarget.scrollTop -= 1;
  }
});

$('body').on('touchmove','.scrollable',function(e) {
  e.stopPropagation();
});*/



/**
 * jQuery.browser.mobile (http://detectmobilebrowser.com/)
 *
 * jQuery.browser.mobile will be true if the browser is a mobile device
 *
 **/
(function(a) {
    (jQuery.browser = jQuery.browser || {}).mobile = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))
})(navigator.userAgent || navigator.vendor || window.opera);


/*global Backbone */

var $root = $('html, body'),
    $mainContent = $('.site__main-content'),
    $home = $('.section__home'),
    $portfolio = $('.site__portfolio-content'),
    whoWeAreSection = $('#who-we-are'),
    whatWeDidSection = $('#what-we-did'),
    contactSection = $('#contact');




var projects;
var portfolioOpen = false || server_render;
var $projectsGrid;

var Router = Backbone.Router.extend({

    routes: {
        // 'help':                 'help',
        '':'index',
        'en':'index',
        'whoWeAre/:id': 'project',
        'whatWeMade/:id': 'project',
        'whatWeDidNotDo/:id': 'project'
    },

   execute: function(callback, args, name) {
        var match = Backbone.history.getFragment().match("(" + ["en", "de"].join("|") + ")");

        if (match && window.selectedLanguage !== match[0]) {
            window.location.reload();
            return false;
        }

        if(server_render && server_initial_load) {
          server_initial_load = false;
          return false;
        }

        // Detect if it is the index language
        match=Backbone.history.getFragment().match(/\//);
        if(!match) {
            this.index();
        }

        //console.log("EXECUTE "+match);

        if (callback) callback.apply(this, args);
    },

    initialize: function() {
      var _this = this;

      _.each(["en", "de"], function(locale) {
          _.each(_this.routes, function(handler, route) {
              _this.route(locale + "/" + route, handler);
          });
          _this.route(locale, "");
      });


      var match = window.location.pathname.match("(" + ["en", "de"].join("|") + ")");
      window.selectedLanguage = match ? match[0] : "de";


        // mmsDataRequest.then(function(response) {
        var response = bootstrap_data;
            _this.projects = new ProjectList(response, { parse: true });
            var categories = new CategoryList(response, { parse: true });

            var categoryViewWhoWeAreTemp = new CategoryViewWhoWeAreTemp({ collection: categories });
            categoryViewWhoWeAreTemp.render();

            var categoryView = new CategoryView({ collection: categories });
            categoryView.render();

            var categoryViewNotMake = new CategoryViewNotMake({ collection: categories });
            categoryViewNotMake.render();

            $('.js-masonry-projects-block-a').imagesLoaded(function() {
                var pgrid = $('.js-masonry-projects-block-a .grid').masonry({
                    itemSelector: '.grid-item',
                    isResizable: true
                });

                pgrid.on('layoutComplete', function(event, items) {
                    MMS.animations.scrollMagicToggleNav();

                });
                pgrid.masonry();
            });

            $('.js-masonry-projects-block-b').imagesLoaded(function() {
                var pgrid = $('.js-masonry-projects-block-b .grid').masonry({
                    itemSelector: '.grid-item',
                    isResizable: true
                });

                pgrid.on('layoutComplete', function(event, items) {
                    MMS.animations.scrollMagicToggleNav();

                });
                pgrid.masonry();
            });

            $('.js-masonry-projects-block-c').imagesLoaded(function() {
                var pgrid = $('.js-masonry-projects-block-c .grid').masonry({
                    itemSelector: '.grid-item',
                    isResizable: true
                });

                pgrid.on('layoutComplete', function(event, items) {
                    MMS.animations.scrollMagicToggleNav();

                });
                pgrid.masonry();
            });

            // $('#what-we-did-not-make')
            // .prepend('<p data-translate="navigation.what_we_did_not_do" class="tagline bold">Was wir nicht gemacht haben</p>');

            updateTranslations();

        // });



        // var selectedLanguage = $(this).data('language'),
        //      unselectedLanguage = $(this).parent().siblings().find('a').data('language');
        //
        // $('body')
        //  .addClass(selectedLanguage)
        //  .removeClass(unselectedLanguage);

        $('body').addClass(selectedLanguage);
        $('html').attr('lang', selectedLanguage);

        $(".js-language-selection[data-language='" + selectedLanguage + "']")
            .addClass('selected')
            .parent()
            .siblings()
            .find('a')
            .removeClass('selected');

        handleLocales().then(function() {
            updateTranslations();
        });

        //MMS.animations.scrollMagicToggleNav();

    },

    currentProjectView: null,

    index: function() {
        console.log('INDEX');
        if(portfolioOpen && !server_initial_load) handleClosePortfolio();

       // Backbone.history.navigate('#'+window.selectedLanguage, { trigger: false });
    },


    project: function(id, options) {
        var _this = this;
        options = _.defaults(options || {}, {
          render: true,
        });


        // mmsDataRequest.then(function() {
            var currentProject = _this.projects.findWhere({ slug: id });

            var animate = true;

            if (_this.currentProjectView) {
                animate = false;
                _this.currentProjectView.remove();
                _this.currentProjectView = null;
            }

            var currentProjectView = new ProjectView({ model: currentProject });
            _this.currentProjectView = currentProjectView;
            if(options.render) {
              currentProjectView.render();
            } else {
              currentProjectView.addScrollMagic();
            }
            var currentPosition = currentProject.attributes.position;

            if(options.render) {
              MMS.animations.openCurrentProject(
                $mainContent,
                $portfolio,
                animate,
                function() {
                  portfolioOpen = true;
                });
            }

            currentProjectView.once("project:next", function() {
                var nextPosition = currentPosition + 1;
                var nextProject = _this.projects.findWhere({ position: nextPosition }) || _this.projects.findWhere({ position: 1 });
                Backbone.history.navigate(window.selectedLanguage + "/"+nextProject.get("section")+"/" + nextProject.get("slug"), { trigger: true });

            });
        // });
    }

});


function handleClosePortfolio(o, href) {
    if(!portfolioOpen) return false;
    portfolioOpen=false;

    // if (href) {
    Backbone.history.navigate('#'+window.selectedLanguage, { trigger: false });
    //}

    //@see animations.js
    MMS.animations.closeCurrentProject(
        $mainContent,
        $portfolio,
        function() {
           // portfolioOpen = false;
            if (window.router) {
                if (window.router.currentProjectView) {
                    window.router.currentProjectView.remove();
                    window.router.currentProjectView = null;
                }
            }

        });


}


$(document).ready(function() {

    FastClick.attach(document.body);

    Handlebars.registerPartial('projects', mms.templates['project-template']);


    window.router = new Router();
    Backbone.history.start({pushState: true});
    console.log('pushState');


    if(server_render) {
      // var currentProjectView = new ProjectView();
      // currentProjectView.addScrollMagic()
      router.project("atomic-custom-studio", {render: false});
    }


    if (typeof window.HTMLTemplateElement === 'undefined') {
        $('html').addClass('noTemplates');
    }

    // HEADER
    $('.js-header').addClass('show--header');


    // RESIZE

    $(window).resize(function() {
        if ($(this).width() <= 640) {
            MMS.animations.setMainContentTranslateY($mainContent,"36px");
        } else {
            MMS.animations.setMainContentTranslateY($mainContent,"0px");
        }

    });

    //if (!window.isMobile) {
    //if (!$.browser.mobile) {
    //MMS.animations.revealABoutText();
    //MMS.animations.scrollMagicToggleNav();
    //}
    // $(".column-left").css({ "margin-top": "0" });
    //} else {

    // $(".column-left").css({ "margin-top": "0" });

    //}

    // NAVIGATION
    $('.js-nav-link').on('click', function() {
        var animate = true;

        var scrollAnchor = $(this).attr('data-scroll'),
            $activeSection = $('section[data-anchor="' + scrollAnchor + '"]'),
            scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 36;

        if (portfolioOpen) {
            var href = $(this).attr('href');
            animate = false;
            $mainContent.scrollTop($mainContent.scrollTop() + scrollPoint);
            handleClosePortfolio(null, href);
        }

        $activeSection
            .addClass('active')
            .siblings()
            .removeClass('active');


        if (animate) {
            MMS.animations.startScrollAnimation($mainContent, $activeSection, null, scrollPoint);
        }

        // this ection is nested in what we did!


        $(this)
            .addClass('selected')
            .parent()
            .siblings()
            .find('a')
            .removeClass('selected');


        if ($(this).parents().hasClass('nav__mobile')) {
            $('.js-mobile-nav').trigger('click');
        }


        return false;
    });


    $('.js-mobile-nav').on('click', function() {
        var _self = $(this);
        _self.toggleClass('active');
        _self.parent().toggleClass('open')
    });

    // Home Page
    MMS.home.initialize();

    // PORTFOLIO / GALLERY



    //$('body').on('click touchstart', '.js-close-portfolio', handleClosePortfolio);
    //$('body').on('click', '.js-island', function(){alert("Handler for .click() called.");});


    //CONTACT
    $('.js-contact-form-submit').on('click', function() {
        var name = $('.js-contact-name').val();
        var email = $('.js-contact-email').val();
        var message = $('.js-contact-message').val();

        var $form = $('.contact-form'),
            $inputs = $form.find('input, textarea'),
            $labels = $('.contact-form label');

        $inputs.each(function() {
            var label = $(this).parent().find('label');

            if ($(this).val() === "") {
                label.addClass('form-error');
                $form.addClass('form-has-errors');
            } else {
                label.removeClass('form-error');
                $form.removeClass('form-has-errors');
            }
        })

        if (!$form.hasClass('form-has-errors')) {

            $.ajax({
                type: 'GET',
                url: './sendmail.php',
                data: {
                    'name': name,
                    'email': email,
                    'message': message
                },
                error: function(data) {
                    console.log("Error", data);
                },
                success: function(data) {
                    console.log("success", data);
                    $('.js-contact-name').val('');
                    $('.js-contact-email').val('');
                    $('.js-contact-message').val('');
                    $('.js-form-sent').addClass('sent');

                    setTimeout(function() {
                        $('.js-form-sent').removeClass('sent');
                    }, 5000);
                }
            });
        }

    });




    // All navigation that is relative should be passed through the navigate
    // method, to be processed by the router. If the link has a `data-bypass`
    // attribute, bypass the delegation completely.
    $(document).on("click", "a[href]:not([data-bypass])", function(evt) {
      // Get the absolute anchor href.
      var href = { prop: $(this).prop("href"), attr: $(this).attr("href") };
      // Get the absolute root.
      var root = location.protocol + "//" + location.host;

      // Ensure the root is part of the anchor href, meaning it's relative.
      if (href.prop.slice(0, root.length) === root) {
        // Stop the default event to ensure the link will not cause a page
        // refresh.
        evt.preventDefault();

        // Note by using Backbone.history.navigate, router events will not be
        // triggered.  If this is a problem, change this to navigate on your
        // router.
        console.log('href ', href);
        Backbone.history.navigate(href.attr, true);
      }
    });

});
