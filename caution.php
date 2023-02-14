<?php include "include/test_login.php";?>
<?php include "include/modal.php";?>

<html>
    <head>
        <title> E- research</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/caution.style.css">
        <link rel="stylesheet" href="css/modal.style.css">
        <script src="js/jquery.js"></script>
    </head>
    <body>

        <div class="header">
            <a href="index.php">
                <h1>La Ligne Scandinave > Caution</h1>
            </a> 

            <div class="right">
                <input id="search" class="inputHeader" type="text" placeholder="you can search here">
                <button class="inputHeader" id="logoutModal">Logout</button>
            </div>
        </div>

        <div class="content">
            <table>
                <tr class="headingTable">
                    <th>Client</th>
                    <th>Maersk</th>
                    <th>msc</th>
                    <th>Cmacgm</th>
                    <th>Modifier</th>
                </tr>
                
                <tbody class="contentTable">
                    <!-- <tr>
                        <td>pierre</td>
                        <td>pierre</td>
                        <td>pierre</td>
                        <td>pierre</td>
                        <td> 
                            <button class="boutonModifier">modifier</button> 
                            <button class="boutonSupprimer">supprimer</button> 
                        </td>
                    </tr> -->
                </tbody>

            </table>
        </div>

        <div class="ajouterExpert">
            <button class="btnAjout">Ajouter</button>
        </div>

        <!-- success message -->
        <div id="snackbar"></div>
        <!-- fin success message -->

        <footer>
            <p>Copyright&copy; 2023</p>
        </footer>
    </body>
</html>

<!-- ajout caution -->
<div class="modal">
    <div class="contentModal">
        <div class="headerModal">
            <h3>Ajouter nouvelle caution</h3>
            <span class="closeBtn">&times;</span>
        </div>
        
        <div class="bodyModal">
            <div class="error-txt">Message d'erreur</div>

            <form action="#" autocomplete="off">
                <div class="input">
                    <label for="">Client</label> 
                    <input type="text" name="client" placeholder="enter customer name">
                </div>

                <div class="input">
                    <label for="">Expert</label>
                    <input type="text" name="maersk" placeholder="enter Maersk">
                </div>

                <div class="input">
                    <label for="">Msc</label>
                    <input type="text" name="msc" placeholder="enter msc">
                </div>

                <div class="input">
                    <label for="">Cmacgm</label>
                    <input type="text" name="cmacgm" placeholder="enter cmacgm">
                </div>

                </div>
                
                <div class="footerModal">
                    <button type="submit" id="ajouterCaution">Add caution</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- fin ajout caution -->

<!-- modification caution -->
<div class="modalModification">
    <div class="contentModal">
        <div class="headerModal">
            <h3>modification cuation</h3>
            <span class="closeBtn">&times;</span>
        </div>
        
        <div class="bodyModal">
            <div class="error-txt">Message d'erreur</div>

            <form action="#" autocomplete="off">
                <div class="input">
                    <label for="">Client</label> 
                    <input type="text" id="client" placeholder="enter customer name">
                </div>

                <div class="input">
                    <label for="">Expert</label>
                    <input type="text" id="maersk" placeholder="enter Maersk">
                </div>

                <div class="input">
                    <label for="">Msc</label>
                    <input type="text" id="msc" placeholder="enter msc">
                </div>

                <div class="input">
                    <label for="">Cmacgm</label>
                    <input type="text" id="cmacgm" placeholder="enter cmacgm">
                </div>

                </div>
                
                <div class="footerModal">
                    <button type="submit" id="modifierCaution">Save caution</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- fin modification caution -->

<script src="js/modifCaution.js"></script>
<script src="js/caution.js"></script>
<script src="js/apps.js"></script>
<script src="js/chargementCaution.js"></script>

<script>
    $(document).ready(function() {  
        $('.btnAjout').click(function() {
            $('.modal').show(); 
            console.log('show modal');
        });

        $('.closeBtn').click(function() {
            $('.modal').hide(300); 
            $('.modalModification').hide(300); 
            console.log('hide modal');
        });
    });
</script>

<script>
    const table= document.querySelector('.contentTable');
    searchBar= document.querySelector('#search');

    searchBar.onkeyup=function() {
        let search= searchBar.value;
        var xhr= new XMLHttpRequest();
        xhr.open('POST', 'php/searchCaution.php', true);
        xhr.onload=function() {
            if (xhr.readyState==XMLHttpRequest.DONE) {
                if (xhr.status==200) {
                    let data = xhr.response;
                    // console.log(data);
                    table.innerHTML=data;
                }   
            }
        }
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("searchTerm=" + search);
    }
</script>