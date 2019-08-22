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
                    //openLoad();
                },
                success: function (response) {
                    //closeLoad();
                    toastr[response[0]](response[1]);
                    if (response[0] === 'success') {
                        setTimeout(function () {
                            location.href = buildUrl('');
                        }, 1500);
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
                    //openLoad();
                },
                success: function (response) {
                    //closeLoad();
                    toastr[response[0]](response[1]);
                    if (response[0] === 'success') {
                        setTimeout(function () {
                            location.href = buildUrl('/conta', 'login');
                        }, 1500);
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
