<?php
include("headerad.php");
?>
            <div class="h2text">
            <h2>
                <ion-icon name="pause-circle"></ion-icon>
                QUẢN LÝ HỌC KỲ
            </h2>
            </div>
            
                <div class="btn">
                    <button>
                        <a href="themhk.php">
                            <ion-icon name="add-circle"></ion-icon>
                            Thêm học kỳ
                        </a>
                    </button>
                  
                </div>
            <div class="quanly">
                <table class="table">
                    <tr>
                       
                        <th>Mã học kỳ</th>
                        <th>Tên học kỳ</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <?php

                        include("ketnoi.php");
                        $sql="select * from hocky";
                        $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin".mysqli_error());
                        while($row=mysqli_fetch_array($kq))
                        {

                            echo "<tr>";
                    
                        echo "<td>" . $row["MaHK"] . "</td>";
                        $usern = $row["MaHK"];// Gán dữ liệu cột username vào biến $usern
                        echo "<td>" . $row["TenHK"] . "</td>";

                        echo "<td>
                        <a href='suahk.php?user=$usern'><button><ion-icon name='pencil'></ion-icon></button></a>
                        <a href='xoahk.php?user=$usern'><button><ion-icon name='trash'></button></ion-icon></a>
                        </td>";

                        echo "</tr>";
                        }
?>
                </table>
            </div>
            <style>
            .admin_tab :nth-child(8){
                background-color: #3593D8;
                color: white;
            }
            </style>
            <?php
            
include("footer.php");
?>