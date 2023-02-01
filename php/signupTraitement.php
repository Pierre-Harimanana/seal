<?php
include_once 'connection.php';

$username= htmlspecialchars($_POST['username']);
$password= htmlspecialchars($_POST['motdepass']);
$password2= htmlspecialchars($_POST['confirmPass']);

$validation='invalide';

if(!empty($username)){
    if(!empty($password)){
        if(!empty($password2)){
            if ($password==$password2) {
                
                $req= $bdd->query('select * from utilisateur where username="'.$username.'"');
                $user= $req->fetch();

                if (!$user) {
                    
                    $insert= $bdd->prepare('insert into utilisateur (username,passwordUser,validate) values (?,?,?)');
                    $insert->execute(array($username, $password,$validation));
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