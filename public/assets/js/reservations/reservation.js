function reset() {
    $("#toggleCSS").attr("href", "alertify.default.css");

    alertify.set({
        labels: {
            ok: "Sim",
            cancel: "Não"
        },
        delay: 5000,
        buttonReverse: true,
        buttonFocus: "ok"
    });
}


function confirmation(obj) {

    reset();


    alertify.confirm("Deseja enviar a confirmação de reserva?", function (e) {
        if (e) {
            let id = $(obj).attr('rel');

            $.ajax({
                url: '/reservations/' + id + '/confirmation',
                type: 'get',
                dataType: 'json',

                success: function (json) {
                    if (json.result == true) {
                        alertify.success('Confirmação de reserva enviada com sucesso!')
                    } else {
                        alertify.error('Falha ao enviar a confirmação de reserva!')
                    }
                }
            })
        }
    })


}
