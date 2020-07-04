<?php


namespace core;


use core\Db;

class Model
{
    public function __construct()
    {
        Db::instance();
    }
}