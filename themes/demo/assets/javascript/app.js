/*
 * Application
 */

$(document).tooltip({
    selector: "[data-toggle=tooltip]"
})

/*
 * Auto hide navbar
 */
jQuery(document).ready(function($){
    var $header = $('.navbar-autohide'),
        scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150

    $(window).on('scroll', function(){
        if (!scrolling) {
            scrolling = true

            if (!window.requestAnimationFrame) {
                setTimeout(autoHideHeader, 250)
            }
            else {
                requestAnimationFrame(autoHideHeader)
            }
        }
    })


    function autoHideHeader() {
        var currentTop = $(window).scrollTop()

        // Scrolling up
        if (previousTop - currentTop > scrollDelta) {
            $header.removeClass('is-hidden')
        }
        else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            // Scrolling down
            $header.addClass('is-hidden')
        }

        previousTop = currentTop
        scrolling = false
    }
});
(function($){

    $('#PlacesFilter').on('change','input, select',function(){
        var $form = $("#partialCells").find('form');
        
        $form.request();


    });
     $('#CellsFilter').on('change','input, select',function(){
        var $form2 = $("#CellsFilter").find('form');
        
        $form2.request();


    });
      $('#testbutton').on('click',function(){
       alert("działa");


    });
     
     





})(jQuery);
$(document).ready( function () {
    var table= $('#table').DataTable();
} );

 function SendProjectId()
 {
        alert("działa");
    }