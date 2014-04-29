<?php //netteCache[01]000397a:2:{s:4:"time";s:21:"0.35820000 1398766593";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:75:"D:\WEB_SERVER\novy-strom-projektu\app\templates\Includes\product-list.phtml";i:2;i:1393420557;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: D:\WEB_SERVER\novy-strom-projektu\app\templates\Includes\product-list.phtml

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '295tjcucvl')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block _userinteraction
//
if (!function_exists($_l->blocks['_userinteraction'][] = '_lb047ef90e4b__userinteraction')) { function _lb047ef90e4b__userinteraction($_l, $_args) { extract($_args); $_control->validateControl('userinteraction')
;if ($product->lists['rozbaleno']): ?>
        <span class="rozbaleno">Rozbaleno</span>
        <div class="to-wish-wrap-rozbaleno">
            <a href="<?php if (isset($user)): ?> <?php echo htmlSpecialChars($_presenter->link("addToWishlist!", array($product->id))) ?>
 <?php endif ?>" class="to-wish"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Vložit do wishlistu'), ENT_NOQUOTES) ?></a>
        </div>
<?php else: ?>
        
        <div class="to-wish-wrap">
            <a href="<?php if (isset($user)): ?> <?php echo htmlSpecialChars($_presenter->link("addToWishlist!", array($product->id))) ?>
 <?php endif ?>" class="to-wish"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Vložit do wishlistu'), ENT_NOQUOTES) ?></a>
        </div>
<?php endif ;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<div class="img">
    <a class="main-a-img" href="<?php echo htmlSpecialChars($_presenter->link("Detail:default", array($product->id))) ?>">
        <img src="<?php echo htmlSpecialChars($_presenter->link("Files:default", array($product->mainFoto,159,212))) ?>" alt="" class="img-responsive" /></a>
<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); } ?>
<div id="<?php echo $_control->getSnippetId('userinteraction') ?>"><?php call_user_func(reset($_l->blocks['_userinteraction']), $_l, $template->getParameters()) ?>
</div></div>
<h2 title="<?php echo htmlSpecialChars($product->name) ?>">
    <a href="<?php echo htmlSpecialChars($_presenter->link("Detail:default", array($product->id))) ?>">
        <?php echo Nette\Templating\Helpers::escapeHtml($product->name, ENT_NOQUOTES) ?>

    </a></h2>
<div class="price-box">
<?php if ($product->price_recommended > $product->price): ?>
        <p><span class="price-trought"><?php echo Nette\Templating\Helpers::escapeHtml($template->money($product->price_recommended), ENT_NOQUOTES) ?>
 </span>&nbsp;<strong class="buy-price"> <?php echo Nette\Templating\Helpers::escapeHtml($template->money($product->price), ENT_NOQUOTES) ?></strong></p>
<?php else: ?>
        <p><strong class="buy-price"><?php echo Nette\Templating\Helpers::escapeHtml($template->money($product->price), ENT_NOQUOTES) ?></strong></p>
<?php endif ?>
</div>


<?php if (($product->price_recommended > $product->price) && ((round((($product->price_recommended - $product->price) * 100) / ($product->price_recommended))) > 30)): ?>
        <div class="lists-big">
        <span class="lists-ico action" ></span><span class="lists-txt" ><span>- <?php echo Nette\Templating\Helpers::escapeHtml(round((($product->price_recommended - $product->price) * 100) / ($product->price_recommended)), ENT_NOQUOTES) ?></span><span>%</span></div>

<?php elseif ($product->lists['new-product']): ?>
        <div class="lists-big">
        <span class="lists-ico new" ></span><span class="lists-txt" ><span><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Nové'), ENT_NOQUOTES) ?></span></div>
<?php endif ;