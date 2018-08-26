// Custom JS for basic sERP functions

// The element containing scroll button
scrollElem = 'div#scroll-top';

// Hook to Document ready function
$(document).ready(function (){
    // Enumerate window scroll here
    $(document).scroll(function () {
        if ($(window).scrollTop() > 20){
            $(scrollElem).fadeIn();
        }
        else {
            $(scrollElem).fadeOut();
        }
    });

    // Add the scroll functionality to the button
    $('div#scroll-top').on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 300);
    });
});

// Functions intended to show toasts
function showToast(toastType, toastMsg){
    switch (toastType) {
        case 'error':
            $.toast({
                heading: 'Error',
                text: toastMsg,
                position: 'top-right',
                loaderBg:'#ff6849',
                icon: 'error',
                hideAfter: 3500
            });
            break;
        case 'success':
            $.toast({
                heading: 'Success',
                text: toastMsg,
                position: 'top-right',
                loaderBg:'#ff6849',
                icon: 'success',
                hideAfter: 3500,
                stack: 6
            });
            break;
        case 'warning':
            $.toast({
                heading: 'Warning',
                text: toastMsg,
                position: 'top-right',
                loaderBg:'#ff6849',
                icon: 'warning',
                hideAfter: 3500,
                stack: 6
            });
            break;
        case 'info':
            $.toast({
                heading: 'Info',
                text: toastMsg,
                position: 'top-right',
                loaderBg:'#ff6849',
                icon: 'info',
                hideAfter: 3000,
                stack: 6
            });
            break;
        default:
            break;
    }
}



