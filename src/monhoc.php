<?php
include("headerad.php");

$search = ''; // Khởi tạo biến tìm kiếm

// Kiểm tra xem có dữ liệu tìm kiếm được gửi từ form hay không
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search']; // Lưu giá trị tìm kiếm vào biến $search
   
    $sql = "SELECT * FROM monhoc WHERE TenMH LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM monhoc"; // Truy vấn SQL mặc định để lấy tất cả dữ liệu giảng viên
}

$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin " . mysqli_error($conn));
?>
<div class="h2text">
    <h2>
        <ion-icon name="book"></ion-icon>
        QUẢN LÝ MÔN HỌC
    </h2>
</div>

<div class="btn">
    <button>
        <a href="themmh.php">
            <ion-icon name="add-circle"></ion-icon>
            Thêm môn học
        </a>
    </button>
    <div>
        <form method="GET" action="">
    
            <input type="text" name="search"
                style="width: 220px; height: 30px; text-align:center; border: 1px solid #3593D8; border-radius: 3px;"
                placeholder="Nhập tên môn học tại đây!" value="<?php echo htmlspecialchars($search); ?>">
            <input type="submit"
                style="width: 80px; height: 30px; background-color: #3593D8; color: white; border: none; border-radius: 3px;"
                value="Tìm kiếm">
        </form>
    </div>
</div>
<div class="quanly">

    <table class="table">
        <tr>

            <th>Mã môn</th>
            <th>Tên môn</th>
            <th>Tùy chọn</th>
        </tr>
        <?php

                    include("ketnoi.php");
                    while($row=mysqli_fetch_array($kq))
                    {

                        echo "<tr>";
                    
                    echo "<td>" . $row["MaMH"] . "</td>";
                    $usern = $row["MaMH"];// Gán dữ liệu cột username vào biến $usern
                    echo "<td>" . $row["TenMH"] . "</td>";

                    echo "<td>
                    <a href='suamon.php?user=$usern'><button><ion-icon name='pencil'></ion-icon></button></a>
                    <a href='xoamon.php?user=$usern'><button><ion-icon name='trash'></button></ion-icon></a>
                    </td>";
                    
                    echo "</tr>";
                }
                    ?>

    </table>
</div>
<style>
.admin_tab :nth-child(4) {
    background-color: #3593D8;
    color: white;
}
</style>
<?php
            
include("footer.php");
?>