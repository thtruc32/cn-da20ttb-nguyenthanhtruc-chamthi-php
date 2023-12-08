<?php
include("header.php");
?>
            <div class="h2text">
            <h2>
                <ion-icon name="extension-puzzle"></ion-icon>
                QUẢN LÝ NIÊN KHÓA
            </h2>
            </div>
            
                <div class="btn">
                    <button>
                        <ion-icon name="add-circle"></ion-icon>
                        Thêm niên khóa
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
                        <th>Mã niên khóa</th>
                        <th>Tên niên khóa</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>2</td>
                        <td>Năm học 2022 - 2023</td>
                        <td>20/07/2022</td>
                        <td>11/07/2023</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>1</td>
                        <td>Năm học 2023 - 2024</td>
                        <td>09/06/2023</td>
                        <td>15/10/2025</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
                </table>
            </div>
            <style>
            .admin_tab :nth-child(8){
                background-color: #3593D8;
                color: white;
            }
            </style>
            <?php
            
include("footer.php");
?>