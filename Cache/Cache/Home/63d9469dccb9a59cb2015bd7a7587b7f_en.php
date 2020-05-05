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



    <div class="product">
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
                <div class="product-top">
                    <?php echo L(productlist_desc);?>
                </div>
                <div class="product-list clearfix">
                    <div class="left col-lg-9 col-md-9">
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><div class="box clearfix">
                            <div class="image col-lg-5 col-md-5">
                                <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>"><img src="<?php echo ($r["thumb"]); ?>" alt=""></a>
                            </div>
                            <div class="txt col-lg-7 col-md-7">
                                <?php echo ($r["desca"]); ?>
                                <div class="product-btn clearfix">
                                    <div type="button" class="btn1" data-toggle="modal" data-target="#myModal"> <?php echo L(QuickInquiry);?>
                                    </div>
                                    <a href="<?php echo ($r["url"]); ?>" class="btn2" title="<?php echo ($r["title"]); ?>"> <?php echo L(ViewDetails);?></a>

                                </div>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>


                         <!--分页按钮-->
                         <div class="row" style="margin: 3% 0 5% 0">
                            <div class="col-xs-12 text-center pagingClick">
                                <?php echo ($pages); ?>
                            </div>
                        </div> 

                        <!-- 弹窗表单 -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Quick Inquiry</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="clearfix" method="post" action="index.php?g=Home&amp;a=message" onsubmit="return beforeSubmit2(this);">
                                            <div class="modal-box">
                                                <p>Name: </p>
                                                <input placeholder="Name" type="text" name="name">
                                            </div>
                                            <div class="modal-box">
                                                <p>E-mail: </p>
                                                <input placeholder="Email" type="text" name="email">
                                            </div>
                                            <div class="modal-box">
                                                <p>Phone Number:</p>
                                                <input placeholder="Phone" type="text" name="phone">
                                            </div>
                                            <div class="modal-box">
                                                <p>Consulting Information:</p>
                                                <textarea rows="3" placeholder="Please enter your consulting information." name="message"></textarea>
                                            </div>
                                            <input type="submit" value="Send Inquiry" class="footer-sub">
                                        </form>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right col-lg-3 col-md-3">
                        <!-- 搜索 -->
                        <div class="aside-search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-primary" type="button">button</button>
                                </span>
                            </div>
                        </div>
                        <!-- 导航 -->
                        <div class="right-nav">
                            <div class="aside-munu">
                                <ul id="asideMenu" class="list-group">
                    <?php $n=0;foreach($Categorys as $key=>$r):if($n<6) :if( intval($catid)==$r["parentid"] ) :++$n;?><li class="list-group-item">
                                        <a href="<?php echo ($r["url"]); ?>"><?php echo ($r["catname"]); ?></a>
                                        <?php if($r[child] == 1) : ?>
                                        <ul class="list-group sub-group">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li class="list-group-item">
                                                <a href="<?php echo ($rs["url"]); ?>"><?php echo ($rs["catname"]); ?></a>
<!--                                                <ul class="list-group sub-group">
                                                    <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                                                </ul>-->
                                            </li><?php endif; endif; endforeach;?>
                                        </ul>
                                        <?php endif;?>
                                    </li><?php endif; endif; endforeach;?>
                                    
                                </ul>
                                <script>
                                    $("#asideMenu").treemenu({
                                        'delay': 200,
                                        'closeOther': true,
                                        'openActive': true
                                    });
                                </script>
                            </div>

                        </div>
                        <!-- 推荐列表 -->
                        <div class="aside-product">
 <?php if($Think.LANG_SET==en) : ?>
    <?php  $_result=M("Product")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid in(110,134,135)  AND posid =1")->order("listorder desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" class="media">
                                <div class="box-img">
                                    <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>" />
                                </div>
                                <p><?php echo ($r["title"]); ?></p>
                            </a><?php endforeach; endif;?>
    <?php elseif( $Think.LANG_SET==es): ?>
    
        <?php elseif( $Think.LANG_SET==ar): ?>
    
            <?php elseif( $Think.LANG_SET==ru): ?>
    
    <?php endif;?>                             

                        </div>
                    </div>
                </div>

                <div class="line"></div>
                <!-- 相关推荐轮播 -->
                <div class="product-recommend">
                    <div class="title">Recommend Products</div>
                    <div class="product-swiper">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
 <?php if($Think.LANG_SET==en) : ?>
    <?php  $_result=M("Product")->field("id,listorder,url,title,thumb,desca")->where(" 1  and lang=1 AND status=1  AND catid in(110,134,135)  AND posid =1")->order("listorder desc")->limit("6")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="swiper-slide">
                                    <div class="box clearfix">
                                        <div class="image col-lg-5">
                                            <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>" /></a>
                                        </div>
                                        <div class="txt col-lg-7">
                                            <?php echo ($r["desca"]); ?>
                                            <div class="product-btn clearfix">
                                                <div type="button" class="btn1" data-toggle="modal"
                                                    data-target="#myModal"> <?php echo L(QuickInquiry);?>
                                                </div>
                                                <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" class="btn2"> <?php echo L(ViewDetails);?></a>

                                            </div>
                                        </div>
                                    </div>
                                </div><?php endforeach; endif;?>
    <?php elseif( $Think.LANG_SET==es): ?>
    
        <?php elseif( $Think.LANG_SET==ar): ?>
    
            <?php elseif( $Think.LANG_SET==ru): ?>
    
    <?php endif;?>   
                            </div>
                            <div class="swiper-pagination"></div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

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