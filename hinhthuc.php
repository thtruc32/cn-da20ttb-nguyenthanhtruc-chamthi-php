<?php
include("headerad.php");
?>
            <div class="h2text">
            <h2>
                <ion-icon name="folder"></ion-icon>
                QUẢN LÝ HÌNH THỨC
            </h2>
            </div>
            
                <div class="btn">
                    <button>
                        <a href="themht.php">
                        <ion-icon name="add-circle"></ion-icon>
                        Thêm hình thức
                        </a>
                    </button>
            
                </div>
            <div class="quanly">
                <table class="table">
                    <tr>
                        <th>Mã hình thức</th>
                        <th>Tên hình thức</th>
                        <th>Hình thức</th>
                        <th>Buổi</th>
                        <th>Đơn giá</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <?php

                        include("ketnoi.php");
                        $sql="select * from hinhthuc";
                        $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin ".mysqli_error());
                        while($row=mysqli_fetch_array($kq))
                        {

                            echo "<tr>";
                      
                        echo "<td>" . $row["MaHT"] . "</td>";
                        $usern = $row["MaHT"];// Gán dữ liệu cột username vào biến $usern
                        echo "<td>" . $row["TenHT"] . "</td>";
                        echo "<td>" . $row["Hthuc"] . "</td>";
                        echo "<td>" . $row["Buoi"] . "</td>";
                        echo "<td>" . $row["Gia"] . "</td>";
                
                        echo "<td>
                        <a href='suaht.php?user=" . $row["MaHT"] . "'><button><ion-icon name='pencil'></ion-icon></button></a>
                        <a href='xoaht.php?user=" . $row["MaHT"] . "'><button><ion-icon name='trash'></ion-icon></button></a>
                      </td>";

                        echo "</tr>";
                        
                        }
                    ?>

                </table>
            </div>
            <style>
            .admin_tab :nth-child(5){
                background-color: #3593D8;
                color: white;
            }
            </style>
            <?php
            
include("footer.php");
?>