var noinput_modal = new bootstrap.Modal(document.getElementById('no-input'));
var noaccount_modal = new bootstrap.Modal(document.getElementById('no-account'));

function show_modal(type) {

    switch (type) {
        case 'noinput':
            noinput_modal.show();
            break;
        case 'noaccount':
            noaccount_modal.show();
            break;
    }
}

function hide_modal(type) {

    switch (type) {
        case 'noinput':
            noinput_modal.hide();
            break;
        case 'noaccount':
            noaccount_modal.hide();
            break;
    }
}