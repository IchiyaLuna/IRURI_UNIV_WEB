var month = false;

function update_selected_ym() {
    $("#month").val(0);
    $("#month").find("option[value!=-2]").detach();
    $('#month').append("<option value='-1' selected>응시하지 않음</select>")
    $("#month").append(month.filter("." + $(this).val()));
}

$(function () {
    month = $("#month").find("option[value!=-1]");
    month.detach();

    $("#year").change(update_selected_ym);
    $("#year").trigger("change");
});