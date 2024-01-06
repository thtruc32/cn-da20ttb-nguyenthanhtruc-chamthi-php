<?php
include("beforegv.php");
include("ketnoi.php");
?>

<?php

// Check if the session key is set before using it
$userlogin = isset($_SESSION["giangvien"]) ? $_SESSION["giangvien"] : null;

if ($userlogin) {
    $sql = "SELECT gv.*, bm.TenBM
            FROM giangvien gv
            JOIN bomon bm ON gv.MaBM = bm.MaBM
            WHERE gv.Email = '" . $userlogin . "'";
    
    $result = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error($conn));
    $row = mysqli_fetch_array($result);
} else {
    // Handle the case where the user is not logged in (if needed)
    $row = null;
}
?>

<?php
if ($row) {
    echo '
        <div class="full-ttcn">
            <div class="ttcn-td">
                <label>THÔNG TIN CÁ NHÂN</label>
            </div>
            <div class="ttcn">
                <div class="ttcn-tt">
                    <div class="ttcn-tt-left">
                        <label>Mã giảng viên:</label>
                        <label>Họ và tên:</label>
                        <label>Bộ môn:</label>
                        <label>Điện thoại:</label>
                        <label>Email:</label>
                     
                    </div>
                    <div class="ttcn-tt-right">
                        <label>' . $row["MaGV"] . '</label>
                        <label>' . $row["TenGV"] . '</label>
                        <label>' . $row["TenBM"] . '</label>
                        <label>' . $row["SdtGV"] . '</label>
                        <label>' . $row["Email"] . '</label>
                        
                    </div>
                </div>
            </div>
        </div>
    ';
} else {
    echo 'User not found or not logged in.';
}
?>
<style>
    .ttcn-td{
    padding: 20px;
    color: #3593D8;
    display: flex;
    justify-content: center;
    }

    .ttcn-td>label{
        font-size: 20px;
        font-weight: 600;
    }
    .ttcn-tt{
        border-radius: 5px;
    margin: 0 auto;
        gap: 20px;
    display: flex;
    background-color: #f2f2f2;
    justify-content: center;
    width: 40%;
    }
    .ttcn-tt-left, .ttcn-tt-right{
        padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.ttcn-tt-left >label{
    font-weight: 600;
    display: flex;
    justify-content: flex-end;

}

.frame2b :nth-child(1){
            
                font-weight: 800;
            }
            </style>