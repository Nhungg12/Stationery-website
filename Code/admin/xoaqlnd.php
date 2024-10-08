<?php 
     $conn = mysqli_connect('localhost','root','','thongtin_user');
    
     if(!$conn){
         echo "Kết nối thất bại".mysqli_connect_error();
     }
    if(isset($_REQUEST['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM users where id = '$id'";
        if(mysqli_query($conn, $sql)){
            header("location: quanlynguoidung.php");

        }
    }
    $conn->close();
?>