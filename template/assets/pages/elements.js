"use strict";
$(document).ready(function(){
    $(".md-form-control").each(function() {
        $(this).parent().append('<span class="md-line"></span>');
    });
    $(".md-form-control").change(function() {
        if ($(this).val() == "") {
            $(this).removeClass("md-valid");
        } else {
            $(this).addClass("md-valid");
        }
    });

});

// materia form
$('.md-form-control').on('blur', function() {
    if ($(this).val().length > 0) {
        $(this).addClass("md-valid");
    } else {
        $(this).removeClass("md-valid");
    }
});
$('.md-form-control').on('focus', function() {
    $(this).addClass("md-valid");
});
$('.md-form-control').each(function() {
    if ($(this).val().length > 0) {
        $(this).addClass("md-valid");
    } else {
        $(this).removeClass("md-valid");
    }
});
