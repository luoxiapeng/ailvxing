<?php
// header('Cache-Control:max-age=3600');
$nav = array(
    array('广播'),
    array('发现', '文章', '心情'),
    array('专辑', '生活', '时尚', '兴趣'),
    array('Wiki'),
    array('小组')
);

$pics = array(
    './upload/pic1.jpg',
    './upload/pic2.jpg',
    './upload/pic3.jpg',
    './upload/pic4.jpg',
    './upload/pic5.jpg',
    './upload/pic6.jpg',
    './upload/pic7.jpg',
    './upload/pic8.jpg',
    './upload/pic9.jpg',
    './upload/pic10.jpg'
);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>爱旅行 - 爱生活，爱旅行！</title>
	<link rel="stylesheet" type="text/css" href="./css/init.css" />
	<link rel="stylesheet" type="text/css" href="./css/common.css" />
	<link rel="stylesheet" type="text/css" href="./css/index.css" />
    <!-- <meta http-equiv="refresh" content="3; url=login.html" /> -->
</head>
<body>
    <!-- 头部 -->
    <div id="header">
        <div class="topnav">
            <div class="w980">
                <ul class="l">
                    <li><a href="#">客户端</a>|</li>
                    <li><a href="#">手机版</a>|</li>
                    <li><a href="#">收集工具</a></li>
                </ul>
                <div class="info">
                    <ul>
                        <li>
                            <?php
                            echo $_POST['userName']." ，欢迎您"
                            ?>
                        </li>
                        <li><a href="./login.htmsl">登陆</a></li>
                        <li><a href="#" class="msg">&nbsp;</a></li>
                        <li><a href="#" class="mail">&nbsp;</a></li>
                        <li><img src="./upload/photos/admin.jpg" /><a href="#">吾爱旅行</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav">
            <div class="w980">
                <div class="logo l"><a href="./index.html"></a></div>
                <div class="menu l">
                    <ul>
                        <li>
                            <a href="./waterfall_1.html" class="toplist">广播</a>
                        </li>
                        <li>
                            <a href="./waterfall_2.html" class="toplist">发现</a>
                            <a href="./article_list_1.html">文章</a>
                            <a href="./waterfall_3.html">心情</a>
                        </li>
                        <li>
                            <a href="#" class="toplist">专辑</a>
                            <a href="#">生活</a>
                            <a href="#">时尚</a>
                            <a href="#">兴趣</a>
                        </li>
                        <li>
                            <a href="./article_list_1.html" class="toplist">Wiki</a>
                        </li>
                        <li class="lastli">
                            <a href="./article_list_1.html" class="toplist">小组</a>
                        </li>
                    </ul>
                </div>
                <div class="search r">
                    <form action="" method="">
                        <input type="text" name="" value="" /><button type="submit"></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="line" id="line"></div>
    </div>
    <!-- 主体 -->
    <div id="content">
        <div class="main">
            <div class="slider">
                <div class="v">
                    <div class="wrap">
                        <a href="#"><img src="./upload/pic1.jpg" width="710" /></a>
                        <a href="#"><img src="./upload/pic2.jpg" width="710" /></a>
                        <a href="#"><img src="./upload/pic3.jpg" width="710" /></a>
                        <a href="#"><img src="./upload/pic4.jpg" width="710" /></a>
                        <a href="#"><img src="./upload/pic5.jpg" width="710" /></a>
                        <a href="#"><img src="./upload/pic6.jpg" width="710" /></a>
                        <a href="#"><img src="./upload/pic7.jpg" width="710" /></a>
                        <a href="#"><img src="./upload/pic8.jpg" width="710" /></a>
                        <a href="#"><img src="./upload/pic9.jpg" width="710" /></a>
                        <a href="#"><img src="./upload/pic10.jpg" width="710" /></a>
                    </div>
                    <div class="thumbpics">
                        <ul>
                            <li><img src="./upload/pic1.jpg" width="60" class="curr" /><div class="icon"></div></li>
                            <li><img src="./upload/pic2.jpg" width="60" /></li>
                            <li><img src="./upload/pic3.jpg" width="60" /></li>
                            <li><img src="./upload/pic4.jpg" width="60" /></li>
                            <li><img src="./upload/pic5.jpg" width="60" /></li>
                            <li><img src="./upload/pic6.jpg" width="60" /></li>
                            <li><img src="./upload/pic7.jpg" width="60" /></li>
                            <li><img src="./upload/pic8.jpg" width="60" /></li>
                            <li><img src="./upload/pic9.jpg" width="60" /></li>
                            <li><img src="./upload/pic10.jpg" width="60" /></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="title">
                    <h2><a href="#">生活</a></h2>
                    <span><a href="#">更多>></a></span>
                </div>
                <div class="thumb">
                    <ul>
                        <li>
                            <img src="./upload/img1.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img2.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img3.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img4.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img5.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img6.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section">
                <div class="title">
                    <h2><a href="#">时尚</a></h2>
                    <span><a href="#">更多>></a></span>
                </div>
                <div class="thumb">
                    <ul>
                        <li>
                            <img src="./upload/img7.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img8.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img9.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img10.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img11.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img12.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section">
                <div class="title">
                    <h2><a href="#">兴趣</a></h2>
                    <span><a href="#">更多>></a></span>
                </div>
                <div class="thumb">
                    <ul>
                        <li>
                            <img src="./upload/img13.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img14.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img15.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img16.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img17.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img18.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section">
                <div class="title">
                    <h2><a href="#">时尚</a></h2>
                    <span><a href="#">更多>></a></span>
                </div>
                <div class="thumb">
                    <ul>
                        <li>
                            <img src="./upload/img7.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img8.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img9.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img10.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img11.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                        <li>
                            <img src="./upload/img12.jpg" />
                            <p><a href="#">城市美景</a><span>(12张)</span></p>
                            <div class="cover"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sider">
            <div class="recommend">
                <div class="title">
                    <h2><a href="#">每日推荐</a></h2>
                </div>
                <div class="view">
                    <a href="./article.html"><img src="./upload/img1.jpg" /></a>
                    <h3>标题：<a href="./article.html">【普罗旺斯】</a></h3>
                    <p>普罗旺斯从诞生之日起，就谨慎地保守着她的秘密，天气阴晴不定，暖风和煦，海风狂野，地势跌宕起伏，平原广阔，峰岭险峻，寂寞的峡谷，苍凉的古堡，蜿蜒的山脉和活泼的都会，全都在这片法国的大地上演绎万种风情。</p>
                </div>
            </div>
            <div class="tag">
                <div class="title">
                    <h3>热门标签</h3>
                </div>
                <div class="taglist">
                    <ul>
                        <li><a href="#" class="lev1">标签</a></li>
                        <li><a href="#" class="lev3">登山</a></li>
                        <li><a href="#" class="lev3">自驾车</a></li>
                        <li><a href="#" class="lev2">骑车</a></li>
                        <li><a href="#" class="lev2">自然</a></li>
                        <li><a href="#" class="lev3">徒步</a></li>
                        <li><a href="#" class="lev3">兴趣</a></li>
                        <li><a href="#" class="lev1">心情</a></li>
                        <li><a href="#" class="lev2">户外</a></li>
                        <li><a href="#" class="lev1">景色</a></li>
                        <li><a href="#" class="lev3">大海</a></li>
                        <li><a href="#" class="lev2">骑车</a></li>
                        <li><a href="#" class="lev1">大海</a></li>
                        <li><a href="#" class="lev3">徒步</a></li>
                        <li><a href="#" class="lev3">天气</a></li>
                        <li><a href="#" class="lev1">心情</a></li>
                        <li><a href="#" class="lev2">景色</a></li>
                        <li><a href="#" class="lev2">景色</a></li>
                        <li><a href="#" class="lev1">驴友</a></li>
                    </ul>
                </div>
            </div>
            <div class="weibo">
                <div class="title">
                    <h3>悟语</h3>
                    <span><a href="#">更多>></a></span>
                </div>
                <div class="outer">
                    <div class="wbdesc">
                        <div class="wblist">
                            <div class="userinfo">
                                <img src="./upload/photos/use1.jpg" />
                                <h4>作响_</h4>
                                <p>1分钟前</p>
                            </div>
                            <div class="cont">
                                <p>青春，一场盛世的繁华，愿不倾城，不倾国，只倾我所有。只为过简单安稳的生活，单纯不平凡。一支素笔，一杯花茶，一段时光，浅笑又安然。早安！</p>
                                <img src="./upload/weibo1.jpg" width="210" />
                            </div>
                        </div>
                        <div class="wblist">
                            <div class="userinfo">
                                <img src="./upload/photos/use2.jpg" />
                                <h4>大媚子</h4>
                                <p>13分钟前</p>
                            </div>
                            <div class="cont">
                                <p>人生最好的旅行，就是你在一个陌生的地方，发现一种久违的感动。独自旅行，不受羁绊。有一天，背上包，带上自己，有多远，走多远。</p>
                                <img src="./upload/weibo2.jpg" width="210" />
                            </div>
                        </div>
                        <div class="wblist">
                            <div class="userinfo">
                                <img src="./upload/photos/use3.jpg" />
                                <h4>Honey米儿</h4>
                                <p>6分钟前</p>
                            </div>
                            <div class="cont">
                                <p>任何一场旅行，都似对生活的拯救；每一个沉思的瞬间，都成就了旅行的意义。</p>
                                <img src="./upload/weibo3.jpg" width="210" />
                            </div>
                        </div>
                        <div class="wblist">
                            <div class="userinfo">
                                <img src="./upload/photos/use4.jpg" />
                                <h4>如茅挽君</h4>
                                <p>16分钟前</p>
                            </div>
                            <div class="cont">
                                <p>我想要一次旅行，到处留下足迹，和你一起。我在别人眼里，你在我心里。我想要一次旅行，不留任何足迹，独自一起。我在你的记忆，却不在你心里。我们一起走过过去和现在。</p>
                                <img src="./upload/weibo4.jpg" width="210" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="active">
                <div class="title">
                    <h3>主题活动</h3>
                    <span><a href="#">更多>></a></span>
                </div>
                <div class="actdesc">
                    <a href="#"><img src="./upload/act1.gif" /></a>
                    <p class="h"><a href="#">晒晒你的DIY成果[一周一主题]</a></p>
                    <p>截止日期：<span>2013年8月31日</span></p>
                </div>
            </div>
            <div class="article">
                <div class="title">
                    <h3>旅行日志</h3>
                    <span><a href="./article_list_1.html">更多>></a></span>
                </div>
                <div class="arclist">
                    <div class="arctop">
                        <img src="./upload/arc1.jpg" />
                        <h4><a href="#">远行，只为了忘却！</a></h4>
                        <p>推荐数：<span>362</span></p>
                    </div>
                    <ul>
                        <li><a href="./article_1.html">那些年,我们一起旅行过的地方</a></li>
                        <li><a href="./article_1.html">那些年,我们一起旅行过的地方</a></li>
                        <li><a href="./article_1.html">那些年,我们一起旅行过的地方</a></li>
                        <li><a href="./article_1.html">那些年,我们一起旅行过的地方</a></li>
                        <li><a href="./article_1.html">那些年,我们一起旅行过的地方</a></li>
                    </ul>
                </div>
            </div>
            <div class="hotuser">
                <div class="title">
                    <h3>活跃会员</h3>
                </div>
                <div class="users">
                    <ul>
                        <li>
                            <img src="./upload/photos/use1.jpg" />
                            <p><a href="#">作响_</a></p>
                            <p>发布<span>30</span>专辑<span>5</span></p>
                        </li>
                        <li>
                            <img src="./upload/photos/use2.jpg" />
                            <p><a href="#">大媚子</a></p>
                            <p>发布<span>13</span>专辑<span>3</span></p>
                        </li>
                        <li>
                            <img src="./upload/photos/use3.jpg" />
                            <p><a href="#">Honey米儿</a></p>
                            <p>发布<span>16</span>专辑<span>2</span></p>
                        </li>
                        <li>
                            <img src="./upload/photos/use4.jpg" />
                            <p><a href="#">如茅挽君</a></p>
                            <p>发布<span>21</span>专辑<span>2</span></p>
                        </li>
                        <li>
                            <img src="./upload/photos/use5.jpg" />
                            <p><a href="#">雪木其</a></p>
                            <p>发布<span>23</span>专辑<span>4</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="focus">
                <div class="title">
                    <h3>关注我们</h3>
                </div>
                <div class="focusdesc">
                    <a href="" class="sina"></a>
                    <a href="" class="qqzone"></a>
                    <a href="" class="qqweibo"></a>
                    <a href="" class="douban"></a>
                    <a href="" class="renren"></a>
                    <a href="" class="weixin"></a>
                </div>
                <div class="wximg"><img src="./images/weixin.png" width="223" height="210" /></div>
            </div>
        </div>
    </div>
    <!-- 底部 -->
    <div id="footer">
        <div class="line"></div>
        <div class="copy">
            <p>网站开发测试中...</p>
            <p>版权所有 爱旅行 www.ailvxing.cc</p>
        </div>
    </div>
    <div class="tools">
        <a href="javascript:void(0)" class="gotop"><i></i>返回顶部</a>
        <a href="javascript:void(0)" class="suggest"><i></i>意见反馈</a>
    </div>
    <div class="sugform">
        <div class="sugtitle"><p>您对<span class="curpage">"当前页面"</span>满意吗?</p><a href="javascript:void(0)" class="close">&nbsp;</a></div>
        <div class="check">
        </div>
    </div>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/functions.js"></script>
	<script type="text/javascript" src="./js/index.js"></script>
	<script type="text/javascript" src="./js/common.js"></script>
</body>
</html>