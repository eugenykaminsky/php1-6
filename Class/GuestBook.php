<?php
/**
 * Created by PhpStorm.
 * User: Pleshner
 * Date: 05.03.2018
 * Time: 21:35
 */

class GuestBook
{
    public $res;
    protected $data;

    public function __construct($path)
    {
        $this->path = $path;
        $this->data = file($this->path);  // В защищенном свойстве data сохраним данные (массив),
        // полученные из файла с данными гостевой книги. Файл находим по абсолютному пути,
        // получаемом из аргумента $path
    }
    public function getData()
    {
        return $this->data; // возвращаю массив записей гостевой книги
    }
    public function append($text)
    {
        $this->data[] = $text;
    }
    public function save()
    {
        file_put_contents($this->path, $this->data);
    }
}