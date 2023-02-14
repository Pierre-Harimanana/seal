<?php
include_once 'connection.php';

$username= htmlspecialchars($_POST['username']);
$password= htmlspecialchars($_POST['motdepass']);
$password2= htmlspecialchars($_POST['confirmPass']);
$date= date('Y-m-d');

$validation='invalide';

if(!empty($username)){
    if(!empty($password)){
        if(!empty($password2)){
            if ($password==$password2) {
                
                $req= $bdd->query('select * from utilisateur where username="'.$username.'"');
                $user= $req->fetch();

                if (!$user) {
                    
                    $insert= $bdd->prepare('insert into utilisateur (username,passwordUser,validate,date_inscription) values (?,?,?,?)');
                    $insert->execute(array($username, $password,$validation,$date));
                    echo "succes";

                }else {
                    echo 'Username already taken';
                }

            }else {
                echo 'different password was entered';
            }
        }else{
            echo 'Confirmation password not filled!';
        }
    }else{
        echo 'Password not filled!';
    }   
}else{
    echo 'Username not filled';
}

?>