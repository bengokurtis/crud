<?php

if  (isset($_POST['create'])){
    include "../crud/db_conn.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $name = validate($_POST['name']);
    $email = validate($_POST['email']);


    $user_data = 'name=' .$name. '&email=' .$email;
    


    if(empty($name)){
        header("Location: ../crud/index.php?error=Name is required&$user_data");
    }
    else if(empty($email)){
        header("Location: ../crud/index.php?error=Email is required&$user_data");
    }
    else {
        $sql = "INSERT INTO users(name, email) VALUES ('$name', '$email')";
        $result = mysqli_query($conn, $sql);

        if ($result){
            echo "Success";
        } else{
            header("Location: ../index.php?error=unknown error occurred&$user_data");
        }
    }
}