/**
 * FAQ Accordion Functionality
 *
 * Handles expand/collapse behavior for FAQ accordions
 * Ported from quote-rocket-us
 */

$(document).ready(function() {
    // Accordion JS
    $(".acdn-heading").click(function() {
        var questionDiv = $(this);
        var answerDiv = $(this).next('.acdn-content');
        var index = $('.acdn-heading').index(this);

        // Close other open accordions
        $('.acdn-content').each(function(idx, ansDiv) {
            if (index != idx && $(ansDiv).is(':visible')) {
                $(ansDiv).slideUp(500, function() {
                    $(ansDiv).prev('.acdn-heading').removeClass('accordion-open');
                    $(ansDiv).prev('.acdn-heading').addClass('accordion-close');
                });
            }
        });

        // Toggle current accordion
        if (answerDiv.is(':visible')) {
            answerDiv.stop().slideUp(500, function() {
                questionDiv.removeClass('accordion-open');
                questionDiv.addClass('accordion-close');
            });
        } else {
            questionDiv.removeClass('accordion-close');
            questionDiv.addClass('accordion-open');
            answerDiv.stop().slideDown(500);
        }
    });
});
