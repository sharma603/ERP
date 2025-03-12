$(document).ready(function () {
    // Handle input field click events
    $(".welcome_form input").each(function () {
        $(this).click(function () {
            // Remove placeholder
            $(this).attr("placeholder", "");
            // Show label
            var parent = this.parentElement;
            var label = parent.getElementsByTagName("LABEL")[0];
            if (label) {
                $(label).removeClass("d-none");
                $(label).addClass("animate__animated animate__bounceInUp");
            }
        });
    });

    // Step One Next Button
    $(".step-one-next-btn").click(function (e) {
        e.preventDefault();
        empty_fileds_validation("step-one", "step-two");
    });

    // Step Two Next Button
    $(".step-two-next-btn").click(function (e) {
        e.preventDefault();
         empty_fileds_validation("step-two", "step-three");
        
    });

    // Step Three Next Button
    $(".step-three-next-btn").click(function (e) {
        e.preventDefault();
        
        empty_fileds_validation("step-three", "step-four");
        
    });

    // Empty Fields Validation Function
    function empty_fileds_validation(currentStep, nextStep) {
        var container = document.getElementsByClassName("currentStep")[0];
        var input = document.getElementsByClassName("required");
        var temp=[];
        $(input).each(function(){
            if($(this).val() == ""){
                $(this).addClass("border-danger");
                $("<small class='text-danger m-2'><i class='fa fa-warning'></i> Field can't be empty</small>").insertAfter(this);
                
            } else {
                temp.push($(this).val());
                $(this).removeClass("border-danger");
                 $(this).next("small.text-danger").remove(); // Remove warning if field is filled
            }
        });
// silde if required field not valid 
        if(temp.length==input.length)
        {    
            $(`.${currentStep}`).addClass("d-none");
            $(`.${nextStep}`).removeClass("d-none").addClass("animate__animated animate__bounceInRight");
        }
        

        
        // let isValid = true;
        // $(`.${currentStep} input`).each(function () {
        //     if ($(this).val().trim() === "") {
        //         isValid = false;
        //         $(this).addClass("is-invalid"); // Highlight empty fields
        //         $("small").removeClass("d-none");
        //     } else {
        //         $(this).removeClass("is-invalid");

        //     }
        // });

        // if (isValid) {
        //     $(`.${currentStep}`).addClass("d-none");
        //     $(`.${nextStep}`).removeClass("d-none").addClass("animate__animated animate__bounceInRight");
        // } else {
        //     alert("Please fill out all fields.");
        // }

    }

    // Step Two Back Button
    $(".step-two-back-btn").click(function (e) {
        e.preventDefault();
        $(".step-one").removeClass("d-none");
        $(".step-two").addClass("d-none");
        $(".step-one").addClass("animate__animated animate__bounceInLeft");
    });

    // Step Three Back Button
    $(".step-three-back-btn").click(function (e) {
        e.preventDefault();
        $(".step-two").removeClass("d-none");
        $(".step-three").addClass("d-none");
        $(".step-two").addClass("animate__animated animate__bounceInLeft");
    });

    // Step Four Back Button
    $(".step-four-back-btn").click(function (e) {
        e.preventDefault();
        $(".step-three").removeClass("d-none");
        $(".step-four").addClass("d-none");
        $(".step-three").addClass("animate__animated animate__bounceInLeft");
    });
});