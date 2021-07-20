var dept = false;

function update_selected() {
    $("#detail").val(0);
    $("#detail").find("option[value!=-2]").detach();
    $('#detail').append("<option value='-1' selected>세부 분류를 선택해주세요</select>")
    $("#detail").append(dept.filter("." + $(this).val()));
}

$(function () {
    dept = $("#detail").find("option[value!=-1]");
    dept.detach();

    $("#category").change(update_selected);
    $("#category").trigger("change");
});