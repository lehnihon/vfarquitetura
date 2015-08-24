(function($) {
    $(document).ready(function(){
        var offset = $('#menu-principal').offset().top;
        var $meuMenu = $('#menu-principal'); // guardar o elemento na memoria para melhorar performance
        $(document).on('scroll', function () {
            if (offset <= $(window).scrollTop()) {
                $meuMenu.addClass('fixar');
            } else {
                $meuMenu.removeClass('fixar');
            }
        });
    });
})(jQuery);