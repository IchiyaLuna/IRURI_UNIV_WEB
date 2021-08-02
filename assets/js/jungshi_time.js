var month = false;

function update_selected_ym() {
    $("#univ-month").val(0);
    $("#univ-month").find("option[value!=-2]").detach();
    $('#univ-month').append("<option value='-1' selected>응시하지 않음</select>")
    $("#univ-month").append(month.filter("." + $(this).val()));

    $("#dept-month").val(0);
    $("#dept-month").find("option[value!=-2]").detach();
    $('#dept-month').append("<option value='-1' selected>응시하지 않음</select>")
    $("#dept-month").append(month.filter("." + $(this).val()));
}

$(function () {
    month = $("#univ-month").find("option[value!=-1]");
    month.detach();

    $("#univ-year").change(update_selected_ym);
    $("#univ-year").trigger("change");

    month = $("#dept-month").find("option[value!=-1]");
    month.detach();

    $("#dept-year").change(update_selected_ym);
    $("#dept-year").trigger("change");
});