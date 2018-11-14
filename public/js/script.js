$(document).ready(function() {
    // открытие модального окна
    $('img').click( function(event){
        let imgSrc = $(this).attr('src');
        event.preventDefault();
        $('#overlay').fadeIn(400,
            function(){
                $('#modal_form')
                    .css({
                        display: 'block',
                        backgroundImage: 'url(' + imgSrc + ')'
                    })
                    .animate({opacity: 1, top: '50%'}, 200);
            });
    });
    // закрытие модального окна
    $('#modal_close, #overlay').click( function(){
        $('#modal_form')
            .animate({opacity: 0, top: '45%'}, 200,
                function(){
                    $(this).css('display', 'none');
                    $('#overlay').fadeOut(400);
                }
            );
    });
});