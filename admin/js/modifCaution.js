$(document).ready(function() {
    $(document).on('click', 'a[data-role="update"]', function() {
        $('.modalModification').show();

        var id = $(this).data('id');
        var client= $('#' + id).children('td[data-target="nom_client"]').text();
        var mae= $('#' + id).children('td[data-target="maersk"]').text();
        var msc= $('#' + id).children('td[data-target="msc"]').text();
        var cma= $('#' + id).children('td[data-target="cmacgm"]').text();

        $('#client').val(client);
        $('#maersk').val(mae);
        $('#msc').val(msc);
        $('#cmacgm').val(cma);

        $('#modifierCaution').click(function() {
            var nclient= $('#client').val();
            var nmae= $('#maersk').val();
            var nmsc= $('#msc').val();
            var ncma= $('#cmacgm').val();

            $.ajax({
                url: 'php/modificationCaution.php',
                method: 'post',
                data: {client: nclient, maersk: nmae, msc: nmsc, cmacgm: ncma, id: id },
                success: function(reponse) {
                    if (reponse=='succes') {
                        $('.modalModification').hide(300);
                        showMessage();
                        $('#snackbar').text('Caution modifiée avec succès');
                    } else {
                        $('.error-txt').text(reponse);
                        $('.error-txt').show();
                    }
                }
            });
        });
    });
});
