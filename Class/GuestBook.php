<?php
/**
 * Created by PhpStorm.
 * User: Pleshner
 * Date: 05.03.2018
 * Time: 21:35
 */

class GuestBook
{
    public $line;
    public $res;
    protected $file;
    public function __construct($data)
    {
        $this->file = $data;
    }
    public function getData()
    {
        $this->line = file($this->file);
        return $this->line;
    }
    public function append($text)
    {
        $this->line[] = $text;
    }
    public function save()
    {
        $this->res = fopen($this->file, 'r+');
        foreach ($this->line as $recordLine) {
            fwrite($this->res, $recordLine);
        }
        fwrite($this->res, "\n");
    }
}