$(document).ready(function () {

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

    $('#formRegister').each(function () {
        $(this).validate({
            rules: {

                person_id: {
                    required: true,
                },


            },

            errorPlacement: function(error, element) {
                error.insertBefore(element);
            },


            highlight: function(element, errorClass, validClass) {
                $(element).addClass(errorClass).removeClass(validClass);
                $(element.form).find("label[for=" + element.id + "]")
                    .addClass(errorClass);
            },

            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass(errorClass).addClass(validClass);
                $(element.form).find("label[for=" + element.id + "]")
                    .removeClass(errorClass);
            },



            submitHandler: function (form) {
                form.submit();
            }
        })

    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
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
