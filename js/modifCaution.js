$(document).ready(function() {  
    $(document).on('click', 'a[data-role="update"]', function() {
        var id = $(this).data('id');
        var var1 = $('#' + id).children('td[data-target="nom_client"]').text();
        var var2 = $('#' + id).children('td[data-target="maersk"]').text();
        var var3 = $('#' + id).children('td[data-target="msc"]').text();
        var var4 = $('#' + id).children('td[data-target="cmacgm"]').text();
    
        $('#myModal2').modal('show');

        $('#clientVal').val(var1);
        $('#maerskVal').val(var2);
        $('#mscVal').val(var3);
        $('#cmacgmVal').val(var4);

        $('#saveCaution').click(function() {
            var nval1= $('#clientVal').val();
            var nval2= $('#maerskVal').val();
            var nval3= $('#mscVal').val();
            var nval4= $('#cmacgmVal').val();

            $.ajax({
                url: 'php/modifCaution.php',
                method: 'post',
                data: {client: nval1, maersk: nval2,msc:nval3, cmacgm:nval4, id: id},
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