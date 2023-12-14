<?php
include("header.php");
?>
            <div class="h2text">
            <h2>
                <ion-icon name="book"></ion-icon>
                QUẢN LÝ MÔN HỌC
            </h2>
            </div>
            
                <div class="btn">
                    <button>
                        <a href="themmh.php">
                        <ion-icon name="add-circle"></ion-icon>
                        Thêm môn học
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
                        <th>Mã môn</th>
                        <th>Tên môn</th>
                        <th>Tùy chọn</th>
                    </tr>
        <?php

                    include("ketnoi.php");
                    $sql="select * from monhoc";
                    $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin".mysqli_error());
                    while($row=mysqli_fetch_array($kq))
                    {

                        echo "<tr>";
                    echo "<td height='40px'><input type='checkbox'></td>";
                    echo "<td>" . $row["MaMH"] . "</td>";
                    $usern = $row["MaMH"];// Gán dữ liệu cột username vào biến $usern
                    echo "<td>" . $row["TenMH"] . "</td>";

                    echo "<td>
                    <a href='suamon.php?user=$usern'><button><ion-icon name='pencil'></ion-icon></button></a>
                    <a href='xoamon.php?user=$usern'><button><ion-icon name='trash'></button></ion-icon></a>
                    </td>";
                    
                    echo "</tr>";
                }
                    ?>

                </table>
            </div>
            <style>
            .admin_tab :nth-child(4){
                background-color: #3593D8;
                color: white;
            }
            </style>
            <?php
            
include("footer.php");
?>