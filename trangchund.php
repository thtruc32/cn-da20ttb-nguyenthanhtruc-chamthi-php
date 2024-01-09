<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tcgv.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>

<?php
    include("ketnoi.php");
    session_start();
    $sql = "SELECT * from giangvien ";
    if(isset($_SESSION["giangvien"])){
        $userlogin = $_SESSION["giangvien"];
        $sql2 = "SELECT * from giangvien where Email='" . $userlogin . "'";
        $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error());
        $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
        $giangviens = mysqli_fetch_array($kq); //lấy list các admin
        $giangvien_login =  mysqli_fetch_array($kq2); //lấy 1 trong list admin

    }else{
        
    }
    
    
   

    ?>
    <div class="frame">
        <div class="frame1">
            <a href="">
                <span>Trang chủ TVU</span>
            </a>
            <a href="">
                <span>Cổng thông tin sinh viên</span>
            </a>
            <a href="">
                <span>Phòng đào tạo</span>
            </a>
            <a href="">
                <span>Phòng khảo thí</span>
            </a>
            <label class="dn">
                <a href="dangnhap.php">
                    <span>Đăng nhập</span>
                </a>
            </label>
        </div>
        <div class="biaset">
            <img src="./hinh/biaset.png"/>
        </div>
        <div class="frame2">
            <a href="">
                <span>TRANG CHỦ</span>
            </a>
            <a href="https://ktcn.tvu.edu.vn/gioi-thieu/gioi-thieu-khoa/1.html">
                <span>GIỚI THIỆU</span>
            </a>
            <a href="">
                <span>HOẠT ĐỘNG TVU</span>
            </a>
            <a href="lichchamthind.php">
                <span>LỊCH CHẤM THI</span>
            </a>
        </div>
        <div class="frame3">
            <button class="clickleft" onclick="plusDivs(-1)">&#10094;</button>
                <img class="mySlides" src="./hinh/anh1.jpg" style="width:60%; height: 300px;">
                <img class="mySlides" src="./hinh/anh2.jpg" style="width:60%; height: 300px;">
                <img class="mySlides" src="./hinh/anh3.jpg" style="width:60%; height: 300px;">
            <button class="clickright" onclick="plusDivs(1)">&#10095;</button>
        </div>
        <div class="frame4">
            <span>GIỚI THIỆU KHOA</span>
            <label>KHOA KỸ THUẬT VÀ CÔNG NGHỆ, THÀNH TỰU VÀ PHÁT TRIỂN</label>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Với sự phát triển của kỹ thuật hiện đại, Kỹ thụât và Công nghệ đóng một vai trò rất quan trọng trong phát triển công nghiệp, Khoa Kỹ thuật và Công nghệ (KT&CN) được thành lập theo quyết định số: 179/QĐ-ĐHTV ngày 20/10/2006 của Hiệu trưởng trường Đại học Trà Vinh với 5 đơn vị: Bộ môn Công nghệ Thông tin, bộ môn Điện - Điện tử, bộ môn Cơ khí - Động lực, bộ môn Xây dựng và Văn phòng Khoa. Hiện tại, đội ngũ của Khoa có 80 viên chức, tất cả họ đều trẻ, năng động và ham học hỏi. Vì thế, Khoa tạo nhiều cơ hội để họ được bồi dưỡng và nâng cao nghề nghiệp. Hằng năm, Khoa tuyển mới trên 500 sinh viên. Đặc biệt, số lượng sinh viên tìm được việc làm sau 1 năm tốt nghiệp là trên 90%.</p>
            <a href="https://ktcn.tvu.edu.vn/gioi-thieu/gioi-thieu-khoa/1.html">Xem thêm</a>
        </div>
        <div class="frame5">
            <h3>TIN TỨC</h3>
            <div class="new">
                <div class="new1">
                    <img src="./hinh/new1.jpg"/>
                </div>
                <div class="newtxt">
                    <p><a href="https://ktcn.tvu.edu.vn/tin-tuc/bai-viet/chia-se-kinh-nghiem-thiet-ke-thiet-bi-tang-song-ble-bluetooth-low-energy/144.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chia sẻ kinh nghiệm thiết kế thiết bị tăng sóng BLE (bluetooth low energy)</a></p>
                    <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ngày 22.8.2023, Trường Đại học Trà Vinh đón tiếp hai chuyên gia Hoa Kỳ gồm TS. David Nghiêm và Ông Arthur Jason Nghiêm chia sẻ kinh nghiệm...</a>
                    <span><a href="">Xem thêm</a></span>
                </div>
            </div>

            <div class="new">

                <div class="newtxt">
                    <p><a href="https://ktcn.tvu.edu.vn/tin-tuc/bai-viet/giang-vien-khoa-ky-thuat-va-cong-nghe-truong-dai-hoc-tra-vinh-du-hoi-nghi-khoa-hoc-quoc-gia-lan-thu-xvi-nam-2023/145.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Giảng viên Khoa Kỹ thuật và Công nghệ - Trường Đại học Trà Vinh dự Hội nghị khoa học quốc gia lần thứ XVI năm 2023</a></p>
                    <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ngày 28 và 29.9.2023 – Giảng viên khoa Kỹ thuật và Công nghệ, Trường Đại học Trà Vinh tham dự Hội nghị Quốc gia về Nghiên cứu cơ bản và ứng dụng Công nghệ Thông tin lần thứ 16...</a>
                    <span><a href="">Xem thêm</a></span>
                </div>
                <div class="new1">
                    <img src="./hinh/new2.jpg"/>
                </div>
            </div>

            <div class="new">
                <div class="new1">
                    <img src="./hinh/new3.jpg"/>
                </div>
                <div class="newtxt">
                    <p><a href="https://ktcn.tvu.edu.vn/tin-tuc/bai-viet/khoa-ky-thuat-va-cong-nghe-to-chuc-hoi-nghi-kien-toan-ban-chap-hanh-hoi-cuu-sinh-vien-nhiem-ky-2023-2028/146.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khoa Kỹ thuật và Công nghệ tổ chức Hội nghị kiện toàn Ban Chấp hành Hội Cựu Sinh viên nhiệm kỳ 2023-2028</a></p>
                    <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sáng ngày 18/11/2023, Khoa Kỹ thuật và Công nghệ – Trường Đại học Trà Vinh tổ chức Hội nghị kiện toàn Ban Chấp hành Hội Cựu Sinh viên Khoa Kỹ thuật và Công nghệ nhiệm kỳ 2023 - 2028...</a>
                    <span><a href="https://ktcn.tvu.edu.vn/tin-tuc/bai-viet/khoa-ky-thuat-va-cong-nghe-to-chuc-hoi-nghi-kien-toan-ban-chap-hanh-hoi-cuu-sinh-vien-nhiem-ky-2023-2028/146.html">Xem thêm</a></span>
                </div>
            </div>
        </div>
        <div class="frame6">
            <h4>ĐỐI TÁC CỦA CHÚNG TÔI</h4>
            <div class="fr6img">
                <img src="./hinh/img1.png"/>
                <img src="./hinh/img2.jpg"/>
                <img src="./hinh/img3.jpg"/>
                <img src="./hinh/img4.png"/>
            </div>
        </div>
        <div class="chantrangg">
                <span>Design by Nguyễn Thanh Trúc</span>
        </div>
    </div>

    <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
</html>
<style>
    .frame2 > :nth-child(1){
                background-color: white;
                color: #3593D8;
                height: 50px;
                font-weight: 600;
            }
            </style>
