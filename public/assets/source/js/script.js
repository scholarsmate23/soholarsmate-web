(function($) {
    "use strict";

    // Preloader js
    $(window).on("load", function() {
        $(".preloader").fadeOut(700);
    });

    // Sticky Menu
    $(window).scroll(function() {
        var height = $(".top-header").innerHeight();
        if ($("header").offset().top > 10) {
            $(".top-header").addClass("hide");
            $(".navigation").addClass("nav-bg");
            $(".navigation").css("margin-top", "-" + height + "px");
        } else {
            $(".top-header").removeClass("hide");
            $(".navigation").removeClass("nav-bg");
            $(".navigation").css("margin-top", "-" + 0 + "px");
        }
    });
    // navbarDropdown
    if ($(window).width() < 992) {
        $(".navigation .dropdown-toggle").on("click", function() {
            $(this).siblings(".dropdown-menu").animate({
                    height: "toggle",
                },
                300
            );
        });
    }

    // Background-images
    $("[data-background]").each(function() {
        $(this).css({
            "background-image": "url(" + $(this).data("background") + ")",
        });
    });

    //Hero Slider
    $(".hero-slider").slick({
        autoplay: true,
        autoplaySpeed: 7500,
        pauseOnFocus: false,
        pauseOnHover: false,
        infinite: true,
        arrows: true,
        fade: true,
        prevArrow: "<button type='button' class='prevArrow'><i class='ti-angle-left'></i></button>",
        nextArrow: "<button type='button' class='nextArrow'><i class='ti-angle-right'></i></button>",
        dots: true,
    });
    $(".hero-slider").slickAnimation();

    // venobox popup
    $(document).ready(function() {
        $(".venobox").venobox();
    });

    // filter
    $(document).ready(function() {
        var containerEl = document.querySelector(".filtr-container");
        var filterizd;
        if (containerEl) {
            filterizd = $(".filtr-container").filterizr({});
        }
        //Active changer
        $(".filter-controls li").on("click", function() {
            $(".filter-controls li").removeClass("active");
            $(this).addClass("active");
        });
    });

    //  Count Up
    function counter() {
        var oTop;
        if ($(".count").length !== 0) {
            oTop = $(".count").offset().top - window.innerHeight;
        }
        if ($(window).scrollTop() > oTop) {
            $(".count").each(function() {
                var $this = $(this),
                    countTo = $this.attr("data-count");
                $({
                    countNum: $this.text(),
                }).animate({
                    countNum: countTo,
                }, {
                    duration: 1000,
                    easing: "swing",
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    },
                });
            });
        }
    }
    $(window).on("scroll", function() {
        counter();
    });
})(jQuery);

$(".ba-we-love-subscribers-fab").click(function() {
    $(".ba-we-love-subscribers-fab .wrap").toggleClass("ani");
    $(".ba-we-love-subscribers").toggleClass("open");
    $(".img-fab.img").toggleClass("close");
});

//** tables **/
const tables = document.querySelectorAll("table");
if (tables) {
    tables.forEach((table) => {
        const headerRow = table.querySelector("thead tr");
        const thElements = headerRow.querySelectorAll("th");
        const tdElements = table.querySelectorAll("tbody tr td");
        const tr = table.querySelectorAll("tbody tr");

        let mainIndex = 0;
        tdElements.forEach((td) => {
            let index = mainIndex / tdElements.length;
            td.setAttribute("data-label", thElements[mainIndex].innerHTML);

            if (mainIndex == thElements.length - 1) {
                mainIndex = 0;
            } else {
                mainIndex += 1;
            }
        });
    });
}

$(document).ready(function() {
    function openModal() {
        $("#scholarshipsDetailModal").modal("show");
    }

    function closeModal() {
        $("#scholarshipsDetailModal").modal("hide");
    }

    $('[data-toggle="openModal"]').click(function() {
        openModal();
    });

    $("#scholarshipsDetailModal").on(
        "click",
        '[data-dismiss="modal"]',
        function() {
            closeModal();
        }
    );
});

$(document).ready(function() {
    function openModalDetais() {
        $("#uddyamDetailModal").modal("show");
    }

    function closeModal() {
        $("#uddyamDetailModal").modal("hide");
    }

    $('[data-toggle="openModalDetais"]').click(function() {
        openModalDetais();
    });

    $("#uddyamDetailModal").on("click", '[data-dismiss="modal"]', function() {
        closeModal();
    });
});



// Remove error messages after 5 seconds
setTimeout(function() {
    $('.invalid-feedback').fadeOut('slow');
}, 5000);


setTimeout(function() {
    $('.alert-success').fadeOut('slow');
}, 5000);


    function playVideo(url) {
        // Extract YouTube video ID
        const videoId = url.split('v=')[1];
        const ampersandPosition = videoId.indexOf('&');
        const cleanVideoId = ampersandPosition !== -1 ? videoId.substring(0, ampersandPosition) : videoId;

        const iframe = document.getElementById('videoIframe');
        iframe.src = `https://www.youtube.com/embed/${cleanVideoId}?autoplay=1`;

        document.getElementById('videoModal').style.display = 'block';
    }

    function closeVideo() {
        const iframe = document.getElementById('videoIframe');
        iframe.src = '';

        // Hide the modal
        document.getElementById('videoModal').style.display = 'none';
    }
         
    
    document.addEventListener('DOMContentLoaded', () => {
        
        const form = document.getElementById('applicationForm');
        const loader = document.getElementById('loader');
        
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
    
            // Show the loader
            loader.style.display = 'block';
    
            const formData = new FormData(form);
            const actionUrl = form.getAttribute('action'); // Get the form's action attribute
    
            fetch(actionUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
            })
            .then(response => response.json())
            .then(data => {
                // Hide the loader
                loader.style.display = 'none';
    
                if (data.success) {
                    // Display success message in a popup
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: data.message || 'Application Sent successfully, We Will Contact You Soon!',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect to career page
                            window.location.href = '/career';
                        }
                    });
                } else {
                    // Handle server-side validation errors
                    const errorMessage = document.getElementById('error-message');
                    errorMessage.textContent = data.error || 'Something went wrong. Please try again.';
                    errorMessage.classList.remove('d-none');
                }
            })
            .catch(error => {
                // Hide the loader
                loader.style.display = 'none';
    
                console.error('Error:', error);
                const errorMessage = document.getElementById('error-message');
                errorMessage.textContent = 'An unexpected error occurred. Please try again.';
                errorMessage.classList.remove('d-none');
            });
        });
    });


    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('applicantApplyForm');
        const loader = document.getElementById('applyLoader');
        const successMessage = document.getElementById('success-message');
        const errorMessage = document.getElementById('error-message');
    
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission
    
                // Show the loader
                loader.style.display = 'block';
    
                const formData = new FormData(form);
                const actionUrl = form.getAttribute('action'); // Get the form's action attribute
    
                fetch(actionUrl, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                })
                .then(response => response.json())
                .then(data => {
                    // Hide the loader
                    loader.style.display = 'none';
    
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Application Received, We Will Contact You Soon!',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '/';
                            }
                        });
                    } else {
                        // Handle server-side validation errors
                        if (errorMessage) {
                            errorMessage.textContent = data.error || 'Something went wrong. Please try again.';
                            errorMessage.classList.remove('d-none');
                        }
                    }
                })
                .catch(error => {
                    // Hide the loader
                    loader.style.display = 'none';
    
                    console.error('Error:', error);
                    if (errorMessage) {
                        errorMessage.textContent = 'An unexpected error occurred. Please try again.';
                        errorMessage.classList.remove('d-none');
                    }
                });
            });
        }
    });

    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('dynamicForm');
        const loader = document.getElementById('dynamicLoader');
        const successMessage = document.getElementById('success-message');
        const errorMessage = document.getElementById('error-message');
    
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission
    
                // Show the loader
                loader.style.display = 'block';
    
                const formData = new FormData(form);
                const actionUrl = form.getAttribute('action'); // Get the form's action attribute
    
                fetch(actionUrl, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                })
                .then(response => response.json())
                .then(data => {
                    // Hide the loader
                    loader.style.display = 'none';
    
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Application Received, We Will Contact You Soon!',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '/';
                            }
                        });
                    } else {
                        // Handle server-side validation errors
                        if (errorMessage) {
                            errorMessage.textContent = data.error || 'Something went wrong. Please try again.';
                            errorMessage.classList.remove('d-none');
                        }
                    }
                })
                .catch(error => {
                    // Hide the loader
                    loader.style.display = 'none';
    
                    console.error('Error:', error);
                    if (errorMessage) {
                        errorMessage.textContent = 'An unexpected error occurred. Please try again.';
                        errorMessage.classList.remove('d-none');
                    }
                });
            });
        }
    });