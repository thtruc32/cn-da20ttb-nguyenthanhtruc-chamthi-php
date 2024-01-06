<?php 
include("beforegv.php")
?>

<style>
table{
  margin: 50px auto;

  text-align: center;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td{
  padding: 10px 10px;
}
</style>
<table style="width:97%">
  <tr>
    <th width="4%">STT</th>
    <th width="7%">Mã lớp</th>
    <th width="18%">Môn học</th>
    <th width="8%">Hình thức</th>
    <th width="8%">Học kỳ</th>
    <th width="8%">Năm học</th>
    <th width="7%">Ngày nhận</th>
    <th width="7%">Ngày trả</th>
    <th width="5%">Số lượng</th>
    <th width="11%">Giảng viên </th>
    <th width="8%">Trạng thái</th>
    <!-- <th width="6%"></th> -->

  </tr>

        <?php
                            include("ketnoi.php");

                            $sql="SELECT ct.MaCT, ct.MaLop, ct.MaMH, gv.TenGV, ht.Hthuc, ht.Buoi, ht.Gia, ct.SLbai, pc.Trangthai, l.TenLop, mh.TenMH, hk.TenHK, nk.TenNK, ct.Ngaynhan, ct.Ngaytra
                            FROM chamthi ct
                                      LEFT JOIN phancong pc ON ct.MaCT = pc.MaCT
                                      LEFT JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
                                      LEFT JOIN giangvien gv ON pc.MaGV = gv.MaGV
                                      LEFT JOIN lop l ON ct.MaLop = l.MaLop
                                      LEFT JOIN monhoc mh ON ct.MaMH = mh.MaMH
                                      LEFT JOIN hocky hk ON ct.MaHK = hk.MaHK
                                      LEFT JOIN nienkhoa nk ON ct.MaNK = nk.MaNK";
                            
                            $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin ".mysqli_error());
                            while($row=mysqli_fetch_array($kq))
                            {
                                echo "<tr>";
                           
                            echo "<td>" . $row["MaCT"] . "</td>";
                            $usern = $row["MaCT"];// Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
                            echo "<td> " . $row["MaLop"] . "</td>";/// khóa ngoại
                            echo "<td> " . $row["TenMH"] . "</td>";
                              echo "<td> " . $row["Hthuc"] . "</td>";
                                echo "<td> " . $row["TenHK"] . "</td>";
                            echo "<td> " . $row["TenNK"] . "</td>";
                            echo "<td>" . date('d/m/Y', strtotime($row["Ngaynhan"])) . "</td>";
                            echo "<td>" . date('d/m/Y', strtotime($row["Ngaytra"])) . "</td>";
                           

                            echo "<td>" . $row["SLbai"] . "</td>";
                            echo "<td>" . $row["TenGV"] . "</td>";
                            // echo "<td>" . $row["Trangthai"] . "</td>";

                            echo "<td class='table-icon'>";
                                if (empty($row["TenGV"])) {
                                    echo "<form method='post' action='xulydangkyct.php'>
                                            <input type='hidden' name='MaGV' value='" . $giangvien_login["MaGV"] . "'>
                                            <input type='hidden' name='MaCT' value='{$row["MaCT"]}'>
                                            <button class='btndk' type='submit' name='dangky'>Đăng ký</button>
                                          </form>"; 
                                        } else {
                                          // Hiển thị theo trạng thái từ cơ sở dữ liệu
                                          $Trangthai = $row["Trangthai"];
                                          if ($Trangthai == "Chờ duyệt") {
                                              echo "Chờ duyệt";
                                          } elseif ($Trangthai == "Đã duyệt") {
                                              echo "Đã duyệt";
                                          } elseif ($Trangthai == "Đang chấm") {
                                              echo "Đang chấm";
                                          } elseif ($Trangthai == "Đã chấm") {
                                              echo "Đã chấm";
                                          }
                                      }
                                echo "</td>";
                                echo "</tr>";
                                  }
                                  ?>
    </table>
</div>
<style>
    .frame2a :nth-child(2){
                background-color: white;
                color: #3593D8;
                height: 50px;
                font-weight: 600;
            }
            </style>
</style>