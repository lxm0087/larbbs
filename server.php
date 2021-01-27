<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';





/* CSS Document */
body{max-width: 640px;margin:auto;}
img{width:100%;}
#header {
	width: 100%;
	min-width: 320px;
	/*height: 50px;*/
	/* background-color: #000; */
	position: relative
}
.yia{
    font-size: 25px;
	background: url('../images/hui.png')no-repeat;
	    background-position-x: 0%;
	    background-position-y: 0%;
	    background-size: auto auto;
	color: #fff;
	line-height: 2;
	text-align: center;
	background-position: 49.6%;
	background-size: 36px;
}
.yia span{margin-left: 7%;}
.yiabox{	max-width: 640px;

margin: auto;

	/*deault*/
  background-color:-webkit-linear-gradient(left, #CF362D, #981F17);
        background-color:-o-linear-gradient(left, #CF362D, #981F17);
        background:linear-gradient(to right, #CF362D, #981F17);
}

.sead{width:75%;height:30px;left:12%;top:23%;background:#fff;border-radius:4px;}
.sead form{width:100%;}
.sead .xsearch_box{float:left;width:86%;height:29px;margin-left:5px}
.sead .xsub{-moz-background-size:100% 100%;-webkit-background-size:100% 100%;background-size:100% 100%;}
.sead .xsub{float:right;background:url(../images/sea_03.jpg) no-repeat;width:29px;height:26px;margin-top:3px;margin-right:1%}
.showMenu {
        left: 3%;
        top: 50%;
        display: block;
        width: 48px;
	height: 28px;
	margin-top: -14px;
	z-index: 1001;
}
.showMenu a {
        display: block;
        width: 48px;
	height: 28px;
	position: relative;
	outline: none;
}
.showMenu a:before, .showMenu a:after {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        height: 4px;
	width: 100%;
	z-index: -1;
	-moz-transition: all 0.3s ease 0s;
	-webkit-transition: all 0.3s ease 0s;
	-o-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	background-color: #fff;
	margin-top: -4px;
}
.showMenu b{color:#fff;}
        .showMenu a:before {
            -moz-transform: translateY(-5px);
	-o-transform: translateY(-5px);
	-ms-transform: translateY(-5px);
	-webkit-transform: translateY(-5px);
	transform: translateY(-5px);
}
.showMenu a:after {
            -moz-transform: translateY(8px);
	-o-transform: translateY(8px);
	-ms-transform: translateY(8px);
	-webkit-transform: translateY(8px);
	transform: translateY(8px);
}
.hideMenu a:before {
            -moz-transform: rotate(90deg) rotate(45deg);
	-o-transform: rotate(90deg) rotate(45deg);
	-ms-transform: rotate(90deg) rotate(45deg);
	-webkit-transform: rotate(90deg) rotate(45deg);
	transform: rotate(90deg) rotate(45deg);
}
.hideMenu a:after {
            -moz-transform: rotate(90deg) rotate(-45deg);
	-o-transform: rotate(90deg) rotate(-45deg);
	-ms-transform: rotate(90deg) rotate(-45deg);
	-webkit-transform: rotate(90deg) rotate(-45deg);
	transform: rotate(90deg) rotate(-45deg);
}
.search{
            left: 50%;
            top: 50%;
            display: block;
            width: 319px;
	height: 39px;
	margin-left: -159px;
	margin-top: -19px;
	background: url(../images/search.png) no-repeat;
}
.topTell {
            right: 3%;
            top: 50%;
            display: block;
            width: 37px;
    height: 38px;
    margin-left: 14px;
    margin-top: -18px;
    background: url(../images/top_tell.png) no-repeat;
    background-size: 38px;
}
.topTell a{display:block;height:40px;width:40px}
.navxl ul {
            display: none;
            margin-top: 65px;
    position: absolute;
    right: 0;
    width: 28%;
    z-index: 999;
}
.shake {-webkit-animation:shake 0.2s ease-in-out  6  alternate;-moz-animation:shake 0.2s ease-in-out  6  alternate;-o-animation:shake 0.2s ease-in-out  6  alternate;animation:shake 0.2s ease-in-out  6  alternate;}
@-webkit-keyframes shake{
            0% {
                -moz-transform:rotate(8deg);
		-webkit-transform:rotate(8deg);
		transform:rotate(8deg);
		}
	100% {
                -moz-transform:rotate(-8deg);
		-webkit-transform:rotate(-8deg);
		transform:rotate(-8deg);
		}
	}
@-moz-keyframes shake {
            0% {
                -moz-transform:rotate(8deg);
		-webkit-transform:rotate(8deg);
		transform:rotate(8deg);
		}
	100% {
                -moz-transform:rotate(-8deg);
		-webkit-transform:rotate(-8deg);
		transform:rotate(-8deg);
		}
	}
@-o-keyframes shake {
            0% {
                -moz-transform:rotate(8deg);
		-webkit-transform:rotate(8deg);
		transform:rotate(8deg);
		}
	100% {
                -moz-transform:rotate(-8deg);
		-webkit-transform:rotate(-8deg);
		transform:rotate(-8deg);
		}
	}
@keyframes shake {
            0% {
                -moz-transform:rotate(8deg);
		-webkit-transform:rotate(8deg);
		transform:rotate(8deg);
		}
	100% {
                -moz-transform:rotate(-8deg);
		-webkit-transform:rotate(-8deg);
		transform:rotate(-8deg);
		}
	}

.menulist {width:100%;}
.menulist h3 {wdith:100%;height:80px;font-size:30px;color:#fff;font-weight:500;padding-top:20px;padding-left:22px;}
.menulist ul {width:100%;border-bottom:1px solid #6a7380;}
            .menulist ul li {width:100%;float:left;height:78px;overflow:hidden;line-height:78px;font-size:26px;text-align:center;color:#9097a0;border-top:1px solid #6a7380;}
.menulist ul li a {display:block;float:left;height:78px;color:#9097a0;border-right:1px solid #6a7380;border-right:1px solid #6a7380;}
.menulist ul li a:nth-child(4n) {border-right:none}
.popMenu {display:none;width:100%;}
.menulists {position:absolute;width:100%;}
.menuBtn {width:100%;height:80px;line-height:80px;text-align:center;font-size:26px;color:#424b59; background-color:#242c37;cursor:pointer;position:relative; -webkit-perspective: 1200px;
    -moz-perspective: 1200px;
    -ms-perspective: 1200px;
    -o-perspective: 1200px;
    perspective: 1200px;
	-webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;}
.menuBtn span {display:inline-block;}
.menuBtn.active i {-moz-transform:rotateX(180deg);-webkit-transform:rotateX(180deg);transform:rotateX(180deg);}
.menuBtn i {position:absolute;left:50%;top:50%;margin-top:-3px;margin-left:60px;display:block;width:17px;height:12px; background:url(../images/down.png) no-repeat;-moz-transition:all 0.6s linear 0s;-webkit-transition:all 0.6s linear 0s;transition:all 0.6s linear 0s;}
.bottomFooter{margin-bottom:100px}
.call_number {display:block;width:97%;margin:20px auto;}
.address_info {width:100%;height:306px; background:url(../images/derg.png) no-repeat center; -moz-background-size:100% 100%;-webkit-background-size:100% 100%;background-size:100% 100%;margin:20px auto;}
.address_pic1 {left:0;top:66px;width:280px;height:190px; background:url(../images/der1.png) no-repeat;}
.address_pic2 {right:54px;top:56px;width:342px;height:134px; background:url(../images/der2.png) no-repeat;}
.address_online {right:209px;top:200px;width:187px;height:64px; background:url(../images/hMap.png) no-repeat;}
.hAbout {right:10px;top:200px;width:187px;height:64px; background:url(../images/hAbout.png) no-repeat;}

.scrollTop { position:fixed; bottom:116px; right:0; width:13%; }



.sy_yh{background:url(../images/bgsd_11.png);position:absolute;top:240px;width:100%;height:90px;color:#fff;}
.bot_logo{float:left;width:56px;height:61px;padding-top:20px;margin-right:300px;}
.bot_inner{float:left;width:212px;font-size:23px;padding-top:20px;margin-right:20px;}
.bot_inner p{font-size:18px;}
.bot_zx{float:left;width:212px;padding-top:35px}
.bot_zx a{display:block;background:#d3312c;color:#fff;width:104px;height:30px;line-height:30px;text-align:center}
                            .bot_hde{float:right;width:49px;height:50px;}



 @media screen and (min-width:320px) and (max-width:900px) {
                                .yia{
                                    font-size: 18px;
	 	background: url('../images/hui.png')no-repeat;
	 	    background-position-x: 0%;
	 	    background-position-y: 0%;
	 	    background-size: auto auto;
	 	color: #fff;
	 	line-height: 3;
	 	text-align: center;
	 	background-position: 49.5%;
	 	background-size: 30px;
	 }
	 .yia span{margin-left: 11%;}
	 .yiabox{margin: auto;}
	.sead{width:70%;height:30px;left:15%;top:26%;background:#fff;border-radius:4px;}
.sead form{width:100%;}
.sead .xsearch_box{float:left;width:86%;height:30px;margin-left:5px}

.sead .xsub{-moz-background-size:100% 100%;-webkit-background-size:100% 100%;background-size:100% 100%;width:23px;height:20px;margin-top:5px;margin-right:1%}
	 .sy_yh{top:150px;height:70px;}
.bot_logo{width:46px;height:51px;padding-top:10px;margin:0 10px 0 5px;}
.bot_inner{width:142px;font-size:14px;padding-top:15px;margin-right:10px;}
.bot_inner p{font-size:12px;}
.bot_zx{width:74px;padding-top:20px}
.bot_zx a{width:74px;height:30px;line-height:30px;}
.bot_hde{width:19px;height:20px;}

#header {.showMenu b{font-size:8px}
	height: 40px;
}.bottomFooter{margin-bottom:50px}
.navxl ul{margin-top:35px}
.showMenu {
                                    width: 24px;
	height: 14px;
	margin-top: -7px;
--moz-background-size:100% 100%;
	-webkit-background-size: 100% 100%;
	background-size: 100% 100%;
}
.showMenu a {
                                    width: 24px;
	height: 14px;
}
.showMenu a {
                                    display: block;
                                    width: 24px;
	height: 14px;
	position: relative;
}
.showMenu a:before, .showMenu a:after {
                                    content: '';
                                    position: absolute;
                                    left: 0;
                                    top: 50%;
                                    height: 4px;
	width: 100%;
	z-index: -1;
	-moz-transition: all 0.3s ease 0s;
	-o-transition: all 0.3s ease 0s;
	-webkit-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	background-color: #fff;
	margin-top: -2px;
}
.showMenu a:before {
                                    -moz-transform: translateY(-5px);
	-o-transform: translateY(-5px);
	-ms-transform: translateY(-5px);
	-webkit-transform: translateY(-5px);
	transform: translateY(-5px);
}
.showMenu a:after {
                                    -moz-transform: translateY(5px);
	-o-transform: translateY(5px);
	-ms-transform: translateY(5px);
	-webkit-transform: translateY(5px);
	transform: translateY(5px);
}
.hideMenu a:before {
                                    -moz-transform: rotate(90deg) rotate(45deg);
	-o-transform: rotate(90deg) rotate(45deg);
	-ms-transform: rotate(90deg) rotate(45deg);
	-webkit-transform: rotate(90deg) rotate(45deg);
	transform: rotate(90deg) rotate(45deg);
}
.hideMenu a:after {
                                    -moz-transform: rotate(90deg) rotate(-45deg);
	-o-transform: rotate(90deg) rotate(-45deg);
	-ms-transform: rotate(90deg) rotate(-45deg);
	-webkit-transform: rotate(90deg) rotate(-45deg);
	transform: rotate(90deg) rotate(-45deg);
}
.search{
                                    width: 160px;
	height: 20px;
	margin-top: -10px;
	margin-left: -80px;
	-moz-background-size: 100% 100%;
	-webkit-background-size: 100% 100%;
	background-size: 100% 100%;
}
.topTell {
                                    width: 24px;
	height: 24px;
	margin-top: -12px;
	-moz-background-size: 100% 100%;
	-webkit-background-size: 100% 100%;
	background-size: 100% 100%;
}
.topTell a{	width: 24px;
	height: 24px;}
.menulist h3 {height:40px;font-size:15px;padding-left:11px;padding-top:10px;}
.menulist ul li {height:39px;font-size:13px;line-height:39px;}
.menuBtn {height:40px;line-height:40px;font-size:13px;}
.menuBtn i {width:9px;height:6px;margin-left:30px;-moz-background-size:100% 100%;-webkit-background-size:100% 100%;background-size:100% 100%;}
.address_info {width:100%;height:153px;}
.address_pic1 {top:33px;width:140px;height:95px;-moz-background-size:100% 100%;-webkit-background-size:100% 100%;background-size:100% 100%;}
.address_pic2 {right:28px;top:28px;width:171px;height:67px;-moz-background-size:100% 100%;-webkit-background-size:100% 100%;background-size:100% 100%;}
.address_online {right:105px;top:100px;width:94px;height:32px;-moz-background-size:100% 100%;-webkit-background-size:100% 100%;background-size:100% 100%;}
.hAbout {right:6px;top:100px;width:94px;height:32px;-moz-background-size:100% 100%;-webkit-background-size:100% 100%;background-size:100% 100%;}

}
@media screen and (min-width:360px) and (max-width:409px){
                                .sead{width:70%;height:30px;left:15%;top:26%;background:#fff;border-radius:4px;}
.sead form{width:100%;}
.sead .xsearch_box{float:left;width:86%;height:30px;margin-left:5px}
.sead .xsub{-moz-background-size:100% 100%;-webkit-background-size:100% 100%;background-size:100% 100%;width:23px;height:20px;margin-top:5px;margin-right:1%}







.sy_yh{top:121px;height:75px;}
.bot_logo{width:46px;height:51px;padding-top:10px;margin-right:10px;}
.bot_inner{width:164px;font-size:16px;padding-top:15px;margin-right:20px;}
.bot_inner p{font-size:14px;}
.bot_zx{width:74px;padding-top:30px}
.bot_zx a{width:74px;height:25px;line-height:25px;}
.bot_hde{width:19px;height:20px;}




	.navxl ul{margin-top:35px}
		.address_info {height:172px;}
		.address_pic1 {width:156px;height:106px;top:36px;}
		.address_pic2 {right:21px;width:192px;height:75px;top:31px;}
		.bottomFooter{margin-bottom:50px}
		.address_online {right:118px;width:105px;height:35px;top:112px;}
		.hAbout { width:105px;height:35px;top:112px;}
		.showMenu b{font-size:8px}
	}
	@media screen and (min-width:410px) and (max-width:600px){

                                    .sead{width:70%;height:30px;left:15%;top:26%;background:#fff;border-radius:4px;}
.sead form{width:100%;}
.sead .xsearch_box{float:left;width:86%;height:30px;margin-left:5px}

.sead .xsub{-moz-background-size:100% 100%;-webkit-background-size:100% 100%;background-size:100% 100%;width:23px;height:20px;margin-top:5px;margin-right:1%}

				.address_info {height:196px;}
		.address_pic1 {width:179px;height:121px;top:42px;}
		.address_pic2 {right:20px;width:218px;height:85px;top:35px;}
		.address_online {right:126px; width:112px;height:40px;top:128px;}
		.hAbout { right:7px; width:112px;height:40px;top:128px;}.showMenu b{font-size:8px}
	.bottomFooter{margin-bottom:50px}
	.sy_yh{top:200px;height:90px;}
.bot_logo{width:46px;height:51px;padding-top:20px;margin:0 20px 0 20px;}
.bot_inner{width:190px;font-size:18px;padding-top:20px;margin-right:20px;}
.bot_inner p{font-size:16px;}
.bot_zx{width:84px;padding-top:35px}
.bot_zx a{width:84px;height:30px;line-height:30px;}
.bot_hde{width:29px;height:30px;}
		}
@media screen and (min-width:600px) and (max-width:900px){


                                        .sead{width:70%;height:30px;left:15%;top:26%;background:#fff;border-radius:4px;}
.sead form{width:100%;}
.sead .xsearch_box{float:left;width:86%;height:30px;margin-left:5px}

.sead .xsub{-moz-background-size:100% 100%;-webkit-background-size:100% 100%;background-size:100% 100%;width:23px;height:20px;margin-top:6px;margin-right:1%}


	.navxl ul{margin-top:35px}
		.address_info {height:196px;}
		.address_pic1 {width:179px;height:121px;top:42px;}
		.address_pic2 {right:20px;width:218px;height:85px;top:35px;}
		.address_online {right:126px; width:112px;height:40px;top:128px;}
		.hAbout { right:7px; width:112px;height:40px;top:128px;}.showMenu b{font-size:8px}
	.bottomFooter{margin-bottom:50px}
	.sy_yh{top:200px;height:90px;}
.bot_logo{width:46px;height:51px;padding-top:20px;margin:0 30px 0 90px;}
.bot_inner{width:190px;font-size:18px;padding-top:20px;margin-right:35px;}
.bot_inner p{font-size:16px;}
.bot_zx{width:90px;padding-top:35px}
.bot_zx a{width:94px;height:30px;line-height:30px;}
.bot_hde{width:29px;height:30px;}
	}



