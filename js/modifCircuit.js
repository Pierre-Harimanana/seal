$(document).ready(function() {  
    $(document).on('click', 'a[data-role="update"]', function() {
        var id = $(this).data('id');
        var client = $('#' + id).children('td[data-target="nom_client"]').text();
        var expert = $('#' + id).children('td[data-target="circuit"]').text();
      
        $('#myModal2').modal('show');
        $('#clientModif').val(client);
        $('#circuitModif').val(expert);

        $('#saveCircuit').click(function() {
            var nouveauClient= $('#clientModif').val();
            var nouveauExpert= $('#circuitModif').val();

            $.ajax({
                url: 'php/modifCircuit.php',
                method: 'post',
                data: {client: nouveauClient, circuit: nouveauExpert, id: id},
                success: function(response) {
                    if (response!='succes') {
                        $('.messageBox').slideDown(300);
                        $('.error-txt').text(response);
                    } else {
                        $('#myModal2').modal('hide'); 
                        showMessage();
                        $('#snackbar').text('Modification réussie!');
                    }
                }
            });
        });
    });
});
