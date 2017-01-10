var progress = setInterval(function() {
    var t = $("#bar");
    t.width() >= 600 ? clearInterval(progress) : t.width(t.width() + 60), t.text(parseInt(t.width() / 6) + "%"), t.width() / 6 >= 100 && t.text("Still working ... 100%")
}, 800);
$(window).load(function() {
    $("#bar").width(600), $(".loader").fadeOut(1500);

});