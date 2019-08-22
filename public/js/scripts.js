function buildUrl() {
    var url = $('input[name="baseUrl"]').val();
    for (var item in arguments)
        url += arguments[item] + '/';
    return url;
}

function load(tipo) {

    if (tipo == 'open') {
        $('#modal-load').modal('show');
        $('.btn').attr('disable', true);
    }

    if (tipo == 'close') {
        setTimeout(function () {
            $('#modal-load').modal('hide');
            $('.btn').attr('disable', false);
        }, 300);
    }

}
