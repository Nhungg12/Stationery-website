<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $conn = mysqli_connect('localhost','root','','thongtin_user');
    
    if(!$conn){
        echo "Kết nối thất bại".mysqli_connect_error();
    }
    
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($_POST['email'] == 'admin@gmail.com' && $_POST['password'] == '123'){
            header("Location: admin/admin.php");
        }if(!$email || !$password){
            echo "Vui lòng nhập đầy đủ tài khoản hoặc mật khẩu";
        }else{
            $query = "select email, password from users where email = '$email'";
            $sql = mysqli_query($conn, $query);
            $array = mysqli_fetch_array($sql);
            if($array['email'] != $email){
                echo "Vui lòng nhập đúng tài khoản";
            }else{
                if($array['password'] == $password){
                    header("Location: index.php");
                }else{
                    echo "Vui lòng nhập đúng mật khẩu";
                }
            }
        }
    }

    $conn->close();
?>



</body>
</html>