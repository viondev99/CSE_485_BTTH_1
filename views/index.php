<?php

include_once '../controllers/BookController.php';

$bookController = new BookController();
$getListBook = $bookController->getListBook();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sách</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Nhà xuất bản</th>
                <th scope="col">Năm xuất bản</th>
                <th scope="col">Số hiệu ISBN</th>
                <th scope="col">Các chương sách</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($getListBook as $index => $value) {
            ?>
                <tr>
                    <th scope="row"><?php echo $index ?></th>
                    <td><?php echo $value->getBookName() ?></td>
                    <td><?php echo $value->getAuthor() ?></td>
                    <td><?php echo $value->getPublish() ?></td>
                    <td><?php echo $value->getYearPublish() ?></td>
                    <td><?php echo $value->getIsbn() ?></td>
                    <td><?php echo implode(', ', $value->getListSection()) ?></td>
                    <td>
                        <div>
                            <form method="POST">
                                <input type="hidden" name="isbn" value="">
                                <button>Sửa</button>

                            </form>
                            <form method="POST">
                                <input type="hidden" name="isbn" value="">
                                <button>Xóa</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div style="display: flex; justify-content: center; margin-top: 50px;">
        <button><a href='/CSE_485_He2023/TH1/BTTH_1/views/formCreate.php' style='text-decoration: none;'>Thêm sách</a></button>
    </div>

</body>

</html>