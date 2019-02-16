var cadastroPaciente = {

    combocidades: function () {
        $('#estadoEndereco').change( function(e) {
            idEstado = $('#estadoEndereco option:selected').val();
            e.preventDefault();

           $.ajax ({
               url: '/login/buscarCidade',
               type: 'POST',
               async: true,
               data: {'idEstado': idEstado},
               success: function(data) {
                   alert(data);
                   console.log(data);
                   // $('#cidadeEndereco').append('<option value="'+data.idCidade+'">'+data.nomeCidade+'</option>');
               },
               error: function () {
                   alert("Ocorreu um erro");
               }
            });
        });
    }
};

// Shorthand for $( document ).ready()
$(function() {
    $('#cadastro').css({'color' : 'blue'});
    cadastroPaciente.combocidades();
});
