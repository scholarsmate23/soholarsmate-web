(function($) {
    'use strict';

    $(function() {
        var body = $('body');
        var contentWrapper = $('.content-wrapper');
        var scroller = $('.container-scroller');
        var footer = $('.footer');
        var sidebar = $('.sidebar');

        //Add active class to nav-link based on url dynamically
        //Active class can be hard coded directly in html file also as required

        function addActiveClass(element) {
            var current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
            if (current === "") {
                //for root url
                if (element.attr('href').indexOf("index.html") !== -1) {
                    element.parents('.nav-item').last().addClass('active');
                    if (element.parents('.sub-menu').length) {
                        element.closest('.collapse').addClass('show');
                        element.addClass('active');
                    }
                }
            } else {
                //for other url
                if (element.attr('href').indexOf(current) !== -1) {
                    element.parents('.nav-item').last().addClass('active');
                    if (element.parents('.sub-menu').length) {
                        element.closest('.collapse').addClass('show');
                        element.addClass('active');
                    }
                    if (element.parents('.submenu-item').length) {
                        element.addClass('active');
                    }
                }
            }
        }

        $('.nav li a', sidebar).each(function() {
            var $this = $(this);
            addActiveClass($this);
        });

        //Close other submenu in sidebar on opening any

        sidebar.on('show.bs.collapse', '.collapse', function() {
            sidebar.find('.collapse.show').collapse('hide');
        });


        //Change sidebar 
        $('[data-toggle="minimize"]').on("click", function() {
            body.toggleClass('sidebar-icon-only');
        });

        //checkbox and radios
        $(".form-check label,.form-radio label").append('<i class="input-helper"></i>');

    });

    // focus input when clicking on search icon
    $('#navbar-search-icon').click(function() {
        $("#navbar-search-input").focus();
    });

    // if ($.cookie('royal-free-banner') != "true") {
    //     $('#proBanner').addClass('d-flex');
    //     $('.navbar').removeClass('fixed-top');
    // } else {
    //     $('#proBanner').addClass('d-none');
    //     $('.navbar').addClass('fixed-top');
    // }

    if ($(".navbar").hasClass("fixed-top")) {
        $('.page-body-wrapper').removeClass('pt-0');
        $('.navbar').removeClass('pt-5');
    } else {
        $('.page-body-wrapper').addClass('pt-0');
        $('.navbar').addClass('pt-5');
        $('.navbar').addClass('mt-3');

    }

    $('#bannerClose').on('click', function() {
        $('#proBanner').addClass('d-none').removeClass('d-flex');
        $('.navbar').removeClass('pt-5').addClass('fixed-top');
        $('.page-body-wrapper').addClass('proBanner-padding-top');
        $('.navbar').removeClass('mt-3');
        var date = new Date();
        date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
        $.cookie('royal-free-banner', "true", { expires: date });
    });

})(jQuery);


$(document).ready(function() {
    'use strict';
    // Open submenu on hover in compact sidebar mode and horizontal menu mode
    $(document).on('mouseenter mouseleave', '.sidebar .nav-item', function(ev) {
        var body = $('body');
        var sidebarIconOnly = body.hasClass("sidebar-icon-only");
        var sidebarFixed = body.hasClass("sidebar-fixed");
        if (!('ontouchstart' in document.documentElement)) {
            if (sidebarIconOnly) {
                if (sidebarFixed) {
                    if (ev.type === 'mouseenter') {
                        body.removeClass('sidebar-icon-only');
                    }
                } else {
                    var $menuItem = $(this);
                    if (ev.type === 'mouseenter') {
                        $menuItem.addClass('hover-open');
                    } else {
                        $menuItem.removeClass('hover-open');
                    }
                }
            }
        }
    });
});

(function($) {
    'use strict';
    $(function() {
        $('[data-toggle="offcanvas"]').on("click", function() {
            $('.sidebar-offcanvas').toggleClass('active')
        });
    });
});

// $(document).ready(function() {
//     $('.nav-link').on('click', function() {
//         var $this = $(this);
//         var target = $this.attr('href');
//         var $collapse = $(target);

//         // Check if the clicked nav item has a collapse
//         if ($collapse.hasClass('collapse')) {
//             // Set aria-expanded attribute to "false" for all collapse elements
//             $('.collapse').attr('aria-expanded', 'false');
//         }
//     });
// });

$(document).ready(function() {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function() {
        if (this.checked) {
            checkbox.each(function() {
                this.checked = true;
            });
        } else {
            checkbox.each(function() {
                this.checked = false;
            });
        }
    });
    checkbox.click(function() {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
});




// Function to handle image upload
$('#addImageModal form').submit(function(event) {
    event.preventDefault();
    var formData = new FormData($(this)[0]);
    var modalBody = $('#addImageModal .modal-body');
    $.ajax({
        url: '/image/upload',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Update modal body with success message
            modalBody.empty().html('<div class="alert alert-success">Image uploaded successfully.</div>');
            // Optional: Reload the page after a delay to show the success message for a moment
            setTimeout(function() {
                location.reload();
            }, 2000);
        },
        error: function(xhr, status, error) {
            // Handle error
            modalBody.empty().html('<div class="alert alert-danger">An error occurred while uploading the image.</div>');
            setTimeout(function() {
                location.reload();
            }, 2000);
        }
    });
});


// Function to handle image edit
$('#editImageModal form').submit(function(event) {
    event.preventDefault();
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: 'image/edit',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Handle success
            $('#editImageModal .modal-body').html('<div class="alert alert-success">Image edited successfully!</div>');
            // Close the modal after 2 seconds
            setTimeout(function() {
                $('#editImageModal').modal('hide');
            }, 2000);
        },
        error: function(xhr, status, error) {
            // Handle error
            $('#editImageModal .modal-body').html('<div class="alert alert-danger">Error editing image: ' + xhr.responseText + '</div>');
            setTimeout(function() {
                location.reload();
            }, 2000);
        }
    });
});


// // Function to handle image deletion
// $('#deleteImageModal').on('click', 'button.delete-confirm', function() {
//     var imageId = $('#deleteImage').val();
//     console.log('imageId', imageId);
//     $.ajax({
//         url: '/image/delete',
//         type: 'POST',
//         data: { id: imageId },
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         success: function(response) {
//             // Handle success (e.g., display success message)
//         },
//         error: function(xhr, status, error) {
//             // Handle error
//         }
//     });
// });

$(document).ready(function() {
    // Show selected image before uploading
    $('#image').change(function() {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#previewImage').attr('src', e.target.result);
                $('#previewContainer').show(); // Show the container
            }
            reader.readAsDataURL(input.files[0]);
        }
    });
});


$(document).ready(function() {
    $('.delete').click(function() {
        var id = $(this).attr('value');
        $('#delete_image_id').val(id);
    });

    $('.delete-confirm').click(function() {
        var id = $('#delete_image_id').val(); // Get the ID of the record to be deleted
        var modalBody = $('#deleteImageModal .modal-body');
        $.ajax({
            url: '/image/delete', // Your delete route
            type: 'POST',
            data: { id: id },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                modalBody.empty().html('<div class="alert alert-success">Image Deleted successfully.</div>');
                // Optional: Reload the page after a delay to show the success message for a moment
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(xhr, status, error) {
                modalBody.empty().html('<div class="alert alert-danger">An error occurred while Deleting the image.</div>');

                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    });
});


// Function to handle image upload
$('#addResultModal form').submit(function(event) {
    event.preventDefault();
    var formData = new FormData($(this)[0]);
    var modalBody = $('#addResultModal .modal-body');
    $.ajax({
        url: '/add-result',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Update modal body with success message
            modalBody.empty().html('<div class="alert alert-success">Results Added successfully.</div>');
            // Optional: Reload the page after a delay to show the success message for a moment
            setTimeout(function() {
                location.reload();
            }, 2000);
        },
        error: function(xhr, status, error) {
            // Handle error
            modalBody.empty().html('<div class="alert alert-danger">An error occurred while uploading the image.</div>');
            setTimeout(function() {
                location.reload();
            }, 2000);
        }
    });
})

// Function to handle image upload
$('#addSyllabusModal form').submit(function(event) {
    event.preventDefault();
    var formData = new FormData($(this)[0]);
    var modalBody = $('#addSyllabusModal .modal-body');
    $.ajax({
        url: '/upload-pdf',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Update modal body with success message
            modalBody.empty().html('<div class="alert alert-success">Result Added successfully.</div>');
            // Optional: Reload the page after a delay to show the success message for a moment
            setTimeout(function() {
                location.reload();
            }, 2000);
        },
        error: function(xhr, status, error) {
            // Handle error
            modalBody.empty().html('<div class="alert alert-danger">An error occurred while uploading the image.</div>');

            setTimeout(function() {
                location.reload();
            }, 2000);
        }
    });
})


// Function to handle image upload
$('#addNewsModal form').submit(function(event) {
    event.preventDefault();
    var formData = new FormData($(this)[0]);
    var modalBody = $('#addNewsModal .modal-body');
    $.ajax({
        url: '/add-news',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Update modal body with success message
            modalBody.empty().html('<div class="alert alert-success">News Added successfully.</div>');
            // Optional: Reload the page after a delay to show the success message for a moment
            setTimeout(function() {
                location.reload();
            }, 2000);
        },
        error: function(xhr, status, error) {
            // Handle error
            modalBody.empty().html('<div class="alert alert-danger">An error occurred while uploading the image.</div>');
            setTimeout(function() {
                location.reload();
            }, 2000);
        }
    });
})

// Function to handle image upload
$('#addCareerModal form').submit(function(event) {
    event.preventDefault();
    var formData = new FormData($(this)[0]);
    var modalBody = $('#addCareerModal .modal-body');
    $.ajax({
        url: '/add-career',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Update modal body with success message
            modalBody.empty().html('<div class="alert alert-success">Career Added successfully.</div>');
            // Optional: Reload the page after a delay to show the success message for a moment
            setTimeout(function() {
                location.reload();
            }, 2000);
        },
        error: function(xhr, status, error) {
            // Handle error
            modalBody.empty().html('<div class="alert alert-danger">An error occurred while uploading the image.</div>');
            setTimeout(function() {
                location.reload();
            }, 2000);
        }
    });
})

// Function to handle image upload
$('#addSliderImageModal form').submit(function(event) {
    event.preventDefault();
    var formData = new FormData($(this)[0]);
    var modalBody = $('#addSliderImageModal .modal-body');
    $.ajax({
        url: '/add/slider',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Update modal body with success message
            modalBody.empty().html('<div class="alert alert-success">Image uploaded successfully.</div>');
            // Optional: Reload the page after a delay to show the success message for a moment
            setTimeout(function() {
                location.reload();
            }, 2000);
        },
        error: function(xhr, status, error) {
            // Handle error
            modalBody.empty().html('<div class="alert alert-danger">An error occurred while uploading the image.</div>');
            setTimeout(function() {
                location.reload();
            }, 2000);
        }
    });
});

$(document).ready(function() {
    $('.delete').click(function() {
        var id = $(this).attr('value');
        $('#delete_slider_image_id').val(id);
    });

    $('.delete-confirm').click(function() {
        var id = $('#delete_slider_image_id').val(); // Get the ID of the record to be deleted
        var modalBody = $('#deleteSliderImageModal .modal-body');
        $.ajax({
            url: '/delete/slider', // Your delete route
            type: 'POST',
            data: { id: id },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                modalBody.empty().html('<div class="alert alert-success">Image Deleted successfully.</div>');
                // Optional: Reload the page after a delay to show the success message for a moment
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(xhr, status, error) {
                modalBody.empty().html('<div class="alert alert-danger">An error occurred while Deleting the image.</div>');
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    });
});


$(document).ready(function() {
    $('.delete').click(function() {
        var id = $(this).attr('value');
        $('#delete_slider_image_id').val(id);
    });

    $('.delete-confirm').click(function() {
        var id = $('#delete_slider_image_id').val(); // Get the ID of the record to be deleted
        var modalBody = $('#deleteSliderImageModal .modal-body');
        $.ajax({
            url: '/delete/slider', // Your delete route
            type: 'POST',
            data: { id: id },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                modalBody.empty().html('<div class="alert alert-success">Slider Deleted successfully.</div>');
                // Optional: Reload the page after a delay to show the success message for a moment
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(xhr, status, error) {
                modalBody.empty().html('<div class="alert alert-danger">An error occurred while Deleting the slider.</div>');
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    });
});

$(document).ready(function() {
    $('.delete').click(function() {
        var id = $(this).attr('value');
        $('#delete_syllabus_id').val(id);
    });

    $('.delete-confirm').click(function() {
        var id = $('#delete_syllabus_id').val(); // Get the ID of the record to be deleted
        var modalBody = $('#deleteSyllabusModal .modal-body');
        $.ajax({
            url: '/delete-syllabus', // Your delete route
            type: 'POST',
            data: { id: id },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                modalBody.empty().html('<div class="alert alert-success">Syllabus Deleted successfully.</div>');
                // Optional: Reload the page after a delay to show the success message for a moment
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(xhr, status, error) {
                modalBody.empty().html('<div class="alert alert-danger">An error occurred while Deleting the syllabus.</div>');
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    });
});

$(document).ready(function() {
    $('.delete').click(function() {
        var id = $(this).attr('value');
        $('#delete_career_id').val(id);
    });

    $('.delete-confirm').click(function() {
        var id = $('#delete_career_id').val(); // Get the ID of the record to be deleted
        var modalBody = $('#deleteCareerModal .modal-body');
        $.ajax({
            url: '/delete-career', // Your delete route
            type: 'POST',
            data: { id: id },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                modalBody.empty().html('<div class="alert alert-success">Career Deleted successfully.</div>');
                // Optional: Reload the page after a delay to show the success message for a moment
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(xhr, status, error) {
                modalBody.empty().html('<div class="alert alert-danger">An error occurred while Deleting the Career.</div>');
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    });
});

$(document).ready(function() {
    $('.delete').click(function() {
        var id = $(this).attr('value');
        $('#delete_result_id').val(id);
    });

    $('.delete-confirm').click(function() {
        var id = $('#delete_result_id').val(); // Get the ID of the record to be deleted
        var modalBody = $('#deleteResultModal .modal-body');
        $.ajax({
            url: '/delete-result', // Your delete route
            type: 'POST',
            data: { id: id },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                modalBody.empty().html('<div class="alert alert-success">Results Deleted successfully.</div>');
                // Optional: Reload the page after a delay to show the success message for a moment
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(xhr, status, error) {
                modalBody.empty().html('<div class="alert alert-danger">An error occurred while Deleting the result.</div>');
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    });
});

$(document).ready(function() {
    $('.delete').click(function() {
        var id = $(this).attr('value');
        $('#delete_news_id').val(id);
    });

    $('.delete-confirm').click(function() {
        var id = $('#delete_news_id').val(); // Get the ID of the record to be deleted
        var modalBody = $('#deleteNewsModal .modal-body');
        $.ajax({
            url: '/delete-news', // Your delete route
            type: 'POST',
            data: { id: id },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                modalBody.empty().html('<div class="alert alert-success">News Deleted successfully.</div>');
                // Optional: Reload the page after a delay to show the success message for a moment
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(xhr, status, error) {
                modalBody.empty().html('<div class="alert alert-danger">An error occurred while Deleting the news.</div>');
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    });
});


// Function to handle Events
$('#addEventModal form').submit(function(event) {
    event.preventDefault();
    var formData = new FormData($(this)[0]);
    var modalBody = $('#addEventModal .modal-body');
    $.ajax({
        url: '/add-events',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Update modal body with success message
            modalBody.empty().html('<div class="alert alert-success">Events Added successfully.</div>');
            // Optional: Reload the page after a delay to show the success message for a moment
            setTimeout(function() {
                location.reload();
            }, 2000);
        },
        error: function(xhr, status, error) {
            // Handle error
            modalBody.empty().html('<div class="alert alert-danger">An error occurred while uploading the Events.</div>');
            setTimeout(function() {
                location.reload();
            }, 2000);
        }
    });
})

$(document).ready(function() {
    $('.delete').click(function() {
        var id = $(this).attr('value');
        $('#delete_news_id').val(id);
    });

    $('.delete-confirm').click(function() {
        var id = $('#delete_news_id').val(); // Get the ID of the record to be deleted
        var modalBody = $('#deleteEventModal .modal-body');
        $.ajax({
            url: '/delete-events', // Your delete route
            type: 'POST',
            data: { id: id },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                modalBody.empty().html('<div class="alert alert-success">Events Deleted successfully.</div>');
                // Optional: Reload the page after a delay to show the success message for a moment
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(xhr, status, error) {
                modalBody.empty().html('<div class="alert alert-danger">An error occurred while Deleting the Events.</div>');
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    });
});

document.getElementById('add_exp_btn').addEventListener('click', function() {
    const container = document.getElementById('prev_exp_container');

    // Create a new div to hold the input and remove button
    const inputGroup = document.createElement('div');
    inputGroup.className = 'input-group mb-2';

    // Create the experience input field
    const input = document.createElement('input');
    input.type = 'text';
    input.className = 'form-control prev_exp_input';
    input.name = 'prev_exp[]';
    input.placeholder = 'Previous experience';

    // Create the remove button
    const removeBtn = document.createElement('button');
    removeBtn.type = 'button';
    removeBtn.className = 'btn btn-danger ml-2';
    removeBtn.textContent = 'Remove';

    // Append the input field and remove button to the input group div
    inputGroup.appendChild(input);
    inputGroup.appendChild(removeBtn);

    // Add the new input group to the container
    container.appendChild(inputGroup);

    // Add event listener to remove the input field when the "Remove" button is clicked
    removeBtn.addEventListener('click', function() {
        container.removeChild(inputGroup);
    });
});


$('#addTeacherModal form').submit(function(event) {
    event.preventDefault();
    var formData = new FormData($(this)[0]);
    var modalBody = $('#addTeacherModal .modal-body');
    $.ajax({
        url: '/add-teacher',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Update modal body with success message
            modalBody.empty().html('<div class="alert alert-success">Teacher Data Added successfully.</div>');
            // Optional: Reload the page after a delay to show the success message for a moment
            setTimeout(function() {
                location.reload();
            }, 2000);
        },
        error: function(xhr, status, error) {
            // Handle error
            modalBody.empty().html('<div class="alert alert-danger">An error occurred while Adding the Data.</div>');
            setTimeout(function() {
                location.reload();
            }, 2000);
        }
    });
})