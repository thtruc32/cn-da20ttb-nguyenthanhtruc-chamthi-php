<?php
include("headerad.php");

include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT ct.MaCT, gv.MaGV, gv.TenGV, ht.TenHT, ht.Buoi, ht.Gia, ct.SLbai, pc.Trangthai
FROM chamthi ct
LEFT JOIN phancong pc ON ct.MaCT = pc.MaCT
LEFT JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
LEFT JOIN giangvien gv ON pc.MaGV = gv.MaGV
WHERE ct.MaCT = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể sửa thông tin phân công " . mysqli_error($conn));
$row = mysqli_fetch_array($kq);

?>

<style>
.text {
    display: flex;
    flex-direction: column;
    margin-top: 40px;
    gap: 15px;
}

.text h2 {
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
    width: 90%;
    margin: 7rem auto;
    gap: 20px;
    padding: 50px;
    border-radius: 5px;
}

.them1,
.them2,
.them3 {

    flex: 1;
    display: flex;
    color: #3593D8;
    font-weight: 700;
    align-items: center;
    gap: 20px;
}

.them1a,
.them2a,
.them3a {
    display: flex;
    flex-direction: column;
    padding: 5px 10px;
    align-items: flex-start;
    gap: 5px;

}

.them1a > input, .them2a > input, .them3a > input {
    height: 30px;
    border: 1px solid #3593D8;
    border-radius: 3px;
    width: 200px;
}

.luubtn {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px 20px;
}

.luubtn input {
    padding: 5px 10px;
    color: white;
    background-color: #3593D8;
    border: 1px solid white;
    font-weight: bold;
    border-radius: 3px;
}

.them1a select,
.them2a select,
.them3a select {
    width: 200px;
    height: 30px;
    border: 1px solid #3593D8;
    border-radius: 3px;
}
</style>

<form enctype="multipart/form-data" action="thuchiensuapc.php" name="thuchiensuapc" method="post">

    <div class="text">
        <h2>
            <ion-icon name="add-circle"></ion-icon>
            SỬA CHẤM THI
        </h2>
    </div>

    <div class="khung">
        <div class="them1">
            <div class="them1a">
                <span>Mã chấm thi</span>
                <input type="text" readonly name="MaCT" value="<?php echo $row["MaCT"]; ?>"/>
            </div>
            <div class="them1a">
                <span>Tên giảng viên</span>
                <select name="MaGV">
                        <?php
                            $sql = "SELECT * FROM giangvien"; // Retrieve all records from the 'giangvien' table
                            $kq = mysqli_query($conn, $sql) or die("Không thể thêm giảng viên: " . mysqli_error($conn));
                            
                            while ($gv_row = mysqli_fetch_assoc($kq)) {
                                $MaGV = $gv_row['MaGV'];
                                $TenGV = $gv_row['TenGV'];
                                $selected = ($MaGV == $row["MaGV"]) ? "selected" : "";
                                echo "<option value=\"$MaGV\"$selected>$TenGV</option>";
                            }
                            ?>
                    </select>
            </div>
            <div class="them1a">
                <span>Tên hình thức</span>
                <input type="text" readonly name="TenHT" value="<?php echo $row["TenHT"]; ?>"/>
            </div>

        </div>
        <div class="them2">
            <div class="them2a">
                <span>Buổi</span>
                <input type="text" readonly name="Buoi" value="<?php echo $row["Buoi"]; ?>"/>
            </div>
            <div class="them2a">
                <span>Đơn giá</span>
                <input type="text" readonly name="Gia" value="<?php echo $row["Gia"]; ?>"/>
            </div>
            <div class="them2a">
                <span>Số lượng</span>
                <input type="text" readonly name="SLbai" value="<?php echo $row["SLbai"]; ?>"/>
            </div>
            <div class="them2a">
                <span>Trạng thái</span>
                <select name="Trangthai">
                    <option value="Đã duyệt" <?php echo ($row["Trangthai"] == "Đã duyệt") ? "selected" : ""; ?>>Đã duyệt</option>
                    <option value="Chờ duyệt" <?php echo ($row["Trangthai"] == "Chờ duyệt") ? "selected" : ""; ?>>Chờ duyệt</option>
                    <option value="Đang chấm" <?php echo ($row["Trangthai"] == "Đang chấm") ? "selected" : ""; ?>>Đang chấm</option>
                    <option value="Đã chấm" <?php echo ($row["Trangthai"] == "Đã chấm") ? "selected" : ""; ?>>Đã chấm</option>
                </select>
            </div>
        </div>

        <div class="luubtn">
            <input type="submit" name="luu" value="Lưu" />
        </div>
    </div>
  
</form>
<style>
            .admin_tab :nth-child(7){
                background-color: #3593D8;
                color: white;
            }
            </style>
<?php
include("footer.php");
?>