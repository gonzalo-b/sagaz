require('./bootstrap');

$(function () {
    // load the laravel csrf token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // PerfectScrollBar
    isWindows = navigator.platform.indexOf('Win') > -1 ? true : false;
    
    if (isWindows){
        // if we are on windows OS we activate the perfectScrollbar function
        // $('.sidebarwrapper').perfectScrollbar();
        // $('html').addClass('perfect-scrollbar-on');
    } else {
        // $('html').addClass('perfect-scrollbar-off');
    }
});

