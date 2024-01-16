<?php
include("headerad.php");
?>
            <div class="h2text">
            <h2>
                <ion-icon name="server"></ion-icon>
               QUẢN LÝ THỐNG KÊ
            </h2>
            </div>
                <div class="btntk">
                <form method="GET" action="">
                    
                    <label for="thang">Tháng:</label>
                    <input type="number" id="thang" name="thang" min="1" max="12" style="border:1px solid #3593D8; border-radius: 3px;">

                    
                    <label for="nam">Năm:</label>
                    <input type="number" id="nam" name="nam" min="2000" max="2099" style="border:1px solid #3593D8; border-radius: 3px;">
                    <input type="submit" value="Lọc" style="background-color:#3593D8; border:none; color:white; height:20px; width:40px; border-radius: 3px;">
             
                </form>
            
                </div>
            <div class="quanly">
                <table class="table">
                    <tr>
                        <th>Mã giảng viên</th>
                        <th>Tên giảng viên</th>
                        <th>Số lượng bài</th>
                        <th>Tháng</th>
                        <th>Năm</th>
                        <th>Tổng tiền</th>
                    </tr>
                    <?php
        include("ketnoi.php");

        // Xử lý việc lọc theo năm và tháng
        $filter_thang = isset($_GET['thang']) ? $_GET['thang'] : '';
        $filter_nam = isset($_GET['nam']) ? $_GET['nam'] : '';

        $where_clause = "";
        if ($filter_thang && !$filter_nam) {
            $where_clause = "WHERE MONTH(ct.Ngaynhan) = $filter_thang";
        } elseif (!$filter_thang && $filter_nam) {
            $where_clause = "WHERE YEAR(ct.Ngaynhan) = $filter_nam";
        } elseif ($filter_thang && $filter_nam) {
            $where_clause = "WHERE MONTH(ct.Ngaynhan) = $filter_thang AND YEAR(ct.Ngaynhan) = $filter_nam";
        }

        $sql = "SELECT gv.MaGV, gv.TenGV, MONTH(ct.Ngaynhan) AS Thang, YEAR(ct.Ngaynhan) AS Nam, 
        SUM(ct.SLbai) AS TongSLbai, SUM(ht.Gia * ct.SLbai) AS TongTien
        FROM giangvien gv
        JOIN phancong pc ON gv.MaGV = pc.MaGV
        JOIN chamthi ct ON pc.MaCT = ct.MaCT
        JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
        $where_clause AND pc.Trangthai = 'Đã chấm'
        GROUP BY gv.MaGV, YEAR(ct.Ngaynhan), MONTH(ct.Ngaynhan)";


        $kq = mysqli_query($conn, $sql) or die ("Không thể xuất thông tin " . mysqli_error($conn));

        while ($row = mysqli_fetch_array($kq)) {
            echo "<tr>";
            echo "<td>" . $row["MaGV"] . "</td>";
            $usern = $row["MaGV"];
            echo "<td>" . $row["TenGV"] . "</td>";
            echo "<td>" . $row["TongSLbai"] . "</td>";
            echo "<td>" . $row["Thang"] . "</td>";
            echo "<td>" . $row["Nam"] . "</td>";
            echo "<td>" . $row["TongTien"] . "</td>";
            echo "</tr>";
        }
        
        ?>

                </table>
            </div>
            <style>
            .admin_tab :nth-child(10){
                background-color: #3593D8;
                color: white;
            }
            .btntk{
                display: flex;
                margin-top: 30px;
                margin-left: 30px;
                gap: 30px;
            }
            </style>
            <?php
            
include("footer.php");
?>