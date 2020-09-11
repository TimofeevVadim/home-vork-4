<?php

namespace Models;

use Core\Model;

class ThirdModel extends Model
{
    public static function getData()
    {
        $pdo = self::getInstance();
        $data = $pdo->query("SELECT  catalog.entity_id, catalog.sku, catalog.created_at, catalogText.value FROM catalog_product_entity AS catalog 
	INNER JOIN catalog_product_entity_text AS catalogText ON  catalog.row_id = catalogText.row_id
    	WHERE catalog.sku LIKE '%111%'");

        return $data;
    }
}