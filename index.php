<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/favicon.ico">
    <title>Home - <?php bloginfo('name') ?></title>
    <style>
    *{margin:0;padding:0}body{font:400 16px/1.62 Georgia,"Xin Gothic","Hiragino Sans GB","Droid Sans Fallback","Microsoft YaHei",sans-serif;color:#535353;overflow:hidden;background:#fff;display:flex;align-items:center;justify-content:center;}.willerce{padding: 0 20px;text-align:center;max-width:500px;flex: 0 0 450px;}.willerce a{color:#535353;text-decoration:underline}.willerce a:link,.willerce a:visited{color:#535353;text-decoration:underline}h1{font-size:26px;color:#424242;margin-bottom:20px}.avatar{margin-bottom:35px;border-radius:64px;box-shadow:0 1px 2px rgba(0,0,0,0.5)}.nav a{padding:0 6px 0 6px}@keyframes fade-in{0%{opacity:0}40%{opacity:0}100%{opacity:1}}@-webkit-keyframes fade-in{0%{opacity:0}40%{opacity:0}100%{opacity:1}}.willerce{animation:fade-in;animation-duration:1s;-webkit-animation:fade-in 1s}
    body,html{width: 100%;height: 100%;}
    .index-footer{position:fixed;bottom:20px;left:calc(50% - 110px);-webkit-calc(50% - 110px);font-size:12px;}
    .index-footer a, .index-footer p{text-decoration: none;color:#999;}
    .index-footer .footer2{margin-top:2px;}
    .main{width: 100%;height: 100%; display:flex;align-items:center;justify-content:center;flex-direction:column;}
    .index-footer { position: fixed; bottom: 20px;left: calc(50% - 110px); font-size: 12px; }
    .index-footer a, .index-footer p { text-decoration: none;color: #999;}
    </style>
</head>
<body>
    <div class="main">
        <div class="willerce">
            <img class="avatar" src="<?php bloginfo('template_url');?>/images/avatar.jpg" alt="<?php bloginfo('name') ?>" title="<?php bloginfo('name') ?>" width="128" height="128">
            <h1><?php bloginfo('name') ?></h1>
            <p>
                <?php if(function_exists('show_wp_title')){show_wp_title();} ?>
            </p>
            <p style="height: 24px; line-height: 24px; margin: 15px 0;">
                <img style="vertical-align: bottom; margin-right: 10px;" src="<?php bloginfo('template_url');?>/images/address.png">
            GuangZhou · China
            </p>
            <p class="nav">
                <a href="/">Home</a>
                <a href="/cat">Cat</a>
                <a href="/blog">Blog</a>
                <a target="_blank" href="https://github.com/leeggco">GitHub</a>
                <a href="#">Demo</a>
            </p>
        </div>
        
        <footer class="index-footer" role="contentinfo" id="footer_in">
            <p class="f_bq footer" style="text-align:center;"> © 2015-2018 &nbsp; ✿ Made with <a href="https://github.com/leeggco" target="_blank">@leeggco</a></p>
            <p class="f_bq footer2" style="text-align:center;"> <a href="http://www.miitbeian.gov.cn" target="_blank">粤ICP备14068070号-4</a> </p>
        </footer>
    </div>

</body>
</html>