<?php
    session_start();
    // include_once '../include/connection.php';

    $username= htmlspecialchars($_POST['username']);
    $password= htmlspecialchars($_POST['motdepass']);

    if(!empty($username)){
        if(!empty($password)){
            // $req= $bdd->query('select * from utilisateur where username="'.$username.'" and passwordUser="'.$password.'"');
            // $user= $req->fetch();

            if ($username=='admin' && $password=='admin') {
    
                $_SESSION['admin']= $username;
                echo 'succes';

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
