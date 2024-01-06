<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


include("ketnoi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $MaCT = $_POST["MaCT"];
    $MaGV = $_POST["MaGV"];
    $Trangthai = $_POST["Trangthai"];

    // Kiểm tra xem có phân công giảng viên cho lịch thi này chưa
    $check = "SELECT * FROM phancong WHERE MaCT = '$MaCT' and MaGV = '$MaGV'";
    $checkkq = mysqli_query($conn, $check);

    if (mysqli_num_rows($checkkq) > 0) {
        // Nếu đã có phân công, thực hiện UPDATE
        $updatesql = "UPDATE phancong SET Trangthai = '$Trangthai'  WHERE MaCT = '$MaCT'and MaGV = '$MaGV' ";
        $updatekq = mysqli_query($conn, $updatesql);

        if ($updatekq) {
            // Kiểm tra xem trạng thái có chuyển sang 'Đã duyệt' không
            if ($tinhtrang == 'Đã duyệt') {
                // Lấy thông tin giảng viên từ CSDL
                $gv_info_query = "SELECT TenGV, Email FROM giangvien WHERE MaGV = '$MaGV'";
                $gv_info_result = mysqli_query($conn, $gv_info_query);
                $gv_info = mysqli_fetch_assoc($gv_info_result);

                // Lấy thông tin chi tiết lịch thi từ CSDL
                $chamthi_info_query = "SELECT ct.MaCT, ct.MaLop, ct.MaMH, gv.TenGV, ht.Hthuc, ht.Buoi, ht.Gia, ct.SLbai, pc.Trangthai, l.TenLop, mh.TenMH, hk.TenHK, nk.TenNK, ct.Ngaynhan, ct.Ngaytra
                                    FROM chamthi ct
                                    LEFT JOIN phancong pc ON ct.MaCT = pc.MaCT
                                    LEFT JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
                                    LEFT JOIN giangvien gv ON pc.MaGV = gv.MaGV
                                    LEFT JOIN lop l ON ct.MaLop = l.MaLop
                                    LEFT JOIN monhoc mh ON ct.MaMH = mh.MaMH
                                    LEFT JOIN hocky hk ON ct.MaHK = hk.MaHK
                                    LEFT JOIN nienkhoa nk ON ct.MaNK = nk.MaNK";
                
                $chamthi_info_result = mysqli_query($conn, $chamthi_info_query);
                $chamthi_info = mysqli_fetch_assoc($chamthi_info_result);

                require 'vendor/autoload.php'; // Đường dẫn đến file autoload.php của Composer

                // $mail = new PHPMailer(true);

                try {
                    // Server settings
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com'; // SMTP server
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'lehthaoz99@gmail.com'; // SMTP username
                    $mail->Password   = 'ysya yppu gtib pedm'; // SMTP password
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port       = 465; // Port for SMTPS

                    // Recipients
                    $mail->setFrom('lehthaoz99@gmail.com', 'KHOA KTCN');
                    $mail->addAddress($gv_info['email'], $gv_info['hotengv']);

                    // Content
                    $mail->isHTML(true);
                    $mail->CharSet = 'UTF-8';
                    $mail->Subject = 'Thông báo phân công coi thi đã được duyệt';

                    // Nội dung email với thông tin chi tiết lịch thi
                    $mail->Body    = "Xin chào {$gv_info['hotengv']},<br><br>"
                                    . "Lịch thi của bạn đã được duyệt:<br>"
                                    . "- Môn coi thi: {$lichthi_info['tenmon']}<br>"
                                    . "- Lớp: {$lichthi_info['tenlop']}<br>"
                                    . "- Ngày thi: {$lichthi_info['ngaythi']}<br>"
                                    . "- Tiết thi: {$lichthi_info['tietthi']}<br>"
                                    . "- Phòng thi: {$lichthi_info['phongthi']}<br><br>"
                                    . "Vui lòng sắp xếp thời gian để tham gia coi thi.";

                    $mail->send();
                    echo 'Email đã được gửi thành công.';
                // } catch (Exception $e) {
                    echo "Không thể gửi email: {$mail->ErrorInfo}";
                }
            }

            echo ("<script language=javascript>
                    alert('Sửa giảng viên coi thi thành công');
                    window.location='QLPCCT.php';
                </script>");
        } else {
            echo "Không thể sửa phân công giảng viên coi thi: " . mysqli_error($conn);
        }
    } else {
        // Nếu chưa có phân công, thực hiện INSERT
        $insertsql = "INSERT INTO phancong (MaCT, MaGV, Trangthai) VALUES ('$MaCT', '$MaGV', '$Trangthai')";
        $insertkq = mysqli_query($conn, $insertsql);

        if ($insertkq) {
            echo ("<script language=javascript>
                    alert('Phân công coi thi thành công');
                    window.location='QLPCCT.php';
                </script>");

            // Kiểm tra xem trạng thái có chuyển sang 'Đã duyệt' không
            if ($tinhtrang == 'Đã duyệt') {
                // Lấy thông tin giảng viên từ CSDL
                $gv_info_query = "SELECT TenGV, Email FROM giangvien WHERE MaGV = '$MaGV'";
                $gv_info_result = mysqli_query($conn, $gv_info_query);
                $gv_info = mysqli_fetch_assoc($gv_info_result);

                // Lấy thông tin chi tiết lịch thi từ CSDL
                $lichthi_info_query = "SELECT ct.MaCT, ct.MaLop, ct.MaMH, gv.TenGV, ht.Hthuc, ht.Buoi, ht.Gia, ct.SLbai, pc.Trangthai, l.TenLop, mh.TenMH, hk.TenHK, nk.TenNK, ct.Ngaynhan, ct.Ngaytra
                                        FROM chamthi ct
                                        LEFT JOIN phancong pc ON ct.MaCT = pc.MaCT
                                        LEFT JOIN hinhthuc ht ON ct.MaHT = ht.MaHT
                                        LEFT JOIN giangvien gv ON pc.MaGV = gv.MaGV
                                        LEFT JOIN lop l ON ct.MaLop = l.MaLop
                                        LEFT JOIN monhoc mh ON ct.MaMH = mh.MaMH
                                        LEFT JOIN hocky hk ON ct.MaHK = hk.MaHK
                                        LEFT JOIN nienkhoa nk ON ct.MaNK = nk.MaNK";
                $lichthi_info_result = mysqli_query($conn, $lichthi_info_query);
                $lichthi_info = mysqli_fetch_assoc($lichthi_info_result);

                require 'vendor/autoload.php'; // Đường dẫn đến file autoload.php của Composer

                $mail = new PHPMailer(true);

                try {
                    // Server settings
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com'; // SMTP server
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'lehthaoz99@gmail.com'; // SMTP username
                    $mail->Password   = 'ysya yppu gtib pedm'; // SMTP password
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port       = 465; // Port for SMTPS

                    // Recipients
                    $mail->setFrom('lehthaoz99@gmail.com', 'KHOA KTCN');
                    $mail->addAddress($gv_info['email'], $gv_info['hotengv']);

                    // Content
                    $mail->isHTML(true);
                    $mail->CharSet = 'UTF-8';
                    $mail->Subject = 'Thông báo Lịch coi thi bạn đăng ký đã được duyệt';

                    // Nội dung email với thông tin chi tiết lịch thi
                    $mail->Body    = "Xin chào {$gv_info['hotengv']},<br><br>"
                                    . "Lịch thi của bạn đã được duyệt:<br>"
                                    . "- Môn coi thi: {$lichthi_info['tenmon']}<br>"
                                    . "- Lớp: {$lichthi_info['tenlop']}<br>"
                                    . "- Ngày thi: {$lichthi_info['ngaythi']}<br>"
                                    . "- Tiết thi: {$lichthi_info['tietthi']}<br>"
                                    . "- Phòng thi: {$lichthi_info['phongthi']}<br><br>"
                                    . "Vui lòng sắp xếp thời gian để tham gia coi thi.";
                    $mail->send();
                    echo 'Email đã được gửi thành công.';
                } catch (Exception $e) {
                    echo "Không thể gửi email: {$mail->ErrorInfo}";
                }
            }
        } else {
            echo "Không thể thêm mới phân công giảng viên coi thi: " . mysqli_error($conn);
        }
    }
} else {
    // If machitiet doesn't exist, show an error message
    echo "Machitiet does not exist!";
}

include("footer_admin.php");
?>
