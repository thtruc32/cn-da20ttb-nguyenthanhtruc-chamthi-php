<?php
include("header.php");
?>
            <div class="h2text">
            <h2>
                <ion-icon name="extension-puzzle"></ion-icon>
                QUẢN LÝ NIÊN KHÓA
            </h2>
            </div>
            
                <div class="btn">
                    <button>
                        <a href="themnk.php">
                            <ion-icon name="add-circle"></ion-icon>
                            Thêm niên khóa
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
                        <th>Mã niên khóa</th>
                        <th>Tên niên khóa</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <?php

                            include("ketnoi.php");
                            $sql="select * from nienkhoa";
                            $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin".mysqli_error());
                            while($row=mysqli_fetch_array($kq))
                            {
                                echo "<tr>";
                                echo "<td height='40px'><input type='checkbox'></td>";
                                echo "<td>" . $row["MaNK"] . "</td>";
                                $usern = $row["MaNK"];// Gán dữ liệu cột username vào biến $usern
                                echo "<td>" . $row["TenNK"] . "</td>";
                                echo "<td>" . $row["TGbatdau"] . "</td>";
                                echo "<td>" . $row["TGketthuc"] . "</td>";

                                echo "<td>
                                <a href='suank.php?user=$usern'><button><ion-icon name='pencil'></ion-icon></button></a>
                                <a href='xoank.php?user=$usern'><button><ion-icon name='trash'></button></ion-icon></a>
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