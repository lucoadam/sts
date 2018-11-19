<?php
include_once("init.php");
require("data/data.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$company['name']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="<?= ROOT_URL ?>/images/logo.png" type="image/png" sizes="16x16">
    <link href="<?= ROOT_URL ?>/css/main.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?=ROOT_URL?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style type="text/css">
        #osfooter{display:block;position:fixed;bottom:0;left:0;width:100%;height:300px;margin-bottom:-300px;overflow:hidden;background-color:transparent;z-index:5000;text-indent:-5000px;}
        #osfooter div{margin-bottom:-1000px;}
        #osfooter a{display:block; text-indent:-5000px;}
    </style>
    <!--[if lte IE 6]><style type="text/css">#osfooter{position:absolute; display:none;}</style><![endif]-->

</head>
<body id="top">
<script type="text/javascript">
    (function(){
        var bsa = document.createElement('script');
        bsa.type = 'text/javascript';
        bsa.async = true;
        bsa.src = 'Adds/bsa.js';
        (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
    })();
</script>
<?php if(isset($sliderIsActive)){?>
<div id="slider" class="wrapper full_width hpslider">
    <div class="flex-container flex-rtl">
        <div class="flexslider flex-homepage paging">
            <ul class="flex-slides">
                <?php for($i=0;$i<count($slider);$i++){?>
                    <li><img src="<?=$slider[$i]['url']?>" alt="">
                        <div class="flex-caption">
                            <div class="fc-hpage">
                                <div class="table">
                                    <div class="t-cell">
                                        <h2 class="hptitle"><?=$slider[$i]['title']?></h2>
                                        <p class="hpsubtitle times"><?=$slider[$i]['subtitle1']?><br>
                                            <?=$slider[$i]['subtitle2']?> </p>
                                        <p><a href="#" class="uppercase button large rnd8 blue"><?=$slider[$i]['linkText']?> &raquo;</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php }?>
            </ul>
            <div class="pagingwrapper"></div>
        </div>
    </div>
</div>
<?php } ?>
<div class="wrapper row1">
    <header role="banner" id="header" class="clear">
        <div id="logo">
            <h1><span class="fa"><img src="<?= ROOT_URL ?>/images/logo.png" class="img-responsive" style="width:50px;"/></span> <a href="<?=ROOT_URL?>/index.php"><?=$company['stname']?></a></h1>
        </div>
        <nav role="navigation" id="topnav" class="clear">
            <ul class="clear">
                <li class="active"><a href="<?=ROOT_URL?>/index.php" title="Home">Home</a></li>
                <li><a href="<?=ROOT_URL?>/pages/services.php" title="Services">Services</a></li>
                <li><a class="drop" href="<?=ROOT_URL?>/pages/about-us.php" title="About Us">About Us</a>
                    <ul class="sub-menu">
                        <li><a href="<?=ROOT_URL?>/pages/about-us/team.php" title="Team">Team</a></li>
                        <li class="last-child"><a href="<?=ROOT_URL?>/pages/about-us/team-single.php" title="Team - Single">Team - Single</a></li>
                    </ul>
                </li>
                <li><a href="<?=ROOT_URL?>/pages/contact.php" title="Contact">Contacts</a></li>
                <li><a href="<?=ROOT_URL?>/pages/clients.php" title="Clients">Clients</a></li>
                <li><a href="<?=ROOT_URL?>/pages/faq.php" title="FAQ">FAQ</a></li>
                        <!--<li><a href="pages/archives.php" title="Archives">Archives</a></li>
                        <li><a href="pages/404.php" title="404">404</a></li>
                        <li><a href="pages/sidebar-left.php" title="Sidebar Left">Sidebar Left</a></li>
                        <li><a href="pages/sidebar-right.php" title="Sidebar Right">Sidebar Right</a></li>
                        <li><a href="pages/sidebar-left-and-right.php" title="Sidebar Left &amp; Right">Sidebar Left &amp; Right</a></li>
                        <li><a href="pages/full-width-content.php" title="Full Width Content">Full Width Content</a></li>
                        <li class="last-child"><a href="pages/html-sitemap.php" title="HTML Sitemap">HTML Sitemap</a></li>
                <li><a class="drop" href="#" title="Elements">Elements</a>
                    <ul class="sub-menu">
                        <li><a href="elements/buttons.php" title="Buttons">Buttons</a></li>
                        <li><a href="elements/alert-messages.php" title="Alert Messages">Alert Messages</a></li>
                        <li><a href="elements/font-icons.php" title="Font Icons">Font Icons</a></li>
                        <li><a href="elements/social-icons.php" title="Social Icons">Social Icons</a></li>
                        <li><a href="elements/call-to-action.php" title="Call To Action">Call To Action</a></li>
                        <li><a href="elements/columns.php" title="Columns">Columns</a></li>
                        <li><a href="elements/columns-no-gutter.php" title="Columns - No Gutter">Columns - No Gutter</a></li>
                        <li><a href="elements/lists.php" title="Lists">Lists</a></li>
                        <li><a href="elements/accordions-toggle-tabs.php" title="Accordions, Toggles &amp; Tabs">Accordions, Toggles &amp; Tabs</a></li>
                        <li><a href="elements/pricing-tables.php" title="Pricing Tables">Pricing Tables</a></li>
                        <li><a href="elements/misc-typography.php" title="Misc. Typography">Misc. Typography</a></li>
                        <li><a href="elements/slider-and-lightbox.php" title="Slider + Lightbox">Slider + Lightbox</a></li>
                        <li><a href="elements/media.php" title="Media">Media</a></li>
                        <li><a href="elements/tables.php" title="Tables">Tables</a></li>
                        <li class="last-child"><a href="elements/testimonials.php" title="Testimonials">Testimonials</a></li>
                    </ul>
                </li>
                <li><a class="drop" href="#" title="Blog Layouts">Blog</a>
                    <ul class="sub-menu">
                        <li><a class="drop" href="#" title="Blog Overview">Blog Overview</a>
                            <ul class="sub-menu">
                                <li><a href="blog-layouts/blog-overview/full-width.php" title="Full Width">Full Width</a></li>
                                <li><a href="blog-layouts/blog-overview/sidebar-left.php" title="Sidebar Left">Sidebar Left</a></li>
                                <li><a href="blog-layouts/blog-overview/sidebar-right.php" title="Sidebar Right">Sidebar Right</a></li>
                                <li class="last-child"><a href="blog-layouts/blog-overview/2-col-grid.php" title="2 Col. Grid">2 Col. Grid</a></li>
                            </ul>
                        </li>
                        <li class="last-child"><a class="drop" href="#" title="Blog Post">Blog Post</a>
                            <ul class="sub-menu">
                                <li><a href="blog-layouts/blog-post/full-width.php" title="Full Width">Full Width</a></li>
                                <li><a href="blog-layouts/blog-post/sidebar-left.php" title="Sidebar Left">Sidebar Left</a></li>
                                <li class="last-child"><a href="blog-layouts/blog-post/sidebar-right.php" title="Sidebar Right">Sidebar Right</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="last-child"><a class="drop" href="#" title="Gallery Layouts">Gallery</a>
                    <ul class="sub-menu">
                        <li><a href="gallery-layouts/full-width.php" title="Full Width">Full Width</a></li>
                        <li><a href="gallery-layouts/2-col-grid.php" title="2 Col. Grid">2 Col. Grid</a></li>
                        <li><a href="gallery-layouts/3-col-grid.php" title="3 Col. Grid">3 Col. Grid</a></li>
                        <li><a href="gallery-layouts/4-col-grid.php" title="4 Col. Grid">4 Col. Grid</a></li>
                        <li class="last-child"><a href="gallery-layouts/5-col-grid.php" title="5 Col. Grid">5 Col. Grid</a></li>
                    </ul>
                </li>-->
            </ul>
        </nav>
    </header>
</div>
