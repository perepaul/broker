window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    // require('bootstrap');
    require('bootstrap-toggle')
} catch (e) { }

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.iziToast = require('izitoast')
require('datatables')
require('datatables.net-bs4')
require('datatables.net-responsive')
require('datatables.net-responsive-bs4')

require('select2');
require('bootstrap-datepicker')


    if($('#message').length){
        CKEDITOR.replace('message');
    }
    $('.select2').select2();
    $('#end').datepicker({
        container:$('.end-date-container'),
        format:'yyyy-mm-dd',
        autoclose:true
    });

    $('#start').datepicker({
        container:$('.start-date-container'),
        format:'yyyy-mm-dd',
        autoclose:true
    });

iziToast.settings({
    timeout: 10000,
    resetOnHover: true,
    icon: 'material-icons',
    transitionIn: 'flipInX',
    transitionOut: 'flipOutX',
    position:'bottomCenter',
    onOpening: function () {
        console.log('callback abriu!');
    },
    onClosing: function () {
        console.log("callback fechou!");
    }
});

window.notify = (msg, type) => {
    var t = 'error';
    switch (type) {
        case 'error':
            iziToast.error({
                message: msg
            })
            break;
        case 'success':
            iziToast.success({
                message: msg
            })
            break;
        case 'warning':
            iziToast.warning({
                message: msg
            })
            break;
    }
}

$('.password-toggle').click(function(){
    $('.password-toggle').each(function(index){
        var element = $(this).find('i');
        if($(element).hasClass('la-eye')){
            $(this).siblings('input').attr('type','text')
            $(element).removeClass('la-eye').addClass('la-eye-slash')
        }else{
            $(this).siblings('input').attr('type','password')
            $(element).removeClass('la-eye-slash').addClass('la-eye')
        }
    })
})

$('.dt').dataTable({
    responsive:true
});
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
