<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>信息论课程公开课</title>
	<script type="text/javascript">
		function bofang()
		{
			if(localStorage.page)
			{localStorage.page=Number(localStorage.page)+1;}
			else
			{localStorage.page=1;}
			document.write("播放量："+ localStorage.page);
		}
		
		function change_video(new_src){
			var video_src=document.getElementById("now_video").src;
			video_src=new_src;
		}
	</script>
	<link href="video.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="box">
	<!-----------------------------------------------------学校背景---------------------------------------------------------------------->
	<div id="top">
		<form action="" method="post" id="asd">
			<button type="submit" class="sss">
				<a href="../loginin/loginin.html">
					登录
				</a>
			</button>
			<button type="submit" class="sss">
				<a href="../enroll/enroll.php">
					注册
				</a>
			</button>
		</form>
		<P>研究生示范课程 信息论与编码</P>
	</div>
	<!-------------------------------------------------------导航栏-------------------------------------------------------------------->
	<div id="shouye">
		<ul>
			<li><a href="../index.php">首页</a></li>
			<li id="red"><a href="../video/video.php">视频教学</a></li>
			<li><a href="../test/test.php">自测题</a></li>
			<li ><a href="../intro/intro.php">课程介绍</a></li>
			<li ><a href="../download/download.php">资源下载</a></li>
			<li><a href="../assess/access.php">评价</a></li>
		</ul>
	</div>
	<!--------------------------------------------------------主体内容------------------------------------------------------------------->
	<div id="body">
		<!---------------------------------------------------------左边播放视频框------------------------------------------------------------------>
		<div id="digleft">
			<div id="play">
				<video id="now_video" src="img/shipin.mp4"  name="shi" width="860" height="480" controls="controls"></video>
			</div>
			<div id="list">
				<div id="kuai1">
					<div id="tu1"><a onclick=change_video("img/shipin.mp4")" style="cursor:pointer;"><img src="img/tupian.png" height="160" width="257"></a></div>
					<div class="num" onclick="bofang()">播放量：</div>
				</div>
				<div id="kuai2">
					<div id="tu2"><a onclick=change_video("img/shipin2.mp4")" style="cursor:pointer;"><img src="img/tupian.png" height="160" width="257"></a></div>
	
				</div>
				<div id="kuai3">
					<div id="tu3"><a onclick=change_video("img/shipin3.mp4")" style="cursor:pointer;"><img src="img/tupian.png" height="160" width="257"></a></div>

				</div>
			</div>
		</div>
		<!-------------------------------------------------------右边评论框-------------------------------------------------------------------->
		<div id="digright">
			<div id="up">

			</div>
			<div id="down">

			</div>
		</div>
	</div>
	<!-----------------------------------------------------------页脚---------------------------------------------------------------->
	<div id="footer">
		<p>联系电话：15622329323</p>
		<p>电子邮箱：1563119636@qq.com</p>
		<p>508设计工作室版权所有，本工作室保留最终解释权</p>
		<div id="foot">
			<ul>
					<ul>
						<li><a href="../about/about.php">关于我们</a></li>
						<li class="shu">丨</li>
						<li><a href="../contact/contact.php">联系我们</a></li>
						<li class="shu">丨</li>
						<li><a href="../notice/notice.php">负责声明</a></li>
						<li class="shu">丨</li>
						<li><a href="../advice/advice.php">意见反馈</a></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>
