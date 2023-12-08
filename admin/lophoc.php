<?php
include("header.php");
?>
            <div class="h2text">
            <h2>
                <ion-icon name="business"></ion-icon>
                QUẢN LÝ LỚP HỌC
            </h2>
            </div>
            
                <div class="btn">
                    <button>
                        <ion-icon name="add-circle"></ion-icon>
                        Thêm lớp học
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
                        <th>Mã lớp</th>
                        <th>Tên lớp</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>DA20CNOTB</td>
                        <td>Công nghệ ô tô B</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>DA20TTB</td>
                        <td>Công nghệ thông tin B</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
                </table>
            </div>
            <style>
            .admin_tab :nth-child(3){
                background-color: #3593D8;
                color: white;
            }
            </style>
            <?php
            
include("footer.php");
?>