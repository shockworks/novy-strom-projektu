<?php //netteCache[01]000401a:2:{s:4:"time";s:21:"0.31460000 1398766591";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:79:"D:\WEB_SERVER\novy-strom-projektu\app\core\components\SearchForm\template.latte";i:2;i:1398764182;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: D:\WEB_SERVER\novy-strom-projektu\app\core\components\SearchForm\template.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '64gjktkbw1')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
$_ctrl = $_control->getComponent("searchForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ;if (isset($autocomplete) && $autocomplete===TRUE): ?>
<script type="text/javascript">
    $('#frmsearchForm-searchtext').livequery(function(){
        var counterProd = 0;
        $(this).autocomplete({
                minLength: 3,
                source: function( request, response ) {
                    $.ajax({
                        url: <?php echo Nette\Templating\Helpers::escapeJs($_control->link("LoadData")) ?>,
                        dataType: "json",
                        data: {
                            toSearch: encodeURI(request.term)
                        },
                        success: function( data ) {
                            if (data.length != 0) {
                                response( $.map( data, function( item ) {
                                    return {
                                        label: item.name,
                                        value: item.name,
                                        id: item.id,
                                        img: item.fileId,
                                        price: item.price,
                                        url: item.url,
                                        active_as_article: item.active_as_article
                                    };
                                }));
                                //var prodCount = counter - (($('.searchWords').length) + ($('.searchCategory').length) + ($('.searchPage').length));
                                
                                if($('.searchPage').length > 5){
                                    $('.searchPage').first().before("<li id='before-page-li' class='search-panel-li'><div class='triangel'></div><?php echo $template->translate('Nalezeno v článcích') ?>
 (<b>"+$('.searchPage').length+"</b>)<span><?php echo $template->translate('Zobrazit vše') ?></span></li>");
                                    $('.searchPage:gt(4)').hide();
                                }else{
                                    $('.searchPage').first().before("<li id='before-page-li' class='search-panel-li'><div class='triangel'></div><?php echo $template->translate('Nalezeno v článcích') ?></li>");
                                }
                                if($('.searchCategory').length > 5){
                                    $('.searchCategory').first().before("<li id='before-categories-li' class='search-panel-li'><div class='triangel'></div><?php echo $template->translate('Nalezeno v kategoriích') ?>
 (<b>"+$('.searchCategory').length+"</b>)<span><?php echo $template->translate('Zobrazit vše') ?></span></li>");
                                    $('.searchCategory:gt(4)').hide();
                                }else{
                                    $('.searchCategory').first().before("<li id='before-categories-li' class='search-panel-li'><div class='triangel'></div><?php echo $template->translate('Nalezeno v kategoriích') ?></li>");
                                }
                                $('.searchProducts').first().before("<li id='search-panel-li' class='search-panel-li'><div class='triangel'></div><?php echo $template->translate('Nalezeno ve zboží') ?>
 (<b>"+counterProd+"</b>)<span><?php echo $template->translate('Zobrazit vše') ?></span></li>");
                                $('.searchProducers').first().before("<li id='search-panel-li' class='search-panel-li'><div class='triangel'></div><?php echo $template->translate('Nalezeno ve značkách') ?></li>");
                                $('.searchWords').attr('title','');
                            }else{
                                data.push({
                                    value: request.term,
                                    label: "<?php echo $template->translate('Nenalezeno.') ?>"
                                });
                                response(data);
                                $('#search-panel-li b').html(0);
                                $('#search-panel-li span').hide();
                            }
                        }
                    });
                },
                select: function( event, ui ) {
                    // produkt
                    if(ui.item.price != undefined){
                        url = 'http://'+window.location.host+'/detail/?idProduct='+ui.item.id;
                        $('#frmsearchForm-searchtext.text').val(ui.item.label);
                    }else{
                        if(ui.item.id != undefined){
                            // sekce
                            if(ui.item.url != undefined){
                                url = 'http://'+window.location.host+'/section/?arg='+ui.item.id;
                                $('#frmsearchForm-searchtext.text').val(ui.item.value);
                            }else{
                                // producer
                                if(ui.item.active_as_article != undefined){
                                    url = 'http://'+window.location.host+'/search/?limiter[producer][]='+ui.item.id;
                                    $('#frmsearchForm-searchtext.text').val(ui.item.value);
                                // kategorie    
                                }else{
                                    url = 'http://'+window.location.host+'/search/?limiter[category]='+ui.item.id;
                                    $('#frmsearchForm-searchtext.text').val(ui.item.value);
                                }
                            }
                        // fulltext
                        }else{
                            url = 'http://'+window.location.host+'/search/?productsPerPage=<?php echo $productsPerPage ?>&limiter[fulltext]='+ui.item.value;
                            $('#frmsearchForm-searchtext.text').val(ui.item.value);
                        }
                    }
                    window.location.replace(url);
                    return false;
                },
                search: function(event, ui) { 
                    counterProd = 0;
                },
                close: function(event, ui) { 
                    if ($(this).val().length>2){
                        //$(this).parent().parent().submit(); 
                    }
                }
            })

            .data( "autocomplete" )._renderItem = function( ul, item ) {
                // produkt
                if(item.price != undefined){
                    counterProd++;  
                    if(counterProd <= 5){
                        return $( "<li class='searchProducts'>" )
                                    .data( "item.autocomplete", item )
                                    .append( "<a href='http://" + window.location.host + "/detail/?idProduct=" + item.id + "'>" + "<div class='autocomplete-img'><img src='http://" + window.location.host + "/files/e/" + item.img + "/e_w35_h35.jpeg' /></div><span>" + item.label + "</span> <strong>" + item.price + "</strong></a>" )
                                    .appendTo( ul );
                    }
                }else{
                    if(item.id != undefined){
                        // stranka
                        if(item.url != undefined){
                            return $( "<li class='searchPage searchWpc'>" )
                                    .data( "item.autocomplete", item )
                                    .append( "<a href='http://" + window.location.host + "/section/?arg=" + item.id + "'>" + item.label + "</a>" )
                                    .appendTo( ul ); 
                        }else{
                            if(item.active_as_article != undefined){
                                // producer
                                return $( "<li class='searchProducers searchWpc'>" )
                                        .data( "item.autocomplete", item )
                                        .append( "<a href='http://" + window.location.host + "/search/?limiter[producer][]=" + item.id + "'>" + item.label + "</a>" )
                                        .appendTo( ul );
                            }else{    
                                // kategorie
                                return $( "<li class='searchCategory searchWpc'>" )
                                        .data( "item.autocomplete", item )
                                        .append( "<a href='http://" + window.location.host + "/search/?limiter[category]=" + item.id + "'>" + item.label + "</a>" )
                                        .appendTo( ul ); 
                            }
                        }
                    }else{
                        // vyhledavane slovo
                        return $( "<li class='searchWords searchWpc'>" )
                                .data( "item.autocomplete", item )
                                .append( "<a>" + item.label + "</a>" )
                                .appendTo( ul ); 
                    }
                }
            };
        //zobrazit vse
        $('#search-panel-li span').live('click',function(){
            url = 'http://'+window.location.host+'/search/?productsPerPage=<?php echo $productsPerPage ?>&limiter[fulltext]='+$('#frmsearchForm-searchtext.text').val();
            window.location.replace(url);
            return false;
        });
        $('#before-page-li span').live('click',function(){
            $(this).hide();
            $('.searchPage:gt(4)').fadeIn();
        });
        $('#before-categories-li span').live('click',function(){
            $(this).hide();
            $('.searchCategory:gt(4)').fadeIn();
        });
        

        var oldValue = $('#frmsearchForm-searchtext').val();
        $(this).live('click',function(){
            if ($(this).val()==oldValue)
                $(this).val('');
        })
        
        $(this).live('focusout',function(){
            if ($(this).val()=='')
                $(this).val(oldValue);
        })
    });
</script>
<?php endif ;