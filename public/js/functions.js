function notification(title,description,type){
    var icon = 'mdi-alert';
    if(type == 'success'){
        icon = 'mdi-checkbox-marked-circle';
    } else if(type == 'warning'){
        icon = 'mdi-alert';
    } else if(type == 'info'){
        icon = 'mdi-information-outline';
    } else if(type == 'danger'){
        icon = 'mdi-close-circle';
    }
    $.notify({
        // options
        icon: 'mdi '+icon,
        title: title,
        message: description
    }, {
        placement: {
            align: "right",
            from: "top"
        },
        showProgressbar: true,
        timer: 1000,
        delay:1000,
        // settings
        type: type,
        template: '<div data-notify="container" class=" bootstrap-notify alert " role="alert">' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar bg-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<div class="media "> <div class="avatar m-r-10 avatar-sm"> <div class="avatar-title bg-{0} rounded-circle"><span data-notify="icon"></span></div> </div>' +
            '<div class="media-body"><div class="font-secondary" data-notify="title">{1}</div> ' +
            '<span class="opacity-75" data-notify="message">{2}</span></div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            ' <button type="button" aria-hidden="true" class="close" data-notify="dismiss"><span>x</span></button></div></div>'

    });
}
