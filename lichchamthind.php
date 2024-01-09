<?php 
include("beforend.php");
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $keyword = $_GET['search'];
    echo "<script>
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.delete('search');
            window.history.replaceState({}, document.title, window.location.pathname + '?' + urlParams.toString());
          </script>";
}
?>

<style>
table{
  margin: 30px auto;
  text-align: center;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td{
  padding: 10px 10px;
}

.timkiem{
    margin-top: 30px;
    margin-right: 40px;
    display: flex;
    justify-content: flex-end;
}
</style>
<div class="timkiem">
    <form method="GET" action="">
        <!-- <label for="search">Tìm kiếm:</label> -->
        <input type="text" name="search"  style="width: 200px; height: 30px; text-align:center; border: 1px solid #3593D8; border-radius: 3px;" placeholder="Nhập tìm kiếm tại đây!">
        <input type="submit"  style="width: 80px; height: 30px; background-color: #3593D8; color: white; border: none; border-radius: 3px;" value="Tìm kiếm">
    </form>
</div>
<table style="width:95%">
  <tr>
    <th width="3%">STT</th>
    <th width="6%">Mã lớp</th>
    <th width="17%">Môn học</th>
    <th width="10%">Hình thức</th>
    <th width="6%">Học kỳ</th>
    <th width="8%">Năm học</th>
    <th width="7%">Ngày nhận</th>
    <th width="7%">Ngày trả</th>
    <th width="5%">Số lượng</th>
    <th width="14%">Giảng viên </th>
 
    <!-- <th width="6%"></th> -->

  </tr>

  <?php
    include("ketnoi.php");

    // Kiểm tra xem đã nhập từ khóa tìm kiếm hay chưa
    if (isset($_GET['search']) && !empty($_GET['search'])) {
        $keyword = $_GET['search'];
        // Thêm điều kiện tìm kiếm vào truy vấn SQL
        $sql = "SELECT pc.MaCT, pc.MaGV, gv.TenGV, pc.Trangthai, ct.MaLop, ct.MaMH, mh.TenMH, ct.Ngaynhan, ct.Ngaytra, ct.SLbai, ht.Hthuc, hk.TenHK, nk.TenNK
        FROM phancong pc
        JOIN chamthi ct ON pc.MaCT = ct.MaCT
        JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
        JOIN hocky hk ON ct.MaHK = hk.MaHK
        JOIN nienkhoa nk ON ct.MaNK = nk.MaNK
        JOIN monhoc mh ON ct.MaMH = mh.MaMH
       
        ORDER BY ct.Ngaynhan DESC
        WHERE pc.MaCT LIKE '%$keyword%' OR pc.MaGV LIKE '%$keyword%' OR gv.TenGV LIKE '%$keyword%' OR ct.MaLop LIKE '%$keyword%' OR ct.MaMH LIKE '%$keyword%' OR mh.TenMH LIKE '%$keyword%' OR ct.Ngaynhan LIKE '%$keyword%' OR ct.Ngaytra LIKE '%$keyword%' OR ct.SLbai LIKE '%$keyword%' OR ht.Hthuc LIKE '%$keyword%' OR hk.TenHK LIKE '%$keyword%' OR nk.TenNK LIKE '%$keyword%'";

    } else {
        // Hiển thị tất cả thông tin nếu không có từ khóa tìm kiếm
        $sql = "SELECT pc.MaCT, pc.MaGV, gv.TenGV, pc.Trangthai, ct.MaLop, ct.MaMH, mh.TenMH, ct.Ngaynhan, ct.Ngaytra, ct.SLbai, ht.Hthuc, hk.TenHK, nk.TenNK
        FROM phancong pc
        JOIN chamthi ct ON pc.MaCT = ct.MaCT
        JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
        JOIN hocky hk ON ct.MaHK = hk.MaHK
        JOIN nienkhoa nk ON ct.MaNK = nk.MaNK
        JOIN monhoc mh ON ct.MaMH = mh.MaMH
        JOIN giangvien gv ON pc.MaGV = gv.MaGV";
        
    }

    // Thực hiện truy vấn
    $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin " . mysqli_error());

    // Hiển thị kết quả
    while ($row = mysqli_fetch_array($kq)) {
        echo "<tr>";
        echo "<td>" . $row["MaCT"] . "</td>";
        echo "<td> " . $row["MaLop"] . "</td>";
        echo "<td> " . $row["TenMH"] . "</td>";
        echo "<td> " . $row["Hthuc"] . "</td>";
        echo "<td> " . $row["TenHK"] . "</td>";
        echo "<td> " . $row["TenNK"] . "</td>";
        echo "<td>" . date('d/m/Y', strtotime($row["Ngaynhan"])) . "</td>";
        echo "<td>" . date('d/m/Y', strtotime($row["Ngaytra"])) . "</td>";
        echo "<td>" . $row["SLbai"] . "</td>";
        echo "<td>" . $row["TenGV"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</div>
<style>
    .frame2 > :nth-child(4){
                background-color: white;
                color: #3593D8;
                height: 50px;
                font-weight: 600;
            }
            </style>