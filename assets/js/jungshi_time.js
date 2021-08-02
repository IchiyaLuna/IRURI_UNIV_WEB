var umonth = false;
var dmonth = false;

function update_selected_ym_u() {
    $("#univ-month").val(0);
    $("#univ-month").find("option[value!=-2]").detach();
    $('#univ-month').append("<option value='-1' selected>응시하지 않음</select>")
    $("#univ-month").append(umonth.filter("." + $(this).val()));
}

function update_selected_ym_d() {
    $("#dept-month").val(0);
    $("#dept-month").find("option[value!=-2]").detach();
    $('#dept-month').append("<option value='-1' selected>응시하지 않음</select>")
    $("#dept-month").append(dmonth.filter("." + $(this).val()));
}

$(function () {
    umonth = $("#univ-month").find("option[value!=-1]");
    umonth.detach();

    $("#univ-year").change(update_selected_ym_u);
    $("#univ-year").trigger("change");

    dmonth = $("#dept-month").find("option[value!=-1]");
    dmonth.detach();

    $("#dept-year").change(update_selected_ym_d);
    $("#dept-year").trigger("change");
});