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
                    load('open');
                },
                success: function (response) {
                    toastr[response[0]](response[1]);
                    if (response[0] === 'success') {
                        setTimeout(function () {
                            load('close');
                            location.href = buildUrl('/colaboradores');
                        }, 1500);
                    }
                }
            });
        });
    }

    function editar() {
        $("#form-editar").submit(function (e) {
            e.preventDefault();
            $(this).ajaxSubmit({
                url: buildUrl('/colaboradores', 'editar', $("#colaboradorId").val()),
                type: 'POST',
                dataType: 'json',
                beforeSubmit: function () {
                    load('open');
                },
                success: function (response) {
                    toastr[response[0]](response[1]);
                    if (response[0] === 'success') {
                        setTimeout(function () {
                            load('close');
                            location.href = buildUrl('/colaboradores', 'editar', $("#colaboradorId").val());
                        }, 1500);
                    }
                }
            });
        });
    }

    function deletar() {
        $("#form-deletar").submit(function (e) {
            e.preventDefault();
            load('open');
            const id = $("#id-delete").val();
            $.get(buildUrl('/colaboradores', 'deletar', id), function (response) {
                toastr[response[0]](response[1]);
                if (response[0] === 'success') {
                    setTimeout(function () {
                        load('close');
                        location.href = buildUrl('/colaboradores');
                    }, 1500);
                }
            }, 'json')
        });

        $(document).on('click', '.deletar', function (e) {
            e.preventDefault();
            const id = $(this).data('id');
            const nome = $(this).data('nome');

            $("#body-modal").html(nome);
            $("#id-delete").val(id);
            $("#modalDeletar").modal('show');
        });
    }

    function tags() {
        $(".tags-competencia").tagEditor({
            placeholder: 'Digite e precione enter para adicionar a competência ...'
        })
    }

    function buscarCep() {
        $("#cep").on('change', function (e) {
            $.get('https://viacep.com.br/ws/' + $(this).val() + '/json/', function (response) {
                $("input[name*='logradouro']").val(response.logradouro);
                $("input[name*='bairro']").val(response.bairro);
                $("input[name*='cidade']").val(response.localidade);
                $("input[name*='estado']").val(response.uf);

                $("input[name*='numero']").focus();
            }, 'json');
        });
    }

    function page() {
        buscarCep();
        cadastro();
        deletar();
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
