<?php
include("header.php");
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
                        <th><input type="checkbox"/></th>
                        <th>Mã hình thức</th>
                        <th>Tên hình thức</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <?php

                        include("ketnoi.php");
                        $sql="select * from hinhthuc";
                        $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin ".mysqli_error());
                        while($row=mysqli_fetch_array($kq))
                        {

                            echo "<tr>";
                        echo "<td height='40px'><input type='checkbox'></td>";
                        echo "<td>" . $row["MaHT"] . "</td>";
                        $usern = $row["MaHT"];// Gán dữ liệu cột username vào biến $usern
                        echo "<td>" . $row["TenHT"] . "</td>";

                        echo "<td>
                        <button>
                            <a href='suaht.php?user=$usern'>
                                <ion-icon name='pencil'></ion-icon>
                            </a>
                        </button>

                        <a href='xoaht.php?user=$usern'><button><ion-icon name='trash'></button></ion-icon></a>
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