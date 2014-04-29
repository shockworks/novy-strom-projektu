<?php //netteCache[01]000406a:2:{s:4:"time";s:21:"0.61100000 1398766591";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:84:"D:\WEB_SERVER\novy-strom-projektu\app\core\components\SimpleLoginForm\template.latte";i:2;i:1398764182;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: D:\WEB_SERVER\novy-strom-projektu\app\core\components\SimpleLoginForm\template.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '0zxryq3vqs')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block _simpleloginlogin
//
if (!function_exists($_l->blocks['_simpleloginlogin'][] = '_lb3e0daf5e82__simpleloginlogin')) { function _lb3e0daf5e82__simpleloginlogin($_l, $_args) { extract($_args); $_control->validateControl('simpleloginlogin')
?>        <a href="" class="simple-login-login">
            <?php if (!isset($user)): echo Nette\Templating\Helpers::escapeHtml($template->translate('Přihlásit se'), ENT_NOQUOTES) ;else: echo Nette\Templating\Helpers::escapeHtml($template->translate('Můj účet'), ENT_NOQUOTES) ;endif ?>

        </a>
<?php
}}

//
// block _simpleloginbox
//
if (!function_exists($_l->blocks['_simpleloginbox'][] = '_lbf4f3be8ac0__simpleloginbox')) { function _lbf4f3be8ac0__simpleloginbox($_l, $_args) { extract($_args); $_control->validateControl('simpleloginbox')
?>    <div class="simple-login-box" style="<?php if (empty($errorMessage)): ?>display: none; <?php endif ?>
z-index: 10000 !important; position: absolute; top: <?php echo $topPosition ?>px; left: <?php echo $leftPosition ?>px; background: #fff; ">
<?php if (!isset($user)): ?>
            <h3><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Přihlásit se'), ENT_NOQUOTES) ?></h3>
<?php $_ctrl = $_control->getComponent("loginForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
            <ul>
                <li class="simple-login-registrate"><a href="<?php echo $presenter->link('Users:registrate') ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Nová registrace'), ENT_NOQUOTES) ?></a></li>
                <li class="simple-login-forgotten-password"><a href="<?php echo $presenter->link('Users:sendpassword') ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Zapomněl jsem heslo'), ENT_NOQUOTES) ?></a></li>
            </ul>
            
<?php if (!empty($errorMessage)): ?>
                <p class="simple-login-error"><?php echo Nette\Templating\Helpers::escapeHtml($errorMessage, ENT_NOQUOTES) ?></p>
<?php endif ;else: ?>
            <h3><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Správa účtu'), ENT_NOQUOTES) ?></h3>
            <ul class="simple-login-in-ul">
                <li class="simple-login-s"><a href="<?php echo $presenter->link('Users:account') ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Přehled objednávek'), ENT_NOQUOTES) ?></a></li>
                <li class="simple-login-change-user"><a href="<?php echo htmlSpecialChars($_presenter->link("Users:edituser")) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Změna osobních údajů'), ENT_NOQUOTES) ?></a></li>
                <li class="simple-login-change-pass"><a href="<?php echo htmlSpecialChars($_presenter->link("Users:changepassword")) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Změna hesla'), ENT_NOQUOTES) ?></a></li>
            </ul>
            <hr />
            <ul class="simple-login-in-ul">
                <li class="simple-login-singout"><a href="<?php echo $presenter->link('logout!') ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Odhlásit se'), ENT_NOQUOTES) ?></a></li>
            </ul>
<?php if (!empty($errorMessage)): ?>
                <p class="simple-login-error"><?php echo Nette\Templating\Helpers::escapeHtml($errorMessage, ENT_NOQUOTES) ?></p>
<?php endif ;endif ?>
    </div>
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
?>
<ul class="simpleloginul" <?php if (isset($user)): ?>data-user-name="<?php echo htmlSpecialChars($user->name) ?>
" data-user-surname="<?php echo htmlSpecialChars($user->surname) ?>"<?php endif ?>>
    <li<?php echo ' id="' . $_control->getSnippetId('simpleloginlogin') . '"' ?>>
<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['_simpleloginlogin']), $_l, $template->getParameters()) ?>
    </li>
</ul>



<div<?php echo ' id="' . $_control->getSnippetId('simpleloginbox') . '"' ?>>
<?php call_user_func(reset($_l->blocks['_simpleloginbox']), $_l, $template->getParameters()) ?>
</div>





<script type="text/javascript">
    var logName = '';
    $('.simple-login-login').live('click',function(){
        $('.simple-login-box').parent().show();
        $(this).addClass('disabled');
        if($(this).html() != "<?php echo $template->translate('Zavřít') ?>"){
            logName = $(this).html();
        }
        $(this).html("<?php echo $template->translate('Zavřít') ?>");
        $('.simple-login-box').fadeIn('fast');
        return false;
    });
    $('.simple-login-login.disabled').live('click', function(){
        $('.simple-login-box').fadeOut();
        $('.simple-login-login').removeClass('disabled');
        $('.simple-login-login').html(logName);
        return false;
    })
</script>


