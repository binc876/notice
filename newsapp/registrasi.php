<?php
if(isset($_POST['register_submit'])){

    $connect = mysqli_connect('localhost','root','paswerd','bootstrap')
    or die(mysqli_connect_error());

    $nama_lengkap = $_POST['full-name'];
    $email = $_POST['your-email'];
    $phone = $_POST['phone-number'];

    $sql = mysqli_query($connect, "INSERT INTO user (nama_lengkap,email,no_telp) VALUES ('$nama_lengkap','$email','$phonenum')");

    header('location:indexregister.php');
}
?>