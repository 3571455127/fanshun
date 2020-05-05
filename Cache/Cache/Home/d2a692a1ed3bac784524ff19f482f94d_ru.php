<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">

    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/jquery.treemenu.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/animate.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src="__PUBLIC__/www/js/jquery.min.js"></script>
    <script src="__PUBLIC__/www/js/swiper.min.js"></script>
    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/www/js/jquery.treemenu.min.js"></script>
    <script src="__PUBLIC__/www/js/jquery.fancybox.min.js"></script>
    <script src="__PUBLIC__/www/js/wow.min.js"></script>
    <script src="__PUBLIC__/www/js/main.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-default <?php if(MODULE_NAME != 'Index') : ?>other-navbar<?php endif;?>">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.php?l=<?php echo (LANG_SET); ?>">
                        <img alt="" src="__PUBLIC__/www/images/logo.png">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <div class="navbar-right clearfix">
                        <!-- nav -->
                        <ul class="nav navbar-nav">
                            <li class="<?php if(MODULE_NAME == 'Index') : ?>active<?php endif;?>"><a href="/index.php?l=<?php echo (LANG_SET); ?>"><?php echo L(HOME_FONT);?></a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<99) :if( intval(0)==$r["parentid"] ) :++$n; if($r[catname] != 'THANKS'): ?><li class="<?php if($bcid==$r[id]) : ?>active<?php endif;?>"><a href="<?php echo ($r["url"]); ?>" class="<?php if($bcid==$r[id]) : ?>active<?php endif;?>"><?php echo ($r["catname"]); ?></a>
                                     <?php if($r[child] == 1) : ?>
                                    <ul class="second">
                                        <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li class="<?php if($parentid==$rs[id]) : ?>afinve active<?php endif;?> <?php if($catid==$rs[id]) : ?>active<?php endif;?>"><a href="<?php echo ($rs["url"]); ?>" class="<?php if($parentid==$rs[id]) : ?>afinve active<?php endif;?> <?php if($catid==$rs[id]) : ?>active<?php endif;?>"><?php echo ($rs["catname"]); ?></a></li><?php endif; endif; endforeach;?>
                                    </ul>
                                     <?php endif;?>
                                </li><?php endif; endif; endif; endforeach;?>
<!--                            <li><a href="about.html">about us</a> </li>
                            <li><a href="video.html">project</a></li>
                            <li><a href="service.html">Markct</a></li>
                            <li><a href="contact.html">Contact Us</a></li>-->
                        </ul>
                        <!-- search -->
                        <div class="header-search">
                            <div class="search-img">
                                <img src="__PUBLIC__/www/images/search.png" alt="">
                            </div>
                            <form action="" class="">
                                <div class="form-box">
                                    <div style="position: relative;">
                                        <div class="s1">
                                            <img class="images" src="__PUBLIC__/www/images/search.png" alt="">
                                            <span id="close-button">×</span>
                                        </div>
                                        <input id="search" type="search" name="search" placeholder="Search..." id="">
                                    </div>
                                </div>
                            </form>
                        </div>


                        <!--  language -->
                        <div class="language">
                            <img src="__PUBLIC__/www/images/language.png" alt="">
                            <ul>
                                <li class="gnglish"><img src="__PUBLIC__/www/images/en.png" alt=""><a href="/index.php?l=en" >English</a></li>
                                <li class="spanish"><img src="__PUBLIC__/www/images/es.png" alt=""><a href="/index.php?l=es" >Espanol</a></li>
                                <li class="arabic"><img src="__PUBLIC__/www/images/ar.png" alt=""><a href="/index.php?l=ar" >اللغة
                                        العربية</a></li>
                                <li class="russian"><img src="__PUBLIC__/www/images/ru.png" alt=""><a href="/index.php?l=ru" >русский</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>


    <div class="index">
        <!-- banner  -->
        <div class="banner">
            <!-- pc -->
            <div class="pc-banner">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php  $_result=M("slide_data")->field("*")->where("fid = 1 and lang=3 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide">
                            <div class="container">
                                <div class="row">
                                    <div class="content">
                                       <?php echo ($r["description"]); ?>
                                    </div>

                                </div>
                            </div>
                            <a href="<?php echo ($r["link"]); ?>" target="_blank"><img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>"></a>
                        </div><?php endforeach; endif;?>
<!--                        <div class="swiper-slide">
                            <a href="" target="_blank"> <img src="__PUBLIC__/www/images/banner.png" alt=""></a>
                        </div>-->

                    </div>

                    <div class="swiper-pagination"></div>
                    <div class="swiper-btn">
                        <div class="swiper-button-prev swiper-button-white"></div>
                        <div class="swiper-button-next swiper-button-white"></div>
                    </div>

                </div>
            </div>

            <!-- wap -->
            <div class="wap-banner">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php  $_result=M("slide_data")->field("*")->where("fid = 2 and lang=3 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide">
                            <a href="<?php echo ($r["link"]); ?>" target="_blank"><img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>"></a>
                        </div><?php endforeach; endif;?>
                    </div>
                    <div class="swiper-pagination"></div>


                </div>
            </div>
        </div>

        <!-- Advantage -->
        <div class="advantage">
            <div class="container">
                <div class="row">
                   <?php getcatvar('page','id = 111','cont');?>
                </div>
            </div>

        </div>

        <!-- pro -->
        <div class="index-pro">
            <div class="container">
                <div class="row">
                    <h3><?php echo L(product);?></h3>
                    <div class="title"><?php echo L(product_des);?></div>
                    <div class="list clearfix">
 <?php if($Think.LANG_SET==en) : ?>
    
    <?php elseif( $Think.LANG_SET==es): ?>
    
        <?php elseif( $Think.LANG_SET==ar): ?>
    
            <?php elseif( $Think.LANG_SET==ru): ?>
    <?php  $_result=M("Product")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=3 AND status=1  AND catid=122  AND posid =1")->order("listorder desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" class="box wow fadeInDown animated col-lg-6 col-md-6 col-sm-6">
                            <div style="position:relative">
                                <div class="box-img"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>" /></div>
                                <p><?php echo ($r["title"]); ?></p>
                            </div>
                        </a><?php endforeach; endif;?>
    <?php endif;?> 
                    </div>
                    <div class="pro-more">
                        <a href=""><?php echo L(ReadMore);?></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- INFO CENTER -->
        <div class="center">
            <div class="container">
                <div class="row">
                    <h3><?php echo L(INFOCENTER);?></h3>
                    <div class="title"><?php echo L(INFOCENTER_des);?></div>
                    <!-- pc-center -->
                    <div class="pc-center" style="position:relative;margin-bottom:50px">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide clearfix">
                                    <div class="box clearfix">
                                        <div class="img">
                                            <img src="__PUBLIC__/www/images/center.png" alt="">
                                        </div>
                                        <div class="txt">
                                            <div class="titles">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit,
                                                sed
                                                do eiusmod tempor </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse
                                                ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                                vel
                                                facilisis. </p>
                                            <div class="time">2020/04/12</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide clearfix">
                                    <div class="box clearfix">
                                        <div class="txt">
                                            <div class="titles">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit,
                                                sed
                                                do eiusmod tempor </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse
                                                ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                                vel
                                                facilisis. </p>
                                            <div class="time">2020/04/12</div>
                                        </div>
                                        <div class="img">
                                            <img src="__PUBLIC__/www/images/center.png" alt="">
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide clearfix">
                                    <div class="box clearfix">
                                        <div class="img">
                                            <img src="__PUBLIC__/www/images/center.png" alt="">
                                        </div>
                                        <div class="txt">
                                            <div class="titles">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit,
                                                sed
                                                do eiusmod tempor </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse
                                                ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                                vel
                                                facilisis. </p>
                                            <div class="time">2020/04/12</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide clearfix">
                                    <div class="box clearfix">
                                        <div class="txt">
                                            <div class="titles">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit,
                                                sed
                                                do eiusmod tempor </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse
                                                ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                                vel
                                                facilisis. </p>
                                            <div class="time">2020/04/12</div>
                                        </div>
                                        <div class="img">
                                            <img src="__PUBLIC__/www/images/center.png" alt="">
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide clearfix">
                                    <div class="box clearfix">
                                        <div class="img">
                                            <img src="__PUBLIC__/www/images/center.png" alt="">
                                        </div>
                                        <div class="txt">
                                            <div class="titles">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit,
                                                sed
                                                do eiusmod tempor </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse
                                                ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                                vel
                                                facilisis. </p>
                                            <div class="time">2020/04/12</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                        <div class="swiper-button-next swiper-button-white"></div>
                    </div>

                    <!-- wap-center -->
                    <div class="wap-center">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="box clearfix">
                                        <div class="img">
                                            <img src="__PUBLIC__/www/images/center.png" alt="">
                                        </div>
                                        <div class="txt">
                                            <div class="titles">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit,
                                                sed
                                                do eiusmod tempor </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse
                                                ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                                vel
                                                facilisis. </p>
                                            <div class="time">2020/04/12</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box clearfix">

                                        <div class="txt">
                                            <div class="titles">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit,
                                                sed
                                                do eiusmod tempor </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse
                                                ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                                vel
                                                facilisis. </p>
                                            <div class="time">2020/04/12</div>
                                        </div>
                                        <div class="img">
                                            <img src="__PUBLIC__/www/images/center.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box clearfix">
                                        <div class="img">
                                            <img src="__PUBLIC__/www/images/center.png" alt="">
                                        </div>
                                        <div class="txt">
                                            <div class="titles">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit,
                                                sed
                                                do eiusmod tempor </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse
                                                ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                                vel
                                                facilisis. </p>
                                            <div class="time">2020/04/12</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- case -->
        <div class="case">
            <div class="container">
                <div class="row">
                    <h3><?php echo L(Customercase);?></h3>
                    <div class="title"><?php echo L(Customercase_des);?></div>
                    <!-- pc -->
                    <div class="pc-case">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
 <?php if($Think.LANG_SET==en) : ?>
    
    <?php elseif( $Think.LANG_SET==es): ?>
    
        <?php elseif( $Think.LANG_SET==ar): ?>
    
            <?php elseif( $Think.LANG_SET==ru): ?>
    <?php  $_result=M("Case")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=3 AND status=1  AND catid=124  AND posid =1")->order("listorder desc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="swiper-slide">
            <div class="box-img"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>" /></div>
        </div><?php endforeach; endif;?>
    <?php endif;?>     
                            </div>

                        </div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                        <div class="swiper-button-next swiper-button-white"></div>
                    </div>
                    <!-- wap -->
                    <div class="wap-case">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
 <?php if($Think.LANG_SET==en) : ?>
    
    <?php elseif( $Think.LANG_SET==es): ?>
    
        <?php elseif( $Think.LANG_SET==ar): ?>
    
            <?php elseif( $Think.LANG_SET==ru): ?>
    <?php  $_result=M("Case")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=3 AND status=1  AND catid=124  AND posid =1")->order("listorder desc")->limit("10")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="swiper-slide">
            <div class="box-img"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>" /></div>
        </div><?php endforeach; endif;?>
    <?php endif;?>   
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   

   

    <footer>
        <div class="container">
            <div class="row">
                <div class="details col-lg-7 col-md-7">
                    <div class="top">
                        <h6><?php echo L(wantto);?></h6>
                        <p><?php echo L(wantto_des);?></p>
                    </div>
                    <ul>
                        <li><?php echo ($address); ?></li>
                        <li>+86 <?php echo ($shouji); ?></li>
                        <li>+86 <?php echo ($shoujia); ?></li>
                        <li><?php echo ($email); ?></li>
                    </ul>
                </div>

                <form class="col-lg-5 col-md-5 clearfix" method="post" action="index.php?g=Home&a=message" onsubmit="return beforeSubmit2(this);">
                    <div class="clearfix">
                        <div class="txt col-lg-3 col-md-3 col-sm-3 col-xs-4"><?php echo L(Name);?>: <span>*</span></div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8"> <input placeholder="<?php echo L(Name);?>" type="text"
                                name="name"></div>
                    </div>
                    <div class="clearfix">
                        <div class="txt col-lg-3 col-md-3 col-sm-3 col-xs-4"><?php echo L(Emaila);?>: <span>*</span></div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8"> <input placeholder="<?php echo L(Email);?>" type="text"
                                name="email"></div>
                    </div>
                    <div class="clearfix">
                        <div class="txt col-lg-3 col-md-3 col-sm-3 col-xs-4"><?php echo L(Message);?>: <span>*</span></div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8"><textarea rows="3" placeholder="<?php echo L(Message_des);?>" name="message"></textarea></div>
                    </div>
                    <input type="submit" value="<?php echo L(Send);?>" class="footer-btn">
                </form>
            </div>
        </div>
        <div class="copy"><?php echo ($cop); ?></div>
        <div class="goTop" style="display: block;">
            <i class="topIcon"></i>
            <p>TOP</p>
        </div>
    </footer>

</body>

</html>