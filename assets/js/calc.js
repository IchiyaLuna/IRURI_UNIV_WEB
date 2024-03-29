$(function () {
    $(document).on('click', '.btn-add', function (e) {
        e.preventDefault();

        var CurrentEntry = $(this).closest('tr');
        var NewEntry = CurrentEntry.clone();
        NewEntry.find('.align-middle').remove();
        NewEntry.removeClass('first');
        NewEntry.addClass('new-input');
        NewEntry.find('.btn-add').removeClass('btn-add').addClass('btn-remove');
        NewEntry.find('.btn-remove').removeClass('btn-success').addClass('btn-danger');
        NewEntry.find('.btn-remove').html('<i class="fas fa-minus"></i>');
        $(this).closest('tr').after(NewEntry);

        NewEntry.find('input').val('');

        if ($(this).closest('tr').is('.first')) {
            var initspan = $(this).closest('tr').find('td[rowspan]').attr('rowspan');
            $(this).closest('tr').find('td[rowspan]').attr('rowspan', (parseInt(initspan) + 1));
        } else if ($(this).closest('tr').prev().is('.first')) {
            var initspan = $(this).closest('tr').prev().find('td[rowspan]').attr('rowspan');
            $(this).closest('tr').prev().find('td[rowspan]').attr('rowspan', (parseInt(initspan) + 1));
        } else {
            var initspan = $(this).closest('tr').prevUntil('.first').prev().find('td[rowspan]').attr('rowspan');
            $(this).closest('tr').prevUntil('.first').prev().find('td[rowspan]').attr('rowspan', (parseInt(initspan) + 1));
        }
    }).on('click', '.btn-remove', function (e) {
        if ($(this).closest('tr').is('.first')) {
            var initspan = $(this).closest('tr').find('td[rowspan]').attr('rowspan');
            $(this).closest('tr').find('td[rowspan]').attr('rowspan', (parseInt(initspan) - 1));
        } else if ($(this).closest('tr').prev().is('.first')) {
            var initspan = $(this).closest('tr').prev().find('td[rowspan]').attr('rowspan');
            $(this).closest('tr').prev().find('td[rowspan]').attr('rowspan', (parseInt(initspan) - 1));
        } else {
            var initspan = $(this).closest('tr').prevUntil('.first').prev().find('td[rowspan]').attr('rowspan');
            $(this).closest('tr').prevUntil('.first').prev().find('td[rowspan]').attr('rowspan', (parseInt(initspan) - 1));
        }

        $(this).closest('tr').remove();

        e.preventDefault();
        return false;
    });
});

function CalcRefresh() {
    $('input').val('');
    $('tr.new-input').remove();
    $('.align-middle').attr('rowspan', 5);

    return false;
}