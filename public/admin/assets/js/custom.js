$(document).ready(function () {
    //delete confirmation modal
    $('.confirmDelete').on('click', function (e) {
        let form = $(this).data('form');
        e.preventDefault();
        alertify.confirm('Вы уверены?', function () {
            $('#'+form).submit();
        })
    })

    //init select2
    $('.select2').select2();
})
