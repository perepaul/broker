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
