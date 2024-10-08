<?php 
    include "db.php";
    if(isset($_REQUEST['MA_NV'])){
        $MA_NV = $_GET['MA_NV'];
        $sql = "DELETE FROM nhanvien where MA_NV = '$MA_NV'";
        if(mysqli_query($conn, $sql)){
            header("location: nhanvien.php");
        }
    }
    $conn->close();
?>