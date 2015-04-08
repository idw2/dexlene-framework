/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    $('form[name=pForm]').submit(function (event) {
        event.preventDefault();
        var params = $(this).serialize();
        var request_uri = $("#request_uri").val();
        $("#error").html("Connect...");
        $.ajax({
            type: 'post',
            data: params,
            url: request_uri + 'ajax/test-connect',
            success: function (data) {
                if (data['outcome'] == true) {
                    window.location.href = request_uri + 'app/username-config'
                } else {
                    $("#error").html(data['message'])
                }
            }
        });
    });

    $('form[name=uForm]').submit(function (event) {
        event.preventDefault();
        var params = $(this).serialize();
        var request_uri = $("#request_uri").val();    
        $("#error").html("Loading...");
        $.ajax({
            type: 'post',
            data: params,
            url: request_uri + 'ajax/username-config',
            success: function (data) {
                if (data['outcome'] == true) {
                    console.log(data);
                    window.location.href = request_uri + 'app/sucess-config'
                } else {
                    $("#error").html(data['message'])
                }
            }
        });
    });
    
    $('form[name=rForm]').submit(function (event) {
        event.preventDefault();
        var params = $(this).serialize();
        var request_uri = $("#request_uri").val();
        
        $("#error").html("Loading...");
        $.ajax({
            type: 'post',
            data: params,
            url: request_uri + 'ajax/sem-conexao',
            success: function (data) {
                console.log(data);
                window.location.href = request_uri + 'app/database-config'
            }
        });
    });
});
