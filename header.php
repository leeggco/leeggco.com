<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('language ');?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title();?> - <?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33826658-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-33826658-1');
	</script>
  </head>
<body>
  <header class="mod-head">
    <h1 class="mod-head__title"><a href="http://leeggco.com">leeggco's Blog</a></h1>
    <div class="mod-head__logo">
      <a href="http://leeggco.com">
        <img class="avatar" src="<?php bloginfo('template_url');?>/images/avatar.jpg" alt="" width="26" height="26">
      </a>
    </div>
    <nav class="mod-head__nav">
      <ul id="menu-%e8%8f%9c%e5%8d%951" class="mod-head__ul">
        <li id="menu-item-2526" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2526"><a href="/">Home</a><span>·</span></li>
        <li id="menu-item-2528" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2528"><a href="/cat">Cat</a><span>·</span></li>
        <li id="menu-item-2529" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2529"><a href="/blog">Blog</a><span>·</span></li>
        <li id="menu-item-2530" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2530"><a target="_blank" href="https://github.com/leeggco">GitHub</a><span>·</span></li>
        <li id="menu-item-2533" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2533"><a href="#">Demo</a></li>
      </ul>	
    </nav>
  </header>