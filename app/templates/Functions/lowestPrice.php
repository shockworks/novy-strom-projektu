<?php

function getLowestPrice($catId){
    
    $innerCategories = \Categories::getTreeCategory(0, $catId);

    $catsIds = array();

    foreach($innerCategories as $row){
        $catsIds[] = $row->id;
    }

    $catsIds[] = $catId;
    
    //var_dump($catsIds);

    return   \dibi::query('SELECT MIN([p].[price])

        FROM [c_products] AS [p]

        LEFT JOIN [c_link_product_category] AS [pc] ON [pc].[id_product] = [p].[id]

        WHERE [pc].[id_category] IN %in 
            AND [pc].[main_category] = "true"', $catsIds)->fetchSingle();


}
