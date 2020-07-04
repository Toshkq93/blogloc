<?php

namespace app\models;


use core\Model;
use RedBeanPHP\R;

class MainModel extends Model
{

    public function getAllStudents(){
         return R::findAll('schoolchilds', 'ORDER BY lastname');

    }

    public function delete($id){
            return R::trash('schoolchilds', $id);
    }

    public function find($id){
            return R::getAssoc("SELECT * FROM schoolchilds WHERE id = ?", [$id]);
    }

    public function update($id, $data){
            extract($data);
            R::exec("UPDATE schoolchilds SET lastname='$lastname', firstname='$firstname', patronymic='$patronymic', birthday=
'$birthday' WHERE id=?", [$id]);
            return true;
    }

    public function store($data){
        extract($data);
            R::exec("INSERT INTO schoolchilds (firstname, lastname, patronymic, birthday) VALUES ('$firstname', '$lastname', '$patronymic', '$birthday')");
            return true;
        }
}