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

<?php
include("headerad.php");


if (isset($_GET['search']) && !empty($_GET['search'])) {
    $keyword = $_GET['search'];
    // Xóa tham số search khỏi URL khi tìm kiếm
    echo "<script>
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.delete('search');
            window.history.replaceState({}, document.title, window.location.pathname + '?' + urlParams.toString());
          </script>";
}

?>
<div class="h2text">
    <h2>
        <ion-icon name="pencil"></ion-icon>
        QUẢN LÝ CHẤM THI
    </h2>
</div>

<div class="btn">
    <button>
        <a href="themct.php">
            <ion-icon name="add-circle"></ion-icon>
            Thêm môn chấm
        </a>
    </button>
    <div class="timkiem">
        <form method="GET" action="">
            <input type="text" name="search"
                style="width: 200px; height: 30px; text-align:center; border: 1px solid #3593D8; border-radius: 3px;"
                placeholder="Nhập tìm kiếm tại đây!"
                value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <input type="submit"
                style="width: 80px; height: 30px; background-color: #3593D8; color: white; border: none; border-radius: 3px;"
                value="Tìm kiếm">
        </form>
    </div>

</div>
<div class="quanly">

    <table class="table">
        <!-- Bảng chấm thi -->
        <tr>
            <th width="5%">STT</th>
            <th width="10%">Mã lớp</th>
            <th width="18%">Môn học</th>
            <th width="15%">Hình thức</th>
            <th width="10%">Học kỳ</th>
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
            <th width="10%">Ngày trả</th>
            <th width="5%">Số lượng</th>
            <th width="7%"></th>
        </tr>
        <?php
        include("ketnoi.php");

        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $keyword = $_GET['search'];
            $sql = "SELECT ct.MaCT, ct.MaLop, ct.MaMH, mh.TenMH, ct.Ngaynhan, ct.Ngaytra, ct.SLbai, ht.Hthuc, hk.TenHK, nk.TenNK
                    FROM chamthi ct
                    JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
                    JOIN hocky hk ON ct.MaHK = hk.MaHK
                    JOIN nienkhoa nk ON ct.MaNK = nk.MaNK
                    JOIN monhoc mh ON ct.MaMH = mh.MaMH
                    WHERE ct.MaCT LIKE '%$keyword%' OR ct.MaLop LIKE '%$keyword%' OR ct.MaMH LIKE '%$keyword%' OR mh.TenMH LIKE '%$keyword%' 
                    OR ct.Ngaynhan LIKE '%$keyword%' OR ct.Ngaytra LIKE '%$keyword%' OR ct.SLbai LIKE '%$keyword%' OR ht.Hthuc LIKE '%$keyword%' 
                    OR hk.TenHK LIKE '%$keyword%' OR nk.TenNK LIKE '%$keyword%'";
                    //bỏ oderby theo ngày nhận
        } else {
            $sql = "SELECT ct.MaCT, ct.MaLop, ct.MaMH, mh.TenMH, ct.Ngaynhan, ct.Ngaytra, ct.SLbai, ht.Hthuc, hk.TenHK, nk.TenNK
                    FROM chamthi ct
                    JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
                    JOIN hocky hk ON ct.MaHK = hk.MaHK
                    JOIN nienkhoa nk ON ct.MaNK = nk.MaNK
                    JOIN monhoc mh ON ct.MaMH = mh.MaMH";
                    //bỏ oderby theo ngày nhận
        }

        $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin " . mysqli_error());
        $stt = 1;
        while ($row = mysqli_fetch_array($kq)) {

            echo "<tr>";
            echo "<td>" . $stt++ . "</td>";
            echo "<td> " . $row["MaLop"] . "</td>";/// khóa ngoại
            echo "<td> " . $row["TenMH"] . "</td>";
            echo "<td> " . $row["Hthuc"] . "</td>";
            echo "<td> " . $row["TenHK"] . "</td>";
            echo "<td> " . $row["TenNK"] . "</td>";
            echo "<td>" . date('d/m/Y', strtotime($row["Ngaynhan"])) . "</td>";
            echo "<td>" . date('d/m/Y', strtotime($row["Ngaytra"])) . "</td>";
            echo "<td>" . $row["SLbai"] . "</td>";

            echo "<td>
                    <a href='suact.php?user=" . $row["MaCT"] . "'><button><ion-icon name='pencil'></ion-icon></button></a>
                    <a href='xoact.php?user=" . $row["MaCT"] . "'><button><ion-icon name='trash'></ion-icon></button></a>
                  </td>";
                            
            echo "</tr>";
        }
        ?>
    </table>
</div>
<style>
.admin_tab :nth-child(6) {
    background-color: #3593D8;
    color: white;
}
</style>
<?php
include("footer.php");
?>