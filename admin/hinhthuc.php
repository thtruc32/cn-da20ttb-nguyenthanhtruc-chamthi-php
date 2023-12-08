<?php
include("header.php");
?>
            <div class="h2text">
            <h2>
                <ion-icon name="folder"></ion-icon>
                QUẢN LÝ HÌNH THỨC
            </h2>
            </div>
            
                <div class="btn">
                    <button>
                        <ion-icon name="add-circle"></ion-icon>
                        Thêm hình thức
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
                        <th>Mã hình thức</th>
                        <th>Tên hình thức</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>1</td>
                        <td>Lý thuyết</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>2</td>
                        <td>Thực hành</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
                </table>
            </div>
            <style>
            .admin_tab :nth-child(5){
                background-color: #3593D8;
                color: white;
            }
            </style>
            <?php
            
include("footer.php");
?>