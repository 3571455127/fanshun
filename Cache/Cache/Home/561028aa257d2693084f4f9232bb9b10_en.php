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



    <div class="contact">
        <!-- 路径导航 -->

        <div class="ljbg">
            <div class="container">
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="/index.php?l=<?php echo (LANG_SET); ?>"><?php echo L(HOME_FONT);?></a></li>
                        <li class="active"><?php echo ($catname); ?></li>
                    </ol>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="form clearfix">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <form class="clearfix" method="post" action="index.php?g=Home&amp;a=message"
                            onsubmit="return beforeSubmit2(this);">
                            <h3>Get In Touch</h3>
                            <div class="modal-box clearfix">
                                <div class="txt col-lg-3 col-md-3 col-sm-3 col-xs-3">Name:</div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"> <input placeholder="Name" type="text"
                                        name="name"></div>
                            </div>
                            <div class="modal-box clearfix">
                                <div class="txt col-lg-3 col-md-3 col-sm-3 col-xs-3">E-mail: </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"> <input placeholder="Email" type="text"
                                        name="email"></div>
                            </div>
                            <div class="modal-box clearfix">
                                <div class="txt col-lg-3 col-md-3 col-sm-3 col-xs-3">Phone: </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"> <input placeholder="Phone" type="text"
                                        name="phone"></div>
                            </div>
                            <div class="modal-box clearfix">
                                <div class="txt col-lg-3 col-md-3 col-sm-3 col-xs-3">Message: </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"> <textarea rows="3"
                                        placeholder="Please enter your consulting information."
                                        name="message"></textarea>
                                </div>
                            </div>
                            <input type="submit" value="Send Inquiry" class="contact-btn">
                        </form>
                    </div>
                    <div class="info col-lg-4 col-md-4 col-sm-4">
                        <ul>
                            <li>
                                <i class="fa fa-phone fa-2x"></i>
                                <h5>Telephone</h5>
                                <p><?php echo ($phone); ?></p>
                            </li>
                            <li>
                                <i class="fa fa-mobile fa-3x"></i>
                                <h5>Mobilephone</h5>
                                <p><?php echo ($shouji); ?></p>
                                <p><?php echo ($shoujia); ?></p>

                            </li>
                            <li>
                                <i class="fa fa-envelope fa-2x"></i>
                                <h5>E-mail</h5>
                                <p><?php echo ($email); ?></p>
                                <p><?php echo ($emaila); ?></p>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lines"></div>

                <div class="conatact-recommend">
                    <h6>Recommend Read</h6>
                    <!-- pc -->
                    <div class="pc-about-swiper">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="thumbnail">
                                        <a href="#"><img alt="" src="__PUBLIC__/www/images/pro1.png"></a>
                                        <div class="caption">
                                            <h3><a href="#">Nullam id dolor id nibh ultricies id dolor id nibh
                                                    ultricies</a></h3>
                                            <div class="mate">
                                                <span><i class="fa fa-bookmark"></i> <a href="">News</a></span>
                                                <span><i class="fa fa-user"></i> <a href="">Digood</a></span>
                                                <span><i class="fa fa-clock-o"></i> <a href="">20 Apr 2020</a></span>
                                            </div>
                                            <hr>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                                                elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbnail">
                                        <a href="#"><img alt="" src="__PUBLIC__/www/images/pro2.png" width="100%"></a>
                                        <div class="caption">
                                            <h3><a href="#">Nullam id dolor id nibh ultricies id dolor id nibh
                                                    ultricies</a></h3>
                                            <div class="mate">
                                                <span><i class="fa fa-bookmark"></i> <a href="">News</a></span>
                                                <span><i class="fa fa-user"></i> <a href="">Digood</a></span>
                                                <span><i class="fa fa-clock-o"></i> <a href="">20 Apr 2020</a></span>
                                            </div>
                                            <hr>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                                                elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbnail">
                                        <a href="#"><img alt="" src="__PUBLIC__/www/images/pro3.png" width="100%"></a>
                                        <div class="caption">
                                            <h3><a href="#">Nullam id dolor id nibh ultricies id dolor id nibh
                                                    ultricies</a></h3>
                                            <div class="mate">
                                                <span><i class="fa fa-bookmark"></i> <a href="">News</a></span>
                                                <span><i class="fa fa-user"></i> <a href="">Digood</a></span>
                                                <span><i class="fa fa-clock-o"></i> <a href="">20 Apr 2020</a></span>
                                            </div>
                                            <hr>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                                                elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                        </div>
                    </div>
                    <!-- wap -->
                    <div class="wap-about-swiper">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="thumbnail">
                                        <a href="#"><img alt="" src="__PUBLIC__/www/images/product.jpg"></a>
                                        <div class="caption">
                                            <h3><a href="#">Nullam id dolor id nibh ultricies id dolor id nibh
                                                    ultricies</a></h3>
                                            <div class="mate">
                                                <span><i class="fa fa-bookmark"></i> <a href="">News</a></span>
                                                <span><i class="fa fa-user"></i> <a href="">Digood</a></span>
                                                <span><i class="fa fa-clock-o"></i> <a href="">20 Apr 2020</a></span>
                                            </div>
                                            <hr>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                                                elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbnail">
                                        <a href="#"><img alt="" src="__PUBLIC__/www/images/product2.jpg" width="100%"></a>
                                        <div class="caption">
                                            <h3><a href="#">Nullam id dolor id nibh ultricies id dolor id nibh
                                                    ultricies</a></h3>
                                            <div class="mate">
                                                <span><i class="fa fa-bookmark"></i> <a href="">News</a></span>
                                                <span><i class="fa fa-user"></i> <a href="">Digood</a></span>
                                                <span><i class="fa fa-clock-o"></i> <a href="">20 Apr 2020</a></span>
                                            </div>
                                            <hr>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                                                elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbnail">
                                        <a href="#"><img alt="" src="__PUBLIC__/www/images/product3.jpg" width="100%"></a>
                                        <div class="caption">
                                            <h3><a href="#">Nullam id dolor id nibh ultricies id dolor id nibh
                                                    ultricies</a></h3>
                                            <div class="mate">
                                                <span><i class="fa fa-bookmark"></i> <a href="">News</a></span>
                                                <span><i class="fa fa-user"></i> <a href="">Digood</a></span>
                                                <span><i class="fa fa-clock-o"></i> <a href="">20 Apr 2020</a></span>
                                            </div>
                                            <hr>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                                                elit non mi porta gravida at eget metus. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit.</p>
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

    </div>

    

   

    <footer>
        <div class="container">
            <div class="row wow fadeInUp animated">
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
        <div class="copy  wow fadeInUp animated"><?php echo ($cop); ?></div>
        <div class="goTop" style="display: block;">
            <i class="topIcon"></i>
            <p>TOP</p>
        </div>
    </footer>

</body>

</html>