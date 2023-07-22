<?php

include_once '../controllers/BookController.php';

$bookController = new BookController();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div>
        <form method="POST" action="index.php" >
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tên sách</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name='bookName'>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tác giả</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name='author'>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nhà xuất bản</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name='publish'>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Năm xuất bản</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name='yearPublish'>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Số hiệu ISBN</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name='isbn'>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Danh sách chương</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name='listSection'>
            </div>
            <div style='display: flex; align-items: center; justify-content: center; margin-top: 40px'>
                <button type="submit">Thêm</button>
            </div>
        </form>
    </div>
</body>

</html>