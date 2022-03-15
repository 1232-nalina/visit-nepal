<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPas = $_POST['confirmPassword'];

if($password == $confirmPas) {
    include('connection.php');
    $encryptedPass = md5($password);
    $sql = "INSERT INTO registration values('$name', '$email', '$encryptedPass')";
    if ($conn->query($sql)){
        echo "Signup sucessfully.";
        header('Location:../frontend/html/signup.php');
    }
} else {
    echo "Password and confirm password does not match.";
}

?>