{*
 * CubeCart v6
 * ========================================
 * CubeCart is a registered trade mark of CubeCart Limited
 * Copyright CubeCart Limited 2014. All rights reserved.
 * UK Private Limited Company No. 5323904
 * ========================================
 * Web:   http://www.cubecart.com
 * Email:  sales@cubecart.com
 * License:  GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
 *}
<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" dir="{$TEXT_DIRECTION}" lang="{$HTML_LANG}">
   <head>
      <title>{$META_TITLE}</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="canonical" href="{$CANONICAL}">
      <link rel="shortcut icon" href="{$STORE_URL}/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/foundation.min.css">
      <link href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/cubecart.css">
      <link rel="stylesheet" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/cubecart.common.css">
      <link rel="stylesheet" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/cubecart.helpers.css">
      <link rel="stylesheet" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/css/cubecart.{$SKIN_SUBSET}.css">
      {foreach from=$CSS key=css_keys item=css_files}
      <link rel="stylesheet" type="text/css" href="{$STORE_URL}/{$css_files}" media="screen">
      {/foreach}
      <meta http-equiv="Content-Type" content="text/html;charset={$CHARACTER_SET}">
      <meta name="description" content="{if isset($META_DESCRIPTION)}{$META_DESCRIPTION}{/if}">
      <meta name="keywords" content="{if isset($META_KEYWORDS)}{$META_KEYWORDS}{/if}">
      <meta name="robots" content="index, follow">
      <meta name="generator" content="cubecart">
      {if $FBOG}
      <meta property="og:image" content="{$PRODUCT.thumbnail}">
      <meta property="og:url" content="{$VAL_SELF}">
      {/if}
      {include file='templates/content.recaptcha.head.php'}
      <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.js"></script>
      {if $ANALYTICS}
      {literal}<script type="text/javascript">
         var _gaq = _gaq || [];
         _gaq.push(['_setAccount', '{/literal}{$ANALYTICS}{literal}']);
         _gaq.push(['_trackPageview']);
         
         (function() {
           var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
           ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
           var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
         })();
         
      </script>{/literal}
      {/if}
      {foreach from=$HEAD_JS item=js}{$js}{/foreach}
   </head>
   <body>
      <div class="off-canvas-wrap" data-offcanvas>
         <div class="inner-wrap">
            {include file='templates/box.off_canvas.left.php'}
            {include file='templates/box.eu_cookie.php'}
            <div class="row marg-top">
               <div class="small-5 medium-4 large-3 columns">
                  <a href="{$STORE_URL}" class="main-logo"><img src="{$STORE_LOGO}" alt="{$META_TITLE}"></a>
               </div>
               <div class="small-7 medium-8 large-9 columns">
                  <div class="row">
                     <div class="right text-center show-for-small"><a class="left-off-canvas-toggle button white tiny" href="#"><i class="fa fa-bars fa-2x"></i></a></div>
                     <div class="right text-right show-for-medium-up">{include file='templates/box.session.php'}</div>
                  </div>
               </div>
            </div>
            <div>
               <div class="row">
                  <div class="small-12 columns">
                     {include file='templates/element.breadcrumb.php'} 
                  </div>
               </div>
            </div>
            <div class="row {$SECTION_NAME}_wrapper">
               
               <div class="small-12 large-12 columns small-collapse">
               	{include file='templates/box.progress.php'}
               </div>
               <div class="small-12 large-12 columns">
                  {include file='templates/box.errors.php'}
                  {$PAGE_CONTENT}
               </div>
            </div>
            <footer>
               <div class="row">
                  <div class="medium-7 large-7 columns">
                     {include file='templates/box.documents.php'}
                     {$COPYRIGHT}
                  </div>
                  <div class="medium-5 large-5 columns">
                     {include file='templates/element.social.php'}
                  </div>
               </div>
            </footer>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/foundation.min.js"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.rating.js"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.magnifier.js"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.validate.js"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.jscroll.min.js"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/jquery.cookie.js"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/modernizr.js"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/vendor/fastclick.js"></script>
            <script>
               $(document).foundation();
            </script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/cubecart.js"></script>
            <script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/cubecart.validate.js"></script>

            {foreach from=$BODY_JS item=js}{$js}{/foreach}
            {$LIVE_HELP}
            {$DEBUG_INFO}
            {$SKIN_SELECT}
            <a class="exit-off-canvas"></a>
            {include file='templates/ccpower.php'}
         </div>
      </div>
   </body>
</html>