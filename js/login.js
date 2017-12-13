$(function () {

    $('#frmlog').submit( function () {
        var dados = $(this).serialize();

        sendPost(dados, function (json) {
        });

        return false;

    });

    $('#solicitarAcesso').click( function () {

        swal({
            title: 'Solicitar acesso',
            input: 'email',
            confirmButtonText: 'Enviar <i class="fa fa-send"></i>',
            showLoaderOnConfirm: true,
            preConfirm: function (email) {
                return new Promise(function (resolve) {
                    setTimeout(function () {
                        if(email == "adm@adm.com") {
                            swal.showValidationError('This email is already taken.');
                        }
                        resolve();
                    }, 2000);
                });
            },
            allowOutsideClick: false
        }).then( function (result) {
            if(result.value) {
                swal({
                    type: 'success',
                    title: 'Ajax request finished',
                    html: 'Submitted e-mail: ' + result.value
                })
            }
        });

    });

    function sendPost(n,o){$.post("/auth",n,function(n){o(n)},"json").fail(function(n,o,s){console.log(n.responseText)})}

});