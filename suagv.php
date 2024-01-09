<?php
include("headerad.php");

include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM giangvien WHERE MaGV = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể sửa thông tin giảng viên " . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<style>
.text{
    display: flex;
    flex-direction: column;
    margin-top: 40px;
    gap: 15px;
}

.text h2{
background-color: #3593D8;
width: 100%;
padding: 10px 30px;
display: flex;
align-items: center;
color: white;
font-weight: bold;
}

.khung {
    background: #F5F5F5;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 2px solid #F5F5F5;
    width: 80%;
    margin: 7rem auto;
    gap: 20px;
    padding: 50px;
    border-radius: 5px;
}

.them1 {

flex: 1;
display: flex;
color:#3593D8;
font-weight: 700;
align-items: center;
gap: 50px;
}

.them1a{
    display: flex;
    flex-direction: column;
    padding: 5px 10px;
    align-items: flex-start;
    gap: 5px;

}

.them2{

flex: 1;
display: flex;
color:#3593D8;
font-weight: 700;
align-items: center;
gap: 50px;
}

.them2a{
    display: flex;
    flex-direction: column;
    padding: 5px 10px;
    align-items: flex-start;
    gap: 5px;

}

input[type="text" i] {
height: 30px;
border: 1px solid #3593D8;
border-radius: 3px;
width: 200px;
}

.luubtn{
display: flex;
flex-direction: column;
align-items: center;
padding: 10px 20px;
}

.luubtn input{
padding: 5px 10px;
color: white;
background-color: #3593D8;
border: 1px solid white;
font-weight: bold;
border-radius: 3px;
}

.them1a select{
    width: 200px;
    height: 30px;
    border: 1px solid #3593D8;
    
}
</style>

<form enctype="multipart/form-data" action="thuchiensuagv.php" name="thuchiensuagv" method="post">
    <div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
        SỬA GIẢNG VIÊN
        </h2>
    </div>
    <div class="khung">
        <div class="them1">
            <div class="them1a">
                <span>Mã giảng viên</span>
                <input type="text " readonly name="MaGV" value="<?php echo $row["MaGV"]; ?>"/>
            </div>
            <div class="them1a">
                <span>Bộ môn</span>
                <select name="MaBM">
                        <?php
                $sq2 = "SELECT MaBM, TenBM FROM bomon";
                $kq2 = mysqli_query($conn, $sq2) or die("Không thể thêm bộ môn: " . mysqli_error($conn));
                while ($row2 = mysqli_fetch_assoc($kq2)) {
                    $MaBM = $row2['MaBM'];
                    $TenBM = $row2['TenBM'];
                    $selected = ($MaBM == $row2["MaBM"]) ? "selected" : "";
                    echo "<option value=\"$MaBM\">$TenBM</option>";
                    }
                ?>
                    </select>
            </div>
            <div class="them1a">
                <span>Tên giảng viên</span>
                <input type="text" name="TenGV" value="<?php echo $row["TenGV"]; ?>"/>
            </div>
        </div>
        <div class="them2">
            <div class="them2a">
                <span>Số điện thoại</span>
                <input type="text" name="SdtGV" value="<?php echo $row["SdtGV"]; ?>"/>
            </div>
            <div class="them2a">
                <span>Email</span>
                <input type="text" name="Email" value="<?php echo $row["Email"]; ?>"/>
            </div>
            <div class="them2a">
                <span>Mật khẩu</span>
                <input type="text" name="Matkhau" value="<?php echo $row["Matkhau"]; ?>"/>
            </div>
        </div>

        <div class="luubtn">
            <input type="submit" name="luu" value="Lưu"/>
        </div>
    </div>
</form>
    
<style>
            .admin_tab >:nth-child(2){
                background-color: #3593D8;
                color: white;
            }
            </style>


<?php
include("footer.php")
?>