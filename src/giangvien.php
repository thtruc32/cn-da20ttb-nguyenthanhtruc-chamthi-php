<?php
include("headerad.php");

$search = ''; // Khởi tạo biến tìm kiếm

// Kiểm tra xem có dữ liệu tìm kiếm được gửi từ form hay không
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search']; // Lưu giá trị tìm kiếm vào biến $search
    // Truy vấn SQL với điều kiện tìm kiếm theo tên giảng viên
    $sql = "SELECT * FROM giangvien WHERE TenGV LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM giangvien"; // Truy vấn SQL mặc định để lấy tất cả dữ liệu giảng viên
}

$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin " . mysqli_error($conn));
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
    <div class="tim">
        <form method="GET" action="">
            <!-- <label for="search">Tìm kiếm theo tên giảng viên:</label> -->
            <!-- Sử dụng value để giữ lại giá trị nhập vào sau khi tải lại trang -->
            <input type="text" name="search" style="width: 220px; height: 30px; text-align:center; border: 1px solid #3593D8; border-radius: 3px;" placeholder="Nhập tên giảng viên tại đây..."
                value="<?php echo htmlspecialchars($search); ?>">
            <input type="submit"  style="width: 80px; height: 30px; background-color: #3593D8; color: white; border: none; border-radius: 3px;"  value="Tìm kiếm">
        </form>
    </div>
</div>

<div class="quanly">
    <table class="table">
        <tr>
            <th>Mã giảng viên</th>
            <th>Bộ môn</th>
            <th>Tên giảng viên</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Tùy chọn</th>
        </tr>
        <?php
        include("ketnoi.php");
        while ($row = mysqli_fetch_array($kq)) {
            $bomons = $row["MaBM"];
            $sql2 = "SELECT * FROM bomon WHERE MaBM='" . $bomons . "'";
            $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin" . mysqli_error());
            $bomon = mysqli_fetch_array($kq2);

            echo "<tr>";
            echo "<td>" . $row["MaGV"] . "</td>";
            $usern = $row["MaGV"];
            echo "<td>" . $bomon["TenBM"] . "</td>";
            echo "<td>" . $row["TenGV"] . "</td>";
            echo "<td>" . $row["SdtGV"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Matkhau"] . "</td>";

            echo "<td>
                <a href='suagv.php?user=$usern'><button><ion-icon name='pencil'></ion-icon></button></a>
                <a href='xoagv.php?user=$usern'><button><ion-icon name='trash'></button></ion-icon></a>
                </td>";
            
            echo "</tr>";
        }
        ?>
    </table>
</div>

<style>
.admin_tab> :nth-child(2) {
    background-color: #3593D8;
    color: white;
}

.tim{
    display: flex;
}
</style>

<?php
include("footer.php");
?>