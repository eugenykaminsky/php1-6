<?php
/**
 * Created by PhpStorm.
 * User: NOASU
 * Date: 06.03.2018
 * Time: 15:55
 */

class Uploader
{
    public $name;
    public function __construct($name)
    {
        //В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
        $this->name = $name;
    }
    public function isUploaded()
    {
        //Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
        if($_FILES[$this->name]['tmp_name']){
            return true;
        } else {
            return false;
        }

    }
    public function upload()
    {
        //Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
        if ($this->isUploaded()) {
            $path =  __DIR__ ;
            $img = $_FILES[$this->name]['name'];
            $res = move_uploaded_file(
                        $_FILES[$this->name]['tmp_name'],
                        "$path/$img"
                    );
        }else {
            echo "привет";
        }
    }


}