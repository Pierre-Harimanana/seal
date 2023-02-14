<?php include "include/test_login.php";?>
<?php include "include/modal.php";?>

<html>
    <head>
        <link rel="stylesheet" href="css/expert.style.css">
        <link rel="stylesheet" href="css/modal.style.css">
        <title> E- research</title>
        <meta charset="utf-8">
        <script src="js/jquery.js"></script>
    </head>
    <body>

        <div class="header">
            <a href="index.php">
                <h1>La Ligne Scandinave > Expert</h1>
            </a> 

            <div class="right">
                <input id="search" class="inputHeader" type="text" placeholder="you can search here">
                <button class="inputHeader"  id="logoutModal">Logout</button>
            </div>
        </div>

        <div class="content" style="overflow-x:auto;">
            <table>
                <thead>
                    <tr class="headingTable">
                        <th>Client</th>
                        <th>Expert</th>
                        <th>Modifier</th>
                    </tr>
                </thead>

                <tbody class="tableau">
                    
                </tbody>

            </table>
        </div>
    
        <div class="ajouterExpert">
            <button class="btnAjout">Ajouter</button>
        </div>

    <!-- ajout expert -->
        <div class="modal">
            <div class="contentModal">
                
                <div class="headerModal">
                    <h3>Ajouter nouvel expert</h3>
                    <span class="closeBtn">&times;</span>
                </div>
                
                <div class="bodyModal">
                    <div class="error-txt"></div>

                <form action="#" autocomplete="off">
                    <div class="input">
                        Client
                        <input type="text" name="client" placeholder="enter customer name">
                    </div>

                    <div class="input">
                        Expert
                        <input type="text" name="expert" placeholder="enter expert name">
                    </div>

                    </div>
            
                    <div class="footerModal">
                        <button type="submit" id="ajouterExpert">Add expert</button>
                    </div>
                            
                </form>
            </div>
        </div>
    <!-- fin ajout expert -->

    <!-- modal modification -->
        <div class="modalModif">
            <div class="contentModal">
                
                <div class="headerModal">
                    <h3>Modifier un expert</h3>
                    <span class="closeBtn">&times;</span>
                </div>
                
                <div class="bodyModal">
                    <div class="error-txt"></div>

                    <div class="input">
                        Client *
                        <input type="text" id="clientModif" name="clientModif" placeholder="enter customer name" autocomplete="off">
                    </div>

                    <div class="input">
                        Expert *
                        <input type="text" id="expertModif" name="expertModif" placeholder="enter expert name" autocomplete="off">
                    </div>

                    </div>
            
                    <div class="footerModal">
                        <button type="submit" id="modifierExpert">save expert</button>
                    </div>
            </div>
        </div>
    <!-- fin modal modification -->

        <!-- success message -->
        <div id="snackbar"></div>
        <!-- fin success message -->

        <footer>
            <p>Copyright&copy; 2023</p>
        </footer>

    </body>
</html>

<script src="js/expert.js"></script>
<script src="js/chargement.js"></script>
<script src="js/modification.js"></script>
<script src="js/apps.js"></script>

<script>
    const table= document.querySelector('.tableau');
    searchBar= document.querySelector('#search');

    searchBar.onkeyup=function() {
        let search= searchBar.value;
        var xhr= new XMLHttpRequest();
        xhr.open('POST', 'php/searchExpert.php', true);
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