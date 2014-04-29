<?php //netteCache[01]000415a:2:{s:4:"time";s:21:"0.28340000 1398766591";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:93:"D:\WEB_SERVER\novy-strom-projektu\app\core\components\GoogleAnalyticsComponent\template.latte";i:2;i:1398764181;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: D:\WEB_SERVER\novy-strom-projektu\app\core\components\GoogleAnalyticsComponent\template.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'd1ojqnwuh5')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if (isset($redirect) && $redirect==true): ?>
<script>
    window.location.href="/kosik/";
</script>  
<?php endif ?>

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', <?php echo Nette\Templating\Helpers::escapeJs($analyticsId) ?>);
ga('require', 'displayfeatures');
ga('send', 'pageview');

</script>
<!-- End Google Analytics -->

<?php if ($cartSend===true): ?>
<script>
    ga('require', 'ecommerce', 'ecommerce.js');
    
    ga('ecommerce:addTransaction', {
        'id': '<?php echo $order->id ?>',                     // Transaction ID. Required.
        'affiliation': '<?php echo $_SERVER['SERVER_NAME'] ?>',   // Affiliation or store name.
        'revenue': '<?php echo $order->totalAmount ?>',               // Grand Total.
        'shipping': '<?php echo $order->getPaymantMethod()->price ?>',                  // Shipping.
        'tax': '0'                     // Tax.
     });

<?php $iterations = 0; foreach ($order->items as $item): ?>
        ga('ecommerce:addItem', {
            'id': '<?php echo $order->id ?>',                     // Transaction ID. Required.
            'name': '<?php echo $item->name ?>',    // Product name. Required.
            'sku': '<?php echo $item->product_id ?>',                 // SKU/code.
            'category': '<?php echo $item->name_main_category ?>',         // Category or variation.
            'price': '<?php echo $item->price ?>',                 // Unit price.
            'quantity': '<?php echo $item->count ?>'                   // Quantity.
        });
<?php $iterations++; endforeach ?>
    ga('ecommerce:send'); //submits transaction to the Analytics servers
    

</script>
<?php endif ;