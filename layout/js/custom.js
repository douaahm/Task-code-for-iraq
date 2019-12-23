function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function deleteCookie( cname ) {
    document.cookie = cname + '=; Max-Age=0';
}

$(document).ready(function() {

    // Detect ios 11_x_x affected
    // NEED TO BE UPDATED if new versions are affected
    var ua = navigator.userAgent,
        iOS = /iPad|iPhone|iPod/.test(ua),
        iOS11 = /OS 11_0|OS 11_1|OS 11_2/.test(ua);

    // ios 11 bug caret position
    if (iOS && iOS11) {

        // Add CSS class to body
        $("body").addClass("iosBugFixCaret");

    }


    //fade in effect
    if ($('.custom-fade').length > 0){
        if ($(window).scrollTop() + $(window).height() > $('.custom-fade').position().top) {
        fadeInObject();
    }

    $(window).scroll(function () {
        fadeInObject();
    });


        function fadeInObject() {
            $('.custom-fade').each(function (i) {

                var top_of_object = $(this).position().top;
                var bottom_of_window = $(window).scrollTop() + $(window).height()-50;

                if (bottom_of_window > top_of_object) {
                    $(this).animate({'opacity': '1', 'top': '0px'}, 600);
                }
            });
        }
    }
});