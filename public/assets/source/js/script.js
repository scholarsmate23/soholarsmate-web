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


$(document).ready(function() {
    $('#applicantForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        var isValid = true;

        // Remove previous error styles
        $('input').removeClass('error');

        // Validate each input field
        $('#applicantForm input').each(function() {
            if ($(this).val() === '') {
                $(this).addClass('error');
                isValid = false;

                // Remove error styling after 5 seconds
                setTimeout(function() {
                    $('input').removeClass('error');
                }, 5000);
            }
        });

        // If all fields are valid, disable the button and submit the form
        if (isValid) {
            $('#submitBtn').prop('disabled', true); // Disable the submit button
            submitFormData();
        }
    });

    function submitFormData() {
        // Collect form data
        var formData = $('#applicantForm').serialize();

        // AJAX request to submit data
        $.ajax({
            url: '/submitData', // Change the URL to your Laravel route
            type: 'POST',
            data: formData,
            success: function(response) {
                // Show success modal
                $('#successModal').modal('show');
                $('#submitBtn').prop('disabled', false); // Re-enable the submit button after success
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Log error message
                alert('An error occurred while submitting the data. Please try again.'); // Show error message
                $('#submitBtn').prop('disabled', false); // Re-enable the submit button after error
            }
        });
    }

    $('#closeModalBtn').click(function() {
        window.location.href = '/'; // Change the URL to your home page
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

        // Set the iframe src to the YouTube embed URL
        const iframe = document.getElementById('videoIframe');
        iframe.src = `https://www.youtube.com/embed/${cleanVideoId}?autoplay=1`;

        // Show the modal
        document.getElementById('videoModal').style.display = 'block';
    }

    function closeVideo() {
        // Stop video playback by clearing the iframe src
        const iframe = document.getElementById('videoIframe');
        iframe.src = '';

        // Hide the modal
        document.getElementById('videoModal').style.display = 'none';
    }

    
    document.addEventListener('DOMContentLoaded', () => {
        $('#applyModal').on('show.bs.modal', function (event) {
            const button = $(event.relatedTarget);
            const careerId = button.data('career-id');
            const role = button.data('role');
    
            const modal = $(this);
            modal.find('#careerId').val(careerId);
            modal.find('#modalRole').text(role);
            modal.find('#role').val(role);
        });
    
        document.getElementById('submitApplication').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default form submission
            const form = document.getElementById('applicationForm');
            const fields = form.querySelectorAll('[required]');
            let hasError = false;
    
            // Clear previous errors
            const errorMessage = document.getElementById('error-message');
            const successMessage = document.getElementById('success-message');
            errorMessage.classList.add('d-none');
            successMessage.classList.add('d-none');
            fields.forEach(field => field.classList.remove('is-invalid'));
    
            // Validate fields
            fields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    hasError = true;
                }
            });
    
            // Display error message
            if (hasError) {
                errorMessage.textContent = 'Please fill out all required fields.';
                errorMessage.classList.remove('d-none');
    
                // Hide error message and reset field borders after 5 seconds
                setTimeout(() => {
                    errorMessage.classList.add('d-none');
                    fields.forEach(field => field.classList.remove('is-invalid'));
                }, 5000);
    
                return;
            }
    
            // Submit form using AJAX
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
                    if (data.success) {
                        // Display success message
                        successMessage.textContent = data.message || 'Application submitted successfully, Our Team Will Reach Out To you Soon!';
                        successMessage.classList.remove('d-none');
    
                        // Hide modal after a brief delay
                        setTimeout(() => {
                            $('#applyModal').modal('hide'); // Hide modal explicitly
                        }, 3000); // Show success message for 2 seconds before hiding modal
    
                        // Reload or redirect after the modal is hidden
                        $('#applyModal').on('hidden.bs.modal', function () {
                            location.href = '/'; // Redirect to home page
                            // OR
                            // location.reload(); // Reload current page
                        });
                    } else {
                        // Handle server-side validation errors
                        errorMessage.textContent = data.error || 'Something went wrong. Please try again.';
                        errorMessage.classList.remove('d-none');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    errorMessage.textContent = 'An unexpected error occurred. Please try again.';
                    errorMessage.classList.remove('d-none');
                });
        });
    });
     
    
    

    document.addEventListener('DOMContentLoaded', () => {
        const availabilityInput = document.getElementById('availability');
        
        // Set the minimum date to today
        const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
        availabilityInput.setAttribute('min', today);
    });