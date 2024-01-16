<?php
session_start();
if (!isset($_SESSION["admin"])) {
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); 
    window.location='dangnhap.php';
    </script>";
}
?>

<?php include("ketnoi.php");
    $user_xoa=$_REQUEST["user"]; //Nhận giá trị user từ link xóa của quantri.php
    $sql="delete from lop where MaLop='".$user_xoa."'";
    $kq=mysqli_query($conn, $sql) or die ("Không thể xuất thông tin".mysqli_error());
    echo ("<script language=javascript>
    {
    alert('Xóa lớp học thành công');
    window.location='lophoc.php';}
    </script> ");
?>
