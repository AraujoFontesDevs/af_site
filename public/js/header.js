$(function(){
    // console.log(window.location.href)
    var x = window.matchMedia("(max-width: 1284px)")
    console.log(x);
    if(x.matches){
        $('.hide-with-scroll').removeClass('d-flex').hide();
        $('#mainHeader').show().addClass('d-flex');
        return
    }
    if(window.location.href !== 'http://localhost:8000/'){
        $('.hide-with-scroll').addClass('d-flex').show();
        $('#mainHeader').removeClass('d-flex').hide();

        window.addEventListener('scroll', function () {
        console.log('lalou');
        if (this.scrollY !== 0) {
            $('.hide-with-scroll').removeClass('d-flex').hide();
            $('#mainHeader').show().addClass('d-flex');
        } else {
            $('.hide-with-scroll').addClass('d-flex').show();
            $('#mainHeader').removeClass('d-flex').hide();
        }

    })
}
})
$("#menuButton").click( function () {
	$("#headerMenuMobile ul").slideToggle();
});
