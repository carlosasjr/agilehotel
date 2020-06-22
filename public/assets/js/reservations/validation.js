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

function removeRoom(obj) {
    reset();

    alertify.confirm("Deseja excluir o apartamento selecionado?", function (e) {
        if (e) {
            var id = $(obj).closest('tr').attr('data-id');

            $(obj).closest('tr').remove();
            alertify.success('Registro excluído com sucesso!')
        }
    })
}

function getRoomsAdd() {
    var table = $('#rooms_table');

    var rooms = [0];
    var count = 1;
    table.find('tr').each(function (indice) {
        if ($(this).attr('data-id') > 0) {
            rooms[count] = $(this).attr('data-id');
            count++;
        }
    });

    return rooms;
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function addRoom(rowId) {
    $.ajax({
        url: '/rooms/room/' + rowId,
        type: 'get',
        dataType: 'json',

        success: function (json) {
            if (json.result == true) {
                $(json.data).prependTo($('#rooms_table').find('.j_list'));
            }
        }
    })
}


$(document).ready(function () {
    //  $("#begin").mask("00/00/0000 00:00:00");
    //  $("#end").mask("00/00/0000 00:00:00");

    $('#formRegister').each(function () {
        $(this).validate({
            rules: {

                begin: {
                    required: true,
                },
                end: {
                    required: true,
                },

                person_id: {
                    required: true,
                },


            },

            errorPlacement: function (error, element) {
                error.insertBefore(element);
            },


            highlight: function (element, errorClass, validClass) {
                $(element).addClass(errorClass).removeClass(validClass);
                $(element.form).find("label[for=" + element.id + "]")
                    .addClass(errorClass);
            },

            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass(errorClass).addClass(validClass);
                $(element.form).find("label[for=" + element.id + "]")
                    .removeClass(errorClass);
            },


            submitHandler: function (form) {
                form.submit();
            }
        })

    });


    $('#person_id').select2({
        theme: "classic"
    });


    $('#person_id').select2({
        theme: "classic",
        allowClear: true,
        placeholder: 'Selecione o Hospede',

        ajax: {
            delay: 250,
            type: 'post',
            url: url_base + '/people/search',

            data: function (params) {
                return {
                    q: $.trim(params.term)
                };
            },

            dataType: 'json',
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

    var table = null;

    $('#btnRoom').on('click', function () {
        table = $('#tableListRooms').DataTable({
            destroy: true,
            searching: false,

            "ajax": {
                "url": "/rooms/available",
                "data": {
                    "inicio": $('#begin').val(),
                    "fim": $('#end').val(),
                    'added' : getRoomsAdd()
                }
            },

            'columnDefs': [
                {
                    'targets': 0,
                    'checkboxes': {
                        'selectRow': true
                    }
                }
            ],




            'select': {
                'style': 'multi'
            },
            'order': [[1, 'asc']]
        })
    })

    $('#btnSaveUpdateRooms').on('click', function () {
        var rows_selected = table.column(0).checkboxes.selected();

        // Iterate over all selected checkboxes
        $.each(rows_selected, function (index, rowId) {
            addRoom(rowId);
        });

        $('#modalRooms').modal('hide');
    })


    //deleta registro mestre
    $('.j_delete').on('click', function (e) {
        e.preventDefault();

        reset();

        alertify.confirm("Deseja excluir o registro selecionado?", function (e) {
            if (e) {
                $('#formDelete').submit();
            }

        })
    })


});
