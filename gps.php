<?php

$enroll = $_POST['enroll'];
$pass = $_POST['pass'];

$con = mysqli_connect('localhost:3308','root','','gpm');

if ($con->connect_error) {
    header("Location : index.html");
}
else {

    if (isset($_POST['login'])) {

        $sql = "SELECT * FROM `gps` WHERE enroll='$enroll' AND pass ='$pass'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) == 1) {

            $_SESSION['enroll'] = $enroll;
            header('Location: form.html');
            exit;
        } else {
            header('Location: index.html');
            exit;
        }
    }
}
?>