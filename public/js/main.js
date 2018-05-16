$(function () {
    var isIOS = /iPad|iPhone|iPod/.test(navigator.platform);

    if (isIOS) {

        var canvasVideo = new CanvasVideoPlayer({
            videoSelector: '.video',
            canvasSelector: '.canvas',
            timelineSelector: false,
            autoplay: true,
            makeLoop: true,
            pauseOnClick: false,
            audio: false
        });

    }else {
        // Use HTML5 video
        document.querySelectorAll('.canvas')[0].style.display = 'none';
    }

    // Fix Jobs on mobile
    var windowsize = $(window).width();

    if (windowsize < 768) {
        $('.rowSwapImg1').before($('.rowSwapHead1'));
        $('.rowSwapImg2').before($('.rowSwapHead2'));
    }


    // Disable Services links
    $('.rsl-circle').click(function (e) {
        e.preventDefault();
    });

    // Smooth Scroll
    $("a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    // Ajax Email
    $("#contact-form").on('submit', function(e){

        e.preventDefault();

        var firstname = $("input[name=firstname]").val();
        var lastname = $("input[name=lastname]").val();
        var phone = $("input[name=phone]").val();
        var mensaje = $("textarea[name=mensaje]").val();
        var email = $("input[name=email]").val();

        if(firstname && lastname && email && mensaje){
            $.ajax({
                type:'POST',
                url:'/contacto',
                data:{firstname:firstname, lastname:lastname, mensaje:mensaje, email:email, phone:phone},
                success:function(data){
                    $('#contactForm').hide();
                    swal({
                        position: 'top-end',
                        type: 'success',
                        title: '¡Tu mensaje ha sido enviado!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('#contactSuccess').show();
                }
            });
        }else{
            console.log('false');
        }

    });

    // Image 3d
    $(".jobImgBox").hover3d({
        selector: "figure",
        shine: true,
        sensitivity: 30,
    });

    // Handle Hamburger
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        var target = $('#servicios').offset().top;
        if (y > target) {
            $('.hamburger').fadeIn();
        } else {
            $('.hamburger').fadeOut();
        }
    });
});

