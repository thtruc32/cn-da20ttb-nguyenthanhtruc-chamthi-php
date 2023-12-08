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
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>1</td>
                        <td>DA20TTB</td>
                        <td>220236</td>
                        <td>1</td>
                        <td>2</td>
                        <td>1</td>
                        <td>07/12/2023</td>
                        <td>14/12/2023</td>
                        <td>36</td>
                        <td>4000</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>2</td>
                        <td>DA20CNOTB</td>
                        <td>210332</td>
                        <td>2</td>
                        <td>1</td>
                        <td>1</td>
                        <td>07/12/2023</td>
                        <td>14/12/2023</td>
                        <td>25</td>
                        <td>5000</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
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