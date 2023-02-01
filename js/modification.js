$(document).ready(function() {  
    $(document).on('click', 'a[data-role="update"]', function() {
        var id = $(this).data('id');
        var client = $('#' + id).children('td[data-target="nom_client"]').text();
        var expert = $('#' + id).children('td[data-target="expert"]').text();
      
        $('.modalModif').show();
        $('#clientModif').val(client);
        $('#expertModif').val(expert);

        $('#modifierExpert').click(function() {
            var nouveauClient= $('#clientModif').val();
            var nouveauExpert= $('#expertModif').val();

            $.ajax({
                url: 'php/modifier.php',
                method: 'post',
                data: {client: nouveauClient, expert: nouveauExpert, id: id},
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
