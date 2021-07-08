$(function () {
    $(document).on('click', '.btn-add', function (e) {
        e.preventDefault();

        var DynamicForm = $('.dynamic-input form:first');
        var CurrentEntry = $(this).parents('.subject-input:first');
        var NewEntry = $(CurrentEntry.clone()).appendTo(DynamicForm);

        NewEntry.find('input').val('');
        DynamicForm.find('.subject-input:not(:last) .btn-add').removeClass('btn-add').addClass('btn-remove');
<<<<<<< HEAD
        DynamicForm.find('.subject-input:not(:last) .btn-remove').removeClass('btn-outline-success').addClass('btn-outline-danger');
        DynamicForm.find('.subject-input:not(:last) .btn-remove').html('<i class="fas fa-minus"></i>');
    }).on('click', '.btn-add', function (e) {

        $(this).parents('.subject-input:first').remove();

        e.preventDefault();
        return false;
    });

});
=======
        DynamicForm.find('.subject-input:not(:last) .btn-remove').removeClass('btn-success').addClass('btn-danger');
        DynamicForm.find('.subject-input:not(:last) .btn-remove').html('<i class="fas fa-minus"></i>');
    })

})
>>>>>>> parent of 42a2822 (Update calc.js)
