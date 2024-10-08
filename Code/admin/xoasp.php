<?php 
    include "db.php";
    if(isset($_REQUEST['MA_SP'])){
        $MA_SP = $_GET['MA_SP'];
        $sql = "DELETE FROM sanpham where MA_SP = '$MA_SP'";
        if(mysqli_query($conn, $sql)){
            header("location: admin.php");
        }
    }
    $conn->close();
?>