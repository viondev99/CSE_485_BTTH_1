<?php

include_once '../models/BookList.php';
class BookController
{
    private $model;

    public function __construct()
    {
        $this->model = new BookList();
    }

    public function getListBook()
    {
        return $this->model->getListBook();
    }
}
