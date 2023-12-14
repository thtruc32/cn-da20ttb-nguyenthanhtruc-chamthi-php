<?php
session_start();
if (!isset($_SESSION["giangvien"])) {
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); 
    window.location='dangnhap.php';
    </script>";
}
?>

<?php
include("headergv.php")
?>

<div class="w3-content w3-display-container" style="max-width:1100px">
    <img class="mySlides" src="./hinh/anh1.jpg" style="width:100%">
    <img class="mySlides" src="./hinh/anh2.jpg"  style="width:100%">
    <img class="mySlides" src="./hinh/anh3.jpg" style="width:100%">
    <img class="mySlides" src="./hinh/anh4.jpg" style="width:100%">

</div>
<script>
    var myIndex = 0;
    carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 9000);
    }
</script>
<?php
include("footerr.php")
?>