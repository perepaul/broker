require('./bootstrap');
getModal = (options) => {
    $.ajax({
        url: '/getmodal/' + options.type,
        method: 'get',
        data: options
    })
        .then(
            (response) => {
                $('.modal').remove();
                $('body').append(response.data);
                $('.modal').modal();
                if($('#reason').length)
                {
                    CKEDITOR.replace('reason');
                }
            },
            () => {
                notify('Oops! error occured!', 'error');
            }
        )
}

addElement = (options) => {
    $.ajax({
        url: '/add-element/' + options.type,
        method: 'get',
        data: options
    }).then(
        (response) => {
            $(options.append_to).append(response.data)
        },
        (error) => {
            notify('Oops! error occured!', 'error')
        }
    )
}

removeElement = (element) => {
    $(element).remove();
}

removePlanFeature = (options) => {
    $.ajax({
        url: options.url
    }).then(
        (response) => {
            $(options.element).parentsUntil('.form-group').remove();
        },
        (error) => {
            notify('Oops! error occured!', 'error')

        }
    )
}

deleteUser = (id) => {
    var con = confirm('Are you sure?');
    if(con)
    {
        setTimeout(()=>{
            window.location.href = '/users/delete/'+id;
        },500)
    }
}

cancelTrade = (options) => {
    var con = confirm('Are you sure?');
    if(options.id){
        url = '/users/trades/'+options.id+'/cancel';
    }
    if(options.all == true){
        url = '/users/trades/cancel';
    }
    if(con)
    {
        setTimeout(()=>{
            window.location.href = url;
        },500)
    }
}

$(document).on('click','.payment-method', function(e) {
    if($(this).hasClass('disabled'))
    {
        notify('This method is disabled for now, try another...','error');
    }else if($(this).hasClass('bitcoin-toggle')){
        $('.bank').hide(1800);
        $('.bitcoin').slideToggle(2000);
    }else if($(this).hasClass('bank-toggle')){
        $('.bitcoin').hide(1800);
        $('.bank').slideToggle(2000);
    }
})

$(document).on('click','.copy',function(e) {
    var txt = document.getElementById('copy-txt');
    txt.select();
    txt.setSelectionRange(0, 99999);
    document.execCommand("copy");
    notify("Copied to clipboard",'success');
})

deleteDocument = (url) => {
    var con = confirm('are you sure you want to delete this document?')
    if(con){
        setTimeout(()=>{
            window.location.href = url;
        },500)
    }
}

var emails = $('#email-history').DataTable({
    processing: true,
    responsive:true,
    // "serverSide": true,
    ajax: {
        url: "/admin/mails",
        type: "GET",
        data: function(d){
            d.user_id = $('#user_id').val()
            d.attachment = $('#attachment').val()
            d.start = $('#start').val()
            d.end = $('#end').val()
        }
    },
    columns: [
        { "data": "to", "name":"to" },
        { "data": "subject", "name":"subject" },
        { "data": "message", "name":"message"},
        { "data": "attachment", "name":"attachment" },
        { "data": "date", "name":"date" },
        { "data": "action", "name":"action"},
    ]
})

$(document).on('change','.filter',function(){
    emails.ajax.reload();

});
