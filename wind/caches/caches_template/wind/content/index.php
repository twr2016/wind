<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">	
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo CSS_PATH;?>/wind/indextop.css" type="text/css" rel="stylesheet"/>
       

        <link href="<?php echo CSS_PATH;?>/wind/index.css" type="text/css" rel="stylesheet"/>
        <link href="<?php echo CSS_PATH;?>/wind/css.css" rel="stylesheet" type="text/css">
        <link href="<?php echo CSS_PATH;?>/wind/index2.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="<?php echo JS_PATH;?>/wind/index.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>/wind/jquery-1.8.2.min.js"></script>
        <!--[if !IE]>导航条样式　JS<![endif]-->

        <!--[if !IE]>banner图片  JS<![endif]-->
        <script type="text/javascript" src="<?php echo JS_PATH;?>/wind/solideForK13-min.js"></script>
        <title>旋风教育</title>
    </head>
    <body>
    <!--       -导航 -      -->
    	<div class="top">
    		<div class="logo">
    			<img src="<?php echo IMG_PATH;?>/wind/logo.jpg" width="225px" height="107px"/>
    		</div>
    		<div class="dengzhu">
    			<div class="zhuce">
    				<a href="#"  target=_blank>
                        <img src="<?php echo IMG_PATH;?>/wind/zhuce.jpg" width="23px" height="22px"/>
                        <div class="zi">注册</div>
                    </a>
    			</div>
    			<div class="denglu">
    				<a href="#"  target=_blank>
                        <img src="<?php echo IMG_PATH;?>/wind/denglu.jpg" width="22px" height="22px"/>
                       <div class="zi"> <a href="<?php echo CSS_PATH;?>/wind/denglu.html">登录</a></div>
                    </a>
    			</div>
    		</div>
    		<div class="nav">
    			<ul>
    				<li><a href="#"><span class="shouye">首页</span></a></li>
    				<li><a href="#">测试提分</a></li>
    				<li><a href="#">高考押题</a></li>
    				<li><a href="#">发掘潜能</a></li>
    				<li><a href="#">权威专家</a></li>
    				<li><a href="#">大学须知</a></li>
                    <li><a href="#">高考新闻</a></li>
    				<li><a href="#">关于我们</a></li>
    			</ul>
    		</div>
    	</div>
        
         <!--       -banner-      -->

        <div class="banner">
        <div id="slide_4">
            <div class="slide_content">
                <ul>
                    <li><img src="<?php echo IMG_PATH;?>/wind/banner.jpg" alt=""></li>
                    <li><img src="<?php echo IMG_PATH;?>/wind/banner_04.jpg" alt=""></li>
                </ul>
            </div>
        </div> 
        <div class="bannercontent">
            <div class= "bannercontentleft">
                <h1>免费学校库</h1>
                <div class="xuanzekuang">
                    <div class="xz">
                        <select name="xuandaxue" class="daxue">
                            <option>北京大学</option>
                            <option>清华大学</option>
                            <option>河北师范大学</option>
                            <option>浙江大学</option>
                            <option>河北大学</option>
                        </select>
                        <a href="#" class="go1">
                            搜大学
                        </a>
                    </div>
                    <div class="xz">
                        <select name="zhuanyedalei" class="zhuanye">
                            <option>专业大类</option>
                            <option>专业大类1</option>
                            <option>专业大类2</option>
                            <option>专业大类3</option>
                        </select>
                        <select name="zhuanyexiaolei" class="zhuanye">
                            <option>专业小类</option>
                            <option>专业小类1</option>
                            <option>专业小类2</option>
                            <option>专业小类3</option>
                        </select>
                        <a href="#" class="go2">
                            搜专业
                        </a>
                    </div>

                    <div class="xz">
                        <select name="zhuanyedalei" class="zhuanye">
                            <option>文科</option>
                            <option>理科</option>
                        </select>
                        <input id = "score" type="text" value="600"/>
                        <a href="#" class="go2">
                            知分选大学
                        </a>
                    </div>

                    <div class="xz">
                        <select name="zhuanyedalei" class="zhuanye">
                            <option>理科</option>
                            <option>文科</option>
                        </select>
                        <select name="zhuanyexiaolei" class="zhuanye">
                            <option>北京大学</option>
                            <option>清华大学</option>
                            <option>浙江大学</option>
                            <option>河北师范大学</option>
                        </select>
                        <a href="#" class="go2">
                            大学分数线
                        </a>
                    </div>

                    <div class="xz">
                        <select name="zhuanyedalei" class="zhuanye">
                            <option>北京</option>
                            <option>上海</option>
                            <option>天津</option>
                            <option>杭州</option>
                        </select>
                        <select name="zhuanyexiaolei" class="zhuanye">
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                        </select>
                        <a href="#" class="go2">
                            专业分数线
                        </a>
                    </div>

                    <div class="xz">
                        <select name="zhuanyedalei" class="zhuanye">
                            <option>文科</option>
                            <option>理科</option>
                        </select>
                        <select name="zhuanyexiaolei" class="zhuanye">
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                        </select>
                        <a href="#" class="go2">
                            地区分数线
                        </a>
                    </div>

                </div>
            </div>
            <div class="weixin">
                <img src="<?php echo IMG_PATH;?>/wind/weixin.jpg"/>
            </div>
        </div>
        <!--       content       -->
        <div class="content">
            <!--这部分是banner下边的how you can up-->
            <div class="first">
                <div class="how">
                    <img src="<?php echo IMG_PATH;?>/wind/how.jpg" alt="我是how you can up"/ ></div>
                <div class="middle">
                    <div class="content1">
                        <div class="line">
                            <h3>你是否还能提分</h3>
                        </div>
                        <p>输入考生在校生模拟分数，数据<br/>分析。查看你的提升空间。</p>
                    </div>
                    <div class="content1">
                        <div class="line">
                            <h3>专家分析你的试卷</h3>
                        </div>
                        <p>上传考生的模拟试题卷，专家分析<br/>
                        给考生学习法案快速提分。</p>
                    </div>
                    <div class="content1">
                        <div class="line">
                            <h3>金卷模拟分析你的试卷</h3>
                        </div>
                        <p>提供押题金卷，考生在线测试，专业<br/>
                        分析考生提分策略。</p>
                    </div>
                    <img src="<?php echo IMG_PATH;?>/wind/more.jpg" alt="我是more" width="1000px" height="94px"/>
                </div>
                
            </div>
            <!--这部分是banner下边的看看你能提分多少p-->
            <div class="second">
                <div class="checkgradepicture">
                    <img src="<?php echo IMG_PATH;?>/wind/fen.jpg" alt="查看分"/>
                </div>
                <div class="checkframe">
                    <div id="option">
                        <ul id="nav">
                            <li><img src="<?php echo IMG_PATH;?>/wind/like.png"/>
                                <ul id="nav2">
                                    <li><img src="<?php echo IMG_PATH;?>/wind/like.png"/></li>
                                    <li><img src="<?php echo IMG_PATH;?>/wind/like2.png"/></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                     <div class="fenshu">
                        <div class="fenshukuang">
                            <span>&nbsp;语文</span><input type="text"/>
                        </div>
                    </div>
                    <div class="fenshu">
                        <div class="fenshukuang">
                            <span>&nbsp;数学</span><input type="text"/>
                        </div>
                    </div>
                    <div class="fenshu">
                        <div class="fenshukuang">
                            <span>&nbsp;英语</span><input type="text"/>
                        </div>
                    </div>
                    <div class="fenshu">
                        <div class="fenshukuang">
                            <span id="lizong">&nbsp;理综</span><input type="text"/>
                        </div>
                    </div>
                </div>
                <div class="checkresult">
                    <img src="<?php echo IMG_PATH;?>/wind/look.jpg" alt="查分结果"/>
                <div>
            </div>
        </div>
        <!--       -bottom-      -->
        <div class="bottom">
            <img src="<?php echo IMG_PATH;?>/wind/h3.jpg" width="1000px" height="67px"/>
            <div class="vedio">
                <div class="biaoti">
                    <a href="#">视频快讯</a>
                </div>
                <div class="shipin">
                    <a href="#"  target=_blank><img src="<?php echo IMG_PATH;?>/wind/shi.jpg" width="323px" height="196px"/></a>
                </div>
            </div>
            <div class="news">
                <div class="ne">
                    <div class="date">
                        <span class="day">06-1</span>
                        <span class="year">2016</span>
                    </div>
                    <div class="nfont">
                        <h2>全国89所“野鸡大学曝光”</h2>“野鸡大学”就是只是顶着摸摸大学的牌号但是实际上什么都不是的大小，甚至连学校简介都是......
                    </div>
                </div>
                <hr size="3px" noshade="noshade"/>
                <div class="ne">
                    <div class="date">
                        <span class="day">06-1</span>
                        <span class="year">2016</span>
                    </div>
                    <div class="nfont">
                        <h2>全国89所“野鸡大学曝光”</h2>“野鸡大学”就是只是顶着摸摸大学的牌号但是实际上什么都不是的大小，甚至连学校简介都是......
                    </div>
                </div>
                <hr size="3px" noshade="noshade"/>
                <div class="ne">
                    <div class="date">
                        <span class="day">06-1</span>
                        <span class="year">2016</span>
                    </div>
                    <div class="nfont">
                        <h2>全国89所“野鸡大学曝光”</h2>“野鸡大学”就是只是顶着摸摸大学的牌号但是实际上什么都不是的大小，甚至连学校简介都是......
                    </div>
                </div>
            </div>
        </div>
      
        <!--       -footer -      -->
        <div class="footer">
            <div class="foot">
                <div class="fleft">
                    <img src="<?php echo IMG_PATH;?>/wind/logo.png" width="226px" height="98px"/>
                </div>
                <div class="fright">
                    <a href="#"><div class="lianjie">关于我们</div></a>
                    <a href="#"><div class="lianjie">联系我们</div></a>
                    <a href="#"><div class="lianjie">合作加盟</div></a>
                    <div class="dizhi">石家庄旋风教育公司<br/>地址：河北省石家庄市河北师范大学新校区&nbsp&nbsp&nbsp&nbsp TEL:88888888</div>
                </div>
            </div>
            <div class="dibu">
                版权所有 2014@石家庄旋风教育公司 冀ICP备XXXXXXX号
            </div>
        </div>
    </body>
</html>