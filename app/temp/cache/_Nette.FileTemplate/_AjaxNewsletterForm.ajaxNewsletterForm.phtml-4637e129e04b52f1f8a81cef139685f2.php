<?php //netteCache[01]000419a:2:{s:4:"time";s:21:"0.62340000 1398766593";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:97:"D:\WEB_SERVER\novy-strom-projektu\app\core\components\AjaxNewsletterForm\ajaxNewsletterForm.phtml";i:2;i:1398764178;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: D:\WEB_SERVER\novy-strom-projektu\app\core\components\AjaxNewsletterForm\ajaxNewsletterForm.phtml

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'jse1q8r5ml')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block _ajaxNewsletterFormContent
//
if (!function_exists($_l->blocks['_ajaxNewsletterFormContent'][] = '_lb32aa12c5b5__ajaxNewsletterFormContent')) { function _lb32aa12c5b5__ajaxNewsletterFormContent($_l, $_args) { extract($_args); $_control->validateControl('ajaxNewsletterFormContent')
;if (isset($customFlash)): ?>
      <p class="newsletter-flash flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($customFlash, ENT_NOQUOTES) ?></p>
<?php else: $_ctrl = $_control->getComponent("form"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ;endif ;
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); } ?>
<div id="<?php echo $_control->getSnippetId('ajaxNewsletterFormContent') ?>"><?php call_user_func(reset($_l->blocks['_ajaxNewsletterFormContent']), $_l, $template->getParameters()) ?>
</div>