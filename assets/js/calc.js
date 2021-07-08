$(function () {
    $(document).on('click', '.btn-add', function (e) {
        e.preventDefault();

        var DynamicForm = $('.dynamic-input form:first');
        var CurrentEntry = $(this).parents('.subject-input:first');
        var NewEntry = $(CurrentEntry.clone()).appendTo(DynamicForm);

        NewEntry.find('input').val('');
        DynamicForm.find('.subject-input:not(:last) .btn-add').removeClass('btn-add').addClass('btn-remove');
        DynamicForm.find('.subject-input:not(:last) .btn-remove').removeClass('btn-outline-success').addClass('btn-outline-danger');
        DynamicForm.find('.subject-input:not(:last) .btn-remove').html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function (e) {
        $(this).parents('.subject-input:first').remove();

        e.preventDefault();
        return false;
    });
});