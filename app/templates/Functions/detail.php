<?php
/*
function getInterestingProducts($sourceProducts, $limit){
    $exceptIds = array(0); // nula, aby pole pri pouziti v dotazu nebylo prazdne
    $inCategories = array();

    $sum = 0;
    foreach($sourceProducts as $product){
        if(!in_array($product->id_main_category, $inCategories)){
            $inCategories[] = $product->id_main_category;
        }

        $sum += $product->price;
        $exceptIds[] = $product->id;
    }

$avg = $sum / count($sourceProducts);


    
    $res = \dibi::query('SELECT [p].[id]
                            FROM c_products AS p
                            LEFT JOIN [c_link_product_category] AS [pc] ON [pc].[id_product] = [p].[id]
                            WHERE   p.deleted = 0
                                    AND p.id NOT IN %in
                                    AND [pc].[id_category] IN %in 
                                    AND [pc].[main_category] = "true"
                            ORDER BY ABS([p].[edit_datetime])        
                            LIMIT 0, %i 
                           ', $exceptIds, $inCategories, $limit)->fetchAll();

    $products = array();
    foreach($res as $row){
        $products[] = new Product($row->id);
    }

    return $products;
    
}*/