<?php //netteCache[01]000391a:2:{s:4:"time";s:21:"0.42780000 1398765750";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:69:"D:\WEB_SERVER\novy-strom-projektu\app\templates\Default\default.phtml";i:2;i:1393513935;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: D:\WEB_SERVER\novy-strom-projektu\app\templates\Default\default.phtml

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'poxs7o6zd2')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block presenter
//
if (!function_exists($_l->blocks['presenter'][] = '_lbcc03ca70ad_presenter')) { function _lbcc03ca70ad_presenter($_l, $_args) { extract($_args)
?>default<?php
}}

//
// block logo
//
if (!function_exists($_l->blocks['logo'][] = '_lb5a832a4eb3_logo')) { function _lb5a832a4eb3_logo($_l, $_args) { extract($_args)
?>h1<?php
}}

//
// block logo_end
//
if (!function_exists($_l->blocks['logo_end'][] = '_lb2167e68bd0_logo_end')) { function _lb2167e68bd0_logo_end($_l, $_args) { extract($_args)
?>h1<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb904488434c_content')) { function _lb904488434c_content($_l, $_args) { extract($_args)
?>    <div class="row outer-hp-slider">
        <div class="divider-big"></div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hp-slider">
<?php $iterations = 0; foreach ($sections['titulni-strana']->galleries['slideshow']->files as $file): if (isset($file->url) && $file->url != ""): ?>
                <a href="<?php echo htmlSpecialChars($file->url) ?>" class="slide">
<?php endif ?>
                <img src="<?php echo htmlSpecialChars($_presenter->link("Files:default", array($file->id,1170,477,null,null,false,File::FILL))) ?>" class="banner img-responsive" /> 
<?php if (isset($file->url) && $file->url != ""): ?>
                </a>
<?php endif ;$iterations++; endforeach ?>
        </div>
        <div id="next"></div>
        <div id="prev"></div>
    </div>
    <div class="row hp-banners"> 
<?php $iterations = 0; foreach ($sections['titulni-strana']->galleries['bannery']->files as $f): ?>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 banners">
                <img src="<?php echo htmlSpecialChars($_presenter->link("Files:", array($f->id))) ?>
" class="banner img-responsive" alt="<?php echo htmlSpecialChars($f->name) ?>" />
            </div>
<?php $iterations++; endforeach ?>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 top-brands">
            <h2 class="topky">Hitovky</h2>
<?php $tops = CategoryList::getCategories('top-titulka') ?>
            
<?php $iterations = 0; foreach ($tops as $t): $iterations = 0; foreach ($t->galleries as $gal): if ($gal->implementation_name == 'logo'): $iterations = 0; foreach ($gal->files as $file): ?>
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    <a href="<?php echo htmlSpecialChars($_presenter->link("Search:", array(array('category'=>$t->id)))) ?>">
                                        <img src="<?php echo htmlSpecialChars($_presenter->link("Files:default", array($file->id,130,90,null,null,false,File::FILL))) ?>
" class="img-responsive" alt="<?php echo htmlSpecialChars($t->name) ?>" />
                                    </a>
                                </div>
<?php $iterations++; endforeach ;endif ;$iterations++; endforeach ;$iterations++; endforeach ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 topky-line">
            <div class="clear line"></div>
        </div>
            </div>
<?php Nette\Latte\Macros\CoreMacros::includeTemplate('../Includes/top-products-row.latte', $template->getParameters(), $_l->templates['poxs7o6zd2'])->render() ?>
    <script>
        $('.hp-slider').cycle({
          fx:     'fade',
          speed:  'fast',
          timeout: 4000,
          next:   '#next',
          prev:   '#prev',
          pause: 1
        });
    </script>
<?php
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['presenter']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['logo']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['logo_end']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 