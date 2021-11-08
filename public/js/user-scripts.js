$(function () {
    $("#datatable").DataTable({
        pagingType: "numbers",
        lengthMenu: [
            [5, 10, 15, 20, 25, 50, 75, 100, -1],
            [5, 10, 15, 20, 25, 50, 75, 100, "All"]
        ],
        language: {
            url:
                "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json"
        }
    });

    $(".select2-select").select2();

    $('.clear-input-closed').on('click', function () {
        $('.select2-select').val(null).trigger('change');
        $("input:not([name=_method], [name=_token])").val('')
    });

    flatpickr('.flatpickr-date', {
        'locale': 'id',
        dateFormat: 'Y-m-d',
        wrap: true
    });

    $('.show-password').on('click', function () {
        if ($('#password').attr('type') === 'password') {
            $('#password').attr('type', 'text')
            $('#eye').attr('class', 'fas fa-eye-slash')
        } else {
            $('#password').attr('type', 'password')
            $('#eye').attr('class', 'fas fa-eye')
        }
    });
})