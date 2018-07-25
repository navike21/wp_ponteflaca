$(document).ready(function() {
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

    $(".slider_home").slick();
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
});
