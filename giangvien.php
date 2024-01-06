<?php
include("headerad.php");
?>
<div class="h2text">
    <h2>
        <ion-icon name="people"></ion-icon>
        QUẢN LÝ GIẢNG VIÊN
    </h2>
</div>

<div class="btn">
    <button>
        <a href="themgv.php">
        <ion-icon name="add-circle"></ion-icon>
        Thêm giảng viên
        </a>
    </button>

    <button>
        <ion-icon name="document-text"></ion-icon>
        Xuất excel
    </button>
    <button>
        <ion-icon name="print"></ion-icon>
        In
    </button>
</div>
<div class="quanly">
    <table class="table">
        <tr>
            <th><input type="checkbox" /></th>
            <th>Mã giảng viên</th>
            <th>Tên bộ môn</th>
            <th>Tên giảng viên</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Tùy chọn</th>
        </tr>
        <?php
                    include("ketnoi.php");
                    $sql="select * from giangvien ";
                    $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin".mysqli_error());
                    while($row=mysqli_fetch_array($kq))
                    {

                        $bomons = $row["MaBM"];//////////nếu không có khóa ngoại thì ko cần dùng đến
                        $sql2 = "SELECT * FROM bomon WHERE MaBM='" . $bomons . "'";
                        $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin" . mysqli_error());
                        $bomon = mysqli_fetch_array($kq2);

                        echo "<tr>";
                    echo "<td height='40px'><input type='checkbox'></td>";
                    echo "<td>" . $row["MaGV"] . "</td>";
                    $usern = $row["MaGV"];// Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
                    echo "<td> " . $bomon["TenBM"] . "</td>";/// khóa ngoại
                    echo "<td>" . $row["TenGV"] . "</td>";
                    echo "<td>" . $row["SdtGV"] . "</td>";
                    echo "<td>" . $row["Email"] . "</td>";
                    echo "<td>" . $row["Matkhau"] . "</td>";

                    echo "<td>
                    <a href='suagv.php?user=$usern'><button><ion-icon name='pencil'></ion-icon></button></a>
                    <a href='xoa.php?user=$usern'><button><ion-icon name='trash'></button></ion-icon></a>
                    </td>";
                    
                    echo "</tr>";
                }
                    ?>
    </table>
</div>

<style>
.admin_tab > :nth-child(2) {
    background-color: #3593D8;
    color: white;
}
</style>

<?php
            
include("footer.php");
?>