/*---LEFT BAR ACCORDION----*/
$(function() {
    var defaults = {
        classParent : 'dcjq-parent',         //Class of parent menu item
        classActive : 'active',              // Class of active parent link
        classArrow  : 'dcjq-icon',           // Class of span tag for parent arrows
        classCount  : 'dcjq-count',          // Class of span tag containing count (if addCount: true)
        classExpand : 'dcjq-current-parent', // Class of parent li tag for auto-expand option
        eventType   : 'click',               // Event for activating menu - options are "click" or "hover"
        hoverDelay  : 300,                   // Hover delay for hoverIntent plugin
        menuClose   : false,                  // If set "true" with event "hover" menu will close fully when mouseout
        autoClose   : false,                  // If set to "true" only one sub-menu open at any time
        autoExpand  : false,                 // If set to "true" all sub-menus of parent tags with class 'classExpand' will expand on page load
        speed       : 'slow',                // Speed of animation
        saveState   : false,                  // Save menu state using cookies
        disableLink : false,                  // Disable all links of parent items
        showCount   : false,                  // If "true" will add a count of the number of links under each parent menu item
        cookie      : 'dcjq-accordion'       // Sets the cookie name for saving menu state - each menu instance on a single page requires a unique cookie name.
    };
    $('#nav-accordion').dcAccordion(defaults);
    var url = window.location;
    var a = $('.sidebar-menu a[href="' + url + '"]');
    if(a.parent("li").parent("ul").prev("a")[0]){
        a.parent("li").parent("ul").prev("a")[0].click();
        a.parent("li").addClass('active');
    }
    else{
        a.addClass('active');
    }
});
//
// var Script = function () {
//
//
// //    sidebar dropdown menu auto scrolling
//
//     jQuery('#sidebar .sub-menu > a').click(function () {
//         var o = ($(this).offset());
//         diff = 250 - o.top;
//         if(diff>0)
//             $("#sidebar").scrollTo("-="+Math.abs(diff),500);
//         else
//             $("#sidebar").scrollTo("+="+Math.abs(diff),500);
//     });
//
//
//
// //    sidebar toggle
//
//     $(function() {
//         function responsiveView() {
//             var wSize = $(window).width();
//             if (wSize <= 768) {
//                 $('#container').addClass('sidebar-close');
//                 $('#sidebar > ul').hide();
//             }
//
//             if (wSize > 768) {
//                 $('#container').removeClass('sidebar-close');
//                 $('#sidebar > ul').show();
//             }
//         }
//         $(window).on('load', responsiveView);
//         $(window).on('resize', responsiveView);
//     });
//
//     $('.fa-bars').click(function () {
//         if ($('#sidebar > ul').is(":visible") === true) {
//             $('#main-content').css({
//                 'margin-left': '0px'
//             });
//             $('#sidebar').css({
//                 'margin-left': '-210px'
//             });
//             $('#sidebar > ul').hide();
//             $("#container").addClass("sidebar-closed");
//         } else {
//             $('#main-content').css({
//                 'margin-left': '210px'
//             });
//             $('#sidebar > ul').show();
//             $('#sidebar').css({
//                 'margin-left': '0'
//             });
//             $("#container").removeClass("sidebar-closed");
//         }
//     });
//
//     // custom scrollbar
//     $("#sidebar").niceScroll({
//         styler: "fb",
//         cursorcolor: "#4ECDC4",
//         cursorwidth: '3',
//         cursorborderradius: '10px',
//         background: '#404040',
//         spacebarenabled: false,
//         cursorborder: ''
//     });
//
//     $("html").niceScroll({
//         styler: "fb",
//         cursorcolor: "#4ECDC4",
//         cursorwidth: '6',
//         cursorborderradius: '10px',
//         background: '#404040',
//         spacebarenabled: false,
//         cursorborder: '',
//         zindex: '1000'
//     });
// // custom scrollbar
//     // $("#sidebar").niceScroll({styler:"fb",cursorcolor:"#4ECDC4", cursorwidth: '3', cursorborderradius: '10px', background: '#404040', spacebarenabled:false, cursorborder: ''});
//     //
//     // $("html").niceScroll({styler:"fb",cursorcolor:"#4ECDC4", cursorwidth: '6', cursorborderradius: '10px', background: '#404040', spacebarenabled:false,  cursorborder: '', zindex: '1000'});
//
// // widget tools
//
//     jQuery('.panel .tools .fa-chevron-down').click(function () {
//         var el = jQuery(this).parents(".panel").children(".panel-body");
//         if (jQuery(this).hasClass("fa-chevron-down")) {
//             jQuery(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
//             el.slideUp(200);
//         } else {
//             jQuery(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
//             el.slideDown(200);
//         }
//     });
//
//     jQuery('.panel .tools .fa-times').click(function () {
//         jQuery(this).parents(".panel").parent().remove();
//     });
//
//
// //    tool tips
//
//     $('.tooltips').tooltip();
//
// //    popovers
//
//     $('.popovers').popover();
//
//
//
// // custom bar chart
//
//     if ($(".custom-bar-chart")) {
//         $(".bar").each(function () {
//             var i = $(this).find(".value").html();
//             $(this).find(".value").html("");
//             $(this).find(".value").animate({
//                 height: i
//             }, 2000)
//         })
//     }
//
//
// }();
