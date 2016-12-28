var $main = $('#pt-main'),
    $pages = $main.children('div.pt-page'),
    current = 0,
    isAnimating = false,
    endCurrPage = false,
    endNextPage = false,
    animEndEventNames = {
        'WebkitAnimation': 'webkitAnimationEnd',
        'OAnimation': 'oAnimationEnd',
        'msAnimation': 'MSAznimationEnd',
        'animation': 'animationend'
    },
    animEndEventName = animEndEventNames[Modernizr.prefixed('animation')],
    support = Modernizr.cssanimations;

function init() {
    $pages.each(function() {
        var $page = $(this);
        $page.data('originalClassList', $page.attr('class'));
    });
    $pages.eq(current).addClass('pt-page-current');
}

function nextPage(animation, currentPageNumber, nextPageNumber, callback) {
    if (isAnimating) {
        return false;
    }
    isAnimating = true;
    current = nextPageNumber;
    var $currPage = $pages.eq(currentPageNumber);
    var $nextPage = $pages.eq(nextPageNumber).addClass('pt-page-current'),
        outClass = '',
        inClass = '';
    let jsonObj = getOrder(animation);
    outClass = jsonObj.outClass;
    inClass = jsonObj.inClass;
    $currPage.addClass(outClass).on(animEndEventName, function() {
        $currPage.off(animEndEventName);
        endCurrPage = true;
        if (endNextPage) onEndAnimation($currPage, $nextPage);
    });
    $nextPage.addClass(inClass).on(animEndEventName, function() {
        $nextPage.off(animEndEventName);
        endNextPage = true;
        if (endCurrPage) onEndAnimation($currPage, $nextPage);
    });
    if (!support) onEndAnimation($currPage, $nextPage);
    callback()
}

function onEndAnimation($outpage, $inpage) {
    endCurrPage = false;
    endNextPage = false;
    resetPage($outpage, $inpage);
    isAnimating = false;
}

function resetPage($outpage, $inpage) {
    $outpage.attr('class', $outpage.data('originalClassList'));
    $inpage.attr('class', $inpage.data('originalClassList') + ' pt-page-current');
}
init();

function changeContest(argument) {
    changeBiggiesContent();
    changeCultiContent();
    changeInfiContent();
    changeOnlineContent();
    changeLitrContent();
    changeTechyContent();
}


$('body').on("click", ".biggies", function() {
    if (current != 0) nextPage(60, current, 0, function() {
        $('.biggiesDiv').css("display", "none");
        setTimeout(function() {
            changeContest();
            $('.biggiesDiv').css("display", "block");
            $('.biggiesDiv').addClass('animated bounceInUp');
        }, 750);
    });
});
$('body').on("click", ".culti", function() {
    if (current != 1) nextPage(60, current, 1, function() {
        $('.cultiDiv').css("display", "none");
        setTimeout(function() {
            changeContest();
            $('.cultiDiv').css("display", "block");
            $('.cultiDiv').addClass('animated bounceInUp');
        }, 750);
    });
});
$('body').on("click", ".infi", function() {
    if (current != 2) nextPage(60, current, 2, function() {
        $('.infiDiv').css("display", "none");
        setTimeout(function() {
            changeContest();
            $('.infiDiv').css("display", "block");
            $('.infiDiv').addClass('animated bounceInUp');
        }, 750);
    });
});
$('body').on("click", ".online", function() {
    if (current != 3) nextPage(60, current, 3, function() {
        $('.onlineDiv').css("display", "none");
        setTimeout(function() {
            changeContest();
            $('.onlineDiv').css("display", "block");
            $('.onlineDiv').addClass('animated bounceInUp');
        }, 750);
    });
});
$('body').on("click", ".litr", function() {
    if (current != 4) nextPage(60, current, 4, function() {
        $('.litrDiv').css("display", "none");
        setTimeout(function() {
            changeContest();
            $('.litrDiv').css("display", "block");
            $('.litrDiv').addClass('animated bounceInUp');
        }, 750);
    });
});
$('body').on("click", ".techy", function() {
    if (current != 5) nextPage(60, current, 5, function() {
        $('.techyDiv').css("display", "none");
        setTimeout(function() {
            changeContest();
            $('.techyDiv').css("display", "block");
            $('.techyDiv').addClass('animated bounceInUp');
        }, 750);
    });
});
