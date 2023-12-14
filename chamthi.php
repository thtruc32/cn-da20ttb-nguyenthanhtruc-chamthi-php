<?php
include("header.php");
?>
            <div class="h2text">
            <h2>
                <ion-icon name="pencil"></ion-icon>
                QUẢN LÝ CHẤM THI
            </h2>
            </div>
            
                <div class="btn">
                    <button>
                        <ion-icon name="add-circle"></ion-icon>
                        Thêm môn chấm
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
                        <th>Mã chấm thi</th>
                        <th>Mã lớp</th>
                        <th>Mã môn học</th>
                        <th>Mã niên khóa</th>
                        <th>Mã hình thức</th>
                        <th>Mã học kỳ</th>
                        <th>Ngày nhận</th>
                        <th>Ngày trả</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <?php
                            include("ketnoi.php");
                            $sql="select * from chamthi ";
                            $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin ".mysqli_error());
                            while($row=mysqli_fetch_array($kq))
                            {

                                $lops = $row["MaLop"];//////////nếu không có khóa ngoại thì ko cần dùng đến
                                $sql2 = "SELECT * FROM lop WHERE MaLop='" . $lops . "'";
                                $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin" . mysqli_error());
                                $lop = mysqli_fetch_array($kq2);

                                $monhocs = $row["MaMH"];//////////nếu không có khóa ngoại thì ko cần dùng đến
                                $sql3 = "SELECT * FROM monhoc WHERE MaMH='" . $monhocs . "'";
                                $kq3 = mysqli_query($conn, $sql3) or die("Không thể xuất thông tin " . mysqli_error());
                                $monhoc = mysqli_fetch_array($kq3);

                                $nienkhoas = $row["MaNK"];//////////nếu không có khóa ngoại thì ko cần dùng đến
                                $sql4 = "SELECT * FROM nienkhoa WHERE MaNK='" . $nienkhoas . "'";
                                $kq4 = mysqli_query($conn, $sql4) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                                $nienkhoa = mysqli_fetch_array($kq4);

                                $hinhthucs = $row["MaHT"];//////////nếu không có khóa ngoại thì ko cần dùng đến
                                $sql5 = "SELECT * FROM hinhthuc WHERE MaHT='" . $hinhthucs . "'";
                                $kq5 = mysqli_query($conn, $sql5) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                                $hinhthuc = mysqli_fetch_array($kq5);

                                $hockys = $row["MaHK"];//////////nếu không có khóa ngoại thì ko cần dùng đến
                                $sql6 = "SELECT * FROM hocky WHERE MaHK='" . $hockys . "'";
                                $kq6 = mysqli_query($conn, $sql6) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                                $hocky = mysqli_fetch_array($kq6);

                                echo "<tr>";
                            echo "<td height='40px'><input type='checkbox'></td>";
                            echo "<td>" . $row["MaCT"] . "</td>";
                            $usern = $row["MaCT"];// Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
                            echo "<td> " . $lop["TenLop"] . "</td>";/// khóa ngoại
                            echo "<td> " . $monhoc["TenMH"] . "</td>";
                            echo "<td> " . $nienkhoa["TenNK"] . "</td>";
                            echo "<td> " . $hinhthuc["TenHT"] . "</td>";
                            echo "<td> " . $hocky["TenHK"] . "</td>";


                            echo "<td>" . $row["Ngaynhan"] . "</td>";
                            echo "<td>" . $row["Ngaytra"] . "</td>";
                            echo "<td>" . $row["SLbai"] . "</td>";
                            echo "<td>" . $row["Dongia"] . "</td>";

                            echo "<td>
                            <a href='sua.php?user=$usern'><button><ion-icon name='pencil'></ion-icon></button></a>
                            <a href='xoa.php?user=$usern'><button><ion-icon name='trash'></button></ion-icon></a>
                            </td>";
                            
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
            <style>
            .admin_tab :nth-child(6){
                background-color: #3593D8;
                color: white;
            }
            </style>
            <?php
            
include("footer.php");
?>