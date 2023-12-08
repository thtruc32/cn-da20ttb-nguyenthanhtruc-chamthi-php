<?php
include("header.php");
?>
            <div class="h2text">
            <h2>
                <ion-icon name="bookmark"></ion-icon>
                QUẢN LÝ BỘ MÔN
            </h2>
            </div>
            
                <div class="btn">
                    <button>
                        <ion-icon name="add-circle"></ion-icon>
                        Thêm bộ môn
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
                        <th>Mã bộ môn</th>
                        <th>Tên bộ môn</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>01</td>
                        <td>Công nghệ thông tin</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td>02</td>
                        <td>Công nghệ cơ khí</td>
                        <td>
                        <button><ion-icon name="trash"></ion-icon> </button>
                        <button><ion-icon name="pencil"></ion-icon></button>
                        </td>
                    </tr>
                </table>
            </div>
        <style>
            .admin_tab :nth-child(1){
                background-color: #3593D8;
                color: white;
            }
        </style>
            <?php
include("footer.php");
?>