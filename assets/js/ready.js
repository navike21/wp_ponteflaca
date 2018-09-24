function show_loading() {
    $(".loading").css({'z-index': '99999', height: "100%"} ).animate({ 'opacity': 1 }, 500);
}
function hide_loading() {
    $(".loading").animate({ 'opacity': 0 }, 500);
    setTimeout(function () {
        $(".loading").css({'z-index': '-1', height: "0%"});
    }, 600);
}


var interval = null;

function acciones() {
    /* ACCION REQUEST
        success | success_reload | error | warning
    */

    var icon_success = '<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>';

    var icon_error = '<svg class="checkmark_err" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70"> <circle class="checkmark__circle_err" cx="35" cy="35" r="34"/><g class="checkmark__check"> <line class="st1" x1="17" y1="17" x2="53" y2="53"/> <line class="st1" x1="53" y1="17" x2="17" y2="53"/> </g> </svg>';

    var icon_warning = '<svg class="checkmark_warning" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70"> <g id="circle" class="checkmark__circle_warning"> <circle class="st0" cx="35" cy="35" r="34"/> </g> <g id="warning_icon" class="checkmark__check"> <circle class="st1 checkmark__check" cx="35" cy="51.3" r="2"/> <g> <g> <path class="st1" d="M33.5,16.8c0,7.9,0,15.8,0,23.8c0,1.9,3,1.9,3,0c0-7.9,0-15.8,0-23.8C36.5,14.8,33.5,14.8,33.5,16.8 L33.5,16.8z"/> </g> </g> </g> </svg>';

    var iconMsj = "";
    var msgrequest = $("#success_frm").val().split("&");
    var accion = msgrequest[0];
    var mensaje = msgrequest[1];

    switch (accion) {
        case "success_reload":
            iconMsj = icon_success;
            break;
        case "warning":
            iconMsj = icon_warning;
            break;
        case "error":
            iconMsj = icon_error;
            break;

        default:
    }

    console.log(iconMsj);

    $(".loading").html('<div class="mensaje_loading section_top_center">' + iconMsj + '<p class="w_100 align_center">' + mensaje + '</p></div>');
    clearInterval(interval);
    setTimeout(function () {
        location.reload();
    }, 2000);

    setTimeout(function () {
        $(".mensaje_loading").animate({ "opacity": 1 }, 500);
    }, 500);
}
$(document).ready(function() {
    $(".form").submit(function (event) {
        var findRequired = $(this).find(".requerido").val();
        if (findRequired == undefined) {
            show_loading();
            interval = setInterval(acciones, 1000);
        }
    });
    $('.img_fondo').each(function(index, el) {
        var image = $(this).data("image");
        $(this).css('background-image', 'url('+image+')');
    });

    function parallax_home() {
        var offset = window.pageYOffset;
        var header = $("home");
        $(".slider_home").css('transform', "translateY("+offset/2 + "px)");
    }
    $(window).scroll(function(event) {
        parallax_home();
    });

    $(".slider_home").slick({
        dots: true,
        infinite: true,
        speed: 1500,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false, 
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover: false
    });
    $('.parallax-window').parallax();

    var instagramID = $("#instagram").html();
    // alert(instagramID);
	if (instagramID != undefined) {
        // alert("d");
		var userFeed = new Instafeed({
			get: 'user',
			resolution: 'standard_resolution',
			limit: 9,
			userId: '6076431243',
			accessToken: '6076431243.1677ed0.c80b9633dad9450c9097b1b05c9e05c9',
			template: '<div class="foto_insta"><a href="{{link}}" target="_blank" class="section_top_center"><img src="{{image}}" class="w_100" /></a></div>'
		});
		userFeed.run();
	}
    AOS.init();
});
