var dept = false;

function update_selected() {
    $("#month").val(0);
    $("#month").find("option[value!=-2]").detach();
    $('#month').append("<option value='-1' selected>세부 분류를 선택해주세요</select>")
    $("#month").append(dept.filter("." + $(this).val()));
}

$(function () {
    dept = $("#month").find("option[value!=-1]");
    dept.detach();

    $("#year").change(update_selected);
    $("#year").trigger("change");
});