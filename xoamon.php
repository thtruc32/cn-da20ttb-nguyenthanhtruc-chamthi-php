<?php
session_start();
if (!isset($_SESSION["admin"])) {
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); 
    window.location='dangnhap.php';
    </script>";
}
?>

<?php
include("header.php");
?>

<?php include("ketnoi.php");
    $user_xoa=$_REQUEST["user"]; //Nhận giá trị user từ link xóa của quantri.php
    $sql="delete from monhoc where MaMH='".$user_xoa."'";
    $kq=mysqli_query($conn, $sql) or die ("Không thể xuất thông tin".mysqli_error());
    echo ("<script language=javascript>
    {
    alert('Xóa môn học thành công');
    window.location='monhoc.php';}
    </script> ");
?>

<?php
include("footer.php");
?>