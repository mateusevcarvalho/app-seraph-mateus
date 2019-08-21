var colaboradoresJs = (function () {
    "use strict";

    function cadastro() {
        $("#form-cadastro").submit(function (e) {
            e.preventDefault();
            $(this).ajaxSubmit({
                url: buildUrl('/colaboradores', 'cadastrar'),
                type: 'POST',
                dataType: 'json',
                beforeSubmit: function () {
                    //openLoad();
                },
                success: function (response) {
                    //closeLoad();
                    toastr[response[0]](response[1]);
                    if (response[0] === 'success') {
                        setTimeout(function () {
                            location.href = buildUrl('/colaboradores');
                        }, 1500);
                    }
                }
            });
        })
    }

    function editar() {
        $("#form-editar").submit(function (e) {
            e.preventDefault();
            $(this).ajaxSubmit({
                url: buildUrl('/colaboradores', 'editar', $("#colaboradorId").val()),
                type: 'POST',
                dataType: 'json',
                beforeSubmit: function () {
                    //openLoad();
                },
                success: function (response) {
                    //closeLoad();
                    toastr[response[0]](response[1]);
                    if (response[0] === 'success') {
                        setTimeout(function () {
                            location.href = buildUrl('/colaboradores', 'editar', $("#colaboradorId").val());
                        }, 1500);
                    }
                }
            });
        });
    }

    function tags() {
        $("#competencias").tagEditor({
            placeholder: 'Digite e precione enter para adicionar a competência'
        })
    }

    function page() {
        cadastro();
        editar();
        tags();
    }

    function __init() {
        page();
    }

    return {
        init: __init()
    };
})();
