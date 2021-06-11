<?php

if(isset($_POST['registerbtn'])){
    include_once "dbconnection.php";

    $Fisrtname = $_POST['fname'];
    $Lastname= $_POST['lname'];
    $email = $_POST['email'];
    $password= $_POST['yourpassword'];
    $active = True;

    echo $Firstname." $Lastname." ".$email." ".$password;

    $hashed_password = password_hash($password,PASSWORD_DEFAULT);

    $create_user_query = "INSERT INTO `people`(`Firstname`,`lastname`,`email`,`password`,`active`)
            VALUES ('$Firstname','$Lastname','$email','$hashed_password','$active')";

    $execution = mysqli_query($connection,$create_user_query);

    if($execution){
        header("location:../login.php");
    }else{
        echo "Error => ".mysqli_error($connection);
    }


}else{
    header("location:../register.php");
}
?>
