$(function() {
    //animation défilement
    $('ul a').on('click',function(event){
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        event.preventDefault(); 
    });
    //animation particule
    $(function(){
        $(".index").jParticle({
            background: "#171819",
            color: "#B7B8B9"
        });
    });
    //
});

