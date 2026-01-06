/**
 * Menu JavaScript
 *
 * Handles mobile menu toggle, dropdown menus, and footer accordion
 * Ported from quote-rocket-us
 */

$(document).ready(function() {

    // Mobile Menu Toggle Button
    $('#mobMenuBtn').click(function(e) {
        e.preventDefault();
        $('.mobilemenu').slideToggle();
        $('.dl-trigger').toggleClass('dl-active');
    });

    // Mobile Dropdown Menu Items
    $('.menuOpen').click(function(e) {
        e.preventDefault();

        // Close all dropdowns and remove 'mnutog' class from all menu items
        $('.dropdown-mobile').slideUp();
        $('.menuOpen').removeClass('mnutog');

        // Check if the clicked dropdown is already open
        if (!$(this).next('.dropdown-mobile').is(':visible')) {
            // If not open, open it and add the 'mnutog' class
            $(this).next('.dropdown-mobile').slideDown();
            $(this).addClass('mnutog');
        }
    });

    // Footer Accordion (Mobile Only)
    if ($(window).innerWidth() <= 767) {
        $('.colapse-hd').click(function(e) {
            $(this).next('.info-sec-links-list').slideToggle();
            $(this).toggleClass('active');
        });
    }

});
