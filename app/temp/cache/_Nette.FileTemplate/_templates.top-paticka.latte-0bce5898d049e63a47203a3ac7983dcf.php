<?php //netteCache[01]000387a:2:{s:4:"time";s:21:"0.70140000 1398766593";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:65:"D:\WEB_SERVER\novy-strom-projektu\app\templates\top-paticka.latte";i:2;i:1392900512;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: D:\WEB_SERVER\novy-strom-projektu\app\templates\top-paticka.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '9e37x9pmb8')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
$music = CategoryList::getCategories($type); 
    usort($music, function($a, $b) {
    return strcasecmp($a->name, $b->name); 
    });
    $i = 0; $iterations = 0; foreach ($music as $m): if ($m->hasList('top-paticka')): ?>
        <?php if ($i>0): ?>&nbsp;·&nbsp;<?php endif ?><a href="<?php echo htmlSpecialChars($_presenter->link("Search:default", array(array('category'=>$m->id)))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($m->name, ENT_NOQUOTES) ?></a>
<?php $i++ ;endif ;$iterations++; endforeach ;