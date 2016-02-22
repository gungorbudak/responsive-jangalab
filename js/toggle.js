(function($) {
    $(document).ready(function() {
        var eventHandler = function(e) {
            e.preventDefault();
            var pmid = 'p#' + $(this).data().pmid;
            $(pmid).toggle();
        };
        $('a#abstract-link').on('click', eventHandler);
    });
})(jQuery);
