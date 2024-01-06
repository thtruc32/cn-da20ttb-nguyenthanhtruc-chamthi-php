<?php
include("headerad.php")
?>
    <div class="h2text">
            <h2>
                <ion-icon name="folder"></ion-icon>
                PHÂN CÔNG CHẤM THI
            </h2>
            </div>
            
                <div class="btn">
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
                        
                        <th>Mã chấm thi</th>
                        <th>Mã lớp</th>
                        <th>Môn</th>
                        <th>Tên giảng viên</th>
                        <th>Tên hình thức</th>
                        <th>Buổi</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    <?php

                        include("ketnoi.php");
                            $sql = "SELECT ct.MaCT, ct.MaLop, ct.MaMH, gv.TenGV, ht.TenHT, ht.Buoi, ht.Gia, ct.SLbai, pc.Trangthai
                            FROM chamthi ct
                            LEFT JOIN phancong pc ON ct.MaCT = pc.MaCT
                            LEFT JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
                            LEFT JOIN giangvien gv ON pc.MaGV = gv.MaGV";

                
                        
                        $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin ".mysqli_error($conn));
                        while($row=mysqli_fetch_array($kq))
                        {
                            echo "<tr>";

                                echo "<td>" . $row["MaCT"] . "</td>";
                                $usern = $row["MaCT"]; // Gán dữ liệu cột username vào biến $usern
                                echo "<td>" . $row["MaLop"] . "</td>";
                                echo "<td>" . $row["MaMH"] . "</td>";
                                echo "<td>" . $row["TenGV"] . "</td>";
                                echo "<td>" . $row["TenHT"] . "</td>";
                                echo "<td>" . $row["Buoi"] . "</td>";
                                echo "<td>" . $row["Gia"] . "</td>";
                                echo "<td>" . $row["SLbai"] . "</td>";
                                echo "<td>" . $row["Trangthai"] . "</td>"; // Hiển thị trường Trangthai
                                echo "<td>
                                <button>
                                    <a href='suaphancong.php?user=$usern'>
                                        <ion-icon name='pencil'></ion-icon>
                                    </a>
                                </button>
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
            </style>
            <?php
            
include("footer.php");
?>
