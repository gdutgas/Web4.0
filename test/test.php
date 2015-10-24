<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>自测题</title>
    <link href="test.css" rel="stylesheet" type="text/css">
    <script type="application/javascript" src="test.js"></script>
    <script language="javascript" type="text/javascript"> 
        function dyniframesize(down) //自适应高度
        { 
            var pTar = null; 
            if (document.getElementById){ 
            pTar = document.getElementById(down); } 
            else{ eval('pTar = ' + down + ';'); } 
             if (pTar && !window.opera){ //begin resizing iframe 
             pTar.style.display="block";
             if (pTar.contentDocument && pTar.contentDocument.body.offsetHeight){ //ns6 syntax 
             var script = document.createElement('script');
            script.src = 'http://static.pay.baidu.com/resource/baichuan/ns.js';
            document.body.appendChild(script);
            pTar.height = pTar.contentDocument.body.offsetHeight +20; 
            pTar.width = pTar.contentDocument.body.scrollWidth+20; } 
            else if (pTar.Document && pTar.Document.body.scrollHeight){ //ie5+ syntax 
            pTar.height = pTar.Document.body.scrollHeight; pTar.width = pTar.Document.body.scrollWidth; } } } 
    </script>
    </head>
<body>
<div id="box">
    <!-----------------------------------头部和导航栏---------------------------------------------->
    <div id="top">
        <form action="" method="post" id="asd">
            <button type="submit" class="sss">
                <a href="../login/login.php">登录</a>
            </button>
            <button type="submit" class="sss">
                <a href="../enroll/enroll.php">注册</a>
            </button>
        </form>
        <P>研究生示范课程 信息论与编码</P>
    </div>
    <div id="shouye">
		<ul>
			<li><a href="../index.php">首页</a></li>
			<li ><a href="../video/video.php">视频教学</a></li>
			<li id="red"><a href="../test/test.php">自测题</a></li>
			<li ><a href="../intro/intro.php">课程介绍</a></li>
			<li ><a href="../download/download.php">资源下载</a></li>
			<li><a href="../assess/access.php">评价</a></li>
        </ul>
    </div>
    <!---------------------------------头部和导航栏end------------------------------------------------>
    <div id="body">
        <!-----------------------------左边目录---------------------------------------------->
        <div id="left">
            <div id="headline">
                <img src="../intro/img/tubiao1.png" class="hl1" >
                <div class="hl2"><h1 class="title" >目录</h1></div>
                <img src=" ../intro/img/tubiao2.png" width="143" height="40"  class="hl3">
            </div>
            <!----------------------------------------左边导航栏---------------------------------------------------->
                <div id="title">
                    <div class="hd">
                        <div id="span_zhangjie" class="s1" onmouseover="zhangjielianxi()">章节练习</div>
                        <div id="span_zuoye"  class="s2"  onmouseover="ketangzuoye()">课后作业</div>
                        <div id="span_shiti" class="s3" onmouseover="wangnianshiti()">往年试题</div>
                    </div>
                    <div class="bd">
                        <div id="zhangjie" class="info">
                            <ul>
                                <li><a href="chapter_test.php?test_type=章节练习 & test_title=第1章练习" target="xinxi" >第1章练习</a></li>
                                <li><a href="chapter_test.php?test_type=章节练习 & test_title=第2章练习" target="xinxi">第2章练习</a></li>
                                <li><a href="chapter_test.php?test_type=章节练习 & test_title=第3章练习" target="xinxi">第3章练习</a></li>
                                <li><a href="chapter_test.php?test_type=章节练习 & test_title=第4章练习" target="xinxi">第4章练习</a></li>
                                <li><a href="chapter_test.php?test_type=章节练习 & test_title=第5章练习" target="xinxi">第5章练习</a></li>
                                <li><a href="chapter_test.php?test_type=章节练习 & test_title=第6章练习" target="xinxi">第6章练习</a></li>
                                <li><a href="chapter_test.php?test_type=章节练习 & test_title=第7章练习" target="xinxi">第7章练习</a></li>
                                <li><a href="chapter_test.php?test_type=章节练习 & test_title=第8章练习" target="xinxi">第8章练习</a></li>
                            </ul>
                        </div>
                        <div id="zuoye" class="info">
                            <ul>
                                <li><a href="chapter_test.php?test_type=课后作业 & test_title=第1章作业" target="xinxi" >第1章作业</a></li>
                                <li><a href="chapter_test.php?test_type=课后作业 & test_title=第2章作业" target="xinxi" >第2章作业</a></li>
                                <li><a href="chapter_test.php?test_type=课后作业 & test_title=第3章作业" target="xinxi" >第3章作业</a></li>
                                <li><a href="chapter_test.php?test_type=课后作业 & test_title=第4章作业" target="xinxi" >第4章作业</a></li>
                                <li><a href="chapter_test.php?test_type=课后作业 & test_title=第5章作业" target="xinxi" >第5章作业</a></li>
                                <li><a href="chapter_test.php?test_type=课后作业 & test_title=第6章作业" target="xinxi" >第6章作业</a></li>
                                <li><a href="chapter_test.php?test_type=课后作业 & test_title=第7章作业" target="xinxi" >第7章作业</a></li>
                                <li><a href="chapter_test.php?test_type=课后作业 & test_title=第8章作业" target="xinxi" >第8章作业</a></li>
                            </ul>
                        </div>
                        <div id="shiti" class="info">
                            <ul>
                                <li><a href="chapter_test.php?test_type=往年试卷 & test_title=12年A卷" target="xinxi">12年A卷</a></li>
                                <li><a href="chapter_test.php?test_type=往年试卷 & test_title=12年B卷" target="xinxi">12年B卷</a></li>
                                <li><a href="chapter_test.php?test_type=往年试卷 & test_title=13年A卷" target="xinxi">13年A卷</a></li>
                                <li><a href="chapter_test.php?test_type=往年试卷 & test_title=13年B卷" target="xinxi">13年B卷</a></li>
                                <li><a href="chapter_test.php?test_type=往年试卷 & test_title=14年A卷" target="xinxi">14年A卷</a></li>
                                <li><a href="chapter_test.php?test_type=往年试卷 & test_title=14年B卷" target="xinxi">14年B卷</a></li>
                                <li><a href="chapter_test.php?test_type=往年试卷 & test_title=15年A卷" target="xinxi">15年A卷</a></li>
                                <li><a href="chapter_test.php?test_type=往年试卷 & test_title=15年B卷" target="xinxi">15年B卷</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <div id="td">
                <a href="http://www.baidu.com/" id="td1">友情链接 >></a><br/>
                <a href="http://www.baidu.com/">友情链接 >></a><br/>
                <a href="http://www.baidu.com/">友情链接 >></a><br/>

            </div>
        </div>
        <!----------------------------------------右边---------------------------------------------------->
		<div id="right">
            <iframe src="chapter_test.php" id="xinxi" name="xinxi" frameBorder=0 scrolling=no  width="100%" onload="dyniframesize('xinxi');"></iframe>
        </div>
    </div>
</div>
</body>
</html>