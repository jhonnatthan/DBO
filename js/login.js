$(function () {

    // Login

    $('#frmlog').submit( function () {
        var dados = $(this).serialize();

        sendPost(dados, function (json) {
        });

        return false;

    });

    $('#solicitarAcesso').click( function () {
        $('#modalContent').load('/solicitar-acesso', function () {
            $('#modal').modal('show');
        });
    });

    function sendPost(n,o){$.post("/auth",n,function(n){o(n)},"json").fail(function(n,o,s){console.log(n.responseText)})}

});