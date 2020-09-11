<?php

namespace Models;

use Core\Model;

class SecondModel extends Model
{
    public static function getData()
    {
        $pdo = self::getInstance();
        $data = $pdo->query("SELECT * FROM `catalog_product_entity` WHERE `created_at` >= '2017-09-20 16:03:28'");

        return $data;
    }
}