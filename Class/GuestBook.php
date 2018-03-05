<?php
/**
 * Created by PhpStorm.
 * User: Pleshner
 * Date: 05.03.2018
 * Time: 21:35
 */

class GuestBook
{
    public $bookArray;
    public $res;
    protected $guestBook;
    public function __construct($path)
    {
        $this->guestBook = $path;
    }
    public function getData()
    {
        $this->bookArray = file($this->guestBook);
        return $this->bookArray;
    }
    public function append($text)
    {
        $this->bookArray[] = $text;
    }
    public function save()
    {
        $this->res = fopen($this->guestBook, 'r+');
        foreach ($this->bookArray as $recordLine) {
            fwrite($this->res, $recordLine);
        }
        fwrite($this->res, "\n");
    }
}