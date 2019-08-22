var Conta = (function () {
    "use strict";

    function login() {
        $("#form-login").submit(function (e) {
            e.preventDefault();
            $(this).ajaxSubmit({
                url: buildUrl('/conta', 'login'),
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
                            location.href = buildUrl('');
                        }, 1500);
                    } else {
                        load('close');
                    }
                }
            });
        });
    }

    function cadastrar() {
        $("#form-cadastro").submit(function (e) {
            e.preventDefault();
            $(this).ajaxSubmit({
                url: buildUrl('/conta', 'cadastro'),
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
                            location.href = buildUrl('/conta', 'login');
                        }, 1500);
                    } else {
                        load('close');
                    }
                }
            });
        });
    }

    function page() {
        cadastrar();
        login();
    }

    function __init() {
        page();
    }

    return {
        init: __init()
    };
})();
