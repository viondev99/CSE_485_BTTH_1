<?php

include_once 'IBook.php';
class Book implements IBook
{
    private $bookName;
    private $author;
    private $publish;
    private $yearPublish;
    private $isbn;
    private $listSection = [];



    public function __construct($bookName, $author, $publish, $yearPublish, $isbn, $listSection)
    {
        $this->bookName = $bookName;
        $this->author = $author;
        $this->publish = $publish;
        $this->yearPublish = $yearPublish;
        $this->isbn = $isbn;
        $this->listSection = $listSection;
    }
    /**
     * Get the value of bookName
     */
    public function getBookName()
    {
        return $this->bookName;
    }

    /**
     * Set the value of bookName
     *
     * @return  self
     */
    public function setBookName($bookName)
    {
        $this->bookName = $bookName;

        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of publish
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * Set the value of publish
     *
     * @return  self
     */
    public function setPublish($publish)
    {
        $this->publish = $publish;

        return $this;
    }

    /**
     * Get the value of yearPublish
     */
    public function getYearPublish()
    {
        return $this->yearPublish;
    }

    /**
     * Set the value of yearPublish
     *
     * @return  self
     */
    public function setYearPublish($yearPublish)
    {
        $this->yearPublish = $yearPublish;

        return $this;
    }

    /**
     * Get the value of isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of listSection
     */
    public function getListSection()
    {
        return $this->listSection;
    }

    /**
     * Set the value of listSection
     *
     * @return  self
     */
    public function setListSection($listSection)
    {
        $this->listSection = $listSection;

        return $this;
    }
}

