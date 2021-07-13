var noinput_modal = new bootstrap.Modal(document.getElementById('no-input'));
var zeroinput_modal = new bootstrap.Modal(document.getElementById('zero-input'));
var biginput_modal = new bootstrap.Modal(document.getElementById('big-input'));

var resultpage = document.getElementById('input-form');
var calcresult = document.getElementById('subject-form');

function test_calc_input() {

    const names = document.getElementsByName("subject[]");
    const ranks = document.getElementsByName("rank[]");
    const sameranks = document.getElementsByName("samerank[]");
    const studentss = document.getElementsByName("students[]");
    const times = document.getElementsByName("time[]");

    for (var key in names) {

        if (names[key].value === "") {
            noinput_modal.show();
            return false;
        }
        if (ranks[key].value === "") {
            noinput_modal.show();
            return false;
        }
        if (ranks[key].value <= 0) {
            zeroinput_modal.show();
            return false;
        }
        if (sameranks[key].value === "") {
            noinput_modal.show();
            return false;
        }
        if (sameranks[key].value <= 0) {
            zeroinput_modal.show();
            return false;
        }
        if (studentss[key].value === "") {
            noinput_modal.show();
            return false;
        }
        if (studentss[key].value <= 0) {
            zeroinput_modal.show();
            return false;
        }
        if (times[key].value === "") {
            noinput_modal.show();
            return false;
        }
        if (times[key].value <= 0) {
            zeroinput_modal.show();
            return false;
        }

        if (ranks[key].value > studentss[key].value) {
            alert(ranks[key].value);
            alert(typeof ranks[key].value);
            alert(studentss[key].value);
            alert(typeof studentss[key].value);
            biginput_modal.show();
            return false;
        }
    }

    calcresult.submit();
    return false;
}

function test_univ_input() {


}

function test_input() {

    var fk = document.getElementById("first-korean")
    fk = fk.options[fk.selectedIndex].value
    var fm = document.getElementById("first-math")
    fm = fm.options[fm.selectedIndex].value
    var fe = document.getElementById("first-english")
    fe = fe.options[fe.selectedIndex].value
    var fso = document.getElementById("first-social")
    fso = fso.options[fso.selectedIndex].value
    var fsc = document.getElementById("first-science")
    fsc = fsc.options[fsc.selectedIndex].value
    var fh = document.getElementById("first-history")
    fh = fh.options[fh.selectedIndex].value

    var fsum = fk + fm + fe + fso + fsc + fh

    var sk = document.getElementById("second-korean")
    sk = sk.options[sk.selectedIndex].value
    var sm = document.getElementById("second-math")
    sm = sm.options[sm.selectedIndex].value
    var se = document.getElementById("second-english")
    se = se.options[se.selectedIndex].value
    var sso = document.getElementById("second-social")
    sso = sso.options[sso.selectedIndex].value
    var ssc = document.getElementById("second-science")
    ssc = ssc.options[ssc.selectedIndex].value
    var sh = document.getElementById("second-history")
    sh = sh.options[sh.selectedIndex].value

    var ssum = sk + sm + se + sso + ssc + sh

    var tk = document.getElementById("third-korean")
    tk = tk.options[tk.selectedIndex].value
    var tm = document.getElementById("third-math")
    tm = tm.options[tm.selectedIndex].value
    var te = document.getElementById("third-english")
    te = te.options[te.selectedIndex].value
    var tso = document.getElementById("third-social")
    tso = tso.options[tso.selectedIndex].value
    var tsc = document.getElementById("third-science")
    tsc = tsc.options[tsc.selectedIndex].value
    var th = document.getElementById("third-history")
    th = th.options[th.selectedIndex].value

    var tsum = tk + tm + te + tso + tsc + th

    var sum = fsum + ssum + tsum

    if (sum == 0) {
        noinput_modal.show()
    } else {
        resultpage.submit()
    }
    return false
}

function close_modal() {
    noinput_modal.hide();
    zeroinput_modal.hide();
    biginput_modal.hide();
    return false;
}