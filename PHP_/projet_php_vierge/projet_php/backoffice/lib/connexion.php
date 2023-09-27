<?php 

if(!empty($_POST)){

    extract($_POST);

    if(!empty ($email) && !empty($password)){


        $passwordCrypted = md5($password);
        echo $passwordCrypted ;

        $sqlSelectUser = "SELECT * FROM user WHERE email = '$email' AND password = '$passwordCrypted'";
        $tableSelectUser = mysqli_query ($db_connect, $sqlSelectUser);

        $user = mysqli_fetch_assoc($tableSelectUser);
        print_r($user);

        if( mysqli_num_rows( $tableSelectUser) == 1){
            session_start();
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['date_register'] = $user['date_register'];
            $_SESSION['user_statut'] = $user['user_statut'];
            $_SESSION['image'] = $user['user_image'];
            

            if($user['user_statut'] == 0){

                header('Location: ../index.php');

            }else if($user['user_statut'] == 1){
                header('Location: ../index.php');

            }else if($user['user_statut'] == 2){
                header('Location: ./index.php');

            }










        } else {
            $backgroundImage = 'https://source.unsplash.com/oWTW-jNGl9I/600x800';
        }

    }

}

?>