<?php include "include/test_login.php";?>
<?php include "include/modal.php";?>

<html>
    <head>
        <link rel="stylesheet" href="css/circuit.style.css">
        <link rel="stylesheet" href="css/modal.style.css">
        <title> E- research</title>
        <meta charset="utf-8">
        <script src="js/jquery.js"></script>
    </head>
    <body>

        <div class="header">
            <a href="index.php">
                <h1>La Ligne Scandinave > Circuit</h1>
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
                        <th>circuit</th>
                        <th>Modifier</th>
                    </tr>
                </thead>

                <tbody class="tableau">
                    
                </tbody>

            </table>
        </div>
    
        <div class="ajoutercircuit">
            <button class="btnAjout">Ajouter</button>
        </div>

    <!-- ajout circuit -->
        <div class="modal">
            <div class="contentModal">
                
                <div class="headerModal">
                    <h3>Ajouter nouvel circuit</h3>
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
                        circuit
                        <input type="text" name="circuit" placeholder="enter circuit name">
                    </div>

                    </div>
            
                    <div class="footerModal">
                        <button type="submit" id="ajouterCircuit">Add circuit</button>
                    </div>
                            
                </form>
            </div>
        </div>
    <!-- fin ajout circuit -->

    <!-- modal modification -->
        <div class="modalModif">
            <div class="contentModal">
                
                <div class="headerModal">
                    <h3>Modifier un circuit</h3>
                    <span class="closeBtn">&times;</span>
                </div>
                
                <div class="bodyModal">
                    <div class="error-txt"></div>

                    <div class="input">
                        Client *
                        <input type="text" id="clientModif" name="clientModif" placeholder="enter customer name" autocomplete="off">
                    </div>

                    <div class="input">
                        Circuit *
                        <input type="text" id="circuitModif" name="circuitModif" placeholder="enter circuit name" autocomplete="off">
                    </div>

                    </div>
            
                    <div class="footerModal">
                        <button type="submit" id="modifiercircuit">save circuit</button>
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

<script src="js/circuit.js"></script>
<script src="js/chargementCircuit.js"></script>
<script src="js/modificationCircuit.js"></script>
<script src="js/apps.js"></script>

<script>
    const table= document.querySelector('.tableau');
    searchBar= document.querySelector('#search');

    searchBar.onkeyup=function() {
        let search= searchBar.value;
        var xhr= new XMLHttpRequest();
        xhr.open('POST', 'php/searchcircuit.php', true);
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