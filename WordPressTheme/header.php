<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script>
  (function(d) {
    var config = {
      kitId: 'ojk1wjf',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="">
    <div class="header">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sm.png" alt="">
        <p>リフォーム、注文住宅は碧南市の大友建築</p>
      </div>
      <div class="header-nav">
        <ul>
          <li>大友建築について</li>
          <li>注文住宅</li>
          <li>リフォーム</li>
          <li>防音室</li>
          <li>施工事例</li>
          <li>会社概要</li>
        </ul>
      </div>
    </div>
  </header>