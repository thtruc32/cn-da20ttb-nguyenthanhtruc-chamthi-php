<?php
include("headerad.php");
include("ketnoi.php");

        if (isset($_GET['filter']) && !empty($_GET['filter'])) {
            $filter = $_GET['filter'];
            $sql = "SELECT ct.MaCT, ct.MaLop, ct.MaMH, mh.TenMH, gv.TenGV, ht.TenHT, ht.Buoi, ht.Gia, ct.SLbai, pc.Trangthai
                    FROM chamthi ct
                    LEFT JOIN phancong pc ON ct.MaCT = pc.MaCT
                    LEFT JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
                    LEFT JOIN giangvien gv ON pc.MaGV = gv.MaGV
                    LEFT JOIN monhoc mh ON ct.MaMH = mh.MaMH
                    WHERE pc.Trangthai = '$filter'";
        } else {
            $sql = "SELECT ct.MaCT, ct.MaLop, ct.MaMH, mh.TenMH, gv.TenGV, ht.TenHT, ht.Buoi, ht.Gia, ct.SLbai, pc.Trangthai
                    FROM chamthi ct
                    LEFT JOIN phancong pc ON ct.MaCT = pc.MaCT
                    LEFT JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
                    LEFT JOIN giangvien gv ON pc.MaGV = gv.MaGV
                    LEFT JOIN monhoc mh ON ct.MaMH = mh.MaMH";
        }
        $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin " . mysqli_error($conn));
        ?>
    <div class="h2text">
            <h2>
                <ion-icon name="grid"></ion-icon>
                PHÂN CÔNG CHẤM THI
            </h2>
            </div>
            <div class="loctt">
            <form method="GET" action="">
                <!-- <label for="filter">Lọc theo trạng thái:</label> -->
                <select name="filter">
                    <option value="">Tất cả</option>
                    <option value="Chờ duyệt" <?php if(isset($_GET['filter']) && $_GET['filter'] == 'Chờ duyệt') echo 'selected'; ?>>Chờ duyệt</option>
                    <option value="Đã duyệt" <?php if(isset($_GET['filter']) && $_GET['filter'] == 'Đã duyệt') echo 'selected'; ?>>Đã duyệt</option>
                    <option value="Đang chấm" <?php if(isset($_GET['filter']) && $_GET['filter'] == 'Đang chấm') echo 'selected'; ?>>Đang chấm</option>
                    <option value="Đã chấm" <?php if(isset($_GET['filter']) && $_GET['filter'] == 'Đã chấm') echo 'selected'; ?>>Đã chấm</option>
                </select>
            <input type="submit" value="Lọc" style="background-color: #3593D8; color:white; border: none; height: 20px; width: 50px; border-radius: 2px;">
            </form>
            </div>

                <div class="quanly">
                <table class="table">
                    <tr>
                        
                        <th width="5%">STT</th>
                        <th width="10%">Mã lớp</th>
                        <th width="20%">Môn học</th>
                        <th width="16%">Tên giảng viên</th>
                        <th width="15%">Tên hình thức</th>
                        <th width="8%">Buổi</th>
                        <th width="7%">Đơn giá</th>
                        <th width="6%">Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Ngày nhận</th>
                        <th>Ngày trả</th>
                        <th width="8%">Trạng thái</th>
                        <th></th>
                    </tr>
                    <?php
                        $sql = "SELECT ct.MaCT, ct.Ngaynhan, ct.Ngaytra, ct.MaLop, ct.MaMH, mh.TenMH, gv.TenGV, ht.TenHT, ht.Buoi, ht.Gia, ct.SLbai, pc.Trangthai
                        FROM chamthi ct
                        LEFT JOIN phancong pc ON ct.MaCT = pc.MaCT
                        LEFT JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
                        LEFT JOIN giangvien gv ON pc.MaGV = gv.MaGV
                        LEFT JOIN monhoc mh ON ct.MaMH = mh.MaMH";

                    if (isset($_GET['filter']) && !empty($_GET['filter'])) {
                        $filter = $_GET['filter'];
                        $sql .= " WHERE pc.Trangthai = '$filter'";
                    }

                    $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin " . mysqli_error($conn));

                    $stt = 1;
                    while ($row = mysqli_fetch_array($kq)) {
                            echo "<tr>";

                                echo "<td>" . $row["MaCT"] . "</td>";
                                $usern = $row["MaCT"]; // Gán dữ liệu cột username vào biến $usern
                                echo "<td>" . $row["MaLop"] . "</td>";
                                echo "<td>" . $row["TenMH"] . "</td>";
                                echo "<td>" . $row["TenGV"] . "</td>";
                                echo "<td>" . $row["TenHT"] . "</td>";
                                echo "<td>" . $row["Buoi"] . "</td>";
                                echo "<td>" . $row["Gia"] . "</td>";
                                echo "<td>" . $row["SLbai"] . "</td>";
                                $tongtien = $row["Gia"] * $row["SLbai"];
                                echo "<td>" . $tongtien . "</td>";
                                echo "<td>" . date('d/m/Y', strtotime($row["Ngaynhan"])) . "</td>";
                                echo "<td>" . date('d/m/Y', strtotime($row["Ngaytra"])) . "</td>";
                                echo "<td>" . $row["Trangthai"] . "</td>"; // Hiển thị trường Trangthai
                                echo "<td>
                            
                                <a href='suaphancong.php?user=" . $row["MaCT"] . "'><button><ion-icon name='pencil'></ion-icon></button></a>
                                </td>";
                            echo "</tr>";
                        }
                    ?>

                </table>
            </div>
            <style>
            .admin_tab :nth-child(7){
                background-color: #3593D8;
                color: white;
            }
            .loctt{
                display: flex;
                margin-top: 30px;
                margin-right: 30px;
                justify-content: flex-end;
            }
            </style>
<?php
include("footer.php");
?>
