$(function() {

    $('#side-menu').metisMenu();

});
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});
$('document').ready(function(){
	var rate = 2;
	function chart_ani(){
		$('.col').each(function(i,e){
			var numb = $(this).find('b').text();
			console.log( (parseFloat(numb) * rate).toFixed(0) + 'px');
			$('.col').eq(i).animate({
				height: (parseFloat(numb) * rate).toFixed(0) + 'px'
			}, 500)
		})
		setTimeout(function(){
			$('.chart_grid .numb').fadeIn(300);
		}, 800);
	}
	chart_ani();
});

	



