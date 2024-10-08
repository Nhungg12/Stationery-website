
<?php
    $conn = mysqli_connect('localhost','root','','thongtin_user');

    if (!$conn) {
        die("Kết nối thất bại: " .mysqli_connect_error());
    }else{
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];


        $sql = "INSERT INTO users (full_name, email, phone, password) VALUES ('$full_name', '$email', '$phone', '$password')";

        if ($conn->query($sql) === TRUE) {
            header("Location: login.php");
            exit();
        }
    }

    $conn->close();
?>