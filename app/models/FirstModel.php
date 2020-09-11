<?php

namespace Models;

use Core\Model;

class FirstModel extends Model
{
    public static function getData()
    {
        $pdo = self::getInstance();
        $data = $pdo->query("SELECT catalog.entity_id, catalog.sku, catalog.created_at, eav.attribute_code, catalogText.value FROM catalog_product_entity_text AS catalogText 
	INNER JOIN catalog_product_entity AS catalog ON catalogText.row_id = catalog.row_id
    	INNER JOIN eav_attribute AS eav ON catalogText.attribute_id = eav.attribute_id
        	WHERE catalogText.attribute_id = '104'");

        return $data;
    }
}