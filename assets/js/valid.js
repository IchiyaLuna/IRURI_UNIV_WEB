function test_calc_input() {

    const fnames = document.getElementsByName("fsubject[]");
    const franks = document.getElementsByName("frank[]");
    const fsameranks = document.getElementsByName("fsamerank[]");
    const fstudentss = document.getElementsByName("fstudents[]");
    const ftimes = document.getElementsByName("ftime[]");

    const snames = document.getElementsByName("ssubject[]");
    const sranks = document.getElementsByName("srank[]");
    const ssameranks = document.getElementsByName("ssamerank[]");
    const sstudentss = document.getElementsByName("sstudents[]");
    const stimes = document.getElementsByName("stime[]");

    const tnames = document.getElementsByName("tsubject[]");
    const tranks = document.getElementsByName("trank[]");
    const tsameranks = document.getElementsByName("tsamerank[]");
    const tstudentss = document.getElementsByName("tstudents[]");
    const ttimes = document.getElementsByName("ttime[]");

    var noinput_modal = new bootstrap.Modal(document.getElementById('no-input'));
    var zeroinput_modal = new bootstrap.Modal(document.getElementById('zero-input'));
    var biginput_modal = new bootstrap.Modal(document.getElementById('big-input'));

    var calcresult = document.getElementById('subject-form');

    var fcount = fnames.length;

    if (fcount != franks.length || fcount < fsameranks.length || fcount < fstudentss.length || fcount < ftimes.length) {
        noinput_modal.show();
    }

    var scount = snames.length;

    if (scount != sranks.length || scount < ssameranks.length || scount < sstudentss.length || scount < stimes.length) {
        noinput_modal.show();
    }

    var tcount = tnames.length;

    if (tcount != tranks.length || tcount < tsameranks.length || tcount < tstudentss.length || tcount < ttimes.length) {
        noinput_modal.show();
    }

    if (fcount === 0 && scount === 0 && tcount === 0) {
        noinput_modal.show();
    }


    for (var key in names) {

        if (names[key].value === "") {
            noinput_modal.show();
            return false;
        }
        if (ranks[key].value === "") {
            noinput_modal.show();
            return false;
        }
        if (parseInt(ranks[key].value) <= 0) {
            zeroinput_modal.show();
            return false;
        }
        if (sameranks[key].value === "") {
            noinput_modal.show();
            return false;
        }
        if (parseInt(sameranks[key].value) <= 0) {
            zeroinput_modal.show();
            return false;
        }
        if (studentss[key].value === "") {
            noinput_modal.show();
            return false;
        }
        if (parseInt(studentss[key].value) <= 0) {
            zeroinput_modal.show();
            return false;
        }
        if (times[key].value === "") {
            noinput_modal.show();
            return false;
        }
        if (parseInt(times[key].value) <= 0) {
            zeroinput_modal.show();
            return false;
        }

        if (parseInt(ranks[key].value) > parseInt(studentss[key].value)) {
            biginput_modal.show();
            return false;
        }
    }

    calcresult.submit();
    return false;
}

function test_univ_input() {
    const first = document.getElementById("univ-first").value;
    const second = document.getElementById("univ-second").value;
    const third = document.getElementById("univ-third").value;

    var year = document.getElementById("univ-year");
    year = year.options[year.selectedIndex].value;
    var month = document.getElementById("univ-month");
    month = month.options[month.selectedIndex].value;

    var korean_type = document.getElementById("univ-korean-type");
    korean_type = korean_type.options[korean_type.selectedIndex].value;
    var math_type = document.getElementById("univ-math-type");
    math_type = math_type.options[math_type.selectedIndex].value;
    var english_type = document.getElementById("univ-english-type");
    english_type = english_type.options[english_type.selectedIndex].value;
    var selectA_type = document.getElementById("univ-selectA-type");
    selectA_type = selectA_type.options[selectA_type.selectedIndex].value;
    var selectB_type = document.getElementById("univ-selectB-type");
    selectB_type = selectB_type.options[selectB_type.selectedIndex].value;
    var foreign_type = document.getElementById("univ-foreignlang-type");
    foreign_type = foreign_type.options[foreign_type.selectedIndex].value;

    const korean_score = document.getElementById("univ-korean-score").value;
    const math_score = document.getElementById("univ-math-score").value;
    const english_score = document.getElementById("univ-english-score").value;
    const history_score = document.getElementById("univ-history-score").value;
    const selectA_score = document.getElementById("univ-selectA-score").value;
    const selectB_score = document.getElementById("univ-selectB-score").value;
    const foreign_score = document.getElementById("univ-foreignlang-score").value;

    var noinput_modal = new bootstrap.Modal(document.getElementById('no-input'));
    var zeroinput_modal = new bootstrap.Modal(document.getElementById('zero-input'));
    var biginput_modal = new bootstrap.Modal(document.getElementById('big-input'));
    var sushierror_modal = new bootstrap.Modal(document.getElementById('sushi-error'));

    var univresultpage = document.getElementById('univ-input-form');

    if (first === "" || second === "" || third === "") {
        noinput_modal.show();
        return false;
    }

    const sushi_sum = first + second + third;

    if (sushi_sum == 0) {
        if (year == "-1" && month == "-1") {
            noinput_modal.show();
            return false;
        }
    }

    if (parseFloat(first) != 0) {
        if (parseFloat(first) < 1 || parseFloat(first) > 9) {
            sushierror_modal.show();
            return false;
        }
    }

    if (parseFloat(second) != 0) {
        if (parseFloat(second) < 1 || parseFloat(second) > 9) {
            sushierror_modal.show();
            return false;
        }
    }

    if (parseFloat(third) != 0) {
        if (parseFloat(third) < 1 || parseFloat(third) > 9) {
            sushierror_modal.show();
            return false;
        }
    }

    if (year != "-1" && month != "-1") {
        if (korean_type != "na" && korean_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(korean_score) < 0 || parseInt(korean_score) > 100) {
            biginput_modal.show();
            return false;
        }

        if (math_type != "na" && math_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(math_score) < 0 || parseInt(math_score) > 100) {
            biginput_modal.show();
            return false;
        }

        if (english_type != "na" && english_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(english_score) < 0 || parseInt(english_score) > 100) {
            biginput_modal.show();
            return false;
        }

        if (history_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(history_score) < 0 || parseInt(history_score) > 50) {
            biginput_modal.show();
            return false;
        }

        if (selectA_type != "na" && selectA_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(selectA_score) < 0 || parseInt(selectA_score) > 50) {
            biginput_modal.show();
            return false;
        }

        if (selectB_type != "na" && selectB_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(selectB_score) < 0 || parseInt(selectB_score) > 50) {
            biginput_modal.show();
            return false;
        }

        if (foreign_type != "na" && foreign_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(foreign_score) < 0 || parseInt(foreign_score) > 50) {
            biginput_modal.show();
            return false;
        }
    }
    univresultpage.submit();
}

function test_dept_input() {
    const first = document.getElementById("dept-first").value;
    const second = document.getElementById("dept-second").value;
    const third = document.getElementById("dept-third").value;

    var year = document.getElementById("dept-year");
    year = year.options[year.selectedIndex].value;
    var month = document.getElementById("dept-month");
    month = month.options[month.selectedIndex].value;

    var korean_type = document.getElementById("dept-korean-type");
    korean_type = korean_type.options[korean_type.selectedIndex].value;
    var math_type = document.getElementById("dept-math-type");
    math_type = math_type.options[math_type.selectedIndex].value;
    var english_type = document.getElementById("dept-english-type");
    english_type = english_type.options[english_type.selectedIndex].value;
    var selectA_type = document.getElementById("dept-selectA-type");
    selectA_type = selectA_type.options[selectA_type.selectedIndex].value;
    var selectB_type = document.getElementById("dept-selectB-type");
    selectB_type = selectB_type.options[selectB_type.selectedIndex].value;
    var foreign_type = document.getElementById("dept-foreignlang-type");
    foreign_type = foreign_type.options[foreign_type.selectedIndex].value;

    const korean_score = document.getElementById("dept-korean-score").value;
    const math_score = document.getElementById("dept-math-score").value;
    const english_score = document.getElementById("dept-english-score").value;
    const history_score = document.getElementById("dept-history-score").value;
    const selectA_score = document.getElementById("dept-selectA-score").value;
    const selectB_score = document.getElementById("dept-selectB-score").value;
    const foreign_score = document.getElementById("dept-foreignlang-score").value;

    var noinput_modal = new bootstrap.Modal(document.getElementById('no-input'));
    var zeroinput_modal = new bootstrap.Modal(document.getElementById('zero-input'));
    var biginput_modal = new bootstrap.Modal(document.getElementById('big-input'));
    var sushierror_modal = new bootstrap.Modal(document.getElementById('sushi-error'));
    var nodept_modal = new bootstrap.Modal(document.getElementById('no-dept'));

    var deptresultpage = document.getElementById('dept-input-form');

    if (first === "" || second === "" || third === "") {
        noinput_modal.show();
        return false;
    }

    const sushi_sum = first + second + third;

    if (sushi_sum == 0) {
        if (year == "-1" && month == "-1") {
            noinput_modal.show();
            return false;
        }
    }

    if (parseFloat(first) != 0) {
        if (parseFloat(first) < 1 || parseFloat(first) > 9) {
            sushierror_modal.show();
            return false;
        }
    }

    if (parseFloat(second) != 0) {
        if (parseFloat(second) < 1 || parseFloat(second) > 9) {
            sushierror_modal.show();
            return false;
        }
    }

    if (parseFloat(third) != 0) {
        if (parseFloat(third) < 1 || parseFloat(third) > 9) {
            sushierror_modal.show();
            return false;
        }
    }

    var dept = document.getElementById("category");
    dept = dept.options[dept.selectedIndex].value;

    if (dept == -1) {
        nodept_modal.show();
        return false;
    }

    if (year != "-1" && month != "-1") {
        if (korean_type != "na" && korean_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(korean_score) < 0 || parseInt(korean_score) > 100) {
            biginput_modal.show();
            return false;
        }

        if (math_type != "na" && math_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(math_score) < 0 || parseInt(math_score) > 100) {
            biginput_modal.show();
            return false;
        }

        if (english_type != "na" && english_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(english_score) < 0 || parseInt(english_score) > 100) {
            biginput_modal.show();
            return false;
        }

        if (history_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(history_score) < 0 || parseInt(history_score) > 50) {
            biginput_modal.show();
            return false;
        }

        if (selectA_type != "na" && selectA_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(selectA_score) < 0 || parseInt(selectA_score) > 50) {
            biginput_modal.show();
            return false;
        }

        if (selectB_type != "na" && selectB_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(selectB_score) < 0 || parseInt(selectB_score) > 50) {
            biginput_modal.show();
            return false;
        }

        if (foreign_type != "na" && foreign_score === "") {
            zeroinput_modal.show();
            return false;
        }
        if (parseInt(foreign_score) < 0 || parseInt(foreign_score) > 50) {
            biginput_modal.show();
            return false;
        }
    }
    deptresultpage.submit();
}