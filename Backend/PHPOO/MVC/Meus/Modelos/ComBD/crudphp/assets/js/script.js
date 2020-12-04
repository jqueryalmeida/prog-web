//Rotina para impedir mais de um clique em formulários
function submitLock() {
    if (!statSend) {
        statSend = true;
        return true;
    } else {
        alert('Você já clicou! Aguarde por favor.');
        return false;
    }
}

//Rotina para tratar mensagem de erro
$(document).ready(function() {

    $('#error_messager_btn').click(function() {
        $('#error_messager').fadeOut('slow');
        return false;
    });
});
