$(document).ready(function() {
    $('.welcome_form input').each(function() {
        $(this).click(function(){
            // remove place holder
            $(this).attr("placeholder", "");

            // show label
            var parent = this.parentElement;
            var label = parent.getElementsByTagName("LABEL")[0];
            $(label).removeClass("d-none");
            $(label).addClass("animate__animated animate__bounceInUp");
        });
    
    })

});
