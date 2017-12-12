$(function () {

    // Login

    $('#frmlog').submit( function () {
        var dados = $(this).serialize();

        sendPost(dados, function (json) {
        });

        return false;

    });

    function sendPost(n,o){$.post("/",n,function(n){o(n)},"json").fail(function(n,o,s){console.log(n.responseText)})}

});