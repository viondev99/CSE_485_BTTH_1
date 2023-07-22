<?php

include_once 'Book.php';
class BookList extends Book
{
    private $book = [];

    public function __construct()
    {
        $this->book = [
            new Book("sach1", "tacgia1", "nhaxb1", 2023, "isbn1", ["chuong1", "chuong2"]),
            new Book("sach2", "tacgia1", "nhaxb1", 2023, "isbn2", ["chuong1", "chuong2"]),
            new Book("sach3", "tacgia1", "nhaxb1", 2023, "isbn3", ["chuong1", "chuong2"]),
            new Book("sach4", "tacgia1", "nhaxb1", 2023, "isbn4", ["chuong1", "chuong2"]),
        ];
    }
    public function getListBook()
    {

        return $this->book;
    }
}
