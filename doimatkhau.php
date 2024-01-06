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

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the form data
        $oldPassword = $_POST["oldPassword"];
        $newPassword = $_POST["newPassword"];
        $confirmPassword = $_POST["confirmPassword"];

        // Validate the old password (you might want to enhance this)
        if ($oldPassword == $row["Matkhau"]) {
            // Validate the new password (you might want to enhance this)
            if ($newPassword == $confirmPassword) {
                // Update the password in the database
                $updateSql = "UPDATE giangvien SET Matkhau = '$newPassword' WHERE Email = '$userlogin'";
                mysqli_query($conn, $updateSql) or die("Không thể cập nhật mật khẩu " . mysqli_error($conn));
                
                // Inform the user that the password has been updated
                echo ("<script language=javascript>
                    alert('Mật khẩu của bạn đã được cập nhật');
                    window.location='thongtincanhan.php';
                    </script> ");
            } else {
                echo ("<script language=javascript>
                    alert('Mật khẩu mới không khớp! Hãy nhập lại mật khẩu mới');
                    </script>");
            }
        } else {
            echo ("<script language=javascript>
                    alert('Mật khẩu cũ không đúng! Hãy nhập lại mật khẩu');
                    </script>");
        }
    }
} else {
    // Handle the case where the user is not logged in (if needed)
    $row = null;
}
?>

<!-- The rest of your HTML code remains unchanged -->
<div class="full-dmk">
    <form method="post" action="">
        <div class="dmk-td">
            <label>CÓ THỂ THAY ĐỔI MẬT KHẨU ĐỂ BẢO MẬT TÀI KHOẢN</label>
        </div>
        <div class="btn-dmk">
            <div class="lb">
                <label>Nhập mật khẩu cũ:</label>
                <input type="password" name="oldPassword" required>
            </div>
            <div class="lb">
                <label>Nhập mật khẩu mới:</label>
                <input type="password" name="newPassword" required>
            </div>
            <div class="lb">
                <label>Nhập lại mật khẩu mới:</label>
                <input type="password" name="confirmPassword" required>
            </div>
        </div>
        <div class="btn-dmk-luu">
            <input type="submit" value="Lưu lại">
            <a  type="reset" href="thongtincanhan.php">Hủy bỏ</a>
        </div>
    </form>
</div>
<style>
 .btn-dmk-luu > a{
    font-size: 13px;
    display: flex;
    text-decoration: none;
    background-color: #3593D8;
    border: none;
    width: 70px;
    height: 25px;
    border-radius: 3px;
    color: white;
    font-weight: 500;
    align-items: center;
    justify-content: center;
 }
    .btn-dmk-luu > input{
        background-color: #3593D8; 
        border:none; 
        width:60px; 
        height: 25px;
        border-radius: 3px;
        color: white;
        font-weight: 500;
    }
    .btn-dmk-luu{
        gap: 20px;
    margin-top: 40px;
    display: flex;
    justify-content: center;
    }

    .dmk-td{
        margin-bottom: 50px;
        font-weight: 600;
    }

    .lb{
        display: flex;
    gap: 20px;
    align-items: center;
    }

    .lb>label{
        display: flex;
    }

    .lb>input{
        height: 30px;
    }

    .full-dmk{
        border-radius: 5px;
    font-family: -webkit-body;
    padding: 50px;
    display: flex;
    margin: 40px auto;
    width: 50%;
    height: auto;
    background-color: #f2f2f2;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    }

    .btn-dmk{
        padding-right: 50px;
    gap: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    }
.frame2a :nth-child(3){
                background-color: white;
                color: #3593D8;
                height: 50px;
                font-weight: 600;
            }
</style>