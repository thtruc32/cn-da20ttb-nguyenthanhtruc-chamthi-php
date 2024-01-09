<?php
include("headerad.php");

// Khởi tạo biến tìm kiếm
$search = '';

// Kiểm tra xem có dữ liệu tìm kiếm từ form hay không
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search']; // Lưu giá trị tìm kiếm vào biến $search
    $sql = "SELECT * FROM lop WHERE TenLop LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM lop";
}

$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin " . mysqli_error($conn));
?>

<div class="h2text">
    <h2>
        <ion-icon name="business"></ion-icon>
        QUẢN LÝ LỚP HỌC
    </h2>
</div>

<div class="btn">
    <button>
        <a href="themlop.php">
            <ion-icon name="add-circle"></ion-icon>
            Thêm lớp học
        </a>
    </button>
<div class="timkiem">
    <form method="GET" action="">
        <input type="text" name="search" style="width: 200px; height: 30px; text-align:center; border: 1px solid #3593D8; border-radius: 3px;" placeholder="Nhập tên lớp cần tìm..." value="<?php echo htmlspecialchars($search); ?>">
        <input type="submit" style="width: 80px; height: 30px; background-color: #3593D8; color: white; border: none; border-radius: 3px;" value="Tìm kiếm">
    </form>
</div>

</div>



<div class="quanly">
    <table class="table">
        <tr>
            <th>Mã lớp</th>
            <th>Tên lớp</th>
            <th>Tùy chọn</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($kq)) {
            echo "<tr>";
            echo "<td>" . $row["MaLop"] . "</td>";
            $usern = $row["MaLop"]; // Gán dữ liệu cột username vào biến $usern
            echo "<td>" . $row["TenLop"] . "</td>";
            echo "<td>
                    <a href='sualop.php?user=$usern'><button><ion-icon name='pencil'></ion-icon></button></a>
                    <a href='xoalop.php?user=$usern'><button><ion-icon name='trash'></button></ion-icon></a>
                </td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<style>
.admin_tab :nth-child(3) {
    background-color: #3593D8;
    color: white;
}
</style>

<?php
include("footer.php");
?>
