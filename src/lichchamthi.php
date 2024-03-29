<?php 
include("beforegv.php")
?>

<script>
function parseDate(dateString) {
    // Hàm chuyển đổi chuỗi ngày thành đối tượng ngày
    var parts = dateString.split("/");
    return new Date(parts[2], parts[1] - 1, parts[0]);
}

function sortTableByDate(order) {
    var table = document.querySelector('.table');
    var rows = Array.from(table.rows).slice(1); // Bỏ qua hàng tiêu đề

    rows.sort(function(a, b) {
        var dateA = new Date(parseDate(a.cells[6].textContent));
        var dateB = new Date(parseDate(b.cells[6].textContent));

        if (order === 'asc') {
            return dateA - dateB; // Sắp xếp tăng dần theo ngày thi
        } else {
            return dateB - dateA; // Sắp xếp giảm dần theo ngày thi
        }
    });

    // Xóa dữ liệu đã sắp xếp khỏi bảng
    while (table.rows.length > 1) {
        table.deleteRow(1);
    }

    // Thêm dữ liệu đã sắp xếp lại vào bảng
    rows.forEach(function(row) {
        table.appendChild(row);
    });
}
</script>

<style>
table{
  margin: 50px auto;

  text-align: center;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td{
  padding: 10px 10px;
}
</style>
<table style="width:97%">
  <tr>
    <th width="4%">STT</th>
    <th width="6%">Mã lớp</th>
    <th width="18%">Môn học</th>
    <th width="8%">Hình thức</th>
    <th width="7%">Học kỳ</th>
    <th width="10%">Năm học</th>
    <th width="10%">Ngày nhận<div class="full-mt">
                    <button onclick="sortTableByDate('asc')">
                        <ion-icon name="caret-up-outline"></ion-icon>
                    </button>
                    <button onclick="sortTableByDate('desc')">
                        <ion-icon name="caret-down-outline"></ion-icon>
                    </button>
                </div>
            </th>
    <th width="7%">Ngày trả</th>
    <th width="5%">Số lượng</th>
    <th>Đơn giá</th>
    <th>Tổng tiền</th>
    <th width="11%">Giảng viên </th>
    <th width="8%">Trạng thái</th>
    <!-- <th width="6%"></th> -->

  </tr>

        <?php
                            include("ketnoi.php");
                            $userlogin = $_SESSION["giangvien"];

                    // Truy vấn SQL để lấy thông tin liên quan đến người dùng đăng nhập
                    $sql = "SELECT ct.MaCT, ct.MaLop, ct.MaMH, gv.TenGV, gv.MaGV, ht.Hthuc, ht.Buoi, ht.Gia, ct.SLbai, pc.Trangthai, l.TenLop, mh.TenMH, hk.TenHK, nk.TenNK, ct.Ngaynhan, ct.Ngaytra
                            FROM chamthi ct
                            LEFT JOIN phancong pc ON ct.MaCT = pc.MaCT
                            LEFT JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
                            LEFT JOIN giangvien gv ON pc.MaGV = gv.MaGV
                            LEFT JOIN lop l ON ct.MaLop = l.MaLop
                            LEFT JOIN monhoc mh ON ct.MaMH = mh.MaMH
                            LEFT JOIN hocky hk ON ct.MaHK = hk.MaHK
                            LEFT JOIN nienkhoa nk ON ct.MaNK = nk.MaNK
                            WHERE gv.Email = '".$userlogin."'";
              
                    $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin " . mysqli_error());

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
                            echo "<td>" . $row["Gia"] . "</td>";
                            $tongtien = $row["Gia"] * $row["SLbai"];
                            echo "<td>" . $tongtien . "</td>";
                            echo "<td>" . $row["TenGV"] . "</td>";
                            echo "<td>" . $row["Trangthai"] . "</td>";
                                echo "</tr>";
                                  }
                                  ?>
    </table>
</div>
<style>
    .frame2a > :nth-child(1){
                background-color: white;
                color: #3593D8;
                height: 50px;
                font-weight: 600;
            }
            </style>
</style>