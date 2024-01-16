<?php
include("headerad.php");
?>
<!-- 
<link rel="stylesheet" href="chinhsua.css" type="text/css"/> -->

<form enctype="multipart/form-data" action="xulythemht.php" name="xlythemht" method="post">
<style>
    .khung {
    background: #F5F5F5;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 2px solid #F5F5F5;
    width: 80%;
    margin: 7rem auto;
    gap: 20px;
    padding: 50px;
    border-radius: 5px;
}

.them1 {

flex: 1;
display: flex;
color:#3593D8;
font-weight: 700;
align-items: center;
gap: 50px;
}

.them1a{
    display: flex;
    flex-direction: column;
    padding: 5px 10px;
    align-items: flex-start;
    gap: 5px;

}

.them2{

flex: 1;
display: flex;
color:#3593D8;
font-weight: 700;
align-items: center;
gap: 50px;
}

.them2a{
    display: flex;
    flex-direction: column;
    padding: 5px 10px;
    align-items: flex-start;
    gap: 5px;

}

input[type="text" i] {
height: 30px;
border: 1px solid #3593D8;
border-radius: 3px;
width: 200px;
}

.luubtn{
display: flex;
flex-direction: column;
align-items: center;
padding: 10px 20px;
}

.luubtn input{
padding: 5px 10px;
color: white;
background-color: #3593D8;
border: 1px solid white;
font-weight: bold;
border-radius: 3px;
}

.them1a select{
    width: 200px;
    height: 30px;
    border: 1px solid #3593D8;
    border-radius: 3px;
    
}

</style>
</style>
<div class="text">
        <h2>
        <ion-icon name="add-circle"></ion-icon>
            THÊM HÌNH THỨC
        </h2>
    </div>

    <div class="khung">
        <div class="them1">
            <div class="them1a">
                <span>Mã hình thức</span>
                <input type="text" name="MaHT" readonly/>
            </div>
            <div class="them1a">
                <span>Tên hình thức</span>
                <input type="text" name="TenHT" />
            </div>
        </div>
        <div class="them2">
            <div class="them2a">
                <span>Hình thức</span>
                <select name="Hthuc">
                        <option value="Tự luận">Tự luận</option>
                        <option value="Trắc nghiệm">Trắc nghiệm</option>
                        <option value="Kết thúc học phần sau đại học">Kết thúc học phần sau đại học</option>
                        <option value="Chấm phản biện">Chấm phản biện</option>
                        <option value="Chấm vấn đáp, thực hành">Chấm vấn đáp, thực hành</option>

                    </select>
            </div>
            <div class="them2a">
                <span>Buổi</span>
                <input type="text" name="Buoi"/>
            </div>
            <div class="them2a">
                <span>Đơn giá</span>
                <input type="text" name="Gia"/>
            </div>
        </div>

        <div class="luubtn">
            <input type="submit" name="luu" value="Lưu"/>
        </div>
    </div>
</form>

<style>
            .admin_tab > :nth-child(5){
                background-color: #3593D8;
                color: white;
            }
            </style>
<?php
include("footer.php");
?>