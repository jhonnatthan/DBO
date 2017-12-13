$(function () {

    $('#frmlog').submit( function () {
        var dados = $(this).serialize();

        sendPost('/',dados, function (json) {
        });

    });

    $('#solicitarAcesso').click( function () {
        $('#modalContent').load('/solicitar-acesso', function () {
            $('#modal').modal('show');
        });
    });

    $('#enviaSolicita').click( function () {
        $('#frmSolicitaAcesso').submit();
    });

    $(document).on('submit', 'form', function () {
        return false;
    });

    function sendPost(p,n,o){$.post(p,n,function(n){o(n)},"json").fail(function(n,o,s){console.log(n.responseText)})}

});