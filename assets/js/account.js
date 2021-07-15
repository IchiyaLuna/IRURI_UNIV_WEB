var noinput_modal = new bootstrap.Modal(document.getElementById('no-input'));
var noaccount_modal = new bootstrap.Modal(document.getElementById('no-account'));
var logintestpage = document.getElementById('signin-form');

function login_test() {

    const userid = document.getElementById("user-id").value;
    const userpw = document.getElementById("user-pw").value;

    if (userid === "" || userpw === "") {

        noinput_modal.show();
        return false;
    }

    logintestpage.submit();
    return false;
}

function enterkey() {
    if (window.event.keyCode == 13) {
        login_test();
    }
}

function show_modal(type) {

    switch (type) {
        case 'noinput':
            noinput_modal.show();
            break;
        case 'noaccount':
            noaccount_modal.show();
            break;
    }
    return false;
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
    return false;
}