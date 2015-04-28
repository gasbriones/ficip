$(document).ready(function () {


    switch ($('body').attr('class')){
        case 'home':


        break;

    }
    $('.slider').bxSlider({
        captions: true,
        controls:false,
        auto:true,
        speed:1500,
        pause:10000,
        infiniteLoop:true

    });

    if($('.single-body').height() > 1048){
        $('.sidebar').css('height',($('.single-body').height()+32) + 'px');
    }

});

