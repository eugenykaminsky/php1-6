<?php
/**
 * Created by PhpStorm.
 * User: NOASU
 * Date: 06.03.2018
 * Time: 15:55
 */

class Uploader
{
    public function __construct($name)
    {
        $this->name = $name;
         //В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
    }
    public function isUploaded()
    {
        //Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
    }
    public function upload()
    {
        //Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
    }
}