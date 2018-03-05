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
    public function __construct($path)
    {
        $this->path = $path;
    }
    public function getData()
    {
        $this->bookArray = file($this->path);
        return $this->bookArray;
    }
    public function append($text)
    {
        $this->bookArray[] = $text;
    }
    public function save()
    {
        $this->res = fopen($this->path, 'r+');
        foreach ($this->bookArray as $recordLine) {
            fwrite($this->res, $recordLine);
        }
        fwrite($this->res, "\n");
    }
}