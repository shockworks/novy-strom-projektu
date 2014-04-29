<?php //netteCache[01]000383a:2:{s:4:"time";s:21:"0.50420000 1398771952";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:61:"D:\WEB_SERVER\novy-strom-projektu\app\templates\@layout.phtml";i:2;i:1398768911;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: D:\WEB_SERVER\novy-strom-projektu\app\templates\@layout.phtml

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '5u6msdc960')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block canonical
//
if (!function_exists($_l->blocks['canonical'][] = '_lb0be0220750_canonical')) { function _lb0be0220750_canonical($_l, $_args) { extract($_args)
;
}}

//
// block logo
//
if (!function_exists($_l->blocks['logo'][] = '_lb8df6ed72e5_logo')) { function _lb8df6ed72e5_logo($_l, $_args) { extract($_args)
?>span<?php
}}

//
// block logo_end
//
if (!function_exists($_l->blocks['logo_end'][] = '_lbf285e0baf2_logo_end')) { function _lbf285e0baf2_logo_end($_l, $_args) { extract($_args)
?>span<?php
}}

//
// block _cartbox
//
if (!function_exists($_l->blocks['_cartbox'][] = '_lb7e78e0ee49__cartbox')) { function _lb7e78e0ee49__cartbox($_l, $_args) { extract($_args); $_control->validateControl('cartbox')
?>                    <div id="out-top-cart">
                        <a id="top-cart" href="<?php echo htmlSpecialChars($_control->link("Cart:")) ?>
">
                            <?php echo Nette\Templating\Helpers::escapeHtml($cartCount, ENT_NOQUOTES) ?>

                        </a>
                        <div id="under-top-cart" class="<?php if ($cartCount == 0): ?>
empty<?php endif ?>">
                            <div class="out-triangle"><div class="triangle-with-shadow"></div></div>
<?php if ($cartCount > 0): ?>
                                <div class="top">
                                    <div class="in <?php if ($cartList > 3): ?>scroll<?php endif ?>">
<?php include(APP_DIR.'/templates/Functions/cartParams.php'); $iterations = 0; foreach ($cartList as $item): ?>
                                            <a class="cart-prod">
                                                <div class="obal-cart-img img">
                                                    <img src="<?php echo htmlSpecialChars($_presenter->link("Files:default", array($item->object->mainFoto,65,90))) ?>" alt="fotografie není k dispozici" />
                                                </div>
                                                <p>
                                                    <strong><?php echo Nette\Templating\Helpers::escapeHtml($item->name, ENT_NOQUOTES) ?></strong>
                                                    <br /><span>ks <?php echo Nette\Templating\Helpers::escapeHtml($item->count, ENT_NOQUOTES) ?></span>
                                                    <br /><span>vel M</span>
                                                    <br />
<?php if ($item->object->price_recommended > $item->price): ?>
                                                        <span class="price-trought"><?php echo Nette\Templating\Helpers::escapeHtml($template->money($item->object->price_recommended), ENT_NOQUOTES) ?>
</span> <span class="price"><?php echo Nette\Templating\Helpers::escapeHtml($template->money($item->price), ENT_NOQUOTES) ?></span>
<?php else: ?>
                                                        <span class="price"><?php echo Nette\Templating\Helpers::escapeHtml($template->money($item->price), ENT_NOQUOTES) ?></span>
<?php endif ?>
                                                </p>
                                            </a>
<?php $iterations++; endforeach ?>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <p><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Celková cena'), ENT_NOQUOTES) ?>
: <strong><?php echo Nette\Templating\Helpers::escapeHtml($template->money($cartSum), ENT_NOQUOTES) ?></strong></p>
                                    <a class="btn green" href="<?php echo htmlSpecialChars($_control->link("Cart:")) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Obsah nákupní tašky'), ENT_NOQUOTES) ?></a>
                                </div>
<?php else: ?>
                                <p>Momentálně zde není žádná hudba,kterou by sis mohl obléknout…</p>
                                <span class="italic">Honem do obchodu!</span>
<?php endif ?>
                        </div>
                    </div>
                    <script>
                        var timer;
                        $('#out-top-cart').hover(function(){
                            clearTimeout(timer);
                            $('#under-top-cart').addClass('ac').fadeIn('fast');
                        },function(){
                            timer = setTimeout(function() {
                                $('#under-top-cart').removeClass('ac').fadeOut('fast');
                            }, 500);
                        });
                    </script>
<?php
}}

//
// block banner
//
if (!function_exists($_l->blocks['banner'][] = '_lb294fd7bdea_banner')) { function _lb294fd7bdea_banner($_l, $_args) { extract($_args)
;
}}

//
// block presenter
//
if (!function_exists($_l->blocks['presenter'][] = '_lb691c7026eb_presenter')) { function _lb691c7026eb_presenter($_l, $_args) { extract($_args)
;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb61284883e3_content')) { function _lb61284883e3_content($_l, $_args) { extract($_args)
;
}}

//
// block _notes
//
if (!function_exists($_l->blocks['_notes'][] = '_lb1db17b586f__notes')) { function _lb1db17b586f__notes($_l, $_args) { extract($_args); $_control->validateControl('notes')
;$recently = Note::get(Note::VISITED);
                        $recently = array_reverse($recently); if (isset($recently) && count($recently) > 0): ?>
                        <hr class='clear' />
                        <div class="row last-visited">
                            <h2 class="music-heading text-center">Prohlížené</h2>
                            <ul>
<?php $iterations = 0; foreach ($recently as $p): Nette\Latte\Macros\CoreMacros::includeTemplate("../templates/Includes/product-list-mini.phtml", array('product'=>$p) + $template->getParameters(), $_l->templates['5u6msdc960'])->render() ;$iterations++; endforeach ?>
                            </ul>
                            <hr class="clear" />
                            <a class="erase-all ajax" title="Vymazat vše" href="<?php echo htmlSpecialChars($_control->link("noteErase!")) ?>
">Vymazat vše</a>
                        </div>
<?php endif ;
}}

//
// block footer
//
if (!function_exists($_l->blocks['footer'][] = '_lb6686a87459_footer')) { function _lb6686a87459_footer($_l, $_args) { extract($_args)
;
}}

//
// block _userinteractionwish
//
if (!function_exists($_l->blocks['_userinteractionwish'][] = '_lb36c3424f8b__userinteractionwish')) { function _lb36c3424f8b__userinteractionwish($_l, $_args) { extract($_args); $_control->validateControl('userinteractionwish')
;if (!isset($user->id)): ?>
                                <a href="<?php echo htmlSpecialChars($_control->link("Wishlist:")) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Můj seznam'), ENT_NOQUOTES) ?></a><br />
<?php else: ?>
                                <a href="<?php echo htmlSpecialChars($_control->link("Wishlist:detail", array($wishlist->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Můj seznam'), ENT_NOQUOTES) ?></a><br />
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
<!DOCTYPE html>
<!--[if lt IE 7]>   <html lang="cs" xml:lang="cs" class="lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>      <html lang="cs" xml:lang="cs" class="lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>      <html lang="cs" xml:lang="cs" class="lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>      <html lang="cs" xml:lang="cs" class="lt-ie10"> <![endif]-->
<!--[if gt IE 9]>   <!-->
<html lang="cs" xml:lang="cs" class=""> <!-- <![endif]-->
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php $_ctrl = $_control->getComponent("metaHeaderComponent"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ;$_ctrl = $_control->getComponent("seoHeaderComponent"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
        <?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['canonical']), $_l, get_defined_vars())  ?>

                     <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/js/melonhtml5-timeline/css/timeline.css" />
    <link rel="stylesheet" type="text/css" href="/js/melonhtml5-timeline/css/timeline_light.css" />
    <script type="text/javascript" src="/js/melonhtml5-timeline/javascript/timeline.min.js"></script>
    <script type="text/javascript" src="/js/init.js"></script>
    <script type="text/javascript" src="/js/modernizr.custom.64083.js"></script>
<?php $_ctrl = $_control->getComponent("googleAnalyticsComponent"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
    <script type="text/javascript" src="/js/respond.min.js"></script>

    <!-- nove by se melo volat pouze toto / mozna dame do nejake komponenty -->
    <link rel="stylesheet" type="text/css" media="all" href="/assets/css/screen.css" />
    <link rel="stylesheet" type="text/css" media="print" href="/assets/css/print.css" /> <!-- print.css je dnes v nejake komponente -->
    <script src="/assets/js/js.min.js"></script>
    <!-- end -->
    </head>
    <body>
<?php if (isset($actualCategory) && isset($actualCategory->galleries['pozadi']) && !isset($product)): $iterations = 0; foreach ($actualCategory->galleries['pozadi']->files as $file): ?>
                <style type="text/css">
                    body { background: url("<?php echo Nette\Templating\Helpers::escapeCss($_presenter->link("Files:default", array($file->id))) ?>") no-repeat center fixed transparent; }
                </style>
<?php $iterations++; endforeach ;endif ?>
        <div id="fb-root"></div>

        <!-- ---- ---- ---- -->
<?php $globalVat = 21; $freeShipping = 2000 ?>
        <a id="spec-top" class="anchor"></a>
        <div id="fb-root"></div>

        <script>
            (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/cs_CZ/all.js#xfbml=1&appId=369741426490196";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
        </script>
    <!-- HEADER -->
        <div id="header-bar">
            <div class="container" id="sub-header">
                <div class="row hidden-xs hidden-sm">
                    <div class="top-benefits dokdy col-sm-3 col-lg-3" title="Platí pro všechno zboží, které máme skladem.">
                        <p>Expedujeme <strong>do 24 hodin</strong></p>
                    </div>
                    <div class="top-benefits postovne col-md-3 col-lg-3">
                        <p><strong>Poštovné 85 Kč</strong> / ČR a 120 Kč / SK</p>
                    </div>
                    <div class="top-benefits doprava col-md-3 col-lg-3">
                        <p>Od 1 500 Kč <strong>doprava zdarma</strong></p>
                    </div>
                    <div class="top-benefits tel col-md-3 col-lg-3" title="Na telefonu jsme pro tebe v pondělí–pátek 8.00–18.00 a v sobotu 8.00–12.00">
                        <p><strong>724 002 009</strong>  / 556 300 700</p>
                    </div>
                </div>
        </div>
        </div>
        <div id="header">
            <div class="container" id="sub-header">
                <div class="row logo-search-buy">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <<?php ;call_user_func(reset($_l->blocks['logo']), $_l, get_defined_vars())  ?>
 class="navbar-left"><a class="navbar-link" href="<?php echo htmlSpecialChars($_control->link("Default:")) ?>
"><img alt="logo" src="/images/logo.png" class="logo" /></a></<?php call_user_func(reset($_l->blocks['logo_end']), $_l, get_defined_vars())  ?>>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<?php $_ctrl = $_control->getComponent("searchForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->renderAutocomplete() ?>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
<div id="<?php echo $_control->getSnippetId('cartbox') ?>"><?php call_user_func(reset($_l->blocks['_cartbox']), $_l, $template->getParameters()) ?>
</div><?php $_ctrl = $_control->getComponent("simpleLoginForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render(65,-200) ;if (!isset($user->id)): ?>
                            <a class="header-wishlist" href="<?php echo htmlSpecialChars($_control->link("Wishlist:")) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Můj seznam'), ENT_NOQUOTES) ?></a>
<?php else: ?>
                            <a class="header-wishlist"  href="<?php echo htmlSpecialChars($_control->link("Wishlist:detail", array($wishlist->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Můj seznam'), ENT_NOQUOTES) ?>
<span class="count"> <?php echo Nette\Templating\Helpers::escapeHtml($wishlistCount, ENT_NOQUOTES) ?></span></a>
                             <script>
                                //muj ucet zmena href
                                $('.simple-login-login').click(function(event){
                                    event.stopPropagation();
                                    event.preventDefault();
                                    window.location.href = '/users/account';
                                });
                            </script>
<?php endif ?>
                    </div>
                </div>
                <div class="row header-menu">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-li"><a href="<?php echo htmlSpecialChars($_control->link("Default:")) ?>
">Úvod<span></span></a></li>
                            <li class="nav-li"><a href="<?php echo htmlSpecialChars($_presenter->link("Search:default", array(array('gender'=>23)))) ?>"><span></span>Kluci</a></li>
                            <li class="nav-li"><a href="<?php echo htmlSpecialChars($_presenter->link("Search:default", array(array('gender'=>24)))) ?>"><span></span>Holky</a></li>
                            <li class="nav-li"><a href="<?php echo htmlSpecialChars($_presenter->link("Search:default", array(array('gender'=>25)))) ?>"><span></span>Děti</a></li>

<?php $listId = CategoryList::getOneBy('implementation_name', 'hudba')->id ?>
                            <li class="nav-li"><a href="<?php echo htmlSpecialChars($_presenter->link("Search:default", array(array('category_list'=>$listId)))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Hudba'), ENT_NOQUOTES) ?><span></span></a></li>
<?php $listId = CategoryList::getOneBy('implementation_name', 'film')->id ?>
                            <li class="nav-li"><a href="<?php echo htmlSpecialChars($_presenter->link("Search:default", array(array('category_list'=>$listId)))) ?>
" class="last"><?php echo Nette\Templating\Helpers::escapeHtml($template->translate('Film'), ENT_NOQUOTES) ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php call_user_func(reset($_l->blocks['banner']), $_l, get_defined_vars())  ?>

    <!-- CONTENT -->
        <div id="content" class="<?php call_user_func(reset($_l->blocks['presenter']), $_l, get_defined_vars())  ?>">
            <div class="container">
                <?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<div id="<?php echo $_control->getSnippetId('notes') ?>"><?php call_user_func(reset($_l->blocks['_notes']), $_l, $template->getParameters()) ?>
</div>            </div>
        </div>
    <!-- FOOTER -->
        <div id="foot" class="<?php call_user_func(reset($_l->blocks['footer']), $_l, get_defined_vars())  ?>">
            <div class="container" id="foot-inner">
                <div class="row">

                    <div class="face-anchor"></div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 fb-plugin" id="facb-plugin">
                        <div class="fb-like-box" data-href="https://www.facebook.com/obleknisihudbu" data-width="700" data-height="190" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                    </div>
                    <div class="col-4 newsletter-box">
                        <h4>Odběr novinek</h4>
<?php $_ctrl = $_control->getComponent("ajaxNewsletterForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
                    </div>

                    <div class="divider-big"></div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 contacts">
                        <h2>Musicwear</h2>
                        <span class="adresa">Wolkerova 1009, 749 01 Vítkov</span>
                        <span class="email"><a href="mailto:info@musicwear.cz">info@musicwear.cz</a></span>
                        <span class="telefon">724 002 009 / 556 300 700</span>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 contact-social">
                        <span class="adresa"><a class="fancybox" href="<?php echo htmlSpecialChars($_control->link("Section:", array('kontaktni-formular'))) ?>
">Kontaktní formulář</a></span><br />
                        <a href="https://www.facebook.com/obleknisihudbu?fref=ts" class="fa fa-facebook-square" title="Přidej se na náš Facebook"></a>
                        <a href="" class="fa fa-pinterest-square" title="Jsme na Pinterestu "></a>
                        <a href="" class="fa fa-instagram" title="Náš Instragram"></a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 rozcestnik">
                        <h2>Rozcestník</h2>
<div id="<?php echo $_control->getSnippetId('userinteractionwish') ?>"><?php call_user_func(reset($_l->blocks['_userinteractionwish']), $_l, $template->getParameters()) ?>
</div>                        <a href="<?php echo htmlSpecialChars($_control->link("Section:", array('clanky', 'obchodni-podminky'))) ?>
">Moje přání a návrhy</a><br />
                        <a href="<?php echo htmlSpecialChars($_control->link("Section:", array('kalendar-udalosti'))) ?>
">Kalendář událostí</a><br />
                        <a href="<?php echo htmlSpecialChars($_control->link("Section:", array('clanky', 'o-csr'))) ?>
">Společenská odpovědnost</a><br />
                        <a href="<?php echo htmlSpecialChars($_control->link("Section:", array('clanky', 'obchodni-podminky'))) ?>
">Obchodní podmíky</a><br />

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 csr-logos">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($sections['titulni-strana']->galleries['loga-csr']->files) as $file): ?>
                            <div class="csr-logo <?php if ($iterator->getCounter()%4 == 0): ?>
last<?php endif ?>"><img src="<?php echo htmlSpecialChars($_presenter->link("Files:default", array($file->id))) ?>" class="img-responsive" /></div>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 copyright">
                        Copyright © 2014 <a href="http://www.musicwear.cz">musicwear.cz</a><br />Využíváme komplexní služby <a href="http://www.profesionalni-e-shop.cz/">Profesionální e-shop</a> od společnosti <a href="http://www.shockworks.cz/">Shockworks s.r.o.</a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 payments">
                        <img alt="" src="/images/platebni-loga.jpg" class="img-responsive pull-left" />
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 top-hudba">
                        <h3>TOP hudba</h3>
<?php Nette\Latte\Macros\CoreMacros::includeTemplate("top-paticka.latte", array('type'=>'hudba') + $template->getParameters(), $_l->templates['5u6msdc960'])->render() ?>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 top-filmy">
                        <h3>TOP filmy</h3>
<?php Nette\Latte\Macros\CoreMacros::includeTemplate("top-paticka.latte", array('type'=>'film') + $template->getParameters(), $_l->templates['5u6msdc960'])->render() ?>
                    </div>

                </div>
                <div class="divider-big"></div>
            </div>
        </div>
    </body>
</html>