<?php


function getSimiliarProducts($exceptItems, $missingPrice, $limit){
    $exceptIds = array(0); // nula, aby pole pri pouziti v dotazu nebylo prazdne

    foreach($exceptItems as $item){
        $exceptIds[] = $item->id_product; //opravit
    }
    
    $result = \dibi::query('SELECT [p].[id]
                            FROM c_products AS p
                            WHERE   p.deleted = 0
                                    AND p.price >= %i
                                    AND p.price < %i
                                    AND p.id NOT IN %in
                            LIMIT 0, %i 
                           ', $missingPrice * 0.55, $missingPrice * 0.7, $exceptIds, $limit)->fetchAll();
    
    $products = array();
    
    foreach($result as $row){
        $products[] = new Product($usedResult[$i]['id']);
    }

    shuffle($products);

    return $products;
}
