<?php
include("headerad.php");
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

<form enctype="multipart/form-data" action="xulythemct.php" name="xlythemct" method="post">

    <div class="text">
        <h2>
            <ion-icon name="add-circle"></ion-icon>
            THÊM CHẤM THI
        </h2>
    </div>

    <div class="khung">
        <div class="them1">
            <div class="them1a">
                <span>Mã chấm thi</span>
                <input type="text" name="MaCT" readonly />
            </div>
            <div class="them1a">
                <span>Tên lớp</span>
                <select name="lop">
                    <?php
                $sql = "SELECT MaLop, TenLop FROM lop";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm lớp: " . mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($kq)) {
                    $MaLop = $row['MaLop'];
                    $TenLop = $row['TenLop'];
                    echo "<option value=\"$MaLop\">$TenLop</option>";
                    }
                ?>
                </select>
            </div>
            <div class="them1a">
                <span>Niên khóa</span>
                <select name="nienkhoa">
                    <?php
                $sql2 = "SELECT MaNK, TenNK FROM nienkhoa";
                $kq2 = mysqli_query($conn, $sql2) or die("Không thể thêm niên khóa: " . mysqli_error($conn));
                while ($row2 = mysqli_fetch_assoc($kq2)) {
                    $MaNK = $row2['MaNK'];
                    $TenNK = $row2['TenNK'];
                    echo "<option value=\"$MaNK\">$TenNK</option>";
                    }
                ?>
                </select>
            </div>

        </div>
        <div class="them2">
            <div class="them2a">
                <span>Tên môn</span>
                <select name="monhoc">
                    <?php
                $sql3 = "SELECT MaMH, TenMH FROM monhoc";
                $kq3 = mysqli_query($conn, $sql3) or die("Không thể thêm môn học: " . mysqli_error($conn));
                while ($row3 = mysqli_fetch_assoc($kq3)) {
                    $MaMH = $row3['MaMH'];
                    $TenMH = $row3['TenMH'];
                    echo "<option value=\"$MaMH\">$TenMH</option>";
                    }
                ?>
                </select>
            </div>
            <div class="them2a">
                <span>Hình thức</span>
                <select name="hinhthuc">
                    <?php
                $sql4 = "SELECT MaHT, TenHT FROM hinhthuc";
                $kq4 = mysqli_query($conn, $sql4) or die("Không thể thêm hình thức: " . mysqli_error($conn));
                while ($row4 = mysqli_fetch_assoc($kq4)) {
                    $MaHT = $row4['MaHT'];
                    $TenHT = $row4['TenHT'];
                    echo "<option value=\"$MaHT\">$TenHT</option>";
                    }
                ?>
                </select>
            </div>
            <div class="them2a">
                <span>Học kỳ</span>
                <select name="hocky">
                    <?php
                $sql5 = "SELECT MaHK, TenHK FROM hocky";
                $kq5 = mysqli_query($conn, $sql5) or die("Không thể thêm học kỳ: " . mysqli_error($conn));
                while ($row5 = mysqli_fetch_assoc($kq5)) {
                    $MaHK = $row5['MaHK'];
                    $TenHK = $row5['TenHK'];
                    echo "<option value=\"$MaHK\">$TenHK</option>";
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="them3">
            <div class="them3a">
                <span>Ngày nhận</span>
                <input type="date" name="Ngaynhan" />
            </div>
            <div class="them3a">
                <span>Ngày kết thúc</span>
                <input type="date" name="Ngaytra" />
            </div>
            <div class="them3a">
                <span>Số lượng</span>
                <input type="text" name="SLBai" />
            </div>
        </div>
        <div class="luubtn">
            <input type="submit" name="luu" value="Lưu" />
        </div>
    </div>
  
</form>
<style>
            .admin_tab :nth-child(6){
                background-color: #3593D8;
                color: white;
            }
            </style>
<?php
include("footer.php");
?>