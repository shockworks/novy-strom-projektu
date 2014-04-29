<?php //netteCache[01]000401a:2:{s:4:"time";s:21:"0.13980000 1398766593";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:79:"D:\WEB_SERVER\novy-strom-projektu\app\templates\Includes\top-products-row.latte";i:2;i:1393513907;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: D:\WEB_SERVER\novy-strom-projektu\app\templates\Includes\top-products-row.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'phkqkzdvsi')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <ul id="products-list" class="row title-products">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($lists['title-product']) as $product): ?>
                <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2 <?php if ($iterator->getCounter()%6==0): ?>
last<?php endif ?>">
<?php Nette\Latte\Macros\CoreMacros::includeTemplate("../Includes/product-list.phtml", array('product'=>$product) + $template->getParameters(), $_l->templates['phkqkzdvsi'])->render() ?>
                </li>
                <?php if ($iterator->getCounter() == 6): break; endif ?>

<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
        </ul>
    </div>
</div>