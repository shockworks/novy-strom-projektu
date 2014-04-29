<?php


function getCategoriesAlphabetically($listId, $secondaryListIds){
    $res = dibi::query('SELECT DISTINCT [l].[id_category]
                        FROM [c_link_category_lists] AS [l]
                        LEFT JOIN [c_categories] AS [c] ON [c].[id] = [l].[id_category]
                        WHERE [l].[id_list] = %i AND [c].[active] = 1
                       ', $listId);
    
    $categories = array();

    if (count($res)>0){
        foreach ($res as $item){
            $categories[] = new Category($item->id_category);
        }
    }
  
    $return = array('all' => $categories);

    if(!empty($secondaryListIds)){
        foreach($categories as $key => $category){
            $categoryLists = $category->getLists();
            
            $ok = false;
            foreach($categoryLists as $categoryList){
                if(in_array($categoryList->id, $secondaryListIds)){
                    $ok = true;
                }
            }
            
            if(!$ok){
                unset($categories[$key]);
            }
        }
    }
    
    usort( $categories, 'categoriesAlphabeticallySort' );

    $return['filtered'] = $categories;
    
    return $return;
}

function categoriesAlphabeticallySort( $a, $b ) {
    $aName = normalizeString($a->name);
    $bName = normalizeString($b->name);
    
    return strcmp(sortVal($aName),sortVal($bName));
}

function normalizeString($string){
    $prevodni_tabulka = Array(
        'ä'=>'a',
        'Ä'=>'A',
        'á'=>'a',
        'Á'=>'A',
        'à'=>'a',
        'À'=>'A',
        'ã'=>'a',
        'Ã'=>'A',
        'â'=>'a',
        'Â'=>'A',
        'č'=>'c',
        'Č'=>'C',
        'ć'=>'c',
        'Ć'=>'C',
        'ď'=>'d',
        'Ď'=>'D',
        'ě'=>'e',
        'Ě'=>'E',
        'é'=>'e',
        'É'=>'E',
        'ë'=>'e',
        'Ë'=>'E',
        'è'=>'e',
        'È'=>'E',
        'ê'=>'e',
        'Ê'=>'E',
        'í'=>'i',
        'Í'=>'I',
        'ï'=>'i',
        'Ï'=>'I',
        'ì'=>'i',
        'Ì'=>'I',
        'î'=>'i',
        'Î'=>'I',
        'ľ'=>'l',
        'Ľ'=>'L',
        'ĺ'=>'l',
        'Ĺ'=>'L',
        'ń'=>'n',
        'Ń'=>'N',
        'ň'=>'n',
        'Ň'=>'N',
        'ñ'=>'n',
        'Ñ'=>'N',
        'ó'=>'o',
        'Ó'=>'O',
        'ö'=>'o',
        'Ö'=>'O',
        'ô'=>'o',
        'Ô'=>'O',
        'ò'=>'o',
        'Ò'=>'O',
        'õ'=>'o',
        'Õ'=>'O',
        'ő'=>'o',
        'Ő'=>'O',
        'ř'=>'r',
        'Ř'=>'R',
        'ŕ'=>'r',
        'Ŕ'=>'R',
        'š'=>'s',
        'Š'=>'S',
        'ś'=>'s',
        'Ś'=>'S',
        'ť'=>'t',
        'Ť'=>'T',
        'ú'=>'u',
        'Ú'=>'U',
        'ů'=>'u',
        'Ů'=>'U',
        'ü'=>'u',
        'Ü'=>'U',
        'ù'=>'u',
        'Ù'=>'U',
        'ũ'=>'u',
        'Ũ'=>'U',
        'û'=>'u',
        'Û'=>'U',
        'ý'=>'y',
        'Ý'=>'Y',
        'ž'=>'z',
        'Ž'=>'Z',
        'ź'=>'z',
        'Ź'=>'Z'
      );

      $string = strtr($string, $prevodni_tabulka);
      
      $string = strtolower($string);
      if(strtolower(substr($string,0,4)) == 'the '){
        $string = strtolower(substr($string,4));
      }
      
      return $string;
}


    function sortVal($string){
        $val = '';
        
        for($i = 0; $i < mb_strlen($string); $i++){
            $partVal = ord($string{$i});
            
            if($partVal >= 48 && $partVal <= 57){
                $partVal -= 47;
            }
            
            if($i < mb_strlen($string) - 1 && $string{$i} == 'c' && $string{$i+1} == 'h'){
                $partVal = 205;
            }
            elseif($i > 0 && $string{$i} == 'h' && $string{$i-1} == 'c'){
                continue;
            }
            elseif($partVal >= 97 && $partVal <= 122){
                $partVal += 100;
                
                if($partVal >= 205){
                    $partVal++;
                }
            }
            
            $val .= str_pad($partVal, 3, "0", STR_PAD_LEFT);
        }
        
        return $val;
    }
    