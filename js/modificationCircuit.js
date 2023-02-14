$(document).ready(function() {  
    $(document).on('click', 'a[data-role="update"]', function() {
        var id = $(this).data('id');
        var client = $('#' + id).children('td[data-target="nom_client"]').text();
        var circuit = $('#' + id).children('td[data-target="circuit"]').text();
      
        $('.modalModif').show();
        $('#clientModif').val(client);
        $('#circuitModif').val(circuit);

        $('#modifiercircuit').click(function() {
            var nouveauClient= $('#clientModif').val();
            var nouveaucircuit= $('#circuitModif').val();

            $.ajax({
                url: 'php/modifierCircuit.php',
                method: 'post',
                data: {client: nouveauClient, circuit: nouveaucircuit, id: id},
                success: function(response) {
                    if (response!='succes') {
                        $('.error-txt').slideDown(300);
                        $('.error-txt').text(response);
                    } else {
                        $('.modalModif').hide(300); 
                        showMessage();
                        $('#snackbar').text('Modification réussie!');
                    }
                }
            });
        });
    });

    $('.headerModal span').click(function() {
        $('.modalModif').hide(300);
    });

    $('.btnAjout').click(function() {
        $('.modal').show();
    });

    $('.closeBtn').click(function() {
        $('.modal').hide(300);
    });

});
