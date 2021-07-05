var noinput_modal = new bootstrap.Modal(document.getElementById('no-input'))
var resultpage = document.getElementById('input-form')

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
    noinput_modal.hide()
    return false
}