<?php
include("header.php");
?>
            <div class="h2text">
            <h2>
                <ion-icon name="people"></ion-icon>
                QUẢN LÝ GIẢNG VIÊN
            </h2>
            </div>
            
                <div class="btn">
                    <button>
                        <ion-icon name="add-circle"></ion-icon>
                        Thêm giảng viên
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
                        <th>Mã giảng viên</th>
                        <th>Mã bộ môn</th>
                        <th>Tên giảng viên</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th>Quyền</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>1</td>
                        <td>01</td>
                        <td>Nguyễn Văn A</td>
                        <td>12345678</td>
                        <td>nguyena@gmail.com</td>
                        <td>123456</td>
                        <td>gv</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>2</td>
                        <td>02</td>
                        <td>Nguyễn Thanh Trúc</td>
                        <td>564520610</td>
                        <td>thanhtrucn35@gmail.com</td>
                        <td>123456</td>
                        <td>admin</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
                </table>
            </div>

            <style>
            .admin_tab :nth-child(2){
                background-color: #3593D8;
                color: white;
            }
            </style>

            <?php
            
include("footer.php");
?>