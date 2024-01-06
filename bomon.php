<?php
include("headerad.php")
?>
            <div class="h2text">
            <h2>
                <ion-icon name="bookmark"></ion-icon>
                QUẢN LÝ BỘ MÔN
            </h2>
            </div>
            
                <div class="btn">
                    <button>
                    <a href="thembm.php">
                        <ion-icon name="add-circle"></ion-icon>
                        <span>Thêm bộ môn</span>
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
                        <th>Mã bộ môn</th>
                        <th>Tên bộ môn</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <tr>
                    <?php

                            include("ketnoi.php");
                            $sql="select * from bomon";
                            $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin bộ môn ".mysqli_error());
                            while($row=mysqli_fetch_array($kq))
                            {

                                echo "<tr>";
                            echo "<td height='40px'><input type='checkbox'></td>";
                            echo "<td>" . $row["MaBM"] . "</td>";
                            $usern = $row["MaBM"];// Gán dữ liệu cột username vào biến $usern
                            echo "<td>" . $row["TenBM"] . "</td>";

                            echo "<td>
                            <a href='suabm.php?user=$usern'><button><ion-icon name='pencil'></ion-icon></button></a>
                            <a href='xoabm.php?user=$usern'><button><ion-icon name='trash'></button></ion-icon></a>
                            </td>";

                            echo "</tr>";
                            }
                            ?>
                </table>
            </div>
        <style>
            .admin_tab > :nth-child(1){
                background-color: #3593D8;
                color: white;
            }
        </style>
            <?php
include("footer.php");
?>