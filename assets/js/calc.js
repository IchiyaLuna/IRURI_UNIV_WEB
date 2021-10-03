$(function () {
    $(document).on('click', '.btn-add', function (e) {
        e.preventDefault();

        var DynamicForm = $('.dynamic-input form:first');
        var CurrentEntry = $(this).parents('.input-tr:first');
        var NewEntry = $(this).parents('.input-tr:last').after(CurrentEntry.clone());

        NewEntry.find('input').val('');

        if ($(this).is('.first')) {
            var initspan = $(this).find('td[rowspan]').attr('rowspan')
            $(this).find('td[rowspan]').attr('rowspan', (initspan + 1))
        } else if ($(this).prev().is('.first')) {
            var initspan = $(this).prev().find('td[rowspan]').attr('rowspan')
            $(this).prev().find('td[rowspan]').attr('rowspan', (initspan + 1))
        } else {
            var initspan = $(this).prevUntil('.first').prev().find('td[rowspan]').attr('rowspan')
            $(this).prevUntil('.first').prev().find('td[rowspan]').attr('rowspan', (initspan + 1))
        }

        DynamicForm.find('.input-tr:not(:last) .btn-add').removeClass('btn-add').addClass('btn-remove');
        DynamicForm.find('.input-tr:not(:last) .btn-remove').removeClass('btn-success').addClass('btn-danger');
        DynamicForm.find('.input-tr:not(:last) .btn-remove').html('<i class="fas fa-minus"></i>');
    }).on('click', '.btn-remove', function (e) {
        $(this).parents('.input-tr:first').remove();

        e.preventDefault();
        return false;
    });
});