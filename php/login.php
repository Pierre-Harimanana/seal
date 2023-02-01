<?php
    session_start();
    include_once 'connection.php';

    $username= htmlspecialchars($_POST['username']);
    $password= htmlspecialchars($_POST['motdepass']);

    if(!empty($username)){
        if(!empty($password)){
            $req= $bdd->query('select * from utilisateur where username="'.$username.'" and passwordUser="'.$password.'"');
            $user= $req->fetch();

            if ($user) {
        
                if ($user['validate']=="valide") {
                    $_SESSION['login']= $user['username'];
                    echo 'succes';
                }else {
                    echo 'acces denied / call administrator';
                }

            }else {
                echo "Unknown user";
            }
    
        }else{
            echo 'Password not filled!';
        }   
    }else{
        echo 'Username not filled';
    }
?>