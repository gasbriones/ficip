$(document).ready(function () {

    var back = ["#FFFE0C", "#5AFEFF", "#000000", '#5B00E3', '#FF1A00', '#652D90', "#FFFE0C", "#5AFEFF", "#000000", '#5B00E3', '#FF1A00', '#652D90'],
        i = 0;

    var bgInterva = setInterval(function () {
        i++;
        $('body').css('background', back[i]);

        if (i == back.length) {
            clearInterval(bgInterva);
            $('.letters').fadeOut(500)<
            $('.pics').fadeOut(500, function () {
                $('.footer').css({'position': 'absolute', 'bottom': '0'}).animate({height: '50%'}, 500, function () {
                    $('.social').delay(1500).fadeIn(500);
                    $('.logo').fadeIn(500);
                });
            });
        }
    }, 150);
});
