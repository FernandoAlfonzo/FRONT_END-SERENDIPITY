@extends("layoutsLanding.indexLanding")
@section("landing")




<head><meta charset="UTF-8" /><script>class RocketLazyLoadScripts{constructor(e){this.triggerEvents=e,this.eventOptions={passive:!0},this.userEventListener=this.triggerListener.bind(this),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventListener,e.eventOptions)))}_removeUserInteractionListener(e){this.triggerEvents.forEach((t=>window.removeEventListener(t,e.userEventListener,e.eventOptions)))}triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}async _loadEverythingNow(){this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async),await this._triggerDOMContentLoaded(),await this._triggerWindowLoad(),window.dispatchEvent(new Event("rocket-allScriptsLoaded"))}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._requestAnimFrame(),new Promise((t=>{const n=document.createElement("script");let r;[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type",r=e.nodeValue),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t()),e.parentNode.replaceChild(n,e)}))}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){var e=document.createDocumentFragment();[...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async].forEach((t=>{const n=t.getAttribute("src");if(n){const t=document.createElement("link");t.href=n,t.rel="preload",t.as="script",e.appendChild(t)}})),document.head.appendChild(e)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set(r){e["rocket"+t]=n=r}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._requestAnimFrame(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-load")),await this._requestAnimFrame(),window.rocketonload&&window.rocketonload(),await this._requestAnimFrame(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),window.dispatchEvent(new Event("rocket-pageshow")),await this._requestAnimFrame(),window.rocketonpageshow&&window.rocketonpageshow()}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,r=document.createRange(),i=n.parentElement;let o=e.get(n);void 0===o&&(o=n.nextSibling,e.set(n,o));const a=document.createDocumentFragment();r.setStart(a,0),a.appendChild(r.createContextualFragment(t)),i.insertBefore(a,o)}}async _requestAnimFrame(){return new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts(["keydown","mousemove","touchmove","touchstart","touchend","wheel"]);e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();</script>

</style><link rel="preload" href="https://serendipitydiplomados.com/wp-content/cache/min/1/91b3a48bfe167653f3cc4edfa15a7ac8.css" data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" media="all" data-minify="1" />





<link rel='preload'   href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C400&#038;ver=5.8.1' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />


<style id='mfn-dynamic-inline-css' type='text/css'>

html{background-color: #FCFCFC;}#Wrapper,#Content{background-color: #FCFCFC;}body:not(.template-slider) #Header{min-height: 77px;}body.header-below:not(.template-slider) #Header{padding-top: 77px;}#Footer .widgets_wrapper {padding: 50px 0;}body, button, span.date_label, .timeline_items li h3 span, input[type="submit"], input[type="reset"], input[type="button"],input[type="text"], input[type="password"], input[type="tel"], input[type="email"], textarea, select, .offer_li .title h3 {font-family: "Montserrat", Helvetica, Arial, sans-serif;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a {font-family: "Montserrat", Helvetica, Arial, sans-serif;}#Subheader .title {font-family: "Montserrat", Helvetica, Arial, sans-serif;}h1, h2, h3, h4, .text-logo #logo {font-family: "Montserrat", Helvetica, Arial, sans-serif;}h5, h6 {font-family: "Montserrat", Helvetica, Arial, sans-serif;}blockquote {font-family: "Montserrat", Helvetica, Arial, sans-serif;}.chart_box .chart .num, .counter .desc_wrapper .number-wrapper, .how_it_works .image .number,.pricing-box .plan-header .price, .quick_fact .number-wrapper, .woocommerce .product div.entry-summary .price {font-family: "Montserrat", Helvetica, Arial, sans-serif;}body {font-size: 17px;line-height: 33px;font-weight: 400;letter-spacing: 0px;}.big {font-size: 16px;line-height: 28px;font-weight: 400;letter-spacing: 0px;}#menu > ul > li > a, a.action_button, #overlay-menu ul li a{font-size: 17px;font-weight: 400;letter-spacing: 0px;}#overlay-menu ul li a{line-height: 25.5px;}#Subheader .title {font-size: 30px;line-height: 33px;font-weight: 400;letter-spacing: 1px;font-style: italic;}h1, .text-logo #logo {font-size: 30px;line-height: 33px;font-weight: 700;letter-spacing: 0px;}h2
form input.display-none{display:none!important}
</style>
<style id='mfn-custom-inline-css' type='text/css'>
.wsc-input-group{
  display: none;}

.wsc-cart-button{
  border-radius: 12px;
	padding: 8px 20px;
	font-weight:600;
	font-size:17px;
}

.wsc-center-section-price{
  padding: 8px 20px !important;
  font-weight:700;
  font-size:22px;
	border-radius: 12px;
}

del{
  display: none;}



.wsc-left-sec-product{
font-weight:700;
font-size:17px;
}


.wsc-wrapper {
    padding: 18px 5px;
}


.button1 {
  background-color: #ffffff00 !important; 
  color: white; 
  border: 2px solid #ffffff;
  border-radius: 8px;
}

.button1:hover {
  background-color: #c72128 !important;
  color: white;
}


.woocommerce .widget_shopping_cart ul.product_list_widget li h6 {
    padding-top: 5px;
    margin-bottom: 3px;
	font-weight:600;
	font-size:14px;
}

@media only screen and (max-width: 600px) {
	.mhb-extras>* {
    	line-height: 0px;
	}
}
</style>
<script type='text/javascript' src='https://serendipitydiplomados.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='https://serendipitydiplomados.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>

<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Ver carrito","cart_url":"https:\/\/serendipitydiplomados.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>

</head>


	<!-- mfn_hook_top --><!-- mfn_hook_top -->
	

		<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->


				<div data-bg="assets/images/banner.jpg" class="section mcb-section mcb-section-frcvwubaj rocket-lazyload"  style="background-repeat:no-repeat;background-position:left center" ><div class="section_wrapper mcb-section-inner"><div class="wrap mcb-wrap mcb-wrap-kfb4b4kgg one  column-margin-0px valign-top clearfix" style=""  ><div class="mcb-wrap-inner"><div class="column mcb-column mcb-item-jodsl6qo6 one-second column_column column-margin-0px"><div class="column_attr clearfix align_left" style=""><hr class="no_line" style="margin:0 auto 100px"/>

<font size="4" style="color: #FCA956"><strong><em>NUESTRO</em></strong> </font>
<hr class="no_line" style="margin:0 auto 5px"/>

<font size="10" style="color: #ffffff"><strong>Modelo</strong></font> <font size="5" style="color: #ffffff"><strong>Educativo</strong></font>
<hr class="no_line" style="margin:0 auto 120px"/>
</div></div></div></div></div></div><div class="section mcb-section mcb-section-ujw7ny019"  style="padding-top:32px;padding-bottom:32px;background-color:#223175" ><div class="section_wrapper mcb-section-inner"><div class="wrap mcb-wrap mcb-wrap-a3bn1ln5q two-fifth  column-margin-0px valign-top clearfix" style=""  ><div class="mcb-wrap-inner"><div class="column mcb-column mcb-item-pf9rzxk8f five-sixth column_column column-margin-0px"><div class="column_attr clearfix align_left" style=""><hr class="no_line" style="margin:0 auto 30px"/>

<div class="image_frame image_item no_link scale-with-grid alignleft no_border" ><div class="image_wrapper"><img width="225" height="96" class="scale-with-grid" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20225%2096'%3E%3C/svg%3E" alt="Modelo Educativo" title=""  data-lazy-src="/assets/images/modelo.png" /><noscript><img width="225" height="96" class="scale-with-grid" src="/assets/images/modelo.png" alt="Modelo Educativo" title=""  /></noscript></div></div>

<hr class="no_line" style="margin:0 auto 30px"/>

<h1 style="color: #fff;">MODELO <font style="color: #9FAFFA">TDAHP</font></h1>
<p style="color: #fff;"><strong>Nuestro Modelo educativo TDAHP (Teórico, Descargable, Asincrónico, Humanista y Práctico) permite que puedas Formarte desde la comodidad de tu casa, siempre a la vanguardia del tema y con el acompañamiento de Docentes especialistas en el Tema.</strong></p></div></div></div></div>


<body>


    <div class="slider-frame">
        <ul>
            <li><img src="assets/images/carru1.jpg" alt=""></li>
            <li><img src="assets/images/carru2.jpg" alt=""></li>
            <li><img src="assets/images/carru3.jpg" alt=""></li>
            <li><img src="assets/images/carru4.jpg" alt=""></li>
            <li><img src="assets/images/carru5.jpg" alt=""></li>
        </ul>
    </div>
    
</body>



</div></div></div></div></div><div data-bg="/wp-content/uploads/2021/01/fnd-curso-g.jpg" class="section mcb-section mcb-section-phz03ki0c bg-cover rocket-lazyload"  style="padding-top:20px;padding-bottom:30px;background-color:#a30029;background-repeat:no-repeat;background-position:left top" ><div class="section_wrapper mcb-section-inner"><div class="wrap mcb-wrap mcb-wrap-jxlgncu1b one-second  column-margin-0px valign-top clearfix" style=""  ><div class="mcb-wrap-inner"><div class="column mcb-column mcb-item-gnnm0poas one column_image"><div class="image_frame image_item no_link scale-with-grid alignleft no_border" ><div class="image_wrapper"><img width="609" height="437" class="scale-with-grid" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20609%20437'%3E%3C/svg%3E" alt="Modelo Educativo" title=""  data-lazy-src="assets/images/tres.png" /><noscript><img width="609" height="437" class="scale-with-grid" src="assets/images/tres.png" alt="Modelo Educativo" title=""  /></noscript></div></div>
</div></div></div><div class="wrap mcb-wrap mcb-wrap-xhwx7crh0 one-second  valign-top clearfix" style=""  ><div class="mcb-wrap-inner"><div class="column mcb-column mcb-item-0dxma5r9d four-fifth column_column column-margin-0px">
	<div class="column_attr clearfix align_left" style=""><hr class="no_line" style="margin:0 auto 70px">

<h1 style="color: #fff;">TOMA UNA CLASE<br>
TOTALMENTE GRATIS</h1>
<p style="color: #fff;">Deja tus datos y te haremos llegar las especificaciones para que ingreses a nuestra plataforma y vivas la <strong>experiencia de aprendizaje Serendipity</strong></p>

<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="192" />
<input type="hidden" name="_wpcf7_version" value="5.4.2" />
<input type="hidden" name="_wpcf7_locale" value="es_MX" />

<input type="hidden" name="_wpcf7_container_post" value="170" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />

</div>

	<div class="col-sm-12">
    <div class="row">

      <div class="col-sm-6" style= "width: 25%;">
        <input type="name" class="form-control" id="name" name="name" placeholder="Nombre"  style="width: 225px;" required>
      </div> 
      
          <div class="col-sm-6">
            <input type="telephone" class="form-control" id="telephone" name="telephone" placeholder="Telefono"  style="width: 231px;" required>
              </div>
    </div>
  </div>
						  <div class="col-sm-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email"  style="width: 463px;" required>
              </div>
</div>

<div class="column one">
<input type="submit" value="Solicitar clase Gratuita" class="wpcf7-form-control wpcf7-submit button1" style="width: 230px;"/></div>
</div>


<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.12.1' id='jquery-ui-mouse-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-includes/js/jquery/ui/sortable.min.js?ver=1.12.1' id='jquery-ui-sortable-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-includes/js/jquery/ui/tabs.min.js?ver=1.12.1' id='jquery-ui-tabs-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-includes/js/jquery/ui/accordion.min.js?ver=1.12.1' id='jquery-ui-accordion-js' defer></script>
<script type='text/javascript' id='mfn-plugins-js-extra'>
/* <![CDATA[ */
var mfn = {"mobileInit":"1240","parallax":"translate3d","responsive":"1","sidebarSticky":"1","lightbox":{"disable":false,"disableMobile":false,"title":false},"slider":{"blog":0,"clients":0,"offer":0,"portfolio":0,"shop":0,"slider":3000,"testimonials":0},"ajax":"https:\/\/serendipitydiplomados.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-content/cache/min/1/wp-content/themes/betheme/js/plugins.js?ver=1633491035' id='mfn-plugins-js' defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-content/cache/min/1/wp-content/themes/betheme/js/menu.js?ver=1633491035' id='mfn-menu-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-content/themes/betheme/assets/animations/animations.min.js?ver=21.9.5' id='mfn-animations-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-content/themes/betheme/assets/jplayer/jplayer.min.js?ver=21.9.5' id='mfn-jplayer-js' defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-content/cache/min/1/wp-content/themes/betheme/js/parallax/translate3d.js?ver=1633491035' id='mfn-parallax-js' defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-content/cache/min/1/wp-content/themes/betheme/js/scripts.js?ver=1633491035' id='mfn-scripts-js' defer></script>


</script>




</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://serendipitydiplomados.com/wp-content/cache/min/1/wp-content/plugins/contact-form-7/modules/recaptcha/index.js?ver=1633491035' id='wpcf7-recaptcha-js' defer></script>
<script>window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://serendipitydiplomados.com/wp-content/plugins/wp-rocket/assets/js/lazyload/16.1/lazyload.min.js"></script>
<script type="rocketlazyloadscript">"use strict";var wprRemoveCPCSS=function wprRemoveCPCSS(){var elem;document.querySelector('link[data-rocket-async="style"][rel="preload"]')?setTimeout(wprRemoveCPCSS,200):(elem=document.getElementById("rocket-critical-css"))&&"remove"in elem&&elem.remove()};window.addEventListener?window.addEventListener("load",wprRemoveCPCSS):window.attachEvent&&window.attachEvent("onload",wprRemoveCPCSS);</script><script>class RocketElementorAnimation{constructor(){this.deviceMode=document.createElement("span"),this.deviceMode.id="elementor-device-mode",this.deviceMode.setAttribute("class","elementor-screen-only"),document.body.appendChild(this.deviceMode)}_detectAnimations(){let t=getComputedStyle(this.deviceMode,":after").content.replace(/"/g,"");this.animationSettingKeys=this._listAnimationSettingsKeys(t),document.querySelectorAll(".elementor-invisible[data-settings]").forEach(t=>{const e=t.getBoundingClientRect();if(e.bottom>=0&&e.top<=window.innerHeight)try{this._animateElement(t)}catch(t){}})}_animateElement(t){const e=JSON.parse(t.dataset.settings),i=e._animation_delay||e.animation_delay||0,n=e[this.animationSettingKeys.find(t=>e[t])];if("none"===n)return void t.classList.remove("elementor-invisible");t.classList.remove(n),this.currentAnimation&&t.classList.remove(this.currentAnimation),this.currentAnimation=n;let s=setTimeout(()=>{t.classList.remove("elementor-invisible"),t.classList.add("animated",n),this._removeAnimationSettings(t,e)},i);window.addEventListener("rocket-startLoading",function(){clearTimeout(s)})}_listAnimationSettingsKeys(t="mobile"){const e=[""];switch(t){case"mobile":e.unshift("_mobile");case"tablet":e.unshift("_tablet");case"desktop":e.unshift("_desktop")}const i=[];return["animation","_animation"].forEach(t=>{e.forEach(e=>{i.push(t+e)})}),i}_removeAnimationSettings(t,e){this._listAnimationSettingsKeys().forEach(t=>delete e[t]),t.dataset.settings=JSON.stringify(e)}static run(){const t=new RocketElementorAnimation;requestAnimationFrame(t._detectAnimations.bind(t))}}document.addEventListener("DOMContentLoaded",RocketElementorAnimation.run);</script><noscript><link rel="stylesheet" href="https://serendipitydiplomados.com/wp-content/cache/min/1/91b3a48bfe167653f3cc4edfa15a7ac8.css" media="all" data-minify="1" /><link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://serendipitydiplomados.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=5.7.1' type='text/css' media='only screen and (max-width: 768px)' /><link rel='stylesheet' id='mfn-fonts-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A1%2C300%2C400%2C400italic%2C500%2C700%2C700italic&#038;display=swap&#038;ver=5.8.1' type='text/css' media='all' /><link rel='stylesheet' id='mfn-font-button-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C400&#038;display=swap&#038;ver=5.8.1' type='text/css' media='all' /><link rel='stylesheet' id='mfn-hb-Montserrat-400-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C400&#038;ver=5.8.1' type='text/css' media='all' /></noscript></body>
</html>

<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1633968386 -->
@endsection
