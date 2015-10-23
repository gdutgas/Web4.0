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
                                <li><a href="http://localhost/Web3.0/test/test.php?chapter_text=110" >第一章练习</a></li>
                                <li><a href="zhangjielianxi/zhang2.html" target="xinxi">第二章练习</a></li>
                                <li><a href="zhangjielianxi/zhang3.html" target="xinxi">第三章练习</a></li>
                                <li><a href="zhangjielianxi/zhang4.html" target="xinxi">第四章练习</a></li>
                                <li><a href="zhangjielianxi/zhang5.html" target="xinxi">第五章练习</a></li>
                                <li><a href="zhangjielianxi/zhang6.html" target="xinxi">第六章练习</a></li>
                                <li><a href="zhangjielianxi/zhang7.html" target="xinxi">第七章练习</a></li>
                                <li><a href="zhangjielianxi/zhang8.html" target="xinxi">第八章练习</a></li>
                            </ul>
                        </div>
                        <div id="zuoye" class="info">
                            <ul>
                                <li><a href="kehouzuoye/zuoye1.html" target="xinxi">第一章作业</a></li>
                                <li><a href="kehouzuoye/zuoye2.html" target="xinxi">第二章作业</a></li>
                                <li><a href="kehouzuoye/zuoye3.html" target="xinxi">第三章作业</a></li>
                                <li><a href="kehouzuoye/zuoye4.html" target="xinxi">第四章作业</a></li>
                                <li><a href="kehouzuoye/zuoye5.html" target="xinxi">第五章作业</a></li>
                                <li><a href="kehouzuoye/zuoye6.html" target="xinxi">第六章作业</a></li>
                                <li><a href="kehouzuoye/zuoye7.html" target="xinxi">第七章作业</a></li>
                                <li><a href="kehouzuoye/zuoye8.html" target="xinxi">第八章作业</a></li>
                            </ul>
                        </div>
                        <div id="shiti" class="info">
                            <ul>
                                <li><a href="shijuan/12A.html" target="xinxi">12年A卷</a></li>
                                <li><a href="shijuan/12B.html" target="xinxi">12年B卷</a></li>
                                <li><a href="shijuan/13A.html" target="xinxi">13年A卷</a></li>
                                <li><a href="shijuan/13B.html" target="xinxi">13年B卷</a></li>
                                <li><a href="shijuan/14A.html" target="xinxi">14年A卷</a></li>
                                <li><a href="shijuan/14B.html" target="xinxi">14年B卷</a></li>
                                <li><a href="shijuan/15A.html" target="xinxi">15年A卷</a></li>
                                <li><a href="shijuan/15B.html" target="xinxi">15年B卷</a></li>
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
		<?php //如果没有选择章节，只显示“课后作业”，否则显示相应章节
					if(empty($_REQUEST['chapter_text'])){
						$chapter_text="课后作业";
						echo "<script>alert(\"$chapter_text\");</script>";
					}else{
						echo "<script>alert(\"$chapter_text\");</script>";
						$chapter_text='课后作业 》 '.$REQUEST['chapter_text'];
					}
				?>
        <div id="right">
			<div style="background-color:#A9BCD6; height:40px;" >
				<h2><?php echo $chapter_text; ?></h2>
			</div>
		
		
           <!-- 将原来的iframe标签换掉了————XP-2015-10-23
		   <iframe src="zhangjielianxi/zhang1.html" id="xinxi" name="xinxi" frameBorder=0 scrolling=no  width="100%" onload="dyniframesize('xinxi');"></iframe>
		   --->
        </div>
    </div>
</div>
</body>
</html>