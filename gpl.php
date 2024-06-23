<?php

$email = $_POST['email'];
$pass = $_POST['pass'];

$con = mysqli_connect('localhost','root','','gpm');

if ($con->connect_error) {
    header("Location : form.html");
}
else {

    if (isset($_POST['login'])) {

        $sql = "SELECT * FROM `gpl` WHERE email='$email' AND pass ='$pass'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) == 1) {

            $_SESSION['email'] = $email;
            header('Location: gpdash.php');
            exit;
        } else {
            header('Location: form.html');
            exit;
        }
    }
}
?>